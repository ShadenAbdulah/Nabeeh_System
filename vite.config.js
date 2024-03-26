import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {https: true,},
    build: {
        outDir: 'public/build', // This should match your CI/CD expectation
    },
    plugins: [
        laravel({
            input: [
                '/resources/css/app.css',
                '/resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
