<article wire:init="updateEntries" class="space-y-20 sm:space-y-52">
    @foreach ($entries as $entry)
        <article
            class="bg-gradient-dark-900 border-highlight-3-600 grid grid-cols-[auto_1fr] gap-20 border px-12 py-20 sm:px-20 sm:py-32">
            {!! Statamic::tag('svg')->params([
                'src' => $entry['icon'],
                'class' => 'w-[3.2rem] h-auto fill-current'
            ]) !!}
            <div class="">
                <h3 class="text-h6 mb-12">
                    {{ $entry['teaser']['title'] }}
                </h3>
                <p class="text-c2">
                    {{ $entry['teaser']['text'] }}
                </p>
                <x-elements.cta url="{{ $entry['url'] }}" label="Mehr erfahren" class="mt-20" />
            </div>
        </article>
    @endforeach
</article>
