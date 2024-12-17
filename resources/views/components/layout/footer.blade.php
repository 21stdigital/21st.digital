@aware(['enable_cta_box'])
<footer class="mt:52 sm:mt-136">
    @if ($enable_cta_box->value())
        <x-layout.cta-box class="mt-84" />
    @endif
    <div class="border-highlight-3-600 page-layout border-b border-t">
        <div class="layout-content sm:py-84 grid grid-cols-1 gap-y-52 py-32 xl:grid-cols-3">
            <a href="/" title="21st digital - Deine digitale Spezialeinheit">
                <s:svg src="icons/21st-digital-logo" class="text h-auto w-[9.5rem] sm:w-[13.6rem]" />
            </a>
            <nav class="xl:col-span-2">
                <ul class="gap grid grid-cols-2 sm:grid-cols-4">
                    @foreach (Statamic::tag('nav:footer_primary') as $item)
                        <li class="flex flex-col gap-12">
                            <a href="{{ $item['url'] }}" title="{{ $item['title'] }}"
                                class="text-c2 font-semibold">{{ $item['title'] }}</a>
                            @if ($item['children'])
                                <ul class="flex flex-col gap-8">
                                    @foreach ($item['children'] as $child)
                                        <a href="{{ $child['url'] }}" title="{{ $child['title'] }}"
                                            class="text-c2">{{ $child['title'] }}</a>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <div class="page-layout">
        <nav class="layout-content flex justify-between py-32">
            <ul class="text-c2 flex items-center gap-12">
                @foreach (Statamic::tag('nav:footer_secondary') as $item)
                    <li class="flex flex-col gap-12">
                        <a href="{{ $item['url'] }}" title="{{ $item['title'] }}"
                            class="text-c2">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="text-c2 flex items-center gap-12">
                @foreach (Statamic::tag('nav:footer_tertiary') as $item)
                    <li class="flex flex-col gap-12">
                        <a href="{{ $item['url'] }}" title="{{ $item['title'] }}" class="text-c2">
                            <s:svg :src="$item['icon']" class="h-auto w-32 fill-current" />
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

    </div>
</footer>
