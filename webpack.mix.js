const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .extract()
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss')
    ])
    .webpackConfig(require('./webpack.config'))
if (mix.inProduction()) {
    mix.version();
}
