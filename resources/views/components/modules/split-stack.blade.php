<section {{ $attributes->class(['layout-content']) }}>
    @if ($headline)
        <div class="grid-cols gap mb-52 grid">
            <x-section-header class="col-span-full" :overline="$overline" :intro_text="$intro_text">
                {{ $headline }}
            </x-section-header>
        </div>
    @endif
    <div class="grid-cols gap-x grid gap-y-32">
        @if ($lead_section)
            <div class="col-span-full row-start-1 space-y-32 sm:col-span-6">
                @foreach ($lead_section as $element)
                    <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                        :type="$element['type']" />
                @endforeach
            </div>
        @endif
        <div class="col-span-full sm:col-span-6 sm:col-start-1 sm:row-span-2 sm:row-start-1">
            <x-text :text="$text" class="top-32 sm:sticky" />
        </div>
        @if ($end_section)
            <div class="col-span-full space-y-32 sm:col-span-6 sm:row-start-2">
                @foreach ($end_section as $element)
                    <x-dynamic-component :component="'elements.' . $element['type']" :context="$element" :element_id="$element['id']"
                        :type="$element['type']" />
                @endforeach
            </div>
        @endif
    </div>
</section>
