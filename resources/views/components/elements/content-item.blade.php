<section>
    <h3 class="text-h4">
        {{ $headline }}
    </h3>
    <p class="text-c1">
        {{ $text }}
    </p>
    @foreach ($assets as $asset)
        <x-elements.figure class="mt-32" :image="$asset['image']" :caption="$asset['caption']">
        </x-elements.figure>
    @endforeach
</section>
