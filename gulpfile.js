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
    mix.less('app.less', 'public/css/less.css');

    mix.scripts([
        'core/libraries/jquery.min.js',
        'core/libraries/bootstrap.min.js',
        'core/libraries/jasny_bootstrap.min.js',
        'plugins/loaders/pace.min.js',
        'plugins/loaders/blockui.min.js',
        'core/app.min.js'
    ], 'public/js/all.js');

    mix.version(['public/css/less.css', 'public/js/all.js']);
    mix.browserSync({
            proxy: '7solutions.dev'
        });
});