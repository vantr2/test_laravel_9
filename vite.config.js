import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';
import fs from 'fs';
import glob from 'fast-glob';

// Hàm đọc tất cả cấu hình (entries và aliases) từ các package
function getPackageConfigs() {
    const entrypointFiles = glob.sync('packages/**/vite.config.json');

    // Dùng reduce để tổng hợp inputs và aliases từ tất cả các file
    return entrypointFiles.reduce((acc, file) => {
        const packageDir = path.dirname(file);
        const content = JSON.parse(fs.readFileSync(file, 'utf-8'));

        // Xử lý entries
        if (content.entries && Array.isArray(content.entries)) {
            const absoluteEntries = content.entries.map(relativePath =>
                path.resolve(packageDir, relativePath)
            );
            acc.inputs.push(...absoluteEntries);
        }

        // Xử lý aliases
        if (content.aliases && typeof content.aliases === 'object') {
            for (const alias in content.aliases) {
                const relativePath = content.aliases[alias];
                acc.aliases[alias] = path.resolve(packageDir, relativePath);
            }
        }

        return acc;
    }, { inputs: [], aliases: {} }); // Giá trị khởi tạo
}

// Lấy cấu hình động từ các package
const packageConfigs = getPackageConfigs();

export default defineConfig({
    plugins: [
        laravel({
            input: packageConfigs.inputs,
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            ...packageConfigs.aliases,
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
