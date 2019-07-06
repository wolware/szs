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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/clubs-tab-validation.js', 'public/js/validation')
    .js('resources/assets/js/athletes-tab-validation.js', 'public/js/validation')
    .js('resources/assets/js/schools-tab-validation.js', 'public/js/validation')
   .sass('resources/assets/sass/app.scss', 'public/css');
