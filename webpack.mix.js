const mix = require('laravel-mix');

mix.js('public/script/script.js', 'public/js')
   .sass('public/css/style.css', 'public/css');
