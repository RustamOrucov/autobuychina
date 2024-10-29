@extends('front.layout.layout')
@section('front_content')

    <div class="main-container sessions" style="margin-bottom: 9%">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                    <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                    <div id="ad_ph_2" style="display:none;"></div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger custom-login-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="session-login-form">
            <form action="{{route('login')}}" accept-charset="UTF-8" method="post">
                 @csrf

                <div class="input"><label for="sessions_email">{{sitekey('login_car','title')}}</label><input type="email" name="email"
                        id="sessions_email" required></div>
                <div class="input"><label for="sessions_password">{{sitekey('login_car','text')}}</label><input type="password"
                        name="password" id="sessions_password" required></div>
                <div class="links-row">

                <a href="{{ route('dealer') }}" class="custom-register-btn">{{sitekey('login_car','desc')}}</a>

                <button type="submit" class="custom-login-btn" href="">{{sitekey('home_static','text')}}</button>
                </div>
            </form>
        </div>
        <a class="link-forgot-password" href="">{{sitekey('login_car','name')}}</a>

    </div>



@endsection
