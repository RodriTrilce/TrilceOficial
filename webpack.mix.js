let mix = require('laravel-mix');

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


mix.js('resources/assets/js/app.js', 'public/js/app.js')
mix.js('resources/assets/js/app_academia.js', 'public/js/app_academia.js')
mix.sass('resources/assets/sass/main.scss','public/css');


// Assets to public
mix.copy('resources/assets/favicon.ico', 'public/favicon.ico');
mix.copyDirectory('resources/assets/images', 'public/static/images');
mix.copyDirectory('resources/assets/fonts', 'public/static/fonts');
mix.copyDirectory('resources/assets/video', 'public/static/video');

