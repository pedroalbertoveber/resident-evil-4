/** @type {import('tailwindcss').Config} */
module.exports = {
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
    },
  },
  plugins: [],
}
