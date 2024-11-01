@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showLogincss = true;
    ?>
    <link rel="stylesheet" href="{{ asset('assets_/css/login.css') }}">
    <div class="main-container sessions">

        <div class="header js-header" style="">
            <div class="header__nav">
                <div class="header__nav-left">@include('mobile.inc.back-button')</div>
                <div class="header__nav-title">
                    <h1 class="custom-mobil-dealers" style="color:#fff">LOGIN</h1>
                </div>
                <div class="header__nav-right"></div>
            </div>
        </div>
        @if ($errors->any())
            <div id="error-message" class="alert alert-danger custom-login-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="custom-error-login">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <script>
                setTimeout(function () {
                    var errorMessage = document.getElementById('error-message');
                    if (errorMessage) {
                        errorMessage.style.display = 'none';
                    }
                }, 3000);
            </script>
        @endif

        <!-- Butonlar -->
        <div class="custom-mobile-btn-container">
            <button class="custom-mobile-login-btn" id="dealer-btn">Dealer</button>
            <button class="custom-mobile-login-btn" id="trader-btn">Trader</button>
        </div>

        <!-- Dealer Formu -->
        <div class="panel panel-dealer" style="display:none;">
            @php
                $dealer='dealer'
            @endphp
            <div class="box">
                <form action="{{ route('mobile.login') }}" method="post">
                    @csrf
                    <div class="input-box">
                        <h2>Sign In</h2>
                        <input type="email" required name="email">
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div class="input-box">
                        <input type="password" required name="password">
                        <span>Enter Password</span>
                        <i></i>
                    </div>
                    <input type="submit" value="Login">

                    <a href="{{ route('mobile.register',['costumer'=>$dealer]) }}" class="cm-register-btn">Register</a>

                </form>
            </div>
        </div>

        <!-- Traider Formu -->
        <div class="panel panel-trader" style="display:none;">
            <div class="box">
                @php
                    $traider='traider'
                @endphp

                <form action="{{ route('mobile.login') }}" method="post">
                    @csrf
                    <div class="input-box">
                        <h2>Sign In</h2>
                        <input type="text" required>
                        <span>Username</span>
                        <i></i>
                    </div>
                    <div class="input-box">
                        <input type="password" required>
                        <span>Enter Password</span>
                        <i></i>
                    </div>
                    <input type="submit" value="Login">
                    <a href="{{ route('mobile.register',['costumer'=>$traider]) }}" class="cm-register-btn">Register</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        const dealerBtn = document.getElementById('dealer-btn');
        const traderBtn = document.getElementById('trader-btn');
        const dealerPanel = document.querySelector('.panel-dealer');
        const traderPanel = document.querySelector('.panel-trader');
        const buttonContainer = document.querySelector('.custom-mobile-btn-container');

        dealerBtn.addEventListener('click', function () {
            dealerPanel.style.display = 'block';
            traderPanel.style.display = 'none';
            buttonContainer.style.display = 'none';
        });

        traderBtn.addEventListener('click', function () {
            traderPanel.style.display = 'block';
            dealerPanel.style.display = 'none';
            buttonContainer.style.display = 'none';
        });
    </script>

@endsection
