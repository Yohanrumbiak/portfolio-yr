import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/about.js',
                'resources/js/project.js',
                'resources/js/login.js',
                'resources/css/jquery.flipster.min.css', 
                'resources/js/jquery.flipster.min.js'  
            ],
            refresh: true,
        }),
    ],
});
