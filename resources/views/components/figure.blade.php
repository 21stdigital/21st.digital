@props(['image', 'caption'])

<figure {{ $attributes }}>
    <x-image :image="$image" />
    <figcaption class="text-c3 mt-4">{{ $caption }}</figcaption>
</figure>