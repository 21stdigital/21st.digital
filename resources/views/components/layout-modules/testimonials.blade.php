@php
    /** @var $viewData App\Data\LayoutModules\TestimionialsData */
@endphp
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
    @if ($viewData->headline)
        <div class="grid-cols gap mb-20 grid sm:mb-52">
            <x-section-header class="col-span-full" :overline="$viewData->overline" :headline="$viewData->headline"
                :intro_text="$viewData->intro_text">
            </x-section-header>
        </div>
    @endif
    <ul class="gap grid grid-cols-1 md:grid-cols-2">

        @foreach ($viewData->testimonials as $testimonial)
            <li class="bg-gradient-dark-900 border-highlight-3-600 h-full border p-32">
                <blockquote class="relative isolate flex h-full flex-col justify-between">
                    <p class="text-c2 italic">
                        {{ $testimonial->quote }}
                    </p>
                    <footer
                        class="mt-32 flex gap-12 max-sm:flex-col sm:items-start sm:justify-between sm:gap-32">
                        <div class="max-sm:order-2">
                            <p class="text-h6 row-start-1">
                                {{ $testimonial->author_name }}
                            </p>
                            <p class="text-c1 col-start-1 row-start-2 mt-4">
                                {{ $testimonial->author_job_title }}
                            </p>
                        </div>

                        @if ($testimonial->client_logo)
                            @if ($testimonial->client_url)
                                <a href="{{ $testimonial->client_url }}"
                                    class="w-[12rem] sm:flex sm:w-[16.6rem] sm:justify-end">

                                    {!! Statamic::tag('svg')->params([
                                        'src' => $testimonial->client_logo,
                                        'class' => 'max-h-[4.2rem] max-w-[12rem] md:max-h-[5.8rem] md:max-w-[16.6rem]'
                                    ]) !!}
                                </a>
                            @else
                                <div class="w-[12rem] sm:flex sm:w-[16.6rem] sm:justify-end">

                                    {!! Statamic::tag('svg')->params([
                                        'src' => $testimonial->client_logo,
                                        'class' => 'max-h-[4.2rem] max-w-[12rem] md:max-h-[5.8rem] md:max-w-[16.6rem]'
                                    ]) !!}

                                </div>
                            @endif
                        @endif
                        <x-utilities.svg svg="quote-gradient"
                            class="absolute -left-20 -top-8 -z-10 h-auto w-[5.9rem]" />
                    </footer>
                </blockquote>
            </li>
        @endforeach
    </ul>
</section>
