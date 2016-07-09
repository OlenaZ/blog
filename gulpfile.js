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

    mix.sass('app.scss', 'resources/css');

    mix.styles([
    	'libs/bootstrap.css',
    	'libs/css?family=Lato:100,300,400,700',
    	'libs/font-awesome.min.css',
    	'libs/select2.min.css',
    	'libs/summernote.css'
    ]);

    mix.scripts([
    	'libs/bootstrap.js',
    	'libs/jquery.min.js',
    	'libs/select2.min.js',
    	'libs/summernote.js',
    	'libs/summernote-uk-UA.min.js'
    ]);
});
