@props(['image', 'text', 'cta', 'logo'])
<div class="bg-highlight-500 p-32">
    @if ($logo)
        <s:svg :src="$logo" class="mb-20 h-full max-h-[4.2rem] max-w-[12rem]" />
    @endif
    <x-text :text="$text" />
</div>
