@props(['image', 'text', 'cta', 'logo'])
<div class="bg-highlight-500 p-32">
    @if ($logo)
        {!! Statamic::tag('svg')->params([
            'src' => $logo,
            'class' => 'w-[12rem] mb-20'
        ]) !!}
    @endif
    <x-text :text="$text" />
</div>
