<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    </head>
    <body>
        
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
