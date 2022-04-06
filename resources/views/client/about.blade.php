@extends('client.layouts.app')

@section('content')

    <!-- Start Header Section -->
    <div class="page-header" style="margin-top: 1px !important;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-img">
                        <img src="{{ asset('images/ab.jpg') }}" class="img-responsive" alt="About images">
                        <div class="head-text">
                            <p>I want to create a legacy for generations to come in the field of Textiles.</p>
                            <span>CEO, Haji Abdul Jabbar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-text">
                        <p>
                        H.A.R. Textile Mills is one of Pakistan’s largest home textile production units. It is integrated vertically with all segments of the textile industry, from Spinning to Stitching. The group’s annual turnover is around 20 million $. Our production unit spread across more than 43 hectares of land. H.A.R. Textile Mills gives some 1,000 families employment opportunities. It possesses a diversified portfolio of products and markets.
                        </p>
                        <p>
                        In the textile industry, H.A.R. Textile Mills holds a special position in that it provides its customers with the largest variety and product combination under one roof. The production processes are certified according to ISO 9001:2000 standards.
                        </p>
                        <p>
                        H.A.R. Textile Mills is a high-quality company with a well-defined quality policy. Our philosophy is to create a single channel for our valued partners to meet diverse and high-class needs. We are highly flexible when it comes to meeting our clients ‘ dynamic needs.
                        </p>
                        <p>
                        We have a group of truly dedicated professionals to deliver highly valued goods that rely on their areas of specialties. We believe in partnership with our customers as well as our employees who proved to be a key to keeping our output at the highest level of excellence.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="mt-2 p-3">
                        <p>
                            H.A.R. Textile Mills has made its presence felt at every corner of the global market over the years. We at H.A.R. Textile Mills believe in trust-based business partnerships and a long-term partnership. Customer satisfaction is our top priority.We constantly strive to create new and better goods and ensure our consumers have a competitive edge. The outcome of this approach is our customer support programs and the product quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start About-section 2 -->
{{--    <section id="about-section-2">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="about-text">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.</p>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus.</p>--}}
{{--                    </div>--}}

{{--                    <div class="skill-shortcode">--}}

