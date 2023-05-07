const defaultTheme = require('tailwindcss/defaultTheme');
//const colors = require('tailwindcss/colors');
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './'
        /*'./resources/app.css',
        './resources/css/container.css',*/
        


    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brown: {
                  50: '#fdf8f6',
                  100: '#f2e8e5',
                  200: '#eaddd7',
                  300: '#e0cec7',
                  400: '#d2bab0',
                  500: '#bfa094',
                  600: '#a18072',
                  700: '#977669',
                  800: '#846358',
                  900: '#43302b',
                },
              }
        }
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio')
    
    ],
};
