@extends('layout.app')
@section('title', 'Legal Expert Union - Послуги')
@section('content')
    <!-- Service Banner Section -->
    <div class="service-banner-section" data-bg-image="images/background/service-bg.jpg">
        <div class="auto-container">
            <div class="content-box">
                <h2>Our <span>Services</span></h2>
                <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional base clickthroughs.</div>
                <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">get in touch</span></a>

                <!-- Lower Box -->
                <div class="lower-box clearfix">
                    <div class="pull-left">
                        <div class="book">
                            <span class="icon icofont-phone"></span>
                            book through <br> call now
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="phone" href="tel:+53-8698-50-50">+53 8698 50 50</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Service Banner Section -->

    <!-- Services Section -->
    <div class="services-section section-padding">
        <div class="auto-container">
            <div class="sec-title">
                <div class="title">послуги компанії</div>
                <h2><span>Оптимальна Стратегія</span> Вашого Бізнесу</h2>
            </div>
            <div class="inner-container">
                <div class="row g-0">

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-blackboard"></span>
                            </div>
                            <h5><a href="service-detail.html">Strategy</a></h5>
                            <div class="text">Thought leadership pass the clap hackathon wearables.</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-stats-up"></span>
                            </div>
                            <h5><a href="service-detail.html">Financial</a></h5>
                            <div class="text">Platform omnichannel click thought leadership pivot</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-shield"></span>
                            </div>
                            <h5><a href="service-detail.html">Insurance</a></h5>
                            <div class="text">Disrupt taste makers help council emerging.</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-home"></span>
                            </div>
                            <h5><a href="service-detail.html">Estate</a></h5>
                            <div class="text">Mobile ready proprietary dedication intuitive</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-stamp"></span>
                            </div>
                            <h5><a href="service-detail.html">Audit & Evaluation</a></h5>
                            <div class="text">Thought leadership pass the clap hackathon wearables.</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-money"></span>
                            </div>
                            <h5><a href="service-detail.html">Taxes & Efficiency</a></h5>
                            <div class="text">Disrupt taste makers help council emerging.</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-shopping-cart-full"></span>
                            </div>
                            <h5><a href="service-detail.html">Consumer Market</a></h5>
                            <div class="text">Mobile ready proprietary dedication intuitive</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-truck"></span>
                            </div>
                            <h5><a href="service-detail.html">Logistic</a></h5>
                            <div class="text">Platform omnichannel click thought leadership pivot</div>
                            <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Services Section -->

    <!-- Reputation Section Two -->
    <div class="reputation-section-two style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Consult Form Column -->
                @include('pages.partials.consult')

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">why choose us</div>
                            <h2><span>Your Successful </span>Is<br> Our Reputation</h2>
                        </div>
                        <div class="blocks-outer">

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Strong Martket Analysis</h5>
                                    <div class="text">Tasks, docs, and files integrate with Arado’s chat to close the <br> gaps between feedback and action.</div>
                                </div>
                            </div>

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Experience & Percision</h5>
                                    <div class="text">Create multiple discussions to keep all relevant conversations <br> together, all in one place with Arado</div>
                                </div>
                            </div>

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Experts About Business</h5>
                                    <div class="text">Create multiple discussions to keep all relevant conversations <br> together, all in one place with Arado</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Reputation Section -->

    <!-- Testimonial Section -->
    <div class="testimonial-section">
        <div class="auto-container">
            <div class="inner-container">

                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="title">testimonials</div>
                    <h2><span>+2,500 Clients </span>Love Us</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote icofont-quote-right"></div>
                            <div class="author">Ryan Betthalyn <span>/ Director at Chobham Manor</span></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote icofont-quote-right"></div>
                            <div class="author">Bobs Hanley <span>/ Director at Spotify</span></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote icofont-quote-right"></div>
                            <div class="author">Ryan Betthalyn <span>/ Director at Chobham Manor</span></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote icofont-quote-right"></div>
                            <div class="author">Bobs Hanley <span>/ Director at Spotify</span></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->

    <!-- Sponsors Section -->
    <div class="sponsors-section">
        <div class="auto-container">

            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="/images/clients/3.png" alt=""></a></div></li>
                </ul>
            </div>

        </div>
    </div>
    <!--End Sponsors Section-->

@endsection
