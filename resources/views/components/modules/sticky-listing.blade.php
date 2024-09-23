<section {{ $attributes->class(['layout-content grid grid-cols gap']) }}>
    <div
        class="bg-highlight-500 -mx-container px-container top-0 col-span-full flex flex-col justify-between p-20 sm:sticky sm:col-span-6 sm:mx-0 sm:h-svh sm:px-20 sm:pb-32 sm:pt-20">
        <h2 class="text-h2 mb-52">
            {{ $headline }}
        </h2>
        <div class="">
            <x-text :text="$text" />
        </div>
    </div>
    <div class="col-span-full space-y-32 sm:col-span-6">
        @foreach ($modules as $element)
            <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                :type="$element['type']" />
        @endforeach

    </div>
</section>
