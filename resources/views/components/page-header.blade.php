@cascade(['overline', 'page_title', 'intro_text'])
<header>
    <div class="layout-content my-220 grid-cols grid">
        <p
            class="text-h6 col-start-1 -col-end-1 mb-8 text-center sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
            {{ $overline }}
        </p>
        <h1
            class="text-h1 text-highlight col-start-1 -col-end-1 text-center sm:col-start-2 sm:-col-end-2">
            {{ $page_title ?? $title }}
        </h1>
        <p
            class="text-c1 col-start-1 -col-end-1 mt-32 sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
            {{ $intro_text }}
        </p>
        @if ($cta)
            <p
                class="text-c1 col-start-1 -col-end-1 mt-32 sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
                <x-button :label="$cta_label" :href="$cta" class="mt-32" appearance="highlight" />
            </p>
        @endif
    </div>
</header>
