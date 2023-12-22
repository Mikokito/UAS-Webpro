import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/footer.css', 'resources/js/ministriesPage.js'
            , 'resources/css/givePage.css', 'resources/css/header.css', 'resources/css/media.css'
            , 'resources/css/mediaPage.css', 'resources/css/ministriesPage.css', 'resources/css/navbar.css'],
            refresh: true,
        }),
    ],
});
