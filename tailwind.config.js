const { colors, fontFamily } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  future: {
    removeDeprecatedGapUtilities: true,
    standardFontWeights: true,
  },
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
            gray: {
                ...colors.gray,
                600: '#757575',
                700: '#404040',
            }
        },
        height: {
            '2/3-screen': '66vh',
            '2/3': '66.666667%',
            '1/3': '33.333333%',
            '1/4': '25%',
            '18': '4.5rem',
        },
        fontFamily: {
            'raleway': ['Raleway', ...fontFamily.sans],
            'newscycle': ['Raleway', ...fontFamily.sans],
            'sans': ['Lato', ...fontFamily.sans],
        },
        fontSize: {
            '7xl': '5rem'
        },
        maxWidth: {
            'prose': '65ch',
        },
        screens: {
            'dark': {'raw': '(prefers-color-scheme: dark)'},
        },
    },
    typography: (theme) => ({
        default: {
            css: {
                color: theme('colors.black'),
                h1: {
                    color: theme('colors.gray.700'),
                    fontFamily: '"News Cycle", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                    fontSize: theme('fontSize.5xl'),
                },
                h2: {
                    color: theme('colors.green.500'),
                    fontFamily: '"News Cycle", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                    fontSize: theme('fontSize.4xl'),
                },
                h3: {
                    color: theme('colors.gray.700'),
                    fontFamily: 'Lato, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                    fontSize: theme('fontSize.xl'),
                },
                h4: {
                    color: theme('colors.gray.700'),
                    fontFamily: 'Lato, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                    fontWeight: theme('fontWeight.semibold'),
                    textTransform: theme('textTransform.uppercase'),
                    letterSpacing: theme('letterSpacing.wider'),
                    fontSize: theme('fontSize.lg'),
                },
                'figure figcaption': {
                    fontSize: theme('fontSize.sm'),
                    color: theme('colors.gray.600'),
                },
            }
        },
        dark: {
          css: {
            color: theme('colors.gray.300'),
            '[class~="lead"]': {
                color: theme('colors.gray.300'),
            },
            a: {
                color: theme('colors.gray.100'),
                textDecoration: 'underline',
            },
            strong: {
                color: theme('colors.gray.100'),
                fontWeight: '600',
            },
            'ol > li::before': {
                color: theme('colors.gray.400'),
            },
            'ul > li::before': {
                backgroundColor: theme('colors.gray.600'),
            },
            hr: {
                borderColor: theme('colors.gray.700'),
            },
            blockquote: {
                color: theme('colors.gray.100'),
                borderLeftColor: theme('colors.gray.700'),
            },
            h1: {
                color: theme('colors.gray.100'),
            },
            h2: {
                color: theme('colors.gray.100'),
            },
            h3: {
                color: theme('colors.gray.100'),
            },
            h4: {
                color: theme('colors.gray.100'),
            },
            'figure figcaption': {
                color: theme('colors.gray.400'),
            },
            code: {
                color: theme('colors.gray.100'),
            },
            pre: {
                color: theme('colors.gray.700'),
                backgroundColor: theme('colors.gray.200'),
            },
            thead: {
                color: theme('colors.gray.100'),
                borderBottomColor: theme('colors.gray.600'),
            },
            'tbody tr': {
                borderBottomColor: theme('colors.gray.700'),
            },
          },
        },
      }),
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/ui'),
  ],
}
