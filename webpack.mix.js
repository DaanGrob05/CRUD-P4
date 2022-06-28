const mix = require("laravel-mix");

mix.js("resources/js/slider.js", "public/js/slider.js");
mix.js("resources/js/to_top_button.js", "public/js/to_top_button.js");
mix.js("resources/js/formValidation.js", "public/js/formValidation.js");
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

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css"
    // [require("postcss-import"), require("tailwindcss"), require("autoprefixer")]
);

mix.sass("resources/scss/app.scss", "public/css");

mix.copyDirectory("resources/images", "public/images");

mix.copyDirectory("resources/js/sliderimgs", "public/js/sliderimgs");
