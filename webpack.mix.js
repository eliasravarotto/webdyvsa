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
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/app_backend.js', 'public/js')
   .sass('resources/assets/sass/app_backend.scss', 'public/css');

mix.js('resources/assets/js/app_.js', 'public/js')
   .sass('resources/assets/sass/app_.scss', 'public/css');  

mix.sass('resources/assets/sass/sm-core-css.scss', 'public/css');
mix.sass('resources/assets/sass/sm-mint.scss', 'public/css');
mix.sass('resources/assets/sass/stm-icons.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
	proxy: 'webdyvsa.test'
});