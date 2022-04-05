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


<!-- Start Client Section -->
    <div id="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-box">
                        <ul class="client-list">
                            <li><a><img src="{{ asset('images/clients/2000px-BSCI-Logo.svg_-300x77.png') }}"
                                        class="img-responsive"
                                        alt="Clients Logo"></a></li>
                            <li><a style="padding: 7px 0px;"><img src="{{ asset('images/clients/blog-01.jpg') }}"
                                                                  class="img-responsive"
                                                                  alt="Clients Logo"></a></li>
                            <li><a style="padding: 20px 0px;"><img
                                        src="{{ asset('images/clients/Bureau-Veritas-Logo-300x108.jpg') }}"
                                        class="img-responsive"
                                        alt="Clients Logo"></a></li>
                            <li><a style="padding: 7px 0px;"><img
                                        src="{{ asset('images/clients/Oekotex0036-300x150.jpg') }}"
                                        class="img-responsive"
                                        alt="Clients Logo"></a></li>
                            <li><a style="padding: 3px 0px;"><img
                                        src="{{ asset('images/clients/Oeko-tex-logo-2017-300x167.jpg') }}"
                                        class="img-responsive"
                                        alt="Clients Logo"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Client Section -->


    <!-- Start Footer Section -->
    <section id="footer-section" class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Office Address</span>
                        </h3>
                    </div>

                    <div class="footer-address">
                        <ul>
                            <li class="footer-contact"><i class="fa fa-home"></i>
                                KM JARANWALA ROAD
                                KHURRIANWALA FAISALABAD – PUNJAB
                            </li>
                        </ul>
                    </div>
                </div><!--/.col-md-3 -->


                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Contact Info</span>
                        </h3>
                    </div>

                    <div class="footer-address">
{{--                        <div class="media">--}}
                            <ul>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a
                                        href="#">info@hartextile.com</a>
                                </li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+92 41 24 24 111 12</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><a href="https://hartextile.com/"
                                                                                         target="_blank">www.hartextile.com/</a>
                                </li>
                            </ul>
                            {{--                            <div class="media-left">--}}
                            {{--                                <i class="fa fa-twitter fa-2x media-object"></i>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="media-body">--}}
                            {{--                                <h4 class="media-heading">About 15 days ago</h4>--}}
                            {{--                                <p>Finally #tutsplus start a tutorial on A Beginner’s Guide to Using #joomla . Check it--}}
                            {{--                                    out here http://t.co/i6S4zeW8Z0</p>--}}
                            {{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div><!--/.col-md-3 -->

                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Stay With us</span>
                        </h3>
                    </div>
                    <div class="subscription">
                        <p>Submit Your Email Address for Updates.</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail" id="name" required
                                   data-validation-required-message="Please enter your name.">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>FLICKR STREAM</span>
                        </h3>
                    </div>

                    <div class="flickr-widget">
                        <ul class="flickr-list">
                            <li>
                                <a href="{{ asset('images/portfolio/img1.jpg') }}" data-lightbox="picture-1">
                                    <img src="{{ asset('images/portfolio/img1.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img2.jpg') }}" data-lightbox="picture-2">
                                    <img src="{{ asset('images/portfolio/img2.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img3.jpg') }}" data-lightbox="picture-3">
                                    <img src="{{ asset('images/portfolio/img3.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img4.jpg') }}" data-lightbox="picture-4">
                                    <img src="{{ asset('images/portfolio/img4.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img5.jpg') }}" data-lightbox="picture-5">
                                    <img src="{{ asset('images/portfolio/img5.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img6.jpg') }}" data-lightbox="picture-6">
                                    <img src="{{ asset('images/portfolio/img6.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img1.jpg') }}" data-lightbox="picture-7">
                                    <img src="{{ asset('images/portfolio/img1.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('images/portfolio/img2.jpg') }}" data-lightbox="picture-8">
                                    <img src="{{ asset('images/portfolio/img2.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--/.col-md-3 -->
            </div><!--/.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Footer Section -->


    <!-- Start CCopyright Section -->
    <div id="copyright-section" class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="copyright">
                        Copyright © 2022. All Rights Reserved.
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="copyright-menu pull-right">
                        <ul>
{{--                            <li><a href="#" class="active">Home</a></li>--}}
{{--                            <li><a href="#">Sample Site</a></li>--}}
{{--                            <li><a href="#">getbootstrap.com</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div><!--/.row -->
        </div><!-- /.container -->
    </div>
    <!-- End CCopyright Section -->


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
