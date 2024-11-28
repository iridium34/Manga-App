import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'base': '#232626',
                'primary': '#273c4e',
                'secondary': '#ffd405',
                'tertiary': '#00c7b7',
                'pickled-bluewood': {
                    '50': '#f4f7fb',
                    '100': '#e9eff5',
                    '200': '#cedde9',
                    '300': '#a2c1d7',
                    '400': '#709fc0',
                    '500': '#4e84a9',
                    '600': '#3c6a8d',
                    '700': '#315673',
                    '800': '#2c4960',
                    '900': '#273c4e',
                    '950': '#1b2836',
                },
                'gold': {
                    '50': '#fefde8',
                    '100': '#fffcc2',
                    '200': '#fff587',
                    '300': '#ffe843',
                    '400': '#ffd405',
                    '500': '#efbd03',
                    '600': '#ce9200',
                    '700': '#a46804',
                    '800': '#88510b',
                    '900': '#734210',
                    '950': '#432205',
                },
                'puerto-rico': {
                    '50': '#eefffb',
                    '100': '#c6fff6',
                    '200': '#8effee',
                    '300': '#4dfbe5',
                    '400': '#19e8d4',
                    '500': '#00c7b7',
                    '600': '#00a49b',
                    '700': '#02837d',
                    '800': '#086764',
                    '900': '#0c5552',
                    '950': '#003334',
                },
                'shark': {
                    '50': '#f5f6f6',
                    '100': '#e5e8e7',
                    '200': '#ced3d3',
                    '300': '#acb4b3',
                    '400': '#838d8b',
                    '500': '#687270',
                    '600': '#596160',
                    '700': '#4c5251',
                    '800': '#434747',
                    '900': '#3a3e3f',
                    '950': '#232626',
                },
            },
        },
    },

    plugins: [forms, typography],
};
