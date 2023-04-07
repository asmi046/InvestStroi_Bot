/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
        'ssm': '370px',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
    },

    extend: {
        backgroundImage: {
            'lbg':'url(/public/img/icons/like.svg)',
            'lbg_h':'url(/public/img/icons/like_hover.svg)',
            'lbg_active':'url(/public/img/icons/like_hover.svg)',

            'chek':'url(/public/img/icons/check_icon.svg)',
            'chek_hover':'url(/public/img/icons/check_icon_white.svg)',

            'shreBg': 'url(/public/img/icons/share.svg)',
            'shreBg_h': 'url(/public/img/icons/share_hover.svg)',

            'callBg': 'url(/public/img/icons/coll.svg)',
            'callBg_h': 'url(/public/img/icons/coll_hover.svg)',

            'msgBg': 'url(/public/img/icons/msg.svg)',
            'msgBg_h': 'url(/public/img/icons/msg_hover.svg)',

            'likeBg': 'url(/public/img/icons/like.svg)',
            'likeBg_h': 'url(/public/img/icons/like_hover.svg)',

            'searchBg': 'url(/public/img/icons/serch.svg)',
            'searchBg_h': 'url(/public/img/icons/serch_hover.svg)',
        },
        colors: {
        'sred': '#C10010',
        'sblue': '#003C8C',
        'cborder': '#ced1d7',
        'cfill': '#f1f2f4'
        },

        fontSize: {
            midi: ['12px', '16px'],
            min: ['10px', '14px'],
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
        'p': {fontSize:"12px"},
        '.borderShadow' : {boxShadow: "0px 0px 9px rgba(0, 0, 0, 0.25)"}

      })
    })
  ],
}
