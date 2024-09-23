@props(['svg'])

{!! Statamic::tag('svg')->params(
    $attributes->merge([
        'src' => $svg
    ])
) !!}
