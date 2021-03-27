import React from 'react'

export interface ContactButtonProps {
  title: string
}

const ContactButton = ({ title }: ContactButtonProps) => (
  <a
    className="transition ease-in-out duration-200 whitespace-nowrap block sm:inline-block text-black bg-primary px-8 py-2 text-center font-bold md:text-lg hover:bg-secondary hover:text-white"
    href="mailto:hello@21st.digital"
  >
    {title}
  </a>
)

export default ContactButton
