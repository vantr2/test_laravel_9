import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'packages/frontend/src/vuejs/js/app.js',
                'packages/project/src/vuejs/js/project.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@frontend': path.resolve(__dirname, 'packages/frontend/src/vuejs/js'),
            '@project': path.resolve(__dirname, 'packages/project/src/vuejs/js'),
        },
    },
});
