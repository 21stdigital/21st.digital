<section class="grid-cols-info-item grid gap-20">
    <header>
        <s:svg :src="$icon" class="h-auto w-[4rem]" />
    </header>
    <div class="space-y-4 sm:space-y-8">
        <h3 class="text-h6">
            {{ $headline }}
        </h3>
        <x-text :text="$text" />
    </div>
</section>
