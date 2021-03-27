import React from 'react'
import { Helmet } from 'react-helmet'
import { useLocation } from '@reach/router'
import { useStaticQuery, graphql } from 'gatsby'
import { Organization } from 'schema-dts'

interface Props {
  title?: string
  description?: string
  image?: string
}

interface SeoData {
  site: {
    siteMetadata: {
      titleTemplate: string
      defaultTitle: string
      defaultDescription: string
      defaultImage: string
      siteUrl: string
    }
  }
}

const SEO = ({ title, description, image }: Props) => {
  const { pathname } = useLocation()
  const { site } = useStaticQuery<SeoData>(query)

  const { titleTemplate, defaultTitle, defaultDescription, defaultImage, siteUrl } = site.siteMetadata

  const seo = {
    title: title ?? defaultTitle,
    description: description ?? defaultDescription,
    image: `${siteUrl}${image ?? defaultImage}`,
    url: `${siteUrl}${pathname}`
  }

  const schemaOrgOrganization: Organization = {
    '@type': 'Organization',
    legalName: '21st digital GmbH',
    name: '21st digital',
    address: {
      '@type': 'PostalAddress',
      streetAddress: 'Oberhafenstraße 1',
      postalCode: '20097',
      addressLocality: 'Hamburg',
      addressCountry: 'DE'
    },
    email: 'hello@21st.digital',
    telephone: '+49 40 361 683 30'
  }

  return (
    <Helmet
      title={seo.title}
      titleTemplate={titleTemplate}
      htmlAttributes={{
        lang: 'de-DE'
      }}
    >
      <meta name="description" content={seo.description} />
      <meta name="image" content={seo.image} />
      <meta property="og:url" content={seo.url} />
      <meta property="og:title" content={seo.title} />
      <meta property="og:description" content={seo.description} />
      <meta property="og:image" content={seo.image} />
      <script type="application/ld+json">{JSON.stringify(schemaOrgOrganization)}</script>
    </Helmet>
  )
}

export default SEO

const query = graphql`
  query SEO {
    site {
      siteMetadata {
        defaultTitle
        titleTemplate
        defaultDescription
        defaultImage
        siteUrl
      }
    }
  }
`
