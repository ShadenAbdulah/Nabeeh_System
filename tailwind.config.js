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
                //     // 'sm-phone': '320',
                //     //
                //     // 'phone': '375',
                //     //
                //     // 'lg-phone': '390',
                //
                'phones': {'min': '320px', 'max': '639px'},

                'tablet': {'min': '640px', 'max': '4000px'},
                //
                //     // 'laptop': '1024px',
                //     //
                //     // 'desktop': '1280px',
            },
        },
    },

    plugins: [forms],
};
