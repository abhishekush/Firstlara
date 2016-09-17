const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(function(mix)  {
     mix.sass('app.scss')
    //.webpack('app.js')

    .styles([

        'blog-post.css',
        'bootstrap.css',
        'font-awesome.css',
        'metisMenu.css',
        'sb-admin-2.css',
        'styles.css'
    ],'public/css/libs.css')

         .scripts([
            'jquery.js',
            'bootstrap.js',
            'metisMenu.js',
            'sb-admin-2.js'
        ],'public/js/libs.js');


});
