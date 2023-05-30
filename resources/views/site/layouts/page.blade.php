<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">

<head>
  <title>{{ $item->title }}</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  @vite('resources/css/app.css')
  @yield('meta')
</head>

<body class="h-full">
  @yield('content')

  @vite(['resources/js/app.js'])
</body>

</html>
