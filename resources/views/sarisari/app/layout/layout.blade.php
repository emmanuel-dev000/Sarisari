<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('subtitle') - {{ config('app.name') }}</title>

    @include('sarisari.app.component.css')

  </head>

  <body>

    @include('sarisari.app.component.navbar')

    @yield('banner')

    @yield('main-content')

    @yield('sub-content')

    @include('sarisari.app.component.footer')

    @include('sarisari.app.component.scripts')

  </body>

</html>
