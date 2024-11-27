<section {{ $attributes->class(['layout-content']) }}>
    @if ($headline)
        <div class="grid-cols gap sm:mb-84 lg:mb-84 mb-52 grid">
            <x-section-header class="col-span-full" :overline="$overline" :intro_text="$intro_text"
                alignment="center">
                {{ $headline }}
            </x-section-header>
        </div>
    @endif
    <div class="grid-cols gap-x grid gap-y-32">

        <ul
            class="gap-x col-span-full grid gap-y-52 sm:grid-cols-2 md:max-xl:col-start-2 md:max-xl:-col-end-2 xl:grid-cols-3">
            @foreach ($entries as $entry)
                <li class="lg:col-span-1 sm:max-xl:[&:last-child:nth-child(odd)]:col-span-full">
                    <section class="grid-cols-info-item grid gap-20">
                        <header>
                            <x-utilities.svg :svg="$entry['icon']"
                                class="h-auto w-[4rem] fill-current" />
                        </header>
                        <div class="space-y-4 sm:space-y-8">
                            <h3 class="text-h6">
                                {{ $entry['headline'] }}
                            </h3>
                            <x-text :text="$entry['text']" />
                            <x-elements.cta url="{{ $entry['url'] }}" label="Mehr erfahren"
                                class="mt-20" />
                        </div>
                    </section>
                </li>
            @endforeach
        </ul>

    </div>
</section>
