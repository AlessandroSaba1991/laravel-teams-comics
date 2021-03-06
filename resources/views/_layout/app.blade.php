<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DC Comics</title>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('custom-css')
    </head>
    <body>
        @include('partials.header')
        <main>
            @include('partials.jumbo')
            @yield('content')
        </main>
        @include('partials.footer')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
