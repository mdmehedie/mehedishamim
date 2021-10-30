const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/static/js')
    .sass('resources/scss/app.scss', 'public/static/css')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/static/webfonts'
    )
    .copy(
        'node_modules/owl.carousel/dist/assets',
        'public/static/css/owl'
    )
    .copy('resources/assets', 'public/static/assets');
