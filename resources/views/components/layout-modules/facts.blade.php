<div class="layout-content gap grid-cols grid">
    @if (count($facts->value()) % 2)
        <ul class="gap-x col-span-full grid grid-cols-1 gap-y-32 justify-self-center md:grid-cols-3">
            @foreach ($facts as $fact)
                <li class="flex flex-col justify-center md:text-center">
                    <span class="text-h2">{{ $fact['fact'] }}</span>
                    <span class="text-c1">{{ $fact['description'] }}</span>
                </li>
            @endforeach
        </ul>
    @else
        <ul
            class="gap-x col-start-1 -col-end-1 grid grid-cols-1 gap-y-32 justify-self-center sm:grid-cols-2 sm:justify-self-stretch md:col-start-2 md:-col-end-2 lg:col-start-3">
            @foreach ($facts as $fact)
                <li class="flex flex-col">
                    <span class="text-h2">{{ $fact['fact'] }}</span>
                    <span class="text-c1">{{ $fact['description'] }}</span>
                </li>
            @endforeach
        </ul>
    @endif
</div>
