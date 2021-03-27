module.exports = {
  siteMetadata: {
    defaultTitle: 'Entwicklung von digitalen Produkten im Web',
    titleTemplate: '%s · 21st digital',
    defaultDescription:
      'Wir begleiten Dein digitales Produkt. Individuelle Web- und App-Entwicklung. Lass uns sprechen.',
    defaultImage: '/images/og-logo.png',
    siteUrl: 'https://21st.digital'
  },
  plugins: [
    'gatsby-plugin-postcss',
    'gatsby-plugin-react-helmet',
    {
      resolve: `gatsby-plugin-sitemap`,
      options: {
        exclude: [`/impressum`, `/datenschutz`]
      }
    },
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `21st digital`,
        short_name: `21st digital`,
        start_url: `/`,
        background_color: `#ffffff`,
        theme_color: `#000`,
        display: `standalone`,
        icon: 'src/images/logo.svg'
      }
    },
    {
      resolve: 'gatsby-plugin-robots-txt',
      options: {
        policy: [{ userAgent: '*', allow: '/', disallow: ['/impressum', '/datenschutz'] }]
      }
    }
  ]
}
