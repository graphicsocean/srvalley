<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SR valley | @yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('ui/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="{{ asset('ui/css/default.css') }}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{ asset('ui/css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset('ui/css/plugin.css') }}" rel="stylesheet" type="text/css">
    {{-- custom css --}}
    <link href="{{ asset('ui/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    @livewireStyles
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <a  class="whats-app" href="https://wa.me/919437071887" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <!-- Preloader Ends -->
    @php
        $banquets = App\Models\Banquet::where('status', 1)->get();
    @endphp
    @livewire('frontend.header',['navigation'=>$banquets])
    @yield('content')
    @livewire('frontend.footer')


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->
    <!-- *Scripts* -->
    <script src="{{ asset('ui/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('ui/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ui/js/plugin.js') }}"></script>
    <script src="{{ asset('ui/js/main.js') }}"></script>
    <script src="{{ asset('ui/js/custom-nav.js') }}"></script>
    <script src="{{ asset('ui/js/custom-swiper1.js') }}"></script>
    <script src="{{ asset('ui/js/custom-singledate.js') }}"></script>
    @livewireScripts
</body>

</html>
