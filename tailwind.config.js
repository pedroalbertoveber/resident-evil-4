/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Roboto Condensed', 'Arial', 'Helvetica', 'sans-serif'],
        'upper': 'Bebas Neue',
      },
      backgroundImage: {
        'church': "url('../../public/img/church-bg.jpg')",
      }
    },
  },
  plugins: [],
}
