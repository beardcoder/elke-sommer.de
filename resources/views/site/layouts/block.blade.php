<!doctype html>
<html lang="en">

    <head>
        <title>#madewithtwill website</title>
        @vite('resources/css/app.css')
    </head>

    <body>
        <div>
            @yield('content')
        </div>
        @vite(['resources/js/app.js'])
        @stack('scripts')
    </body>

</html>
