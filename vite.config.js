import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const cssFiles = [
    'resources/css/grid.css',
    'resources/css/layout.css',
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