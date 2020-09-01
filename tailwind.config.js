module.exports = {
  purge: [],
  theme: {
    extend: {
        height: {
            '2/3-screen': '66vh',
            '2/3': '66.666667%',
            '1/3': '33.333333%',
            '1/4': '25%'
        },
        fontSize: {
            '7xl': '5rem'
        }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
