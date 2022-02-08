@extends('layout.app')
@section('title', 'Legal Expert Union - Головна')
@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" data-bg-image="images/main-slider/chess1.jpg">
                <div class="auto-container w-100">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title"><h3>Юридичне експертне об'єднання</h3></div>
                                <h1>З нами Ви завжди <br><span>на шаг попереду</span></h1>
                                <div class="text">наші стратегії допоможуть вам вирішити <br> юридичні питання будь-якої складності.<br></div>
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
                                <div class="title"><h3>Юридичне експертне об'єднання</h3></div>
                                <h1>Надійна <span>Допомога</span> Відчуй себе захищеним</h1>
                                <div class="text">Ми пропонуємо доступну та ефективну юридичну допомогу.</div>
                                <div class="btn-box">
                                    <a href="{{route('civilian')}}" class="theme-btn btn-style-one"><span class="txt">Громадянам</span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="slide" data-bg-image="images/main-slider/intro-1.jpg">
                <div class="auto-container w-100">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title"><h3>Юридичне експертне об'єднання</h3></div>
                                <h1>Юридична <span>Підкованість</span></h1>
                                <div class="text">Надає упевненість у законності власних рішень та дій<br> адже незнання законів не звільняє від відповідальності.<br></div>
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
                                <img src="/images/about/man.png" alt="about">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                        <div class="about-column">
                            <div class="sec-title">
                                <div class="title">про компанію</div>
                                <h2><span>Юридичне</span> <br> <span>Експертне</span> Об'єднання</h2>
                            </div>
                            <div class="text">
                                <p>Забезпечує Клієнта юридичною підкованістю, надаючи необхідну правову допомогу.</p>
                                <p>Ми встановлюємо істину у спорі, а тому наш Клієнт досягає успіху там, де інші програють.</p>
                                <p>Ми бачимо себе не просто «юристами», а надійними порадниками наших клієнтів, незалежно від того, в комерційному чи особистому контексті. Ми надаємо додаткові послуги далеко за межі тих, які можна очікувати від юридичної фірми.</p>
                                <p>Нашими основними цінностями є чесність і довіра, заохочення інновацій, командна робота та постійний особистий розвиток кожного в компанії.</p>
                            </div>
                            <div class="signature">VVProdyn <span>Віталій ПРОДУН</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Services Section -->
    <div class="services-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="title">Наші послуги</div>
                <h2><span>«Юридичне Експертне Об’єднання»</span></h2>
                <h2>надає Клієнтам:</h2>
            </div>
            <div class="inner-container">
                <div class="row g-0">

                    <!-- Service Block -->
                    <div class="service-block col-sm">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-blackboard"></span>
                            </div>
                            <h5>Правову інформацію</h5>
                            <div class="text">письмовий документ з роз'ясненням прав Клієнта з майнових та фінансових зобов’язань.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-sm">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-shield"></span>
                            </div>
                            <h5>Правовий висновок</h5>
                            <div class="text">структурований документ з відповідями на поставлені Клієнтом питання та необхідною детальною правовою інформацією.</div>
                            <div class="text">Одержавши правовий висновок, Клієнт потрапляє у стан юридичної визначеності, тобто розуміє що є законне, а що є протиправне.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-sm">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-stamp"></span>
                            </div>
                            <h5>Юридичне експертне рішення</h5>
                            <div class="text">пропозиції (рекомендації) щодо можливих варіантів вирішення правового питання, з яким звернувся Клієнт, у тому числі альтернативних способів.</div>
                            <div class="text">Клієнт дізнається про свої майнові права, а також одержує покрокову інструкцію щодо правових дій та рішень.</div>
                            <div class="text">Одержавши Юридичне експертне рішення Клієнт може самостійно регулювати свою поведінку, приймати рішення та врегулювати спір не звертаючись до суду, заощаджуючи власні гроші та час.</div>

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
                            <div class="title">чому нас обирають</div>
                            <h2><span>Ваш спокій </span>Це<br> Наша репутація</h2>
                        </div>
                        <div class="blocks-outer">

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Наші переконання</h5>
                                    <div class="text">Наша фірма як сім'я. Ми щиро віримо, що кожен випадок – це чиєсь життя, і ми повинні ставитися до нього як до такого.</div>
                                </div>
                            </div>

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Досвід </h5>
                                    <div class="text">допомагає виконати роботу. Адвокати нашого об'єднання мають більше 150 років спільної юридичної практики.</div>
                                </div>
                            </div>

                            <!-- Reputation Block -->
                            <div class="reputation-block">
                                <div class="inner-box">
                                    <h5>Стратегічне мислення</h5>
                                    <div class="text">Ми заздалегідь прораховуємо можливі варіанти та готові до будь-якого розвитку подій </div>
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
