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
    // .sass('resources/sass/themes/bulmaswatch/app.scss', 'public/css')
    // .sass('resources/sass/themes/bulmaswatch/cerulean.scss', 'public/css/themes')
    // .sass('resources/sass/themes/bulmaswatch/cosmo.scss', 'public/css/themes')
    // .sass('resources/sass/themes/bulmaswatch/cyborg.scss', 'public/css/themes')
    // .sass('resources/sass/themes/bulmaswatch/darkly.scss', 'public/css/themes')
    // .sass('resources/sass/themes/bulmaswatch/default.scss', 'public/css/themes')
    // .sass('resources/sass/themes/bulmaswatch/flatly.scss', 'public/css/themes')
    .sass('resources/sass/themes/bulmaswatch/journal.scss', 'public/css/themes')
    .sass('resources/sass/admin.scss', 'public/css');
    // .sass('resources/sass/themes/bulmaswatch/lumen.scss', 'public/css/themes');
