<?php

namespace App\Helpers;

class PerformanceHelper
{
    /**
     * Generate critical CSS for above-the-fold content
     */
    public static function getCriticalCSS(): string
    {
        return '
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
    }
    
    /**
     * Get preload links for critical resources
     */
    public static function getPreloadLinks(): array
    {
        return [
            'fonts' => [
                'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
            ],
            'images' => [
                'images/slide1.jpg',
                'images/slide2.jpg',
                'images/slide3.jpg',
            ],
            'css' => [
                'css/theme.css',
            ],
            'js' => [
                'js/app.js',
            ]
        ];
    }
    
    /**
     * Generate resource hints
     */
    public static function getResourceHints(): array
    {
        return [
            'dns-prefetch' => [
                'fonts.googleapis.com',
                'fonts.gstatic.com',
                'cdnjs.cloudflare.com',
            ],
            'preconnect' => [
                'fonts.googleapis.com',
                'fonts.gstatic.com',
            ],
            'prefetch' => [
                'images/slide4.jpg',
                'images/slide5.jpg',
                'images/slide6.jpg',
            ]
        ];
    }
    
    /**
     * Get optimized image dimensions
     */
    public static function getImageDimensions(string $imagePath): array
    {
        $dimensions = [
            'service1.jpg' => ['width' => 400, 'height' => 250],
            'service2.jpg' => ['width' => 400, 'height' => 250],
            'service3.jpg' => ['width' => 400, 'height' => 250],
            'service4.jpg' => ['width' => 400, 'height' => 250],
            'service5.jpg' => ['width' => 400, 'height' => 250],
            'service6.jpg' => ['width' => 400, 'height' => 250],
            'slide1.jpg' => ['width' => 1200, 'height' => 600],
            'slide2.jpg' => ['width' => 1200, 'height' => 600],
            'slide3.jpg' => ['width' => 1200, 'height' => 600],
            'slide4.jpg' => ['width' => 1200, 'height' => 600],
            'slide5.jpg' => ['width' => 1200, 'height' => 600],
            'slide6.jpg' => ['width' => 1200, 'height' => 600],
            'about-cover.jpg' => ['width' => 1200, 'height' => 400],
            'brand-story.jpg' => ['width' => 500, 'height' => 400],
            'owner1.jpg' => ['width' => 300, 'height' => 300],
            'owner2.jpg' => ['width' => 300, 'height' => 300],
        ];
        
        $filename = basename($imagePath);
        return $dimensions[$filename] ?? ['width' => 400, 'height' => 250];
    }
    
    /**
     * Generate service worker registration
     */
    public static function getServiceWorkerScript(): string
    {
        return '
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", function() {
                navigator.serviceWorker.register("/sw.js")
                    .then(function(registration) {
                        console.log("ServiceWorker registration successful");
                    })
                    .catch(function(err) {
                        console.log("ServiceWorker registration failed");
                    });
            });
        }
        ';
    }
}
