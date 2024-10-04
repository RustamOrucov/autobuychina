<div class="header" data-lotriver-header="">
    <div class="header-bar-container">
        <div class="header-bar tz-container tz-d-flex tz-align-center" data-lotriver-wrapper="">
            <div class="header-bar--left"><a target="_blank" class="header-tabs-i header-tabs-i_tap"
                    href="#">autobuchina.com</a>
            </div>
            <div class="header-bar--right">
                <div class="header-bar-i header-bar-i_support-phone"><span
                        class="header-bar-i_support-phone-title">Support: </span><span
                        class="header-bar-i_support-phone-list"><span><a data-register-call="true"
                                href="tel:(012) 555 55 55">(012) 555 55 55</a></span></span></div>
                <a class="header-bar-i" href="/help/popular_questions">Help</a>

                <div class="dropdown">
                    <button class="dropbtn">EN</button>
                    <div class="dropdown-content">
                        <a href="#">RU</a>
                        <a href="#">EN</a>
                        <a href="#">FR</a>
                    </div>
                </div>

                <a class="header-bar-i header-bar-i--bookmarks" href="{{ route('favorite') }}">Favorites</a>
                @if (Auth::guard('dealer')->check())
                    <a href="{{ route('dealer-profile') }}" class="custom-dealer-name"><img width="20"
                            src="{{ asset('assets/img/profile.png') }}" alt="">
                        {{ Auth::guard('dealer')->user()->name }}</a>
                    <a href="{{ route('logout') }}" style="display: flex;align-items:center;gap:3px"><img width="20"
                            src="{{ asset('assets/img/logout.png') }}" alt=""> Logout</a>
                @else
                    <a class="header-bar-i header-bar-i--login js-auth-link" href="{{ route('login') }}">Login</a>
                    <a class="header-bar-i header-bar-i--login js-auth-link" href="{{ route('register') }}">Register</a>
                @endif


            </div>
        </div>
    </div>
    <div class="header-top-nav">
        <div class="nav tz-container tz-d-flex tz-align-center"><a class="nav-i nav-i--home" href="/">
                <h1 class="nav-i--home_logo"><img src="{{ asset('storage/' . $logoImages->d_logo) }}" width="160">
                </h1>
            </a><a class="nav-i" data-stat="header-all-ads-link" href="#">All listings</a><a class="nav-i"
                data-stat="header-shops-link" href="{{ route('dealership') }}">Dealerships</a><a class="nav-i"
                data-stat="header-autocatalog-link" href="#">Car catalog</a><a class="nav-i"
                data-stat="header-moto-link" href="#">Moto</a>
            <div class="nav-i--container"><a class="nav-i" target="_blank" data-stat="header-accessories-link"
                    href="#">Ehtiyat
                    hissələr və aksesuarlar</a>
                <div class="header-top--sub-nav"><a class="header-top--sub-nav-i" target="_blank"
                        href="#">Aksesuarlar</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">Audio
                        və video texnika</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">Avtokosmetika
                        və avtokimya</a><a class="header-top--sub-nav-i" target="_blank" href="#">Ehtiyat
                        hissələr</a><a class="header-top--sub-nav-i" target="_blank" href="#">GPS
                        naviqatorlar</a><a class="header-top--sub-nav-i" target="_blank" href="#">Qeydiyyat
                        nişanları</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">Siqnalizasiyalar</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">Videoqeydiyyatçılar</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">Şinlər,
                        disklər və təkərlər</a><a class="header-top--sub-nav-i" target="_blank" href="#">Digər</a>
                </div>
            </div>
            <div class="nav-i--container"><a class="nav-i" target="_blank" data-stat="header-rental-link"
                    href="#">İcarə</a>
                <div class="rental-dropdown_content"><a target="_blank" data-stat="rental-cars"
                        href="#">Avtomobillər</a><a target="_blank" data-stat="rental-buses"
                        href="#">Avtobus
                        və mikroavtobuslar</a><a target="_blank" data-stat="rental-bikes" href="#">Motosiklet
                        və mopedlər</a><a target="_blank" data-stat="rental-commerce_transport" href="#">Xüsusi
                        texnika</a><a target="_blank" data-stat="rental-other" href="#">Digər</a>
                </div>
            </div>
            @if (Auth::guard('dealer')->check())
            <a class="header-new-btn" href="{{ route('newcar') }}"><span>New listing</span></a>
            @else
            @endif
        </div>
    </div>
</div>
