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


// mix:Academia
mix.js('resources/assets/js/app_academia.js', 'public/js/app_academia.js')
mix.sass('resources/assets/sass/main_academia.scss','public/css');

// mix:Home
mix.js('resources/assets/js/app_home.js', 'public/js/app_home.js')
mix.sass('resources/assets/sass/main_home.scss','public/css');

// mix:all
mix.sass('resources/assets/sass/main.scss','public/css');

// Assets to public
mix.copyDirectory('resources/assets/images', 'public/static/images');
mix.copyDirectory('resources/assets/fonts', 'public/static/fonts');
mix.copyDirectory('resources/assets/video', 'public/static/video');
mix.copy('resources/assets/favicon.ico', 'public/favicon.ico');





