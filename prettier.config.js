// @ts-check

/**
 * @see https://prettier.io/docs/en/configuration.html
 * @type {import("prettier").Config}
 */
const config = {
  arrowParens: 'avoid',
  printWidth: 120,
  semi: false,
  singleQuote: true,
  trailingComma: 'none',
  plugins: ['prettier-plugin-antlers', 'prettier-plugin-tailwindcss'],
  overrides: [
    {
      files: ['*.antlers.html'],
      options: {
        parser: 'antlers',
        tabWidth: 4
      }
    }
  ]
}

export default config
