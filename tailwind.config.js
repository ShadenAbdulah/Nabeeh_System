import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/vendor/pagination/*.blade.php',
    ],

    theme: {
        extend: {
            screens: {
                'phones': {'min': '320px', 'max': '639px'},
                'tablet': {'min': '640px', 'max': '4000px'},
            },
        },
    },

    plugins: [forms],
};
