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