module.exports = {
  siteMetadata: {
    defaultTitle: 'Kreative Spezialeinheit für digitale Produkte',
    titleTemplate: '%s · 21st digital',
    defaultDescription: 'Spezialeinheit für digitale Produkte im Web aus Hamburg',
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
        policy: [{ userAgent: '*', allow: '/' }]
      }
    }
  ]
}
