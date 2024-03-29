const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
          },
        extend: {
            fontFamily: {
                sans: [
                    "Inter, sans-serif",
                    { fontFeatureSettings: '"cv11", "ss01"' },
                  ],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
