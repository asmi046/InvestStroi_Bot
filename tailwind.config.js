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
        backgroundImage: {
            'lbg':'url(/public/img/icons/like.svg)',
            'lbg_h':'url(/public/img/icons/like_hover.svg)',
        },
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
        'body': { backgroundColor: theme('white'), fontFamily:"'Roboto'" },
        'h2': {fontWeight:'600', fontSize:"18px", padding:"1em 0", fontFamily:"'Exo 2'"},
        'p': {fontSize:"14px"},
      })
    })
  ],
}
