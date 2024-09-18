@props([
    'meta_title' => null,
    'headline' => null,
    'intro_text' => null,
    'alignment' => 'left'
])

@if ($alignment === 'left')
    <header {{ $attributes->merge(['class' => 'col-span-full grid grid-cols']) }}>
        @if ($meta_title)
            <p class="text-h6 col-span-full sm:col-span-8">
                {{ $meta_title }}
            </p>
        @endif
        <h2 class="text-h1 text-highlight col-span-full whitespace-pre-line sm:col-span-10">
            {{ $headline ?? $slot }}
        </h2>
        @if ($intro_text)
            <p class="text-c1 col-span-full mt-12 whitespace-pre-line sm:col-span-8">
                {{ $intro_text }}
            </p>
        @endif
    </header>
@else
    <header {{ $attributes->merge(['class' => 'col-span-full grid grid-cols text-center']) }}>
        @if ($meta_title)
            <p class="text-h6 col-span-full sm:col-span-8 sm:col-start-3">
                {{ $meta_title }}
            </p>
        @endif
        <h2 class="text-h1 text-highlight col-span-full">
            {{ $headline ?? $slot }}
        </h2>
        @if ($intro_text)
            <p class="text-c1 col-span-full mt-12 whitespace-pre-line sm:col-span-8 sm:col-start-3">
                {{ $intro_text }}
            </p>
        @endif
    </header>
@endif
