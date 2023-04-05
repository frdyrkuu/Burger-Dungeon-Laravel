/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                wave: {
                    '0%': { transform: 'rotate(0.0deg)' },
                    '10%': { transform: 'rotate(14deg)' },
                    '20%': { transform: 'rotate(-8deg)' },
                    '30%': { transform: 'rotate(14deg)' },
                    '40%': { transform: 'rotate(-4deg)' },
                    '50%': { transform: 'rotate(10.0deg)' },
                    '60%': { transform: 'rotate(0.0deg)' },
                    '100%': { transform: 'rotate(0.0deg)' },
                },
                floating: {
                    '0%': { transform: 'translate(0, 0px)' },
                    '50%': { transform: 'translate(0, 15px)' },
                    '100%': { transform: 'translate(0, -0px)' },
                },
                reveal: {
                    '0%': {
                        transform: 'translateY(-100%)'
                    },
                    '100%': {
                        transform: 'translateY(0%)'
                    },
                },

                'reveal-x': {
                    '0%': {
                        transform: 'translateX(100%)'
                    },
                    '100%': {
                        transform: 'translateX(0%)'
                    },
                },


                openmenu: {
                    '0%': { transform: 'scaleY(0)' },
                    '80%': { transform: 'scaleY(1.2)' },
                    '100%': { transform: 'scaleY(1)' },
                },
            },
            animation: {
                'waving-hand': 'wave 2s linear infinite',
                floating: 'floating 3s linear infinite',
                reveal: 'reveal 1s',
                'reveal-x': 'reveal-x 1s',
                'open-menu': 'openmenu 0.5s ease-in-out forwards',
            },

            screens: {
                'widescreen': { 'raw': '(min-aspect-ratio: 3/2)' },
                'tallscreen': { 'raw': '(min-aspect-ratio: 13/20)' },
            }
        },
    },
    plugins: [
    ],
}
