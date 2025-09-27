const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer'),
            require('cssnano')({
                preset: 'default',
            })
        ]
    })
    .webpackConfig({
        optimization: {
            splitChunks: {
                chunks: 'all',
                cacheGroups: {
                    vendor: {
                        test: /[\\/]node_modules[\\/]/,
                        name: 'vendors',
                        chunks: 'all',
                    },
                },
            },
        },
    })
    .version()
    .sourceMaps(false, 'source-map')
    .browserSync({
        proxy: 'localhost:8000',
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    });

// Copy and optimize images
mix.copyDirectory('resources/images', 'public/images')
    .copy('public/js/performance.js', 'public/js/performance.min.js')
    .minify('public/js/performance.js');

// Generate service worker
mix.then(() => {
    const fs = require('fs');
    const path = require('path');
    
    // Read the service worker file
    const swContent = fs.readFileSync('public/sw.js', 'utf8');
    
    // Add version hash to cache name
    const version = Date.now();
    const updatedSw = swContent.replace('arihant-transport-v1', `arihant-transport-v${version}`);
    
    // Write updated service worker
    fs.writeFileSync('public/sw.js', updatedSw);
});
