@props(['href', 'label', 'appearance' => 'light'])

@switch($appearance)
    @case('light')
        <a {{ $attributes->merge(['class' => 'rounded-sm bg-light-600 hover:bg-light-700 transition-all h-button text-button text-light px-16 py-12 inline-flex gap-12 justify-center items-center']) }}
            href="{{ $href }}">
            {{ $label }}
            <s:svg src="cta-arrow-bold" class="h-auto w-[1.8rem]" />
        </a>
    @break

    @case('dark')
        <a {{ $attributes->merge(['class' => 'rounded-sm bg-dark-600 hover:bg-dark-700 transition-all h-button text-button text-dark px-16 py-12 inline-flex gap-12 justify-center items-center']) }}
            href="{{ $href }}">
            {{ $label }}
            <s:svg src="cta-arrow-bold" class="h-auto w-[1.8rem]" />
        </a>
    @break

    @case('highlight')
        <a {{ $attributes->merge(['class' => 'rounded-sm bg-highlight-900 transition-all h-button text-button text-light hover:text-light-800 px-16 py-12 inline-flex gap-12 justify-center items-center']) }}
            href="{{ $href }}">
            {{ $label }}
            <s:svg src="cta-arrow-bold" class="h-auto w-[1.8rem]" />
        </a>
    @break

    @default
@endswitch
