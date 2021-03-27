import React from 'react'
import Footer from '../components/Footer'
import Header from '../components/Header'

const ImprintPage = () => (
  <div>
    <Header />
    <main className="px-4 sm:px-12 md:px-18 mx-auto max-w-7xl mb-24">
      <h1 className="text-2xl font-extrabold sm:text-5xl md:text-6xl">Impressum</h1>
      <p className="mt-8">
        21st digital GmbH
        <br />
        Oberhafenstraße 1<br />
        20097 Hamburg
      </p>

      <p className="mt-4">
        {typeof window !== 'undefined' && <a href="tel:040 361 683 30">t: 040 361 683 30</a>}
        <br />
        {typeof window !== 'undefined' && <a href="mailto:hello@21st.digital">e: hello@21st.digital</a>}
      </p>

      <p className="mt-4">
        Handelsregister: HRB 132060
        <br />
        Registergericht: Amtsgericht Hamburg
        <br />
        USt-Id: DE295107891
      </p>

      <p className="mt-4">
        <strong>Vertreten durch:</strong>
        <br />
        Fabian Pahl
        <br />
        Steffen Rüther
        <br />
        Andres Stennert
      </p>
    </main>
    <Footer />
  </div>
)

export default ImprintPage
