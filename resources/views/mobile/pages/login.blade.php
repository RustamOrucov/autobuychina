@extends('mobile.layout.layout')
@section('mobile_content')
 <?php
    $showLogincss = true;
    ?>
    <div class="main-container sessions" style="margin-bottom: 9%">
        @if ($errors->any())
            <div class="alert alert-danger custom-login-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="header js-header" style="">
            <div class="header__nav">
                <div class="header__nav-left"><span class="header__nav-btn--back js-header-back-btn back-button" onclick="history.back()"></span></div>
                <div class="header__nav-title">
                    <h1 class="custom-mobil-dealers">LOGIN</h1>
                </div>
                <div class="header__nav-right"></div>
            </div>
        </div>

        <!-- Butonlar -->
        <div class="custom-mobile-btn-container">
            <button class="custom-mobile-login-btn" id="dealer-btn">Dealer ?</button>
            <button class="custom-mobile-login-btn" id="traider-btn">Traider ?</button>
        </div>

        <!-- Dealer Formu -->
        <div class="panel panel-dealer" style="display:none;">
            <div class="state"><br>
                <h3>AUTOBUYCHINA</h3></div>
            <div class="session-login-form">
                <form action="" accept-charset="UTF-8" method="post">
                    @csrf
                    <input placeholder='Email' type="text" name="email">
                    <input placeholder='Password' type="text" name="password">
                    <button type="submit" class="custom-login-btn" href="">Login</button>
                </form>
            </div>
            <div class="forgone"><a href="#"><h4>Forgot password?</h4></a></div>
        </div>

        <!-- Traider Formu -->
        <div class="panel panel-traider" style="display:none;">
            <div class="state"><br>
                <h3>AUTOBUYCHINA</h3></div>
            <div class="session-login-form">
                <form action="" accept-charset="UTF-8" method="post">
                    @csrf
                    <input placeholder='Email' type="text" name="email">
                    <input placeholder='Password' type="text" name="password">
                    <button type="submit" class="custom-login-btn" href="">Login</button>
                </form>
            </div>
            <div class="forgone"><a href="#"><h4>Forgot password?</h4></a></div>
        </div>
    </div>

<script>
    // Butonlar ve formlar
    const dealerBtn = document.getElementById('dealer-btn');
    const traiderBtn = document.getElementById('traider-btn');
    const dealerPanel = document.querySelector('.panel-dealer');
    const traiderPanel = document.querySelector('.panel-traider');
    const buttonContainer = document.querySelector('.custom-mobile-btn-container');

    // Dealer butonuna tıklandığında
    dealerBtn.addEventListener('click', function() {
        dealerPanel.style.display = 'block'; // Dealer formunu göster
        traiderPanel.style.display = 'none'; // Traider formunu gizle
        buttonContainer.style.display = 'none'; // Butonları gizle
    });

    // Traider butonuna tıklandığında
    traiderBtn.addEventListener('click', function() {
        traiderPanel.style.display = 'block'; // Traider formunu göster
        dealerPanel.style.display = 'none'; // Dealer formunu gizle
        buttonContainer.style.display = 'none'; // Butonları gizle
    });
</script>

@endsection
