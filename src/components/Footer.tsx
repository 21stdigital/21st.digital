import React from 'react'
import { Link } from 'gatsby'

import ContactButton from './ContactButton'

const Footer = () => (
  <footer className="pt-36 w-full flex flex-col items-center justify-center bg-black">
    <div className="w-full sm:w-2/3 max-w-5xl px-4 text-white flex flex-col">
      <div className="w-full text-3xl sm:text-4xl md:text-5xl font-bold">
        <h2 className="w-full md:w-2/3">Wie sieht Erfolg für Dein Projekt aus?</h2>
      </div>
      <div className="flex mt-8 flex-col md:flex-row md:justify-between items-start">
        <p className="w-full md:w-2/3 text-gray-400">
          Wir helfen Dir nicht einfach nur Features umzusetzen sondern das richtige Produkt mit der richtigen Strategie.
        </p>
        <div className="w-full md:w-44 pt-6 md:pt-0">
          {typeof window !== 'undefined' ? <ContactButton title="Schreib' uns" /> : null}
        </div>
      </div>
      <div className="flex flex-col">
        <div className="flex mt-40 mb-12 flex-row justify-around items-center">
          <Link to="/impressum" className="font-bold block cursor-pointer text-gray-400 hover:text-white">
            Impressum
          </Link>
          <Link to="/datenschutz" className="font-bold block cursor-pointer text-gray-400 hover:text-white">
            Datenschutz
          </Link>
        </div>
      </div>
    </div>
  </footer>
)

export default Footer
