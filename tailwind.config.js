const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/forms/resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                transparent: 'transparent',
                current: 'currentColor',
                orangesa: {
                    DEFAULT: '#EF7936'
                },
                'orange-d':{
                    DEFAULT: '#EF7936'
                },
                'orange-l':{
                    DEFAULT: '#FBB040'
                },
                'orange-dd':{
                    DEFAULT: '#EF4136'
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
