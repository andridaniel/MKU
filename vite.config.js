import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    server: {
        host: '192.168.1.84', // penting! jangan pakai localhost
        port: 5173,
        strictPort: true,
        cors: {
          origin: 'http://192.168.1.84:8000', // asal dari Laravel
          methods: ['GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS'],
          allowedHeaders: ['Content-Type', 'Authorization'],
        },
    },
});
