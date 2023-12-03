import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
     root: "./resources",
  build: {
    outDir: '../public/build',
    assetsDir: '',
    emptyOutDir: true,
  },
  server: {
    https: true,
  },
  publicDir: "../public",
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
