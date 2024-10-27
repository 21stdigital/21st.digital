@cascade(['overline', 'headline', 'copy'])
<header class="page-layout">
    <div class="layout-content my-136 grid-cols grid">
        @if ($overline)
            <p
                class="text-h6 col-start-1 -col-end-1 text-center sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
                {{ $overline }}
            </p>
        @endif
        <h1
            class="text-hero text-highlight col-start-1 -col-end-1 text-balance text-center sm:col-start-2 sm:-col-end-2 lg:col-start-1 lg:-col-end-1">
            {{ $headline }}
        </h1>
        <p
            class="text-c1 col-start-1 -col-end-1 mt-32 text-center sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
            {{ $copy }}
        </p>
    </div>
</header>
