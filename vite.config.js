import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/base.css',
                'resources/css/embla.css',
                'resources/css/sandbox.css',
                'resources/css/slick.css',
                'resources/css/transitions.css',
                'resources/js/app.js',
                'resources/js/blog.js',
                'resources/js/bootstrap.js',
                'resources/js/coursesPost.js',
                'resources/js/discover.js',
                'resources/js/embla.js',
                'resources/js/postForm2.js',
                'resources/js/services.js',
                'resources/js/showCourseCreate.js',
                'resources/js/signUp.js',
                'resources/js/validate.js',
            ],
            refresh: true,
        }),
    ],
    // server: {
    //     host: '0.0.0.0',
    //     hmr: {
    //         host: 'localhost'
    //     },
    // },
});


