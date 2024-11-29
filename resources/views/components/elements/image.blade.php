{{-- prettier-ignore-start --}}
<img
    @if ($srcset)
        srcset="{{ $srcset }}"
    @endif
    @if ($sizes)
        $sizes="{{ $sizes }}"
    @endif

    {{ $attributes->merge(['class' =>'']) }}
    src="{{ $src }}"
    alt="{{ $alt }}"
    width="{{ $width }}"
    height="{{ $height }}"
    loading="{{ $loading }}"
    decoding="async"
>
{{-- prettier-ignore-end --}}
