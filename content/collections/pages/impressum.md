---
id: 9ebb7d6e-9675-4b4a-99da-e4da6ee5444e
blueprint: page
title: Impressum
author: c6113137-f6a8-4c20-b0bd-4c52f58ab03e
updated_by: 7b2bf1c2-0b8e-44d9-a774-98d3580bee37
updated_at: 1716883974
modules:
  -
    id: lwal9cki
    text: Impressum
    type: hero_text
    enabled: true
  -
    id: lwal31bz
    headline: Adresse
    headline_appearance: muted
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: '21st digital GmbH'
          -
            type: hardBreak
          -
            type: text
            text: 'Oberhafenstraße 1'
          -
            type: hardBreak
          -
            type: text
            text: '20097 Hamburg'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'mailto:{{ "hello@21st.digital" | obfuscate_email }}'
                  rel: 'noopener noreferrer'
                  target: null
                  title: null
            text: '{{ "hello@21st.digital" | obfuscate_email  }}'
    type: section_header
    enabled: true
  -
    id: lwakyykz
    headline: 'Vertreten durch'
    headline_appearance: muted
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Geschäftsführer Fabian Pahl, Steffen Rüther, Andres Stennert'
    type: section_header
    enabled: true
  -
    id: lwakzt9a
    headline: Registereintrag
    headline_appearance: muted
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Eingetragen im Handelsregister.'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Registergericht: Amtsgericht Hamburg'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Registernummer: HRB 132060'
    type: section_header
    enabled: true
  -
    id: lwal1glv
    headline: Umsatzsteuer-ID
    headline_appearance: muted
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Umsatzsteuer-Identifikationsnummer nach §27a Umsatzsteuergesetz: DE295107891'
    type: section_header
    enabled: true
parent: home
---
