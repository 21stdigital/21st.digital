@props(['image', 'text', 'cta', 'logo'])
<div class="bg-highlight-500 p-32">
    @if ($logo)
        {!! Statamic::tag('svg')->params([
            'src' => $logo,
            'class' => 'max-w-[12rem] mb-20 max-h-[4.2rem] h-full'
        ]) !!}
    @endif
    <x-text :text="$text" />
</div>
