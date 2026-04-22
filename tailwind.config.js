export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/js/**/*.vue",
    "./resources/js/**/*.jsx",
    "./resources/js/**/*.ts",
    "./resources/js/**/*.tsx",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  theme: {
    extend: {
      fontFamily: {
        heading: ['Poppins', 'Rajdhani', 'Teko', 'Mukta', 'system-ui', 'sans-serif'],
        body: ['Hind', 'Mukta', 'system-ui', 'sans-serif'],
      },
    },
  },
};