/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        nunito: ["Nunito", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
      },
      colors: {
        background: "rgba(var(--background))",
        text: "rgba(var(--text))",
      }
    },
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes: [],
  },
};
