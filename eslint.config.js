// @ts-check

import eslint from '@eslint/js'
import eslintConfigPrettier from 'eslint-config-prettier'
import * as pluginImport from 'eslint-plugin-import'
import pluginPreferArrow from 'eslint-plugin-prefer-arrow'
import pluginSimpleImportSort from 'eslint-plugin-simple-import-sort'
import tseslint from 'typescript-eslint'

const config = tseslint.config(
  {
    plugins: {
      'prefer-arrow': pluginPreferArrow,
      'simple-import-sort': pluginSimpleImportSort,
      import: pluginImport
    }
  },
  eslint.configs.recommended,
  ...tseslint.configs.strict,
  ...tseslint.configs.stylistic,
  {
    rules: {
      'simple-import-sort/imports': 'error',
      'simple-import-sort/exports': 'error',

      'import/first': 'error',
      'import/newline-after-import': 'error',
      'import/no-duplicates': 'error',
      'import/exports-last': 'error',

      'prefer-arrow-callback': 'error',
      'prefer-arrow/prefer-arrow-functions': 'error',

      'no-console': ['error', { allow: ['error'] }],
      'object-shorthand': 'error'
    }
  },
  eslintConfigPrettier
)

export default config
