<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noodp"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i%7CCrimson+Text:400,400i,700,700i'
          rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' id='bootstrap-css' href="{{ asset('assets/css/bootstrap/css/bootstrap.css') }}"
          type='text/css' media='all'/>
    <!-- Font Awesome Icons CSS -->
    <link rel='stylesheet' id='font-awesome' href="{{ asset('assets/css/fontawesome/css/all.min.css') }}"
          type='text/css' media='all'/>
    <!-- Owl Carousel -->
    <link rel='stylesheet' id='owl-carousel' href="{{ asset('assets/js/owl-carousel/owl.carousel.css') }}"
          type='text/css' media='all'/>
    <!-- Main CSS File -->
    <link rel='stylesheet' id='lawyers-style-css' href="{{ asset('assets/css/style.css') }}" type='text/css' media='all'/>
    <!-- favicons -->
    <link rel="icon" href="{{ asset('assets/images/icons/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" href="{{ asset('assets/images/icons/favicon-192x192.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/icons/favicon-180x180.png') }}"/>

    @stack('styles')
</head>
<body>
    <div class="menu-mask"></div>

    @include('partials.mobile-header')

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @stack('scripts')

    <div class="scrollup"> <a class="scrolltop" href="#"> <i class="fa fa-chevron-up"></i> </a></div>
    <!-- JS -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/css/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/css/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/easing.js') }}"></script>
    <script src="{{ asset('assets/js/fitvids.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- MAIN JS -->
    <script src="{{ asset('assets/js/init.js') }}"></script>
    <!-- CONTAT FORM JS -->
    <script src="{{ asset('assets/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('assets/js/contactform.js') }}"></script>

</body>
</html>
