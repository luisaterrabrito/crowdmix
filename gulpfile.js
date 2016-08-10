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
var base_dir = 'vendor/bower_components/';
var paths = {
    'jquery': base_dir + 'jquery/dist/',
    'bootstrap': base_dir + 'bootstrap-sass/assets/',
    'datatables': base_dir + 'datatables.net/',
    'datatables_bs': base_dir + 'datatables.net-bs/',
    'spinjs': base_dir + 'spin.js/',
    'font_awesome': base_dir + 'font-awesome/',
    'malihu_custom_scrollbar_plugin': base_dir + 'malihu-custom-scrollbar-plugin/',
    'youtube_iframe_api': base_dir + 'youtube-iframe-api/'
};

elixir(function (mix) {
    mix.sass('app.scss')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
        .copy(paths.font_awesome + 'fonts/**', 'public/fonts')
        .copy('resources/images', 'public/images')
        .copy(
            paths.bootstrap + 'javascripts/bootstrap.min.js',
            'public/js/bootstrap.min.js'
        )
        .copy(
            paths.jquery + 'jquery.min.js',
            'public/js/jquery.min.js'
        )
        .copy(
            paths.datatables + 'js/jquery.dataTables.min.js',
            'public/js/jquery.dataTables.min.js'
        )
        .copy(
            paths.datatables_bs + 'js/dataTables.bootstrap.min.js',
            'public/js/dataTables.bootstrap.min.js'
        )

        .copy(
            paths.malihu_custom_scrollbar_plugin + 'jquery.mCustomScrollbar.concat.min.js',
            'public/js/jquery.mCustomScrollbar.concat.min.js'
        )

        .copy(
            paths.youtube_iframe_api + 'youtube.iframe-api.js',
            'public/js/youtube.iframe-api.js'
        )

        .scripts(['../../../' + paths.spinjs + 'spin.js'],
            'public/js/spin-js.min.js'
        )
        .copy('resources/assets/fonts/**', 'public/fonts')
        .scriptsIn()
        .version('css/app.css')
        .browserSync({
            proxy: 'misteriodeseixas.local'
        });
});