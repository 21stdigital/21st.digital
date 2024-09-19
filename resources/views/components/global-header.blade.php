<header class="grid-cols-global-header grid w-full items-center justify-between p-52">
    <a href="/" title="21st digital - Deine digitale Spezialeinheit">
        {!! Statamic::tag('svg')->params([
            'src' => 'icons/21st-digital-logo',
            'class' => 'text w-[9.5rem] sm:w-[13.6rem] h-auto'
        ]) !!}
    </a>
    <nav class="justify-self-center">
        <ul class="text-button flex gap-32">
            <li>
                Case Studies
            </li>
            <li>
                Services
            </li>
            <li>
                Solutions
            </li>
            <li>
                Foundations
            </li>
        </ul>
    </nav>
    <x-cta url="https://calendly.com/21stdigital/meeting" target="_blank" rel="noopener noreferrer"
        label="Termin vereineinbaren" />
</header>
