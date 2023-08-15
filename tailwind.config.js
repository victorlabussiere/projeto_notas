/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './pages/**/*.{php,html,js}',
    './components/**/*.{php,html,js}',
    './src/**/*.{php,js}',
    '**/*.php',
    'index.php',
    'input.css'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}