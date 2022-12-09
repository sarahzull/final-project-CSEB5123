/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: [
        "Inter, sans-serif",
        { fontFeatureSettings: '"cv11", "ss01"' },
      ],
    },
    container: {
      center: true,
    },
    extend: {},
  },
  plugins: [],
}
