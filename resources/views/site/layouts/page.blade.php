<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">

<head>
  <title>{{ $item->title }}</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

  @yield('meta')

  @vite('resources/css/app.css')
</head>

<body class="h-full">
  <header class="absolute top-0 z-20 w-full p-4">
    <div class="container mx-auto flex h-16 justify-between">
      <a rel="noopener noreferrer" href="{{ route('frontend.home') }}" aria-label="Zur Startseite" title="Zur Startseite"
        class="flex items-center p-2">
        <x-logo />
      </a>
      <x-menu />
    </div>
  </header>
  @yield('content')

  <x-footer />
  @vite(['resources/js/app.js'])
</body>

</html>
