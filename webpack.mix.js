const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') // Script principal
   .js('resources/js/sobre-nos.js', 'public/js') // Script da página sobre nós
   .sass('resources/sass/app.scss', 'public/css') // Estilos principais
   .version(); // Garante cache-busting em produção
