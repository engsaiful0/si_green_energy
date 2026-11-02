<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('meta_description', 'SI Green Energy - Solar & Renewable Energy Solutions')">
    <meta name="keywords" content="@yield('meta_keywords', 'solar energy, renewable energy, green energy, solar panels')">
    <meta name="author" content="SI Green Energy">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title of Site -->
    <title>@yield('title', config('app.name', 'SI Green Energy'))</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/slaze/img/favicon-1.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/css/fontawesome.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/css/animate.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/font/flaticon_slaze.css') }}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/css/swiper-bundle.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/css/magnific-popup.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/slaze/sass/style.css') }}">

    @stack('styles')
</head>
<body>
    <!-- Preloader Start -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="spinner-bounce one"></div>
            <div class="spinner-bounce two"></div>
            <div class="spinner-bounce three"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Dark Light Start -->
    <div class="switch__tab">
        <span class="switch__tab-btn active light-mode-title">Light</span>
        <span class="mode__switch" onclick="darkLight()"><span></span></span>
        <span class="switch__tab-btn dark-mode-title">Dark</span>
    </div>
    <!-- Dark Light End -->

    <!-- Top Bar Component -->
    @include('components.frontend.topbar')

    <!-- Search Box Component -->
    @include('components.frontend.searchbox')

    <!-- Hamburger Sidebar Component -->
    @include('components.frontend.sidebar')

    <!-- Mobile Menu Component -->
    @include('components.frontend.mobile-menu')

    <!-- Header Component -->
    @include('components.frontend.header')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer Component -->
    @include('components.frontend.footer')

    <!-- Scroll Btn Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Scroll Btn End -->

    <!-- Main JS -->
    <script src="{{ asset('assets/slaze/js/jquery-3.7.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/slaze/js/bootstrap.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets/slaze/js/jquery.counterup.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/slaze/js/popper.min.js') }}"></script>
    <!-- Progressbar JS -->
    <script src="{{ asset('assets/slaze/js/progressbar.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/slaze/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper Bundle JS -->
    <script src="{{ asset('assets/slaze/js/swiper-bundle.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/slaze/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/slaze/js/jquery.waypoints.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/slaze/js/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>
