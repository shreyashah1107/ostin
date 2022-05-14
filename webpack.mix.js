let mix = require('laravel-mix');

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
    .sourceMaps()
}

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js');

mix.sass('resources/assets/sass/custom.scss', 'public/css')
    .options({
        // processCssUrls: false,
        autoprefixer: {
          options: {
            browsers: [
                'last 40 versions',
            ]
          }
        }
    })
    .version();

// mix.scripts([
//     'public/js/jquery-3.4.1.min',
//     'public/js/main.js',
// ], 'public/js/all.js').version();

