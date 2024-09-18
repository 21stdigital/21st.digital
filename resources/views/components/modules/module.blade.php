@props($context->toArray())
<div data-type="{{ $type }}" id="{{ $id }}">
    <x-dynamic-component 
        :component="'modules.' . $type" :data="$context->toArray()"
    />
</div>