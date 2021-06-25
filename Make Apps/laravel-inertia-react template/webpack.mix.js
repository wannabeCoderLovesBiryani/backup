const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('public/css/bootstrap/bootstrap.css', 'public/css/bootstrap', [
        //
    ]).postCss('public/css/fonts/fontawesome-all.min.css', 'public/css/fonts', [
        //
    ]).postCss('public/css/fonts/font-awesome.min.css', 'public/css/fonts', [
        //
    ]).postCss('public/css/fonts/ionicons.min.css', 'public/css/fonts', [
        //
    ]).postCss('public/css/fonts/fontawesome5-overrides.min.css', 'public/css/fonts', [
        //
    ])

    .purgeCss({
        enabled: true,

        // Your custom globs are merged with the default globs. If you need to
        // fully replace the globs, use the underlying `paths` option instead.
        globs: () => [
            path.join(__dirname, 'node_modules/simplemde/**/*.js'),
        ],
        folders: ['js/Pages', 'js/Components'],

        extensions: ['html', 'js', 'php', 'jsx'],

        // Other options are passed through to Purgecss
        // whitelistPatterns: [/language/, /hljs/],

        whitelistPatternsChildren: [/^markdown$/],
    });

mix.browserSync('http://127.0.0.1:8000');

