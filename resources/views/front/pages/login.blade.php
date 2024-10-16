
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

                <div class="input"><label for="sessions_email">E-Mail</label><input type="email" name="email"
                        id="sessions_email" required></div>
                <div class="input"><label for="sessions_password">Password</label><input type="password"
                        name="password" id="sessions_password" required></div>
                <div class="links-row">
                   <button type="submit" class="custom-login-btn" href="">Login</button>

                    <a href="{{ route('register') }}" class="custom-register-btn">Register Dealership</a>

                </div>
            </form>
        </div>
        <a class="link-forgot-password" href="">I forgot my password.</a>

    </div>



@endsection
