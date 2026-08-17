@props(['url', 'label' => 'Termin vereinbaren'])

<div data-calendly-modal>
    <x-layout.modal>
        <x-slot:trigger>
            {{-- Stays a real link so the button still works without JavaScript. --}}
            <a href="{{ $url }}" target="_blank" rel="noopener" data-calendly-trigger
                class="bg-light/32 hover:bg-light/48 h-button text-button text-light inline-flex items-center justify-center gap-12 rounded-sm px-16 py-12 transition-all">
                {{ $label }}
                <s:svg src="cta-arrow-bold" class="h-auto w-[1.8rem]" />
            </a>
        </x-slot:trigger>

        <div
            class="bg-light h-screen max-h-[100rem] w-screen max-w-[80rem] overflow-y-auto sm:h-[80vh] sm:w-[80vw]">
            {{-- Filled by resources/js/calendly.ts once the dialog is opened for the first time. --}}
            <div data-calendly-widget data-calendly-url="{{ $url }}"
                style="min-width:320px;height:80vh;"></div>
        </div>
    </x-layout.modal>
</div>
