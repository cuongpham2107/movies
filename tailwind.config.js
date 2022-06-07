module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      width: {
        '96':'24rem',
      },
      mt:{
        '5' : '20px'
      }
    },
    spinner:(theme) => ({
      default: {
        color: '#dae1e7',
        size: '1em',
        border: '2px',
        speed: '500ms',
      },
    }),
  },
  
  plugins: [
    require('@tailwindcss/line-clamp'),
    require('tailwindcss-spinner')(),
  ],
}
