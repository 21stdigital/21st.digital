<section {{ $attributes->class(['layout-content']) }}>
    @if ($headline)
        <div class="grid grid-cols gap mb-52">
            <x-section-header class="col-span-full" :meta_title="$meta_title" :intro_text="$intro_text">
                {{ $headline }}
            </x-section-header>
        </div>
    @endif
    <div class="grid grid-cols gap-x gap-y-32">
        @if ($lead_section)
            <div class="col-span-full sm:col-span-6 row-start-1 space-y-32">    
                @foreach ($lead_section as $element)
                    <x-dynamic-component 
                        :component="'elements.' . $element['type']" 
                        :context="$element" 
                        :element_id="$element['id']" 
                        :type="$element['type']"
                        
                    />
                @endforeach
            </div>
        @endif
        <div class="col-span-full sm:col-span-6 sm:row-start-1 sm:col-start-1 sm:row-span-2">
            <x-text :text="$text" class="sm:sticky top-32" />  
        </div>
        @if ($end_section)
            <div class="col-span-full sm:col-span-6 space-y-32 sm:row-start-2">    
                @foreach ($end_section as $element)
                    <x-dynamic-component 
                        :component="'elements.' . $element['type']" 
                        :context="$element" 
                        :element_id="$element['id']" 
                        :type="$element['type']"
                        
                    />
                @endforeach
            </div>
        @endif
    </div>
</section>
