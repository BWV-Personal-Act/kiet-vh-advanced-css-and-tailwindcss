import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const cssFiles = [
    'resources/css/app.css',
    'resources/css/css-selector.css',
];

const jsFiles = [
];

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...cssFiles,
                ...jsFiles,
            ],
            refresh: true,
        }),
    ],
});