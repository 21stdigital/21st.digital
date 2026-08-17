@props(['trigger'])

<div class="flex justify-center">
    {{ $trigger }}

    <dialog class="modal">
        <div class="flex min-h-full items-center justify-center p-4">
            <div data-modal-panel
                class="relative overflow-y-auto rounded-xl bg-transparent shadow-lg sm:p-52">
                {{ $slot }}

                <button type="button" data-modal-close
                    class="absolute right-0 top-0 p-8 max-sm:hidden">
                    <s:svg src="x-circle" class="h-auto w-[3.2rem] fill-none" />
                </button>
                <div class="max-w-356 fixed bottom-12 left-12 right-12 m-auto">
                    <button type="button" data-modal-close
                        class="bg-light hover:bg-light/72 h-button text-button text-dark border-dark inline-flex w-full items-center justify-center gap-12 rounded-sm border px-16 py-12 transition-all sm:hidden">
                        {{ Statamic::tag('trans:labels.close_modal') }}
                    </button>
                </div>
            </div>
        </div>
    </dialog>
</div>
