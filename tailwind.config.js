const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    theme: {
        extend: {
            fontFamily: {
                mitr: ['mitr',...defaultTheme.fontFamily.sans],
                sans: ['mitr', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                fadein: {
                    '0%': { opacity: '0', transform: 'translateY(200px)'},
                    '100%': { opacity: '1', transform: 'translateY(0px)'},
                }
            },
            animation: {
                fadein: 'fadein 1s ease-in-out ',
                fadeout: 'fadein 1s ease-in-out ',
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',

        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
