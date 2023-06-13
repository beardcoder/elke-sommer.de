<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

  @yield('meta')

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  @vite('resources/css/app.css')
</head>

<body class="h-full font-sans">

  @yield('content')

  @vite(['resources/js/app.js'])

  @production
    <script async src="https://offen.letsbenow.de/script.js" data-account-id="2929a821-254a-45c8-8582-97af688ca90f">
    </script>
  @endproduction
</body>

</html>
