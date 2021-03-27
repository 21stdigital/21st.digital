module.exports = {
  purge: ['./src/**/*.{js,jsx,ts,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: '#F4FF00',
        secondary: '#00CCFF'
      }
    }
  },
  variants: {
    extend: {}
  },
  plugins: []
}
