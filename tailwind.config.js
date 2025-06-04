const defaultTheme = require('tailwindcss/defaultTheme');
const forms = require('@tailwindcss/forms');

module.exports = {
  "content": [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  "theme": {
    "extend": {
      colors: {
        primary: '#00BCD4',                // used for buttons, links, CTA headings
        surface: {
          default: '#0B0E0E',              // page background
          card: '#171B1C',                 // cards and containers
          form: "#171B1C"                 // form background
        },
        border: {
          subtle: '#00BCD4',               // outlines on cards
        },
        text: {
          default: '#AAB8BB',             // main paragraph text
          heading: '#FFFFFF',             // heading text
          subheading: '#00BCD4',          // “Designed by musicians...” line
          label: '#E3E7E8',               // smaller captions or labels
        },
      },
      "spacing": {},
      "borderRadius": {},
      "boxShadow": {},
      "fontFamily": {
        "inter": [
          "Inter",
          "sans-serif"
        ],
        "poppins": [
          "Poppins",
          "sans-serif"
        ],
        "roboto": [
          "Roboto",
          "sans-serif"
        ]
      }
    }
  },
  "plugins": [
    "require('@tailwindcss/forms')"
  ]
};
