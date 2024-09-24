@switch($presentation)
    @case('sticky_box')
        <section {{ $attributes->class(['layout-content']) }}>
            @if ($headline)
                <div class="grid-cols gap mb-20 grid sm:mb-52">
                    <x-section-header class="col-span-full" :overline="$overline">
                        {{ $headline }}
                    </x-section-header>
                </div>
            @endif
            <div class="grid-cols gap-x grid gap-y-32">
                @if ($enable_head_section->value())
                    <div class="col-span-full row-start-1 space-y-32 sm:col-span-6">
                        @foreach ($head_elements as $element)
                            <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                                :type="$element['type']" />
                        @endforeach
                    </div>
                @endif
                <div class="col-span-full sm:col-span-6 sm:col-start-1 sm:row-span-2 sm:row-start-1">
                    <x-text :text="$text" class="top-32 sm:sticky" />
                </div>
                @if ($enable_tail_section->value())
                    <div class="col-span-full space-y-32 sm:col-span-6">
                        @foreach ($tail_elements as $element)
                            <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                                :type="$element['type']" />
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @break

    @case('sticky_column')
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
                @foreach ($tail_elements as $element)
                    <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                        :type="$element['type']" />
                @endforeach

            </div>
        </section>
    @break

@endswitch
