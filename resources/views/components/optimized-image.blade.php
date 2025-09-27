@props([
    'src',
    'alt' => '',
    'width' => null,
    'height' => null,
    'class' => '',
    'loading' => 'lazy',
    'priority' => false,
    'placeholder' => true
])

@php
    // Generate optimized image paths
    $basePath = pathinfo($src, PATHINFO_DIRNAME);
    $filename = pathinfo($src, PATHINFO_FILENAME);
    $extension = pathinfo($src, PATHINFO_EXTENSION);
    
    // Create WebP version path
    $webpSrc = $basePath . '/' . $filename . '.webp';
    
    // Create placeholder data URL
    $placeholderDataUrl = 'data:image/svg+xml;base64,' . base64_encode(
        '<svg width="' . ($width ?: '400') . '" height="' . ($height ?: '250') . '" viewBox="0 0 ' . ($width ?: '400') . ' ' . ($height ?: '250') . '" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="' . ($width ?: '400') . '" height="' . ($height ?: '250') . '" fill="#f5f5f5"/>
            <path d="M' . (($width ?: 400) / 2) . ' ' . (($height ?: 250) / 4) . 'L' . (($width ?: 400) / 2 - 50) . ' ' . (($height ?: 250) / 2) . 'H' . (($width ?: 400) / 2 + 50) . 'L' . (($width ?: 400) / 2) . ' ' . (($height ?: 250) / 4) . 'Z" fill="#FF7A00"/>
            <text x="' . (($width ?: 400) / 2) . '" y="' . (($height ?: 250) * 0.8) . '" text-anchor="middle" fill="#666" font-family="Arial" font-size="14">' . htmlspecialchars($alt) . '</text>
        </svg>'
    );
    
    // Set loading strategy
    $loadingAttr = $priority ? 'eager' : $loading;
@endphp

<picture class="optimized-image {{ $class }}">
    @if(file_exists(public_path($webpSrc)))
        <source srcset="{{ asset($webpSrc) }}" type="image/webp">
    @endif
    <img 
        src="{{ asset($src) }}" 
        alt="{{ $alt }}"
        @if($width) width="{{ $width }}" @endif
        @if($height) height="{{ $height }}" @endif
        loading="{{ $loadingAttr }}"
        @if($placeholder)
            data-placeholder="{{ $placeholderDataUrl }}"
            onload="this.style.opacity='1'"
            onerror="this.src='{{ $placeholderDataUrl }}'"
        @endif
        style="opacity: 0; transition: opacity 0.3s ease;"
        {{ $attributes }}
    >
</picture>

@if($placeholder)
<style>
.optimized-image {
    position: relative;
    display: inline-block;
}

.optimized-image img {
    background-image: linear-gradient(45deg, #f0f0f0 25%, transparent 25%), 
                      linear-gradient(-45deg, #f0f0f0 25%, transparent 25%), 
                      linear-gradient(45deg, transparent 75%, #f0f0f0 75%), 
                      linear-gradient(-45deg, transparent 75%, #f0f0f0 75%);
    background-size: 20px 20px;
    background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
}

.optimized-image img.loaded {
    background: none;
}
</style>
@endif
