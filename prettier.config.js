// @ts-check

/**
 * @see https://prettier.io/docs/en/configuration.html
 * @type {import("prettier").Config}
 */
const config = {
  arrowParens: 'avoid',
  printWidth: 100,
  semi: false,
  singleQuote: true,
  trailingComma: 'none',
  sortTailwindcssClasses: true,
  trailingCommaPHP: false,
  plugins: [
    'prettier-plugin-antlers',
    'prettier-plugin-tailwindcss',
    '@shufo/prettier-plugin-blade'
  ],
  overrides: [
    {
      files: ['*.antlers.html'],
      options: {
        parser: 'antlers',
        tabWidth: 4
      }
    },
    {
      files: ['*.blade.php'],
      options: {
        parser: 'blade',
        tabWidth: 4
      }
    }
  ]
}

export default config
