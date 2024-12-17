<div wire:init="updateEntries" class="{{ $class }}">
    @foreach ($entries as $entry)
        <article class="bg-gradient-dark-900 border-highlight-3-600 border p-20 sm:p-32">
            <s:svg :src="$entry['logo']" class="mb-20 h-full max-h-[4.2rem] max-w-[12rem]" />

            <h3 class="text-h5 mb-12 text-balance">
                {{ $entry['teaser']['title'] }}
            </h3>
            <p class="text-c1">
                {{ $entry['teaser']['text'] }}
            </p>

            <x-elements.cta url="{{ $entry['url'] }}" label="Mehr erfahren" class="mt-20" />
        </article>
    @endforeach
</div>
