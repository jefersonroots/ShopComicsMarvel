<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Catalogo Comics - @yield('title')</title>
        <meta name="description" content="Catalogo Comics Marvel API" />
        <meta name="autor" content="" />
        <meta name="keyword" content="laravel, blade, api, marvel"/>
        <meta name="viewport"content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('nav.css') }}">
        @yield('css-view')
    </head>
    <body>
        @include('layouts.navbar')
        @section('sidebar')

        @show
        @yield('content')
        @yield('js-view')

         <style>

    </style>
</body>
</html>
