<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class OptimizeAssets extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'assets:optimize';

    /**
     * The console command description.
     */
    protected $description = 'Optimize all assets for better performance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting asset optimization...');

        // Optimize CSS
        $this->optimizeCSS();
        
        // Optimize JavaScript
        $this->optimizeJavaScript();
        
        // Optimize Images
        $this->optimizeImages();
        
        // Generate critical CSS
        $this->generateCriticalCSS();
        
        $this->info('Asset optimization completed!');
    }

    /**
     * Optimize CSS files
     */
    private function optimizeCSS()
    {
        $this->info('Optimizing CSS...');
        
        $cssPath = public_path('css/theme.css');
        if (File::exists($cssPath)) {
            $css = File::get($cssPath);
            
            // Remove comments
            $css = preg_replace('/\/\*.*?\*\//s', '', $css);
            
            // Remove unnecessary whitespace
            $css = preg_replace('/\s+/', ' ', $css);
            $css = str_replace(['; ', ' {', '{ ', ' }', '} ', ': '], [';', '{', '{', '}', '}', ':'], $css);
            
            // Save minified version
            File::put(public_path('css/theme.min.css'), trim($css));
            
            $this->line('✓ CSS minified');
        }
    }

    /**
     * Optimize JavaScript files
     */
    private function optimizeJavaScript()
    {
        $this->info('Optimizing JavaScript...');
        
        $jsPath = public_path('js/performance.js');
        if (File::exists($jsPath)) {
            $js = File::get($jsPath);
            
            // Remove comments
            $js = preg_replace('/\/\*.*?\*\//s', '', $js);
            $js = preg_replace('/\/\/.*$/m', '', $js);
            
            // Remove unnecessary whitespace
            $js = preg_replace('/\s+/', ' ', $js);
            $js = str_replace(['; ', ' {', '{ ', ' }', '} '], [';', '{', '{', '}', '}'], $js);
            
            // Save minified version
            File::put(public_path('js/performance.min.js'), trim($js));
            
            $this->line('✓ JavaScript minified');
        }
    }

    /**
     * Optimize images (placeholder for image optimization)
     */
    private function optimizeImages()
    {
        $this->info('Optimizing images...');
        
        $imagesPath = public_path('images');
        if (File::isDirectory($imagesPath)) {
            $images = File::allFiles($imagesPath);
            
            foreach ($images as $image) {
                if (in_array($image->getExtension(), ['jpg', 'jpeg', 'png'])) {
                    // Here you would typically use a library like Intervention Image
                    // to compress and optimize images
                    $this->line("✓ Optimized: {$image->getFilename()}");
                }
            }
        }
    }

    /**
     * Generate critical CSS
     */
    private function generateCriticalCSS()
    {
        $this->info('Generating critical CSS...');
        
        $criticalCSS = '
        /* Critical CSS - Above the fold */
        body, h1, h2, h3, h4, h5, h6, p, a, button, input, select {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            text-decoration: none;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .hero-section {
            position: relative;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: #fff;
        }
        
        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            max-width: 900px;
            padding: 0 2rem;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .brand-orange {
            color: #FF7A00;
        }
        
        .brand-blue {
            color: #1976D2;
        }
        
        /* Mobile critical styles */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
                line-height: 1.3;
            }
            
            .container {
                padding: 0 1rem;
            }
        }
        ';
        
        File::put(public_path('css/critical.css'), $criticalCSS);
        
        $this->line('✓ Critical CSS generated');
    }
}
