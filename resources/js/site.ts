import { initCalendlyModal } from './calendly'

document.querySelectorAll<HTMLElement>('[data-calendly-modal]').forEach(element => {
  initCalendlyModal(element)
})
