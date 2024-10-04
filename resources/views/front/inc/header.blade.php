<div class="header" data-lotriver-header="">
    <div class="header-bar-container">
        <div class="header-bar tz-container tz-d-flex tz-align-center" data-lotriver-wrapper="">
            <div class="header-bar--left"><a target="_blank" class="header-tabs-i header-tabs-i_tap"
                    href="#">autobuchina.com</a>
            </div>
            <div class="header-bar--right">
                <div class="header-bar-i header-bar-i_support-phone"><span
                        class="header-bar-i_support-phone-title">{{ sitekey('home_static', 'name') }}: </span><span
                        class="header-bar-i_support-phone-list"><span><a data-register-call="true"
                                href="tel:(012) 555 55 55">(012) 555 55 55</a></span></span></div>
                <a class="header-bar-i" href="/help/popular_questions">{{ sitekey('home_static_two', 'title') }}</a>

                <div class="dropdown">
                    <button class="dropbtn">EN</button>
                    <div class="dropdown-content">
                        <a href="#">RU</a>
                        <a href="#">EN</a>
                        <a href="#">FR</a>
                    </div>
                </div>

                    <a
                    class="header-bar-i header-bar-i--bookmarks" href="{{ route('favorite') }}">{{ sitekey('home_static', 'title') }}</a><a
                    class="header-bar-i header-bar-i--login js-auth-link" href="{{ route('login') }}">{{ sitekey('home_static', 'text') }}</a>
                    <a
                    class="header-bar-i header-bar-i--login js-auth-link" href="{{ route('register') }}">{{ sitekey('home_static', 'desc') }}</a>
            </div>
        </div>
    </div>
    <div class="header-top-nav">
        <div class="nav tz-container tz-d-flex tz-align-center"><a class="nav-i nav-i--home" href="/">
                <h1 class="nav-i--home_logo"><img src="{{ asset('storage/' . $logoImages->d_logo) }}" width="160">
                </h1>
            </a><a class="nav-i" data-stat="header-all-ads-link" href="#">{{ sitekey('home_static_two', 'title') }}</a><a class="nav-i"
                data-stat="header-shops-link" href="{{ route('dealership') }}">{{ sitekey('home_static_two', 'text') }}</a><a class="nav-i"
                data-stat="header-autocatalog-link" href="#">{{ sitekey('home_static_two', 'desc') }}</a><a class="nav-i"
                data-stat="header-moto-link" href="#">{{ sitekey('home_static_two', 'name') }}</a>
            <div class="nav-i--container"><a class="nav-i" target="_blank" data-stat="header-accessories-link"
                    href="#">{{ sitekey('home_static_three', 'title') }}</a>
                <div class="header-top--sub-nav"><a class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_three', 'text') }}</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_three', 'desc') }}</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_three', 'name') }}</a><a class="header-top--sub-nav-i" target="_blank" href="#">{{ sitekey('home_static_four', 'title') }}</a><a class="header-top--sub-nav-i" target="_blank" href="#">GPS naviqatorlar</a>
                    <a class="header-top--sub-nav-i" target="_blank" href="#">{{ sitekey('home_static_four', 'text') }}</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_four', 'desc') }}</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_four', 'name') }}</a><a class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_five', 'title') }}</a><a class="header-top--sub-nav-i" target="_blank" href="#">{{ sitekey('home_static_six', 'title') }}</a>
                </div>
            </div>
            <div class="nav-i--container"><a class="nav-i" target="_blank" data-stat="header-rental-link"
                    href="#">{{ sitekey('home_static_five', 'text') }}</a>
                <div class="rental-dropdown_content"><a target="_blank" data-stat="rental-cars"
                        href="#">{{ sitekey('home_static_five', 'desc') }}</a><a target="_blank" data-stat="rental-buses"
                        href="#">{{ sitekey('home_static_five', 'name') }}</a><a target="_blank" data-stat="rental-bikes" href="#">{{ sitekey('home_static_six', 'text') }}</a>
                    <a target="_blank" data-stat="rental-commerce_transport" href="#">{{ sitekey('home_static_six', 'desc') }}</a>
                    <a target="_blank" data-stat="rental-other" href="#">{{ sitekey('home_static_six', 'title') }}</a>
                </div>
            </div><a class="header-new-btn" href="#"><span>{{ sitekey('home_static_six', 'name') }}</span></a>
        </div>
    </div>
</div>


