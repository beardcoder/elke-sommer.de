<!doctype html>
<html class="h-full" lang="{{ app()->getLocale() }}">

    <head>
        {!! SEOMeta::generate() !!}
        {!! isset($jsonLd) ?? $jsonLd !!}

        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <link
            href="/apple-touch-icon.png"
            rel="apple-touch-icon"
            sizes="180x180"
        >
        <link
            href="/favicon-32x32.png"
            rel="icon"
            sizes="32x32"
            type="image/png"
        >
        <link
            href="/favicon-16x16.png"
            rel="icon"
            sizes="16x16"
            type="image/png"
        >
        <link href="/site.webmanifest" rel="manifest">
        <link
            color="#5bbad5"
            href="/safari-pinned-tab.svg"
            rel="mask-icon"
        >
        <meta content="#ffffff" name="msapplication-TileColor">
        <meta content="#ffffff" name="theme-color">
        <script
            async
            src="https://tracking.letsbenow.de/script.js"
            data-website-id="1c879ac3-bf33-44fb-9a5d-e84bca57c39d"
        ></script>
        @vite('resources/css/app.css')
    </head>

    <body class="h-full font-sans">

        {{ $slot }}

        @vite(['resources/js/app.js'])
        @stack('scripts')
    </body>

</html>
