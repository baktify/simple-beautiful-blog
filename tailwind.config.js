const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                teal: colors.teal,
                orange: colors.orange,
                emerald: colors.emerald,
                lime: colors.lime,
                cyan: colors.cyan,
                "cst-green-1": "#8ae7d3",
                "cst-green-2": "#38b2ac",
                "cst-green-3": "#3b7977",
                blueGray: colors.blueGray,
                "darkBlue-1": "#23384e",
                "darkBlue-2": "#0d2235",
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'arch': ['Architects Daughter', 'Open Sans']
            },
        },
    },

    variants: {
        extend: {

        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],

};
