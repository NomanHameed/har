<header class="clearfix">

    @include('client.layouts.top-bar')

    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <a  href="index.html">
{{--                    HAR Textile--}}
                    <img class="navbar-brand" src="{{ asset('images/logo.png') }}" width="30" style="height: 100px;" alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse">

                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="{{ (strpos(Route::currentRouteName(), 'home-page') === 0) ? 'active' : '' }}" href="{{ route('home-page') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}" class="{{ (strpos(Route::currentRouteName(), 'about-us') === 0) ? 'active' : '' }}"
                        >About Us</a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="#">Service</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Portfolio</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Blog</a>--}}
{{--                        <ul class="dropdown">--}}
{{--                            <li>--}}
{{--                                <a href="blog-item.html">Item Page</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a class="{{ (strpos(Route::currentRouteName(), 'contact-us') === 0) ? 'active' : '' }}"
                           href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
    </div>
    <!-- End Header Logo & Naviagtion -->

</header>
