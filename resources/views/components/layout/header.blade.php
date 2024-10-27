<header class="gap flex w-full items-center justify-between p-52">
    <a href="/" title="21st digital - Deine digitale Spezialeinheit">
        {!! Statamic::tag('svg')->params([
            'src' => 'icons/21st-digital-logo',
            'class' => 'text w-[9.5rem] sm:w-[13.6rem] h-auto'
        ]) !!}
    </a>
    <nav class="hidden justify-self-center lg:block">
        <ul class="text-button flex gap-32">
            <li>
                Case Studies
            </li>
            <li>
                Services
            </li>
        </ul>
    </nav>
    <x-elements.cta url="https://calendly.com/21stdigital/meeting" target="_blank"
        rel="noopener noreferrer" label="Termin vereinbaren" />
</header>
