/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
            darkBlue: '#181E49',
            SwBlue: '#3A98B9',
            lightbaige: '#FEF7EF'
        },
      },
    },
    plugins: [],
  }

