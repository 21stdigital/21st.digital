@props(['image', 'text', 'cta', 'logo'])
<article class="bg-gradient-dark-900 border-highlight-3-600 border p-32">

    {!! Statamic::tag('svg')->params([
        'src' => '21st-digital-logo',
        'class' => 'w-[12rem] mb-20'
    ]) !!}

    <h3 class="text-h5 mb-12">
        Von der Vision zur Konversion
    </h3>
    <p class="text-c1">
        Entdecke, wie wir SPORTFIVE dabei unterstützt haben, seine digitale Präsenz neu zu gestalten
        und eine Website zu schaffen, die nicht nur informiert, sondern aktiv zur Kundengewinnung
        beiträgt.
    </p>
    <x-cta url="/" label="Mehr erfahren" class="mt-20" />
</article>
