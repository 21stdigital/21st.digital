import type { Config } from 'tailwindcss'
import plugin from 'tailwindcss/plugin'

const addGradientColor = (
  color: string,
  // eslint-disable-next-line @typescript-eslint/no-explicit-any
  theme: (path: string, defaultValue?: unknown) => any
): Record<string, Record<string, string>> => ({
  [color]: Object.fromEntries(
    Object.entries(theme('colorGradations') as Record<string, string>).map(([key, value]) => [
      key,
      `rgb(var(--color-${color}) / ${value})`
    ])
  )
})

const config: Config = {
  darkMode: 'selector',
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.antlers.php',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    colorGradations: {
      DEFAULT: '1',
      900: '1',
      800: '0.72',
      700: '0.48',
      600: '0.32',
      500: '0.19',
      400: '0.13',
      300: '0.08',
      200: '0.05',
      100: '0.03'
    },

    screens: {
      sm: '46.5rem' /* 744px */,
      md: '51.25rem' /* 820px */,
      lg: '64.5rem' /* 1032px */,
      xl: '86rem' /* 1376px */,
      '2xl': '94.5rem' /* 1512px */
    },
    colors: ({ theme }) => ({
      current: 'currentColor',
      transparent: 'transparent',
      ...addGradientColor('primary', theme),
      ...addGradientColor('secondary', theme),
      ...addGradientColor('tertiary', theme),
      ...addGradientColor('light', theme),
      ...addGradientColor('dark', theme),
      ...addGradientColor('highlight-1', theme),
      ...addGradientColor('highlight-2', theme),
      ...addGradientColor('highlight-3', theme)
    }),
    spaces: {
      0: 0,
      1: 'var(--space-1)',
      2: 'var(--space-2)',
      4: 'var(--space-4)',
      8: 'var(--space-8)',
      12: 'var(--space-12)',
      20: 'var(--space-20)',
      32: 'var(--space-32)',
      52: 'var(--space-52)',
      84: 'var(--space-84)',
      136: 'var(--space-136)',
      220: 'var(--space-220)',
      356: 'var(--space-356)'
    },
    margin: ({ theme }) => ({
      auto: 'auto',
      ...(theme('spaces') as Record<string, string>)
      // ...negative(theme('spaces')) FIXME: negative is not defined
    }),
    padding: ({ theme }) => ({
      ...(theme('spaces') as Record<string, string>)
    }),
    inset: ({ theme }) => ({
      ...(theme('spaces') as Record<string, string>)
    }),
    gap: ({ theme }) => ({
      DEFAULT: 'var(--grid-gap)',
      ...(theme('spaces') as Record<string, string>)
    }),
    borderRadius: {
      none: '0',
      sm: '0.8rem',
      md: '1.6rem',
      lg: '3.2rem',
      full: '9999px'
    },
    borderWidth: {
      DEFAULT: 'max(0.1rem, 1px)',
      0: '0',
      2: '0.2rem'
    },
    fontSize: {
      counter: [
        'var(--text-counter)',
        {
          letterSpacing: 'var(--tracking-counter)',
          lineHeight: 'var(--leading-counter)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      h1: [
        'var(--text-h1)',
        {
          letterSpacing: 'var(--tracking-h1)',
          lineHeight: 'var(--leading-h1)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      h2: [
        'var(--text-h2)',
        {
          letterSpacing: 'var(--tracking-h2)',
          lineHeight: 'var(--leading-h2)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      h3: [
        'var(--text-h3)',
        {
          letterSpacing: 'var(--tracking-h3)',
          lineHeight: 'var(--leading-h3)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      h4: [
        'var(--text-h4)',
        {
          letterSpacing: 'var(--tracking-h4)',
          lineHeight: 'var(--leading-h4)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      h5: [
        'var(--text-h5)',
        {
          letterSpacing: 'var(--tracking-h5)',
          lineHeight: 'var(--leading-h5)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      h6: [
        'var(--text-h6)',
        {
          letterSpacing: 'var(--tracking-h6)',
          lineHeight: 'var(--leading-h6)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ],
      c1: [
        'var(--text-c1)',
        {
          letterSpacing: 'var(--tracking-c1)',
          lineHeight: 'var(--leading-c1)',
          fontWeight: 'var(--font-weight-thin)'
        }
      ],
      c2: [
        'var(--text-c2)',
        {
          letterSpacing: 'var(--tracking-c2)',
          lineHeight: 'var(--leading-c2)',
          fontWeight: 'var(--font-weight-thin)'
        }
      ],
      c3: [
        'var(--text-c3)',
        {
          letterSpacing: 'var(--tracking-c3)',
          lineHeight: 'var(--leading-c3)',
          fontWeight: 'var(--font-weight-thin)'
        }
      ],
      button: [
        'var(--text-button)',
        {
          letterSpacing: 'var(--tracking-button)',
          lineHeight: 'var(--leading-button)',
          fontWeight: 'var(--font-weight-semibold)'
        }
      ]
    },
    extend: {
      gridTemplateColumns: {
        DEFAULT: 'repeat(var(--grid-columms), minmax(0, 1fr))'
      },
      textColor: {
        DEFAULT: 'rgb(var(--default-text-color) / <alpha-value>)'
      },
      backgroundColor: {
        DEFAULT: 'rgb(var(--default-bg-color) / <alpha-value>)'
      }
    }
  },
  plugins: [
    plugin(({ matchUtilities, theme }) => {
      const colorGradations: Record<string, string> = theme('colorGradations')
      const borderWidth: Record<string, string> = theme('borderWidth')

      matchUtilities(
        {
          'text-highlight': value => ({
            '--color-gradation': value,
            backgroundImage: 'var(--gradient-highlight)',
            backgroundClip: 'text',
            color: 'transparent !important'
          }),
          'bg-highlight': value => ({
            '--color-gradation': value,
            backgroundImage: 'var(--gradient-highlight)'
          }),
          'bg-gradient-dark': value => ({
            '--color-gradation': value,
            backgroundImage: 'var(--gradient-dark)'
          })
        },
        { values: colorGradations }
      )

      matchUtilities(
        {
          'border-gradient-highlight': value => ({
            borderImageSlice: '1',
            borderWidth: value,
            borderImageSource: 'var(--gradient-highlight)'
          }),
          'border-gradient-dark': value => ({
            borderImageSlice: '1',
            borderWidth: value,
            borderImageSource: 'var(--gradient-dark)'
          })
        },
        { values: borderWidth }
      )
    })
  ]
}

export default config