{{--                        <!-- Progress Bar -->--}}
{{--                        <div class="skill">--}}
{{--                            <p>Web Design</p>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar" role="progressbar"  data-percentage="60">--}}
{{--                                    <span class="progress-bar-span" >60%</span>--}}
{{--                                    <span class="sr-only">60% Complete</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Progress Bar -->--}}
{{--                        <div class="skill">--}}
{{--                            <p>HTML & CSS</p>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar" role="progressbar"  data-percentage="95">--}}
{{--                                    <span class="progress-bar-span" >95%</span>--}}
{{--                                    <span class="sr-only">95% Complete</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Progress Bar -->--}}
{{--                        <div class="skill">--}}
{{--                            <p>Wordpress</p>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar" role="progressbar"  data-percentage="80">--}}
{{--                                    <span class="progress-bar-span" >80%</span>--}}
{{--                                    <span class="sr-only">80% Complete</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Progress Bar -->--}}
{{--                        <div class="skill">--}}
{{--                            <p>Joomla</p>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar" role="progressbar"  data-percentage="100">--}}
{{--                                    <span class="progress-bar-span" >100%</span>--}}
{{--                                    <span class="sr-only">100% Complete</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Progress Bar -->--}}
{{--                        <div class="skill">--}}
{{--                            <p>Extension</p>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar" role="progressbar"  data-percentage="70">--}}
{{--                                    <span class="progress-bar-span" >70%</span>--}}
{{--                                    <span class="sr-only">70% Complete</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">--}}

{{--                    <!-- Start Accordion Section -->--}}
{{--                    <div class="panel-group" id="accordion">--}}

{{--                        <!-- Start Accordion 1 -->--}}
{{--                        <div class="panel panel-default">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h4 class="panel-title">--}}
{{--                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">--}}
{{--                                        <i class="fa fa-angle-left control-icon"></i> Who We are--}}
{{--                                    </a>--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-1" class="panel-collapse collapse in">--}}
{{--                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue dolor, facilisis id fringilla ut, tempus vitae nibh.</div>								</div>--}}
{{--                        </div>--}}
{{--                        <!-- End Accordion 1 -->--}}

{{--                        <!-- Start Accordion 2 -->--}}
{{--                        <div class="panel panel-default">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h4 class="panel-title">--}}
{{--                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">--}}
{{--                                        <i class="fa fa-angle-left control-icon"></i> What we do--}}
{{--                                    </a>--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-2" class="panel-collapse collapse">--}}
{{--                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue dolor, facilisis id fringilla ut, tempus vitae nibh.</div>								</div>--}}
{{--                        </div>--}}
{{--                        <!-- End Accordion 2 -->--}}

{{--                        <!-- Start Accordion 3 -->--}}
{{--                        <div class="panel panel-default">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h4 class="panel-title">--}}
{{--                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">--}}
{{--                                        <i class="fa fa-angle-left control-icon"></i> Our Goal--}}
{{--                                    </a>--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-3" class="panel-collapse collapse">--}}
{{--                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue dolor, facilisis id fringilla ut, tempus vitae nibh.</div>								</div>--}}
{{--                        </div>--}}
{{--                        <!-- End Accordion 3 -->--}}

{{--                        <!-- Start Accordion 4 -->--}}
{{--                        <div class="panel panel-default">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h4 class="panel-title">--}}
{{--                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4" class="collapsed">--}}
{{--                                        <i class="fa fa-angle-left control-icon"></i> Why Choose Us ?--}}
{{--                                    </a>--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-4" class="panel-collapse collapse">--}}
{{--                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue dolor, facilisis id fringilla ut, tempus vitae nibh.</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Accordion 4 -->--}}

{{--                        <!-- Start Accordion 5 -->--}}
{{--                        <div class="panel panel-default">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h4 class="panel-title">--}}
{{--                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">--}}
{{--                                        <i class="fa fa-angle-left control-icon"></i> Our Great Support--}}
{{--                                    </a>--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-5" class="panel-collapse collapse">--}}
{{--                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue dolor, facilisis id fringilla ut, tempus vitae nibh.</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Accordion 5 -->--}}

{{--                    </div>--}}
{{--                    <!-- End Accordion section -->--}}

{{--                </div><!--/.col-md-6 -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Start About-section 2 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">CEO's Message</h2>
                </div>
            </div>
            <hr style="border-top: 1px solid black">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex">
                        <p  class="d-flex">Continuing to represent our customers in the growing textile industry, we are adapting ourselves to better serve all of our clients around the globe. What does not change is our dedication to standards, quality and corporate ethics, resulting in satisfied customers,
                            a team geared towards achievement and sustainable growth.</p>
                        <p>All of our strategic partners and our satisfied customers, vendors and employees and they contribute to our organization’s progress.
                            The fourth generation today is seasoned and trained to represent the industry in a competent and modern way with more than 60 years
                            in this sector</p>
                        <p>Its experience second to none, H.A.R Textile has proven time and time again to be the best in the business.
                            The reputation is the trust the customers have on us, I would like to make sure that we put our maximum effort
                            into achieving our goals s which lead to the vision of our organization and leave no stone unturned.</p>
                        <p>I want to create a legacy for generations to come in the field of Textiles.</p>
                        <p style="text-align: left;">With my best wishes to all.</p>
                        <p style="text-align: left;">Haji Abdul Jabbar</p>
                        <p style="text-align: left;">CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Mission</h2>
                </div>
            </div>
            <hr style="border-top: 1px solid black">
            <p>
                H.A.R Textile was, is, and continues to be, a family business focused on its employees ‘ commitment, determination and devotion, leveraging existing resources in its area and concentrating on customer service excellence.
            </p>
            <p>
            H.A.R Textile is committed to creativity and innovation, pursuing a sustainable regeneration of its resources.
            </p>
            <p>
                H.A.R Textile is, and needs to be, more conscious and more knowledgeable at every move responsible to his community and its employees.
            </p>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Vision</h2>
                </div>
            </div>
            <hr style="border-top: 1px solid black">
            <p>
                H.A.R Textile wants to be nationally and internationally recognized for its unceasing quest for improving quality and service.
            </p>
            <p>
                H.A.R Textile strives to remain synonymous with efficiency, capability, versatility and sustainability, quality, terms of service and differentiated services.
            </p>
            <p>
                Continued improvements and its organization’s development are aimed at achieving this reputation in the current and future markets, consolidating and improving its growth and providing better opportunities for all those who work within it, the society and those with whom it is connected.
                H.A.R Textile was, is, and continues to be, a family business focused on its employees ‘ commitment, determination and devotion, leveraging existing resources in its area and concentrating on customer service excellence.
            </p>
        </div>
    </section>
    <!-- Start Call to Action Section -->
    <section class="call-to-action mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow zoomIn" data-wow-duration="2s" data-wow-delay="300ms">
                    <p>Awesome Aires Template is ready for <br> Business, Agency, Landing or Creative Portfolio<br>Aires is Responsive and help you to grow your business</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->


@endsection
