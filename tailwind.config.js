/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'sred': '#C10010',
        'sblue': '#003C8C',
        'cborder': '#A0A0A0',
        'cfill': '#F2F2F2'
      },

      fontFamily: {
        sans: ['Roboto', 'sans-serif'],
        serif: ['Merriweather', 'serif'],
        'header': ['"Exo 2"']
      },
    },
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'body': { backgroundColor: theme('white') },
      })
    })
  ],
}
