/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php,js}"],
  theme: {
    extend: {},
  },
  variants: {
    extends: {
      display: ["group-focus"],
    },
  },
  plugins: [],
};
