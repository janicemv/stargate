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
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            listStyleType: {
                star: '"\\2605"',
              },
        },
        colors: {
            'blue': '#200F8C',
            'blue-medium': '#355B8C',
            'blue-light': '#b4bef5',
            'purple': '#1e0741',
            'purple-medium': '#382B8C',
            'purple-light': '#dec9fc',
            'pink': '#BFAABC',
            'orange': '#FEB3A5',
            'green': '#16736F',
            'yellow': '#F2C46D',
            'beige': '#F2E4D8',
            'gray-dark': '#484359',
            'gray': '#726D8C',
            'gray-light': '#E1E1E1',
            'off-white': '#F2F2F2',
            'white': '#fff',
            'red': '#FF0000',
            'black': '#000',
          },
    },

    plugins: [forms],

    darkMode: 'class'
};
