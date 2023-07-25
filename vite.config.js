import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss',
            'resources/css/student.scss',
            'resources/css/report-print.scss',
            'resources/css/invoice.scss',
            'resources/css/print.scss',
            'resources/css/login.css', 
            'resources/js/student/student.ts',
            'resources/js/app.ts'],
            refresh: true,
        }),
    ],
});
