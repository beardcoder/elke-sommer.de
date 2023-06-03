const { fontFamily } = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['PT Serif', ...fontFamily.sans],
        header: ['Montserrat', ...fontFamily.sans],
      },
      colors: {
        primary: colors.indigo,
      },
      borderRadius: {
        '5xl': '2rem',
        '10xl': '15rem',
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}
