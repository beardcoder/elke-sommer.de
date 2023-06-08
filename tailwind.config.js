const { fontFamily } = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './node_modules/flowbite/**/*.js',
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
        '5xl': '6rem',
        '10xl': '12rem',
      },
    },
  },
  plugins: [require('flowbite-typography'), require('flowbite/plugin')],
}
