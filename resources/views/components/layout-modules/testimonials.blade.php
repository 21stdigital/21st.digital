@props([
    'overline' => null,
    'headline' => null,
    'intro_text' => null,
    'testimonials' => [
        [
            'quote' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'author_name' => 'John Doe',
            'author_job_title' => 'CEO',
            'client_logo' => 'icons/logos/avacon'
        ],
        [
            'quote' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'author_name' => 'Jane Doe',
            'author_job_title' => 'CTO',
            'client_logo' => 'icons/logos/deutsche-telekom'
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
    <ul class="gap grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6">

        @foreach ($testimonials as $testimonial)
            <li class="">
                <blockquote class="text-h5 relative col-span-10 col-start-2">
                    {{ $quote }}
                    <footer
                        class="mt-32 flex gap-12 max-sm:flex-col sm:items-start sm:justify-between sm:gap-32">
                        <div class="max-sm:order-2">
                            <p class="text-h6 row-start-1">
                                {{ $author_name }}
                            </p>
                            <p class="text-c1 col-start-1 row-start-2 mt-4">
                                {{ $author_job_title }}
                            </p>
                        </div>
                        @if ($client_logo)
                            @if ($client_url)
                                <a href="{{ $client_url }}"
                                    class="w-[12rem] sm:flex sm:justify-end md:w-[16.6rem]">
                                    <x-utilities.svg :svg="$client_logo"
                                        class="max-h-[4.2rem] max-w-[12rem] md:max-h-[5.8rem] md:max-w-[16.6rem]" />
                                </a>
                            @else
                                <div class="w-[12rem] sm:flex sm:justify-end md:w-[16.6rem]">
                                    <x-utilities.svg :svg="$client_logo"
                                        class="max-h-[4.2rem] max-w-[12rem] md:max-h-[5.8rem] md:max-w-[16.6rem]" />
                                </div>
                            @endif
                        @endif
                        <x-utilities.svg svg="quote-gradient"
                            class="absolute -left-20 -top-12 -z-10 h-auto w-[10rem] sm:-left-32 sm:-top-20" />
                    </footer>
                </blockquote>
            </li>
        @endforeach
    </ul>
</section>
