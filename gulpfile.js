var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function(mix) {
    mix.less('app.less');

    mix.scripts([
        'plugins/loaders/pace.min.js',
        'core/libraries/jquery.min.js',
        'core/libraries/bootstrap.min.js',
        'plugins/loaders/blockui.min.js',
        'core/libraries/jasny_bootstrap.min.js',
        'core/libraries/jquery_ui/full.min.js',
        'core/app.js'
    ], 'public/js/all.js');

    mix.version(['public/css/app.css', 'public/js/all.js']);

    mix.copy('resources/assets/css/*', 'public/build/css');
    mix.copy('resources/assets/js/*', 'public/build/js/plugins');
});