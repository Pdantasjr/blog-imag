const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss')
    ])
    // .browserSync({
    //     proxy:'localhost',
    //     open: true,
    //     notify: false,
    // })
    .webpackConfig(require('./webpack.config'))
if (mix.inProduction()) {
    mix.version();
}
