<div
    {{ $attributes->merge([
        'class' => 'mask-cover bg-current',
        'style' => "mask-image:url('{$image->absoluteUrl()}');"
    ]) }}>
    <x-elements.image :image="$image" class="invisible" />
</div>
