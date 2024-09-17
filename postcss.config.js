// @ts-check

/**
 * @type {import('postcss-load-config').Config}
 */
const config = {
  plugins: {
    // Import CSS files directly into each other
    'postcss-import': {},
    // Tailwind CSS for utility-first styling
    tailwindcss: {},
    // Tailwind CSS nesting support for writing hierarchical styles
    'tailwindcss/nesting': {},
    // Autoprefixer adds vendor prefixes for browser compatibility
    autoprefixer: {}
  }
}

export default config
