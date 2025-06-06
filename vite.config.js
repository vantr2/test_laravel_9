import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'packages/core/frontend/src/vuejs/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@frontend': path.resolve(__dirname, 'packages/frontend/src/vuejs/js'),
            '@project': path.resolve(__dirname, 'packages/project/src/vuejs/js'),
            'vue': 'vue/dist/vue.esm-bundler.js'
        },
    },
    server: {
        cors: true, // cho phép CORS từ mọi domain
        host: 'localhost',
        hmr: {
            protocol: 'ws',
            host: process.env.APP_URL || 'localhost',
        },
    },
});
