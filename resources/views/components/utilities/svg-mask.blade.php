<div
    {{ $attributes->merge([
        'class' => 'mask-cover bg-current',
        'style' => "mask-image:url('{$image->absoluteUrl()}');"
    ]) }}>
    <x-image :image="$image" class="invisible" />
</div>
