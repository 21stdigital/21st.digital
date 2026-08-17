const setScrollLock = (locked: boolean): void => {
  document.body.style.overflow = locked ? 'hidden' : ''
}

export const openModal = (dialog: HTMLDialogElement): void => {
  dialog.showModal()
  setScrollLock(true)
}

export const initModal = (dialog: HTMLDialogElement): void => {
  // Covers the close button, the backdrop click and the native escape key alike.
  dialog.addEventListener('close', () => {
    setScrollLock(false)
  })

  dialog.addEventListener('click', event => {
    if (event.target instanceof Element && event.target.closest('[data-modal-panel]')) {
      return
    }

    dialog.close()
  })

  dialog.querySelectorAll('[data-modal-close]').forEach(button => {
    button.addEventListener('click', () => {
      dialog.close()
    })
  })
}
