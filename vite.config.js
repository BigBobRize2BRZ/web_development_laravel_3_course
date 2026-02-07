import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: 
            [
                'resources/css/main.css', 
                'resources/bootstrap/bootstrap.css',
                'resources/bootstrap/bootstrap.bundle.js'
            ],
            refresh: true,
        }),
    ],
});
