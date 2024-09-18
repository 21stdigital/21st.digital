@props([
    'href',
    'label',
])

<a 
{{ $attributes->merge(['class' => 'rounded-sm bg-light-600 hover:bg-light-700 transition-all h-button text-button text-light px-16 py-12 inline-flex gap-12 justify-center items-center'])}}
href="{{ $href }}"

>
    {{ $label }}
</a>