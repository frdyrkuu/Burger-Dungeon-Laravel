/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
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
            },
            animation: {
                'waving-hand': 'wave 2s linear infinite',
                floating: 'floating 3s linear infinite',
                reveal: 'reveal 1s'
            },
        },
    },
    plugins: [],
}
