@extends('client.layouts.app')

@section('content')

    <!-- Start Header Section -->
    <div class="page-header"  style="margin-top: 1px !important;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact with Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->

    <!-- Start Contact Us Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Contact With Us</h2>
{{--                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                           data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email"
                                           required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone"
                                           required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required
                                              data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-right wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <div class="google-map container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.9836235452167!2d73.27148691503976!3d31.49713395544077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922704b0df5d277%3A0x69907d08a8b0b826!2sH.%20A.%20R%20Textile%20Mills%20(Pvt)%20Limited!5e0!3m2!1sen!2s!4v1646996625409!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
{{--        <div id="map" data-position-latitude="48.858370" data-position-longitude="2.294481"></div>--}}
    </div>

@endsection
