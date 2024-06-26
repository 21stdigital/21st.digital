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
        "hero": 'min(10.5vw, 85px)',
      },
      padding: {
        "hero": 'min(9rem, 30vh)',
      }
    }
  },
  plugins: [
    require("@tailwindcss/typography"),
    plugin(function ({ addUtilities }) {
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
