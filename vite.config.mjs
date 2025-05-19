import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // Jika Anda memerlukan alias di aplikasi Anda
        },
    },
    // Menambahkan konfigurasi untuk menangani asset lainnya
    build: {
        // Memastikan Vite dapat menemukan semua asset
        assetsDir: 'assets',
        outDir: 'public/build',
        emptyOutDir: true,
        rollupOptions: {
            // Opsi output untuk konfigurasi lebih lanjut jika diperlukan
        },
    },
});