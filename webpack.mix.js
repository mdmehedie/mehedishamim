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

mix.js('resources/js/app.js', 'public_html/static/js');
mix.sass('resources/scss/app.scss', 'public_html/static/css');

mix.copy(
    'node_modules/@fortawesome/fontawesome-free/webfonts',
    'public_html/static/webfonts'
);

mix.copy(
    'node_modules/owl.carousel/dist/assets',
    'public_html/static/css/owl'
);





mix.copy('resources/assets', 'public_html/static/assets');
