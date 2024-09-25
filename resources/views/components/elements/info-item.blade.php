<section class="grid-cols-info-item grid gap-20">
    <header>
        <x-utilities.svg :svg="$icon" class="h-auto w-[4rem] fill-current" />
    </header>
    <div class="space-y-4 sm:space-y-8">
        <h3 class="text-h6">
            {{ $headline }}
        </h3>
        <x-text :text="$text" />
    </div>
</section>
