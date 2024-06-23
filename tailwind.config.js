/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,php}", "./scripts/**/*.js", "./page/**/*.{html,php}", "./components/**/*.{html,php}"],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Manrope', 'sans-serif'],
      },
      colors: {
        'spotify_green': {
          100: '#1ED760',
        },
        'dark_grey': {
          100: '#151515',
        },
      },
    },
  },
  plugins: [],
}

