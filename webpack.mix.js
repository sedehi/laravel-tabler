const mix = require('laravel-mix');

mix.setPublicPath('./')
    .js('resources/js/app.js', 'resources/build/js')
    .sass('resources/sass/app.scss', 'resources/build/css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}