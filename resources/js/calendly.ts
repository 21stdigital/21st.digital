import { initModal, openModal } from './modal'

const WIDGET_SCRIPT_URL = 'https://assets.calendly.com/assets/external/widget.js'

interface CalendlyWidget {
  initInlineWidget: (options: { url: string; parentElement: HTMLElement }) => void
}

declare global {
  interface Window {
    Calendly?: CalendlyWidget
  }
}

let widgetScript: Promise<CalendlyWidget> | undefined

const loadWidgetScript = (): Promise<CalendlyWidget> => {
  widgetScript ??= new Promise<CalendlyWidget>((resolve, reject) => {
    const script = document.createElement('script')

    script.src = WIDGET_SCRIPT_URL
    script.addEventListener('load', () => {
      if (window.Calendly) {
        resolve(window.Calendly)
      } else {
        reject(new Error('Calendly widget script loaded without exposing its API.'))
      }
    })
    script.addEventListener('error', () => {
      reject(new Error('Calendly widget script could not be loaded.'))
    })

    document.head.append(script)
  }).catch((error: unknown) => {
    // Drop the rejected promise so a later click can retry the load.
    widgetScript = undefined

    throw error
  })

  return widgetScript
}

export const initCalendlyModal = (root: HTMLElement): void => {
  const trigger = root.querySelector('[data-calendly-trigger]')
  const dialog = root.querySelector('dialog')
  const widget = root.querySelector<HTMLElement>('[data-calendly-widget]')
  const url = widget?.dataset.calendlyUrl

  if (!trigger || !dialog || !widget || !url) {
    return
  }

  initModal(dialog)

  let mounted = false

  trigger.addEventListener('click', event => {
    event.preventDefault()
    openModal(dialog)

    if (mounted) {
      return
    }

    mounted = true

    void loadWidgetScript()
      .then(calendly => {
        calendly.initInlineWidget({ url, parentElement: widget })
      })
      .catch(() => {
        mounted = false
      })
  })
}
