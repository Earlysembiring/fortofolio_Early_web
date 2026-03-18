import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['admin/css/app.css', 'admin/js/app.js'],
            refresh: true,
        }),
    ],
});
