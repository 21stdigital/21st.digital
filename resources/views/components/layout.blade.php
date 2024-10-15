@props(['context'])
<!DOCTYPE html>
<html lang="{{ $site->short_locale }}" class="dark scroll-smooth antialiased">

<head>
    @include('partials._head')
</head>

<body class="bg text">
    <x-layout.header />
    <main>
        <x-layout.page-header />

        {{ $slot }}

    </main>
    <x-layout.footer />

    @include('partials._tail')
</body>

</html>
