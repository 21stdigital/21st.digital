@props(['open_button' => null, 'label' => null])

<div x-data="{ open: false }" class="flex justify-center">
    <!-- Trigger -->
    <span x-on:click="open = true">
        @if ($open_button)
            {{ $open_button }}
        @else
            <button
                class="bg-light-600 hover:bg-light-700 h-button text-button text-light inline-flex items-center justify-center gap-12 rounded-sm px-16 py-12 transition-all">
                {{ $label ?? 'Öffnen' }}
                <x-utilities.svg svg="cta-arrow-bold" class="h-auto w-[1.8rem]" />
            </button>
        @endif
    </span>

    <!-- Modal -->
    <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open=false"
        role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-10 overflow-y-auto">
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="bg-dark-800 fixed inset-0"></div>

        <!-- Panel -->
        <div x-show="open" x-transition x-on:click="open = false"
            class="relative flex min-h-screen items-center justify-center p-4">
            <div x-on:click.stop x-trap.noscroll.inert="open"
                class="relative overflow-y-auto rounded-xl bg-white bg-none shadow-lg sm:p-52">
                {{ $slot }}

                <button type="button" x-on:click="open = false"
                    class="absolute right-0 top-0 p-8 max-sm:hidden">
                    <x-utilities.svg svg="x-circle" class="h-auto w-[3.2rem] fill-none" />
                </button>
                <div class="max-w-356 fixed bottom-12 left-12 right-12 m-auto">
                    <button type="button" x-on:click="open = false"
                        class="bg-light hover:bg-light-800 h-button text-button text-dark border-dark inline-flex w-full items-center justify-center gap-12 rounded-sm border px-16 py-12 transition-all sm:hidden">
                        {{ Statamic::tag('trans:labels.close_modal') }}
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
