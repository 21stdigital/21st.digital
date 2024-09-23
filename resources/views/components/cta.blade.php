@props(['url', 'label'])

<a href="{{ $url }}"
    {{ $attributes->merge([
        'class' => 'text-button inline-flex content-center gap-12'
    ]) }}>
    {{ $label }}
    <x-helper.svg svg="cta-arrow-bold" class="h-auto w-[1.8rem]" />
</a>
