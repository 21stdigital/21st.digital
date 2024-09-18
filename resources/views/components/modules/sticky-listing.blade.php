<section {{ $attributes->class(['layout-content grid grid-cols gap']) }}>
    <div class="col-span-full sm:col-span-6 sm:h-svh bg-highlight-500 flex flex-col justify-between sm:sticky top-0 px-20 pt-20 pb-32">
        <h2 class="text-h2 mb-52">
            {{ $headline }}
        </h2>
        <div class="">
            <x-text :text="$text" />  
        </div>
    </div>
    <div class="col-span-full sm:col-span-6 space-y-32">
        @foreach ($items as $item)
            <section>
                <h3 class="text-h4">
                    {{ $item['headline']}}
                </h3>
                <p class="text-c1">
                    {{ $item['text']}}
                </p>
                @foreach ($item['assets'] as $asset)
                    <x-figure class="mt-32" :image="$asset['image']" :caption="$asset['caption']" >
                    </x-figure>
                @endforeach
                
            </section>
        @endforeach
    </div>
</section>
