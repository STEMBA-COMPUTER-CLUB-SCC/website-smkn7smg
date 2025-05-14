/** @type {import('tailwindcss').Config} */
import tailwindcss from '@tailwindcss/vite'
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require("@designbycode/tailwindcss-text-stroke"),
      tailwindcss(),
    ],
  }