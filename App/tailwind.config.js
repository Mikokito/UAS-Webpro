/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
  },
  theme: {
    extend: {
      '72px': '72px',
    },
  },
  plugins: [],
}
