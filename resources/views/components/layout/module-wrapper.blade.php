<div class="page-layout space-y-84 lg:space-y-136">
    @foreach ($layout_modules as $module)
        @if ($module['type'] !== 'services-teaser')
            <x-dynamic-component :component="'layout-modules.' . $module['type']" :context="$module" :module_id="$module['id']"
                :type="$module['type']" class="mt-84" />
        @else
            <x-layout.layout-module :context="$module" :id="$module['id']" :type="$module['type']" />
        @endif
    @endforeach
</div>
