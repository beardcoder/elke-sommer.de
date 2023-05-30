<!doctype html>
<html lang="de" class="h-full">

<head>
  <title>{{ $item->title }}</title>
  @vite('resources/css/app.css')
</head>

<body class="h-full">
  @yield('content')

  @vite(['resources/js/app.js'])
</body>

</html>
