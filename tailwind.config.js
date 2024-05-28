import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans, 'sans-serif'],
                'titan-one': ['"Titan One"', 'sans-serif'],
                'agbalumo': ['"Agbalumo"', 'system-ui'],

            },
        },
        colors: {

            'white': '#ffffff',
            'purple': '#3f3cbb',
            'midnight': '#3a4750',
            'metal': '#565584',
            'tahiti': '#3ab7bf',
            'silver': '#ecebff',
            'bubble-gum': '#ff77e9',
            'bermuda': '#78dcca',
            '600' :'#E8626D',
            '200': '#CDCBCC',
          },
    },
    screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },

    plugins: [forms],
};
