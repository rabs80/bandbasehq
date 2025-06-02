import forms from '@tailwindcss/forms';
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'surface': {
          'default': '#00BCD4',
          'darker': '#007180',
        },
        'border': {
          'default': '#00BCD4',
          'darker': '#007180',
        },
        'grayscale': {
          'text': {
            'negative': '#0B0E0E',
            'caption': '#E3E7E8',
            'body': '#AAB8BB',
            'subtitle': '#C6D0D2',
          },
        },
        'colours': {
          'grayscale': {
            950: '#0B0E0E',
            900: '#171B1C',
          },
        },
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
        'roboto': ['Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
