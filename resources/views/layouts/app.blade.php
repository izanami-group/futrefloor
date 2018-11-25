<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Futrefloor</title>

        <!-- Fonts -->
        <link href="https://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        @yield('styles')
    </head>
    <body>
        <div class="container">@yield('content')</div>
    </body>
</html>
