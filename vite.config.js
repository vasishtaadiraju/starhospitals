import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/appointments.scss',
                'resources/scss/homepage.scss',
                'resources/scss/speciality.scss',
                'resources/scss/international-patients.scss',
                'resources/scss/about.scss',
                'resources/scss/contact.scss',
                'resources/scss/career.scss',
                'resources/scss/find-doctor.scss',
                'resources/scss/branch.scss',
                'resources/scss/doctor-profile.scss',
                'resources/css/app.css',
                'resources/js/doctor-profile.js',
                'resources/js/app.js',
                'resources/js/app-book.js',
                'resources/js/home.js',
                'resources/js/branch.js',
                'resources/js/speciality.js',
                'resources/js/about.js',
                'resources/js/int-patients.js',
                ],
            refresh: true,
        }),
    ],
});
