<section {{ $attributes->class(['layout-content grid grid-cols gap']) }}>
    <div
        class="bg-highlight-500 top-0 col-span-full flex flex-col justify-between px-20 pb-32 pt-20 sm:sticky sm:col-span-6 sm:h-svh">
        <h2 class="text-h2 mb-52">
            {{ $headline }}
        </h2>
        <div class="">
            <x-text :text="$text" />
        </div>
    </div>
    <div class="col-span-full space-y-32 sm:col-span-6">
        @foreach ($items as $item)
            <section>
                <h3 class="text-h4">
                    {{ $item['headline'] }}
                </h3>
                <p class="text-c1">
                    {{ $item['text'] }}
                </p>
                @foreach ($item['assets'] as $asset)
                    <x-figure class="mt-32" :image="$asset['image']" :caption="$asset['caption']">
                    </x-figure>
                @endforeach

            </section>
        @endforeach
    </div>
</section>
