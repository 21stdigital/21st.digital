// @ts-check

import js from '@eslint/js'
import preferArrowFunctions from 'eslint-plugin-prefer-arrow-functions'
import simpleImportSort from 'eslint-plugin-simple-import-sort'
import globals from 'globals'
import tseslint from 'typescript-eslint'

export default tseslint.config(
  {
    ignores: ['node_modules/**', 'vendor/**', 'public/vendor/**', 'public/build/assets/**']
  },
  { languageOptions: { globals: globals.browser } },
  js.configs.recommended,
  ...tseslint.configs.strictTypeChecked,
  {
    plugins: {
      '@typescript-eslint': tseslint.plugin
    },
    languageOptions: {
      parser: tseslint.parser,
      parserOptions: {
        project: './tsconfig.json',
        tsconfigRootDir: import.meta.dirname
      }
    },
    rules: {
      '@typescript-eslint/unbound-method': 'off'
      // '@typescript-eslint/no-unsafe-argument': 'warn',
      // '@typescript-eslint/no-unsafe-assignment': 'warn'
    }
  },
  {
    files: ['**/*.js'],
    ...tseslint.configs.disableTypeChecked
  },
  {
    plugins: {
      'simple-import-sort': simpleImportSort,
      'prefer-arrow-functions': preferArrowFunctions
    },
    rules: {
      'prefer-arrow-functions/prefer-arrow-functions': 'error',
      'simple-import-sort/imports': 'error',
      'simple-import-sort/exports': 'error'
    }
  }
)
