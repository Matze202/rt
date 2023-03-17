import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import copy from 'rollup-plugin-copy';
import path from 'path';


/**

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        copy({
            targets: [
                { src: 'resources/fonts', dest: 'public' },
            ],
        }),
    ],
});

 */

export default defineConfig(({ command }) => {
    const isProduction = command === 'build';
    return {
        plugins: [
            laravel({
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
            copy({
                targets: [
                    { src: 'resources/fonts', dest: 'public' },
                ],
            }),
        ],
        css: {
            loaderOptions: {
                scss: {
                    additionalData: `
                        $fontsPath: "${isProduction ? path.resolve('public/fonts') : '/fonts'}";
                        @import 'fonts';
                    `,
                },
            },
        },
    };
});
