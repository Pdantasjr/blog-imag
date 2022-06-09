const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['ubuntu', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#214654',
                'secondary': '#3D7B93',
                'neutral': '#f4f8f9',
                'background': '#f8fafc',
                'footer': '#9C9B9B',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
