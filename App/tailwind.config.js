/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
        'biru': '#219EBC',
        'biru-hover': '#8ECAE6',
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

