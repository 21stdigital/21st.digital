<div class="page-layout gap-y-84 lg:gap-y-136">
    @foreach ($layout_modules as $module)
        @if ($module['type'] !== 'services-teaser')
            <x-dynamic-component :component="'layout-modules.' . $module['type']" :context="$module" :module_id="$module['id']"
                :type="$module['type']" />
        @else
            <x-layout.layout-module :context="$module" :id="$module['id']" :type="$module['type']" />
        @endif
    @endforeach
</div>
