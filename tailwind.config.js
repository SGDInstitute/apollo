module.exports = {
  purge: [],
  theme: {
    extend: {
        colors: {
            green: {
                50: '#F3F9F8',
                100: '#E6F2F2',
                200: '#C1DFDE',
                300: '#9CCCCA',
                400: '#51A6A3',
                500: '#07807B',
                600: '#06736F',
                700: '#044D4A',
                800: '#033A37',
                900: '#022625',
            },
        },
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
