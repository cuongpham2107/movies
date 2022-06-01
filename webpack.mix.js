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
mix.disableNotifications();
mix.browserSync( {
    proxy: 'netflix.kennatech.vn',
    host: 'netflix.kennatech.vn',
    open: 'external',
})

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/main.css', 'public/css', [
        require("tailwindcss"),
        
    ]);
