@props([
    'overline' => null,
    'headline' => null,
    'intro_text' => null,
    'alignment' => 'left'
])

@if ($alignment === 'left')
    <header {{ $attributes->merge(['class' => 'col-span-full grid grid-cols']) }}>
        @if ($overline)
            <p class="text-h6 col-span-full sm:col-span-8">
                {{ $overline }}
            </p>
        @endif
        <h2 class="text-h1 text-highlight col-span-full text-balance sm:col-span-10">
            {!! nl2br(e($headline ?? $slot)) !!}
        </h2>
        @if ($intro_text)
            <p class="text-c1 col-span-full mt-12 md:col-span-10 lg:col-span-8">
                {!! nl2br(e($intro_text)) !!}
            </p>
        @endif
    </header>
@else
    <header {{ $attributes->merge(['class' => 'col-span-full grid grid-cols text-center']) }}>
        @if ($overline)
            <p class="text-h6 col-span-full sm:col-span-8 sm:col-start-3">
                {{ $overline }}
            </p>
        @endif
        <h2 class="text-h1 text-highlight col-span-full text-balance">
            {!! nl2br(e($headline ?? $slot)) !!}
        </h2>
        @if ($intro_text)
            <p
                class="text-c1 col-span-full mt-12 md:col-span-10 md:col-start-2 lg:col-span-8 lg:col-start-3">
                {!! nl2br(e($intro_text)) !!}
            </p>
        @endif
    </header>
@endif
