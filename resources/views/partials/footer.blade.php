<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                            <!--<div class="logo">
                                    <a href="{{route('index')}}"><img src="../../public/images/logo.png" alt="" /></a>
                                </div>-->
                                <div class="call">
                                    Наші контакти
                                    <a class="phone" href="tel:+38067-87-81-777">+38067-87-81-777</a>
                                    <a class="phone" href="tel:+38063-34-69-333">+38063-34-69-333</a>
                                    <a class="email" href="mailto:Legal_Expert_Union@ukr.net">Legal_Expert_Union@ukr.net</a>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>L E U</h5>
                                <ul class="list-link">
                                    <li><a href="">Про нас</a></li>
                                    <li><a href="">Команда</a></li>
                                    <li><a href="">Вакансії</a></li>
                                    <li><a href="">Партнери</a></li>
                                    <li><a href="">Контакти</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Посилання</h5>
                                <ul class="list-link">
                                    <li><a href="">FAQS</a></li>
                                    <li><a href="">Підтримка</a></li>
                                    <li><a href="">Карта сайту</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h5>Наші новини</h5>
                                <div class="text">Підпішіться на нас та отримуйте першими новини та пропозиції </div>
                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="post" action="{{route('email_form_process')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email ..." required>
                                            @error('email')<p style="color: red">{{$message}}</p>@enderror
                                            <button type="submit" class="theme-btn icofont-arrow-right"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="bottom-inner">
                    <div class="row clearfix">

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="copyright">Copyright ©<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This portal is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank">L E U</a></div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <ul class="social-nav">
                                <li><a href="http://facebook.com/%D0%AE%D1%80%D0%B8%D0%B4%D0%B8%D1%87%D0%BD%D0%B8%D0%B9-%D0%B4%D0%B5%D0%BF%D0%B0%D1%80%D1%82%D0%B0%D0%BC%D0%B5%D0%BD%D1%82-101947084957332" class="icofont-facebook"></a></li>
                                <li><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
                                <li><a href="https://www.youtube.com/" class="icofont-play-alt-1"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
