@props(['text'])

<div {{ $attributes->merge(['class' => 'text-copy']) }}>
    @if (is_array($text))
        @foreach ($text as $text_elements)
            @if ($text_elements['type'] === 'link')
                <x-button :label="$text_elements['cta_label']" :href="$text_elements['cta']" class="mt-32" />
            @else
                {!! $text_elements['text'] !!}
            @endif
        @endforeach
    @else
        {!! $text !!}
    @endif
</div>
