<!-- Main Header-->
<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="tel:+38067-87-81-777"><span class="icon icofont-phone"></span> +38067-87-81-777</a></li>
                        <li><a href="tel:+38063-34-69-333"><span class="icon icofont-phone"></span> +38063-34-69-333</a></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li class="share">Ми у соцмережах:</li>
                        <li><a href="https://www.facebook.com/%D0%AE%D1%80%D0%B8%D0%B4%D0%B8%D1%87%D0%BD%D0%B8%D0%B9-%D0%B4%D0%B5%D0%BF%D0%B0%D1%80%D1%82%D0%B0%D0%BC%D0%B5%D0%BD%D1%82-101947084957332" class="icofont-facebook"></a></li>
                        <li><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
                        <li><a href="https://www.youtube.com/" class="icofont-play-alt-1"></a></li>
                        @auth("web")
                            <li><a href="#" class="share">{{auth()->user()->name}}</a></li>
                            <li><a href="{{route("logout")}}" class="share">Вихід</a></li>
                        @endauth
                        @guest("web")
                            <li><a href="{{route('login')}}" class="share">Вхід</a></li>
                            <li><a href="{{route('register')}}" class="share">Реєстрація</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
            <!--
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{route('index')}}"><img src="/images/logo.png" alt="" title=""></a></div>
                    </div>
                    -->
                <div class="nav-outer pull-left clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('index')}}"><h4>LEU</h4></a></li>
                                <li><a href="{{route('about')}}">Про компанію</a></li>
                                <li class="dropdown"><a href="#">Послуги</a>
                                    <ul>
                                        <li><a href="{{route('civilian')}}">Громадянам</a></li>
                                        <li><a href="{{route('business')}}">Юридичним особам</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#">Проєкти</a>
                                    <ul>
                                        <li><a href="#">Проєкти</a></li>
                                        <li><a href="#">Проєкти Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ route('posts') }}">Новини</a>
                                    <ul class="from-right">
                                        <li><a href="{{ route('posts') }}">Новини</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Контакти</a></li>
                                @if(\Auth::check())
                                @if(\Auth::user()->name == "Admin")
                                <li class="dropdown"><a href="{{ route('admin.login') }}" >Admin</a>
                                    <ul class="from-right">
                                        <li><a href="{{ route('admin.login') }}">Trello</a></li>
                                    </ul></li>
                                @endif
                                <li class="dropdown"><a href="#" >CRM</a>

                                </li>
                                @endif
                            </ul>
                        </div>

                    </nav>

                </div>

                <!-- Outer Box -->
                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon icofont-search"></span></div>
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('index')}}"><img src="#" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!--End Main Header -->
