import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons'),
        }
    },
    server: {
        cors: true,
        hmr: {
            host: 'localhost',
        },
        // Добавляем опцию, чтобы принимать подключения с любого хоста
        host: '0.0.0.0',
        // Если нужно, можно указать конкретный порт
        port: 5173,
    },
});
