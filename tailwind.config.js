import flowbitePlugin from 'flowbite/plugin'
import { fontFamily } from 'tailwindcss/defaultTheme'
import tailwindTypografie from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
export default {
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
        header: ['Satisfy', 'script', ...fontFamily.sans],
      },
      colors: {
        primary: {
          50: '#ABF3F7',
          100: '#98F1F5',
          200: '#73EBF1',
          300: '#4EE6EE',
          400: '#29E1EA',
          500: '#15CCD5',
          600: '#10A0A7',
          700: '#0C7378',
          800: '#07474A',
          900: '#031A1B',
          950: '#000404',
        },
      },
      borderRadius: {
        '5xl': '6rem',
        '10xl': '12rem',
      },
    },
  },
  plugins: [
    flowbitePlugin,
    tailwindTypografie,
    ({ addBase, theme }) => {
      function extractColorVars(colorObj, colorGroup = '') {
        return Object.keys(colorObj).reduce((vars, colorKey) => {
          const value = colorObj[colorKey]

          const newVars =
            typeof value === 'string'
              ? { [`--color${colorGroup}-${colorKey}`]: value }
              : extractColorVars(value, `-${colorKey}`)

          return { ...vars, ...newVars }
        }, {})
      }

      addBase({
        ':root': extractColorVars(theme('colors')),
      })
    },
  ],
}
