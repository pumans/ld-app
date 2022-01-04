@extends('layout.app')
@section('title', 'Legal Expert Union - Відновлення паролю')
@section('content')
    <br><br><div class="reputation-section-two style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="form-boxed">
                            <h5>Відновлення паролю</h5>

                            <div class="consult-form">
                                <form method="POST" action="{{route('forgot_process')}}">
                                @csrf
                                <!-- Email Address -->
                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="email" name="email" placeholder="email" value="" required autofocus>
                                        @error('email')<p style="color: red">{{$message}}</p>@enderror
                                    </div>
                                    <div class="form-group" >
                                        <a href="{{route('login')}}" style="padding: 10px">
                                            <span class="txt">{{ __('Вхід') }}</span>
                                        </a>
                                        <a href="{{route('register')}}" style="padding: 10px">
                                            <span class="txt">{{ __('Реєстрація') }}</span>
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">{{ __('Нагадати пароль') }}</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
