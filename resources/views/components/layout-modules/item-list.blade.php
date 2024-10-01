<section {{ $attributes->class(['layout-content']) }}>
    @if ($headline)
        <div class="grid-cols gap sm:mb-84 lg:mb-84 mb-32 mb-52 grid">
            <x-section-header class="col-span-full" :overline="$overline" :intro_text="$intro_text"
                alignment="center">
                {{ $headline }}
            </x-section-header>
        </div>
    @endif
    <div class="grid-cols gap-x grid gap-y-32">

        <ul
            class="gap-x col-span-full grid gap-y-52 sm:grid-cols-2 md:max-xl:col-start-2 md:max-xl:-col-end-2 xl:grid-cols-3">

            @foreach ($items as $element)
                <li class="lg:col-span-1 sm:max-xl:[&:last-child:nth-child(odd)]:col-span-full">
                    <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                        :type="$element['type']" />
                </li>
            @endforeach
        </ul>

    </div>
</section>
