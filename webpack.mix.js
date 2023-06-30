const mix = require('laravel-mix');
require('laravel-mix-purgecss');



mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/css/style.scss', 'public/assets/css/style.css')
    .css('public/assets/bootstrap/css/bootstrap.min.css', 'public/assets/bootstrap/css/bootstrap-purge.min.css')
    .css('public/assets/fontawesome/css/all.min.css','public/assets/fontawesome/css/all-purge.min.css').purgeCss() ;
