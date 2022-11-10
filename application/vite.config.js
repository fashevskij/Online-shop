import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import viteCompression from 'vite-plugin-compression';


export default defineConfig({
    optimizeDeps: true,
    server:{
        hmr:{
            host:'localhost'
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/slider.css',
                'resources/js/main.js',
                'resources/js/slider.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
