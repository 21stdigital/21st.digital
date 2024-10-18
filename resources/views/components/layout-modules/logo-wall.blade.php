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
    <ul class="gap grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">

        @foreach ($clients as $client)
            @if ($client['logo'])
                <li>
                    <a class="bg-highlight-500 aspect-3/2 after:bg-highlight relative isolate flex place-items-center p-32 transition-all after:absolute after:inset-0 after:z-10 after:opacity-0 after:transition-all hover:after:opacity-100 lg:p-20"
                        title="{{ $client['title'] }}" href="{{ $client['url'] }}">
                        {!! Statamic::tag('svg')->params([
                            'src' => $client['logo'],
                            'class' =>
                                'relative z-20 grid place-items-center aspect-video w-[clamp(10rem,_1rem_+_40vmin,_30rem)]'
                        ]) !!}

                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</section>
