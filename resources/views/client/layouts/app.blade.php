<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HAR Textile</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Sulfur - Responsive HTML5 Template">
    <meta name="author" content="Shahriyar Ahmed">

    <!-- Bootstrap CSS  -->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">

    <!-- Css3 Transitions Styles  -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- Lightbox CSS -->
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">

    <!-- Sulfur CSS Styles  -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS Style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


    <script src="{{ asset('js/modernizrr.js') }}"></script>


</head>

<body>
<main class="py-4">
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    @include('client.layouts.nav')
    @yield('content')
</main>


<script src="{{ ('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/count-to.js') }}"></script>
<script src="{{ asset('js/styleswitcher.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- Sulfur JS File -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

</body>
</html>
