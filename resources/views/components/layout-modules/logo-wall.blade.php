@props([
    'overline' => 'Unsere Kunden',
    'headline' => 'Vertrauen und Zusammenarbeit',
    'intro_text' =>
        'Diese Unternehmen vertrauen auf unsere Expertise, um ihre digitalen Visionen erfolgreich umzusetzen.',
    'clients' => [
        [
            'title' => 'Bayer',
            'url' => 'https://www.bayer.com',
            'logo' => 'icons/logos/bayer.svg'
        ],
        [
            'title' => 'Ensemble Resonanz',
            'url' => 'https://www.ensembleresonanz.com',
            'logo' => 'icons/logos/ensemble-resonanz.svg'
        ],
        [
            'title' => 'FIEGE Logistik',
            'url' => 'https://fiege.com',
            'logo' => 'icons/logos/fiege.svg'
        ],
        [
            'title' => 'Deutsche Telekom',
            'url' => 'https://telekom.com',
            'logo' => 'icons/logos/deutsche-telekom.svg'
        ],
        [
            'title' => 'HYROX',
            'url' => 'https://hyrox.com',
            'logo' => 'icons/logos/hyrox.svg'
        ],
        [
            'title' => 'Sportfive',
            'url' => 'https://sportfive.com',
            'logo' => 'icons/logos/sportfive.svg'
        ]
    ]
])

<section {{ $attributes->class(['layout-content']) }}>
    @if ($headline)
        <div class="grid-cols gap mb-20 grid sm:mb-52">
            <x-section-header class="col-span-full" :overline="$overline" :headline="$headline"
                :intro_text="$intro_text">
            </x-section-header>
        </div>
    @endif
    <ul class="-lg:grid-cols-6 gap grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
        @foreach ($clients as $client)
            @if ($client['logo'])
                <li>
                    <a class="bg-highlight-500 flex aspect-square place-items-center p-20"
                        title="{{ $client['title'] }}" href="{{ $client['url'] }}">
                        {!! Statamic::tag('svg')->params([
                            'src' => $client['logo'],
                            'class' => 'grid place-items-center aspect-video w-[clamp(10rem,_1rem_+_40vmin,_30rem)]'
                        ]) !!}

                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</section>
