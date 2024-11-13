<section {{ $attributes->merge(['class' => 'bg-highlight-700 full-width py-52 sm:py-84']) }}>
    <div class="layout-content grid-cols gap-x grid text-center">
        <h2 class="text-h1 col-span-full text-balance sm:max-xl:col-span-10 sm:max-xl:col-start-2">
            {{ $headline }}
        </h2>
        <p class="text-c1 col-span-full mt-20 text-balance sm:col-span-8 sm:col-start-3">
            {{ $text }}
        </p>
    </div>
    <article class="layout-content grid-cols gap-x mt-84 grid items-start sm:items-center"
        aria-labelledby="contact-name" role="region">
        <div class="col-start-1 col-end-5 sm:col-start-3 sm:col-end-6 lg:col-end-5">
            <x-elements.image :image="$expert->image"
                class="bg-dark-600 aspect-square w-full rounded-full" />
        </div>
        <div
            class="text-c1 gap col-start-5 -col-end-1 flex flex-wrap items-center justify-between gap-y-20 sm:col-start-6 sm:col-end-11 lg:col-start-5">
            <div class="">
                <h3 id="contact-name" class="text-h6">
                    {{ $expert->title }}
                </h3>
                <span class="-mt-4 block lg:-mt-8">
                    {{ $expert->job_title }}
                </span>
                <address class="not-italic">
                    <a href="mailto:{!! Statamic::modify($expert->email)->obfuscate() !!}">
                        {!! Statamic::modify($expert->email)->obfuscate() !!}
                    </a>
                </address>
            </div>

            <div class="col-start-8 col-end-11">
                <x-layout.modal label="Termin vereinbaren">

                    <x-utilities.calendly :calendly_url="$expert->calendly_url" />

                </x-layout.modal>
            </div>
        </div>
    </article>
</section>
