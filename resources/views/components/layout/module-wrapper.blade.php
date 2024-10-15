@aware(['page'])
<div class="page-layout space-y-84">
    @foreach ($layout_modules as $module)
        <x-dynamic-component :component="'layout-modules.' . $module['type']" :context="$module" :module_id="$module['id']" :type="$module['type']"
            class="mt-84" />
    @endforeach
</div>
