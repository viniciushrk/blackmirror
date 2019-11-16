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

<<<<<<< HEAD
mix.react('resources/js/app.js', 'public/js')
=======
mix.js('resources/js/app.js', 'public/js')
>>>>>>> 515ff881b7d61b9d348df75aad7e1f7bf68cf49d
   .sass('resources/sass/app.scss', 'public/css');
