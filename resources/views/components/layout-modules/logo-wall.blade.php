@props([
    'overline' => null,
    'headline' => null,
    'intro_text' => null,
    'clients' => []
])
<section {{ $attributes->class(['layout-content']) }}>
    @if ($headline)
        <div class="grid-cols gap mb-20 grid sm:mb-52">
            <x-section-header class="col-span-full" :overline="$overline" :headline="$headline"
                :intro_text="$intro_text">
            </x-section-header>
        </div>
    @endif
    <ul class="gap grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6">

        @foreach ($clients as $client)
            @if ($client['logo'])
                <li>
                    <a class="aspect-3/2 after:bg-highlight-400 relative isolate flex place-items-center p-[calc(20_/_744_*_100vw)] transition-all after:absolute after:inset-0 after:z-10 after:opacity-0 after:transition-all hover:after:opacity-100 sm:p-32 lg:p-32"
                        title="{{ $client['title'] }}" href="{{ $client['url'] }}"
                        rel="noopener noreferrer" target="__blank">

                        <s:svg :src="$client['logo']"
                            class='relative z-20 grid aspect-video w-[clamp(10rem,_1rem_+_40vmin,_30rem)] place-items-center' />

                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</section>
