<div class="page-layout">
    @foreach ($modules as $module)
        <x-dynamic-component :component="'modules.' . $module['type']" :context="$module" :module_id="$module['id']" :type="$module['type']"
            class="mt-84" />
    @endforeach
</div>
