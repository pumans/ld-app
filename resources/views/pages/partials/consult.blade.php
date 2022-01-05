<!-- Consult Form Column -->
<div class="form-column col-lg-5 col-md-12 col-sm-12">
    <div class="inner-column">
        <div class="form-boxed">
            <h5>Безкоштовна консультація</h5>
            <div class="consult-form">
                <form method="post" action="{{ route('phone_form') }}">
                @csrf
                <!--Form Group-->
                    <div class="form-group">
                        <label>Ім'я</label>
                        <input type="text" name="name" value="" placeholder="Олександр Січний" required>
                        @error('name')<p style="color: red">{{$message}}</p>@enderror
                    </div>
                    <!--Form Group-->
                    <div class="form-group">
                        <label>телефон</label>
                        <input type="text" name="phone" value="" placeholder="Введіть номер телефону" required>
                        @error('phone')<p style="color: red">{{$message}}</p>@enderror
                    </div>
                    <!--Form Group-->
                    <div class="form-group">
                        <label>Напишіть повідомлення</label>
                        <textarea name="text" placeholder="Напишіть повідомлення тут"></textarea>
                        @error('text')<p style="color: red">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">надіслати</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
