const mix = require('laravel-mix');

const path = require('path');

var VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');
var webpackConfig = {
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@": path.join(__dirname, "./resources/js/components')
        },
    },
    plugins: [
        new VuetifyLoaderPlugin()
    ]
};
mix.webpackConfig(webpackConfig);

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
