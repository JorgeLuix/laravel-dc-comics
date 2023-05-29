<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Laravel')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->



    @vite('resources/js/app.js')

</head>

<body>
    <header>
    @include('partials.header')
</header>
<main class="">

    <div class="container">
        @yield('content')
    </div>
    <div class="">

    </div>

</main>
<footer>
    @include('partials.footer')
</footer>

</body>

</html>
