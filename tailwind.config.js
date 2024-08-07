const colors = require("tailwindcss/colors");
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.antlers.html",
    "./resources/**/*.antlers.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.vue",
    "./content/**/*.md"
  ],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      black: "#0D0D0D",
      pureblack: colors.black,
      white: colors.white,
      fuchsia: colors.fuchsia,
      violet: colors.violet,
      zinc: colors.zinc
    },
    extend: {
      spacing: {
        '3xs': 'var(--space-3xs)',
        '2xs': 'var(--space-2xs)',
        'xs': 'var(--space-xs)',
        'sm': 'var(--space-sm)',
        'md': 'var(--space-md)',
        'lg': 'var(--space-lg)',
        'xl': 'var(--space-xl)',
        '2xl': 'var(--space-2xl)',
        '3xl': 'var(--space-3xl) ',
      },
      gridTemplateColumns: {
        DEFAULT: 'repeat(12, minmax(0, 1fr))'
      },
      gap: {
        DEFAULT: 'var(--gap-default)'
      },
      height: (theme) => ({
        "screen-3/4": '75vh',
      }),
      maxWidth: (theme) => ({
        "screen": '100vw',
      }),
      backgroundImage: (theme) => ({
        "black-gradient": `linear-gradient(to top right, ${theme.colors.zinc[950]}, ${theme.colors.neutral[900]})`,
        "pink-gradient": `linear-gradient(to top left, #FF00D2, #BF29DD 20%, #7657EA)`
      }),
      fontSize: {
        "hero": ['min(10.5vw, 85px)', {
          lineHeight: 1.1875,
          fontWeight: 'bold'
        }],
        "title": ['var(--text-title)', {
          lineHeight: 'var(--leading-title)',
          fontWeight: '700'
        }],
        "h1": ['var(--text-h1)', {
          lineHeight: 'var(--leading-h1)',
          fontWeight: '700'
        }],
        "h2": ['var(--text-h2)', {
          lineHeight: 'var(--leading-h2)',
          fontWeight: '700'
        }],
        "h3": ['var(--text-h3)', {
          lineHeight: 'var(--leading-h3)',
          fontWeight: '700'
        }],
        "h4": ['var(--text-h4)', {
          lineHeight: 'var(--leading-h4)',
          fontWeight: '300'
        }],
        "copy": ['var(--text-copy)', {
          lineHeight: 'var(--leading-copy)',
          fontWeight: '100',
        }],
        "copy-2": ['var(--text-copy-2)', {
          lineHeight: 'var(--leading-copy-2)',
          fontWeight: '100'
        }],
      },
      padding: {
        "hero": 'min(9rem, 30vh)',
      }
    }
  },
  plugins: [
    require("@tailwindcss/typography"),
    plugin(({ addUtilities }) => {
      addUtilities({
        ".pink-gradient-text": {
          backgroundImage:
            "linear-gradient(to top left, #FF00D2, #BF29DD 20%, #7657EA)",
          backgroundClip: "text",
          color: "transparent"
        }
      })
    })
  ]
}
