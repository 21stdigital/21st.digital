<div class="gap grid grid-cols-6">
    <ul class="col-start-2 -col-end-1 flex flex-col gap-52">
        @foreach ($facts as $fact)
            <li class="flex flex-col">
                <span class="text-h2">{{ $fact['fact'] }}</span>
                <span class="text-c1">{{ $fact['description'] }}</span>
            </li>
        @endforeach
    </ul>
</div>
