// @ts-check

/**
 * @type {import('stylelint').Config}
 */
const config = {
  extends: ['stylelint-config-standard', 'stylelint-config-hudochenkov/order'],
  reportDescriptionlessDisables: true,
  reportInvalidScopeDisables: true,
  reportNeedlessDisables: true,
  rules: {
    // Handle unknown at-rules by allowing Tailwind-specific ones
    'at-rule-no-unknown': [
      true,
      {
        ignoreAtRules: ['tailwind', 'apply', 'variants', 'responsive', 'screen', 'layer']
      }
    ],
    // Enforce kebab-case naming convention for CSS classes
    'selector-class-pattern': [
      '^([a-z][a-z0-9]*)(-?-[a-z0-9]+)*$',
      {
        message: 'Expected class selector to be custom kebab-case with one or two dashes between words'
      }
    ],
    // Ignore unknown pseudo-classes with global being an exception (useful for CSS Modules)
    'selector-pseudo-class-no-unknown': [
      true,
      {
        ignorePseudoClasses: ['global']
      }
    ]
  }
}

export default config
