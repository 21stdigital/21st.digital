@props(['context'])
<!DOCTYPE html>
<html lang="{{ $site->short_locale }}" class="dark scroll-smooth antialiased">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover" />
    <title>{{ $title }}</title>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="21st.digital" />
    <link rel="manifest" href="/site.webmanifest" />
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @vite(['resources/js/site.ts', 'resources/css/site.css'])
</head>

<body class="bg text">
    <x-layout.header />
    <main>
        <x-layout.hero />

        {{ $slot }}

    </main>
    <x-layout.footer />

    @stack('tail_scripts')
</body>

</html>
