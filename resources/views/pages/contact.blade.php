@extends('layout.app')
@section('title', 'Legal Expert Union - Контакти')
@section('content')

    <!-- Map Section -->
    <div class="map-section">
        <div class="contact-map-area">
            <iframe class="contact-map" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%D0%9E%D0%B4%D0%B5%D1%81%D0%B0%2C%20%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82%20%D0%A8%D0%B5%D0%B2%D1%87%D0%B5%D0%BD%D0%BA%D0%B0%2C%204-%D0%B4+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </div>
    <!-- End Map Section -->

    <!-- Contact Page Section -->
    <div class="contact-page-section">
        <div class="auto-container">
            <!-- Contact Info Boxed -->
            <div class="contact-info-boxed">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <h2><span>Одеса</span></h2>
                        <div class="text">проспект Шевченка, 4-д, м. Одеса, 65062, <br> Україна</div>
                        <div class="email">Email: <a href="mailto:Legal_Expert_Union@ukr.net">Legal_Expert_Union@ukr.net</a></div>
                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="call">:Телефони:<br><a href="#">+38067-87-81-777</a><br><a href="#">+38063-34-69-333</a></div>
                        <ul class="location-list">
                            <li><span>Часи роботи:</span>ПН - ВС: 9.00 - 21.00</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Form Boxed -->
            <div class="form-boxed">
                <div class="sec-title centered">
                    <div class="title">напишіть нам</div>
                    <h2>Ми завжди тут <span>Заради Вашого захисту</span></h2>
                </div>

                <div class="boxed-inner">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="{{route('contact_form_process')}}" id="contact-form">
                            @csrf
                            <div class="row clearfix">

                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Emaill адреса *" required>
                                    @error('email')<p style="color: red">{{$message}}</p>@enderror
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="text" placeholder="Повідомлення"></textarea>
                                    @error('text')<p style="color: red">{{$message}}</p>@enderror
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Надіслати повідомлення</span></button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--End Contact Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Detail Section -->
@endsection
