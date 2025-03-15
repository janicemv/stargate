import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            // Usar assetsInclude para permitir que PNGs sejam tratados corretamente como assets
            assetsInclude: ['**/*.PNG']
        }
    }
});

