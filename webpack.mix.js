const mix = require('laravel-mix');

mix.postCss('resources/css/tailwind.css', 'public/css', [
    require('tailwindcss'),
]);

// mix.js('resources/js/app.js', 'public/js');

mix.browserSync({
    proxy: 'localhost:3000',
    port: 5000,
    open: false,
});
