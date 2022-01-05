@extends('layout.app')
@section('title', 'Legal Expert Union - Головна')
@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" data-bg-image="images/main-slider/intro-1.jpg">
                <div class="auto-container w-100">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">Юридичне експертне об'єднання</div>
                                <h1>Юридична <span>Підкованість</span></h1>
                                <div class="text">Надає упевненість у законності власних рішень та дій<br> адже незнання законів не звільняє від відповідальності.<br></div>
                                <div class="btn-box">
                                    <a href="{{route('about')}}" class="theme-btn btn-style-one"><span class="txt">Звертайтеся</span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="slide" data-bg-image="images/main-slider/intro-2.jpg">
                <div class="auto-container w-100">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">Юридичне експертне об'єднання</div>
                                <h1>Надійна <span>Допомога</span> Відчуй себе захищеним</h1>
                                <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional base clickthroughs.</div>
                                <div class="btn-box">
                                    <a href="{{route('civilian')}}" class="theme-btn btn-style-one"><span class="txt">Громадянам</span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="slide" data-bg-image="images/main-slider/intro-3.jpg">
                <div class="auto-container w-100">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">Юридичне експертне об'єднання</div>
                                <h1>Правнича <span>Допомога</span> Make Your Money Grow</h1>
                                <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional base clickthroughs.</div>
                                <div class="btn-box">
                                    <a href="{{route('business')}}" class="theme-btn btn-style-one"><span class="txt">Для бізнесу</span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>


    </div>
    <!-- End Banner Section -->

    <!-- CTA Section Start -->
    <div class="cta-section" data-bg-image="images/background/cta-bg.jpg">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- CTA Content Start -->
                    <div class="cta-content">
                        <h3 class="title">Необхідна швидка зустріч? <span class="text-bold">Телефонуйте!</span></h3>
                        <p>В екстренних випадках ми працюємо 24/7</p>
                    </div>
                    <!-- CTA Content End -->
                </div>
                <div class="col-lg-5">
                    <!-- CTA Phone Number Start -->
                    <div class="cta-phone text-lg-end text-strat">
                        <h2 class="title">+38067-87-81-777</h2>
                    </div>
                    <!-- CTA Phone Number Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- About Section -->
    <div class="about-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row align-items-center clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6">
                        <div class="about-image">
                            <div class="about-inner-image">
                                <img src="/images/about/home-about.png" alt="about">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                        <div class="about-column">
                            <div class="sec-title">
                                <div class="title">про компанію</div>
                                <h2>Провідне <span>Юридичне</span> <br> <span>Експертне</span> Об'єднання</h2>
                            </div>
                            <div class="text">
                                <p>Consulte is located in the former rectory of St. Peter’s Episcopal Church. Over our 14 year history, we have treated patients from over 114 different countries in the world. In 2010, we imposed geographical restrictions for the first time. Existing patients were not affected by this change, but new patients are now</p>
                                <p>We have compiled an extensive list of other area clinics and health resources, so that when someone calls from outside of our geographical area.</p>
                            </div>
                            <div class="signature">VVProd <span>Віталій ПРОДУН</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

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
                            <div class="title">чому нас обирають</div>
                            <h2><span>Ваш спокій </span>Це<br> Наша репутація</h2>
                        </div>
                        <div class="blocks-outer">

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Увага до деталей</h5>
                                    <div class="text">Tasks, docs, and files integrate with Arado’s chat to close the <br> gaps between feedback and action.</div>
                                </div>
                            </div>

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Досвід </h5>
                                    <div class="text">Create multiple discussions to keep all relevant conversations <br> together, all in one place with Arado</div>
                                </div>
                            </div>

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Стратегічне мислення</h5>
                                    <div class="text">Ми заздалегідь прораховуємо можливі варіанти <br> та готові до будь-якого розвитку подій </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Reputation Section -->

    <!-- Blog Section -->
    <div class="blog-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">новини</div>
                <h2><span>Нові </span>Публікації</h2>
            </div>
            <div class="inner-container">
                <div class="clearfix row g-0">
                    <!-- Column -->
                    <div class="column col-lg-8 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="image">
                                                <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-column">
                                            <div class="arrow-one"></div>
                                            <div class="title">business</div>
                                            <h4><a href="blog-detail.html">Problems About <br> Social Insurance For <br> Truck Drivers</a></h4>
                                            <div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="clearfix row g-0">
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12 order-lg-1 order-2">
                                        <div class="inner-column">
                                            <div class="arrow-two"></div>
                                            <div class="title">bank & finance</div>
                                            <h4><a href="blog-detail.html">Payment Online - <br> Things That You Know To <br> Project Your Money</a></h4>
                                            <div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
                                        </div>
                                    </div>
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12 order-lg-2 order-1">
                                        <div class="inner-column">
                                            <div class="image">
                                                <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-4 col-md-12 col-sm-12">
                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                                    <div class="arrow"></div>
                                </div>
                                <div class="lower-content">
                                    <div class="title">tips & tricks</div>
                                    <h4><a href="blog-detail.html">5 Secrets To <br> Coaching Your Employees <br> To Greatness</a></h4>
                                    <div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Section -->
@endsection
