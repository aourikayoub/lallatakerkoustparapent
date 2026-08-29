import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/css/styles.css',
                'resources/css/hotel.css',
                'resources/css/quad.css',
                'resources/css/normalize.css',
                'resources/js/script.js',
                'resources/js/quad.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
