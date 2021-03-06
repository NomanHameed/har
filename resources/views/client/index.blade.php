@extends('client.layouts.app')

@section('content')
    <!-- Start Header Section -->
    <div class="banner">
        <div class="overlay">
            <div class="container">
                <div class="intro-text">
                    <h1>Welcome To <span>HAR Textile Mills Limited</span></h1>
                    <p>H.A.R. Textile Mills is one of Pakistan’s <br>  largest home textile production units.</p>
                    <a href="#about-section" class="page-scroll btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="about-img">
                        <img src="{{ asset('images/corporate1.jpg') }}" class="img-responsive" alt="About images">
                        <div class="head-text">
                            <p>I want to create a legacy for generations to come in the field of Textiles.</p>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-text">
                        <p>H.A.R. Textile Mills is one of Pakistan’s largest home textile production units.
                            It is integrated vertically with all segments of the textile industry, from Spinning to Stitching.
                            The group’s annual turnover is around 20 million $. Our production unit spread across more than 43 hectares of land.
                            H.A.R. Textile Mills gives some 1,000 families employment opportunities.
                            It possesses a diversified portfolio of products and markets.
                        </p>
                        <p>In the textile industry, H.A.R. Textile Mills holds a special position in that it provides its customers with
                            the largest variety and product combination under one roof.
                            The production processes are certified according to ISO 9001:2000 standards. </p>
                    </div>

                    <div class="about-list">
                        <h4>Mission</h4>
                        <p>H.A.R Textile was, is, and continues to be, a family business focused on its employees ‘ commitment, determination and devotion,
                            leveraging existing resources in its area and concentrating on customer service excellence.</p>
                        <p>H.A.R Textile is committed to creativity and innovation, pursuing a sustainable regeneration of its resources.</p>
                        <p>H.A.R Textile is, and needs to be, more conscious and more knowledgeable at every move responsible to his community and its employees.</p>
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit--}}
{{--                                voluptatem accusantium.--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing--}}
{{--                                adipiscing.--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit--}}
{{--                                voluptatem accusan.--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing--}}
{{--                                elit.--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>

                </div>


            </div>
        </div>
    </section>


    <!-- Start Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow zoomIn" data-wow-duration="2s" data-wow-delay="300ms">
                    <p>As a responsible employer, H.A.R. Textile Mills is committed to take care of it’s employees more than anything.
                        Inside the mill, we are taking serious precautions and safety measures to prevent the spread of Coronavirus and to provide a safe working environment to our workforce.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->




    <!-- Start Team Member Section -->
    <section id="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Production Facilities</h2>
{{--                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                    <div class="team-member">
                        <img src="{{ asset('images/spinning-img.jpg') }}" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>Spinning</h4>
                            <p>HAR Spinning</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-link"></i> Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                    <div class="team-member">
                        <img src="{{ asset('images/stitching-img.png') }}" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>Weaving</h4>
                            <p>HAR Weaving</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-link"></i> Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                    <div class="team-member">
                        <img src="{{ asset('images/processing-img.png') }}" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>Processing</h4>
                            <p>HAR Processing</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-link"></i> Read More</a></li>
{{--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">
                    <div class="team-member">
                        <img src="{{ asset('images/weaving-IMG.png') }}" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>Stitching</h4>
                            <p>HAR Stitching</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-link"></i> Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div>
        </div>
    </section>
    <!-- End Team Member Section -->


    <!-- Start Portfolio Section -->
    <section id="portfolio" class="portfolio-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Products</h2>
                        <p>List of Products We Deal</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!-- Start Portfolio items -->
                    <ul id="portfolio-list">
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                            <div class="portfolio-item">
                                <img src="{{ asset('images/portfolio/Fabric.jpg') }}" class="img-responsive" alt=""/>
                                <div class="portfolio-caption">
                                    <h4>Fabric</h4>
                                    <p>We can produce fabric from 1016mm to 3200mm width in 100% Cotton.</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i
                                            class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                            <div class="portfolio-item">
                                <img src="{{ asset('images/portfolio/healthcare.jpg') }}" class="img-responsive" alt=""/>
                                <div class="portfolio-caption">
                                    <h4>Health Care</h4>
                                    <p>We are specialized in producing fully embellished & customized Bed Linen articles for retail
                                        & mail order catalogue customers.we deals in Printed, </p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i
                                            class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                            <div class="portfolio-item">
                                <img src="{{ asset('images/portfolio/hometex.jpg') }}" class="img-responsive" alt=""/>
                                <div class="portfolio-caption">
                                    <h4>Home Textile</h4>
                                    <p>We are specialized in producing fully embellished & customized Bed Linen articles.</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i
                                            class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">
                            <div class="portfolio-item">
                                <img src="{{ asset('images/portfolio/institute-linen-img.jpg') }}" class="img-responsive" alt=""/>
                                <div class="portfolio-caption">
                                    <h4>Hospitality</h4>
                                    <p>We are specialized in producing fully embellished & customized Bed Linen articles for retail & mail order catalogue customers.we deals in Printed, </p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i
                                            class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1500ms">
                            <div class="portfolio-item">
                                <img src="{{ asset('images/portfolio/towel.jpg') }}" class="img-responsive" alt=""/>
                                <div class="portfolio-caption">
                                    <h4>Towels</h4>
                                    <p>We are specialized in producing fully embellished & customized Bed Linen articles for retail & mail order catalogue customers.we deals in Printed, </p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i
                                            class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
{{--                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1800ms">--}}
{{--                            <div class="portfolio-item">--}}
{{--                                <img src="{{ asset('images/portfolio/img6.jpg') }}" class="img-responsive" alt=""/>--}}
{{--                                <div class="portfolio-caption">--}}
{{--                                    <h4>Portfolio Title</h4>--}}
{{--                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis--}}
{{--                                        praesentium</p>--}}
{{--                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i--}}
{{--                                            class="fa fa-magic"></i></a>--}}
{{--                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}


                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                            <h2>Corporate Profile</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <iframe width="100%" height="647" src="https://www.youtube.com/embed/xgIuSXMbZAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <x-embed url="https://youtu.be/Y6W51ED83PU" aspect-ratio="1080:900" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- Start Service Section -->
{{--    <section id="service-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">--}}
{{--                        <h2>Our Services</h2>--}}
{{--                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-skyatlas"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-magic"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-gift"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-diamond"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-wordpress"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-forumbee"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-bicycle"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="services-post">--}}
{{--                        <a href="#"><i class="fa fa-foursquare"></i></a>--}}
{{--                        <h2>RESPONSIVE DESIGN</h2>--}}
{{--                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Start Service Section -->



    <!-- Start Testimonial Section -->


{{--    <section id="testimonial-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="testimonial-wrapper">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque--}}
{{--                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi--}}
{{--                                architecto beatae vitae dicta sunt explicabo. </p>--}}
{{--                            <img src="{{ asset('images/team/team-1.jpg') }}" alt="Testimonial images">--}}
{{--                            <h5>John Doe</h5>--}}
{{--                            <div class="desgnation">CEO, ThemeBean</div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque--}}
{{--                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi--}}
{{--                                architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                            <img src="{{ asset('images/team/team-2.jpg') }}" alt="Testimonial images">--}}
{{--                            <h5>John Doe</h5>--}}
{{--                            <div class="desgnation">CEO, ThemeBean</div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque--}}
{{--                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi--}}
{{--                                architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                            <img src="{{ asset('images/team/team-3.jpg') }}" alt="Testimonial images">--}}
{{--                            <h5>John Doe</h5>--}}
{{--                            <div class="desgnation">CEO, ThemeBean</div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque--}}
{{--                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi--}}
{{--                                architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                            <img src="{{ asset('images/team/team-4.jpg') }}" alt="Testimonial images">--}}
{{--                            <h5>John Doe</h5>--}}
{{--                            <div class="desgnation">CEO, ThemeBean</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Testimonial Section -->


@endsection

