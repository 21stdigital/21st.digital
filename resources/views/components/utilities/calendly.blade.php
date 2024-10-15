@props(['calendly_url'])

<div
    class="bg-light h-screen max-h-[100rem] w-screen max-w-[80rem] overflow-y-auto sm:h-[80vh] sm:w-[80vw]">
    <!-- Calendly inline widget begin -->
    <div class="calendly-inline-widget" data-url="{{ $calendly_url }}"
        style="min-width:320px;height:80vh;"></div>
    <!-- Calendly inline widget end -->
</div>
@pushOnce('tail_scripts')
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async>
    </script>
@endPushOnce
