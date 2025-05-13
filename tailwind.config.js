import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                boldonse: ['Boldonse', 'system-ui'],
                alfa: ['"Alfa Slab One"', 'sans-serif'],
            },
        },

        screens: {
            '2xl': '1536px',
            'xl': '1280px',
            'lg': '1024px',
            'md': '768px',
            'sm': '640px',
            'xs': '344px',
        },
    },

    plugins: [forms],
};
