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

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('layouts/sixteen-clothing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('layouts/sixteen-clothing/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/sixteen-clothing/assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/sixteen-clothing/assets/css/owl.css') }}">

  </head>

  <body>

    @include('sarisari.app.component.navbar')

    @yield('banner')

    @yield('main-content')

    @yield('sub-content')

    @include('sarisari.app.component.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('layouts/sixteen-clothing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('layouts/sixteen-clothing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('layouts/sixteen-clothing/assets/js/custom.js') }}"></script>
    <script src="{{ asset('layouts/sixteen-clothing/assets/js/owl.js') }}"></script>
    <script src="{{ asset('layouts/sixteen-clothing/assets/js/slick.js') }}"></script>
    <script src="{{ asset('layouts/sixteen-clothing/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('layouts/sixteen-clothing/assets/js/accordions.js') }}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
