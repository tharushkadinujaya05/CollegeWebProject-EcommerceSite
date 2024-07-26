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
        whitetext: "rgba(var(--whitetext))",
        graytext: "rgba(var(--graytext))",
        whiteground: "rgba(var(--whiteground))",
      }
    },
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes:["light","black"],
  },
};
