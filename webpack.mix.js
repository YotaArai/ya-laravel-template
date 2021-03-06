const mix = require('laravel-mix');
const CompressionPlugin = require('compression-webpack-plugin');

require('vuetifyjs-mix-extension')

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .vuetify(
      'vuetify-loader',
      'resources/sass/vuetify/variables.scss'
   )
   .version()
   .sourceMaps()
   .browserSync({
      files: [
         "resources/views/**/*.blade.php",
         "public/**/*.*"
      ],
      proxy: {
         target: "https://dockertest.com/",
      },
      open: false
   })
   .webpackConfig({
      plugins: [
         new CompressionPlugin({
            filename: '[path].gz[query]',
            algorithm: 'gzip',
            test: /\.js$|\.css$|\.html$|\.svg$/,
            threshold: 10240,
            minRatio: 0.8,
         })
      ]
   });
