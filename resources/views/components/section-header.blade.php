@props([
    'meta_title' => null,
    'headline' => null,
    'intro_text' => null,
    'alignment' => 'left'
])



@if ($alignment === 'left')
  <header {{ $attributes->merge(['class' => 'col-span-full grid grid-cols']) }}>
    @if ($meta_title)
      <p class="col-span-full sm:col-span-8 text-h6">
        {{ $meta_title }}
      </p>
    @endif
    <h2 class="col-span-full sm:col-span-10 text-h1 text-highlight whitespace-pre-line">{{ $headline ?? $slot }} </h2>
    @if ($intro_text)
      <p class="col-span-full sm:col-span-8 text-c1 whitespace-pre-line mt-12">{{ $intro_text }}</p>
    @endif
  </header>
@else    
  <header {{ $attributes->merge(['class' => 'col-span-full grid grid-cols text-center'])}} >
    @if ($meta_title)
      <p class="col-span-full sm:col-span-8 sm:col-start-3 text-h6">
        {{ $meta_title }}
      </p>
    @endif
    <h2 class="col-span-full text-h1 text-highlight">
      {{ $headline ?? $slot }}
    </h2>
    @if ($intro_text)
      <p class="col-span-full sm:col-span-8 sm:col-start-3 text-c1 whitespace-pre-line mt-12">{{ $intro_text }}</p>
    @endif
</header>
@endif
  