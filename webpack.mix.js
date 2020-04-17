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

// mix.sass('resources/sass/admin/admin.scss', 'public/css/admin');
// mix.js('resources/js/admin/admin.js', 'public/js/admin');
// mix.js('resources/js/admin/admin.js', 'public/js/admin');
mix.js('resources/js/app.js', 'public/js');
//     .sass('resources/sass/app.scss', 'public/css');


// mix.js('resources/js/admin/adminvue.js', 'public/js/admin')
//     .sass('resources/sass/site/site.scss', 'public/css/site');
// mix.sass('resources/sass/site/site.scss', 'public/css/site');
