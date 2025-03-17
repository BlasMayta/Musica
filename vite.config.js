import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/audio.js', // Agrega audio.js
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],

        }),

    ],
    build: {
        sourcemap: false, // Deshabilita los source maps
    },
});
