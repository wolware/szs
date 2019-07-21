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
    .js('resources/assets/js/clubs-validation.js', 'public/js/validation')
    .js('resources/assets/js/new-figure.js', 'public/js')
    .js('resources/assets/js/event-validation.js', 'public/js/validation')
    .js('resources/assets/js/athletes-validation.js', 'public/js/validation')
    .js('resources/assets/js/objects-validation.js', 'public/js/validation')
    .js('resources/assets/js/staff-validation.js', 'public/js/validation')
    .js('resources/assets/js/schools-validation.js', 'public/js/validation')
   .sass('resources/assets/sass/app.scss', 'public/css');
