var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less')
        .copy(
        'vendor/bower_components/font-awesome/fonts/fontawesome-webfont.eot',
        'public/css/fontawesome-webfont.eot')
        .copy(
        'vendor/bower_components/font-awesome/fonts/fontawesome-webfont.svg',
        'public/css/fontawesome-webfont.svg')
        .copy(
        'vendor/bower_components/font-awesome/fonts/fontawesome-webfont.ttf',
        'public/css/fontawesome-webfont.ttf')
        .copy(
        'vendor/bower_components/font-awesome/fonts/fontawesome-webfont.woff',
        'public/css/fontawesome-webfont.woff')
        .copy(
        'vendor/bower_components/font-awesome/fonts/fontawesome-webfont.woff2',
        'public/css/fontawesome-webfont.woff2')
});
