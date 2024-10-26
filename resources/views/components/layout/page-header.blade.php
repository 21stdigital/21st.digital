@cascade(['overline', 'headline', 'copy'])
<header class="page-layout">
    <div class="layout-content my-220 grid-cols grid">
        <p
            class="text-h6 col-start-1 -col-end-1 mb-8 text-center sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
            {{ $overline }}
        </p>
        <h1
            class="text-hero text-highlight col-start-1 -col-end-1 text-balance text-center sm:col-start-2 sm:-col-end-2 lg:col-start-1 lg:-col-end-1">
            {{ $headline ?? $title }}
        </h1>
        <p
            class="text-c1 col-start-1 -col-end-1 mt-32 text-center sm:col-start-2 sm:-col-end-2 xl:col-start-4 xl:-col-end-4">
            {{ $copy }}
        </p>
    </div>
</header>
