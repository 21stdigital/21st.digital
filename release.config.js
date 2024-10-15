// @ts-check

/**
 * @type {import('semantic-release').GlobalConfig}
 */
const config = {
  branches: ['main'],
  plugins: [
    [
      '@semantic-release/commit-analyzer',
      {
        preset: 'conventionalcommits'
      }
    ],
    ['@semantic-release/release-notes-generator', { preset: 'conventionalcommits' }],
    '@semantic-release/changelog',
    [
      '@semantic-release/git',
      {
        assets: [['CHANGELOG.md']],
        message: 'chore(release): ${nextRelease.version} [skip ci]'
      }
    ],
    '@semantic-release/github'
  ]
}

export default config
