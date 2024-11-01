<div class="header" data-lotriver-header="">
    <div class="header-bar-container">
        <div class="header-bar tz-container tz-d-flex tz-align-center" data-lotriver-wrapper="">
            <div class="header-bar--left"><a target="_blank" class="header-tabs-i header-tabs-i_tap"
                                             href="#">{{$adminSettings->website_name ?? ''}}</a>
            </div>
            <div class="header-bar--right">
                <div class="header-bar-i header-bar-i_support-phone"><span
                        class="header-bar-i_support-phone-title">{{ sitekey('home_static', 'name') }} : </span><span
                        class="header-bar-i_support-phone-list"><span><a data-register-call="true"
                                                                         href="tel:{{$adminSettings->phone ?? ''}}">{{$adminSettings->phone ?? ''}}</a></span></span>
                </div>
                <a class="header-bar-i" href="#">{{ sitekey('home_static_two', 'title') }}</a>

                <div class="dropdown">
                    <button class="dropbtn">{{strtoupper(app()->getLocale())}}</button>
                    <div class="dropdown-content">
                        @foreach(config('app.languages') as $lang)
                            @if($lang !== app()->getLocale())
                                <a href="{{route('language-url', $lang)}}">{{strtoupper($lang)}}</a>
                            @endif
                        @endforeach


                    </div>
                </div>

                <a class="header-bar-i header-bar-i--bookmarks"
                   href="{{ route('favorite') }}">{{ sitekey('home_static', 'title') }}</a>
                @if (Auth::guard('dealer')->check())
                    <a href="{{ route('dealer-profile') }}" class="custom-dealer-name"><img width="20"
                                                                                            src="{{ asset('assets/img/profile.png') }}"
                                                                                            alt="">
                        {{ Auth::guard('dealer')->user()->name }}</a>
                    <a href="{{ route('logout') }}" style="display: flex;align-items:center;gap:3px"><img width="20"
                                                                                                          alt=""> Logout</a>
                @elseif (Auth::guard('trader')->check())
                    <a href="{{ route('trader-profile') }}" class="custom-dealer-name"><img width="20"
                                                                                            src="{{ asset('assets/img/profile.png') }}"
                                                                                            alt="">
                        {{ Auth::guard('trader')->user()->name }}</a>
                    <a href="{{ route('logout') }}" style="display: flex;align-items:center;gap:3px"><img width="20"
                                                                                                          src="{{ asset('assets/img/logout.png') }}"
                                                                                                          alt=""> Logout</a>
                @else
                    <a class="header-bar-i header-bar-i--login js-auth-link"
                       href="{{ route('question.login') }}">{{ sitekey('home_static', 'text') }}</a>
                    <a class="header-bar-i header-bar-i--login js-auth-link"
                       href="{{ route('question') }}">{{ sitekey('home_static', 'desc') }}</a>
                @endif


            </div>
        </div>
    </div>
    <div class="header-top-nav">
        <div class="nav tz-container tz-d-flex tz-align-center"><a class="nav-i nav-i--home" href="/">
                <h1 class="nav-i--home_logo"><img src="{{ asset('storage/' . $logoImages->d_logo) }}" width="160">
                </h1>
            </a><a class="nav-i" data-stat="header-all-ads-link"
                   href="/">{{ sitekey('home_static_two', 'title') }}</a><a class="nav-i"
                                                                           data-stat="header-shops-link"
                                                                           href="{{ route('dealership') }}">{{ sitekey('home_static_two', 'text') }}</a>

            <a
                class="nav-i"
                data-stat="header-autocatalog-link" href="#">{{ sitekey('home_static_two', 'desc') }}</a>

            <a
                class="nav-i"
                data-stat="header-moto-link" href="#">{{ sitekey('home_static_two', 'name') }}</a>
            <div class="nav-i--container"><a class="nav-i" target="_blank" data-stat="header-accessories-link"
                                             href="{{route('all-spares')}}">{{ sitekey('home_static_three', 'title') }}</a>
                <div class="header-top--sub-nav"><a class="header-top--sub-nav-i" target="_blank"
                                                    href="#">{{ sitekey('home_static_three', 'text') }}</a><a
                        class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_three', 'desc') }}</a><a class="header-top--sub-nav-i"
                                                                                  target="_blank"
                                                                                  href="#">{{ sitekey('home_static_three', 'name') }}</a><a
                        class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_four', 'title') }}</a><a class="header-top--sub-nav-i"
                                                                                  target="_blank" href="#">GPS
                        naviqatorlar</a>
                    <a class="header-top--sub-nav-i" target="_blank"
                       href="#">{{ sitekey('home_static_four', 'text') }}</a><a class="header-top--sub-nav-i"
                                                                                target="_blank"
                                                                                href="#">{{ sitekey('home_static_four', 'desc') }}</a><a
                        class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_four', 'name') }}</a><a class="header-top--sub-nav-i"
                                                                                 target="_blank"
                                                                                 href="#">{{ sitekey('home_static_five', 'title') }}</a><a
                        class="header-top--sub-nav-i" target="_blank"
                        href="#">{{ sitekey('home_static_six', 'title') }}</a>
                </div>
            </div>
            <div class="nav-i--container"><a class="nav-i" target="_blank" data-stat="header-rental-link"
                                             href="#">{{ sitekey('home_static_five', 'text') }}</a>
                <div class="rental-dropdown_content"><a target="_blank" data-stat="rental-cars"
                                                        href="#">{{ sitekey('home_static_five', 'desc') }}</a><a
                        target="_blank" data-stat="rental-buses"
                        href="#">{{ sitekey('home_static_five', 'name') }}</a><a target="_blank"
                                                                                 data-stat="rental-bikes"
                                                                                 href="#">{{ sitekey('home_static_six', 'text') }}</a>
                    <a target="_blank" data-stat="rental-commerce_transport"
                       href="#">{{ sitekey('home_static_six', 'desc') }}</a>
                    <a target="_blank" data-stat="rental-other" href="#">{{ sitekey('home_static_six', 'title') }}</a>
                </div>
            </div>
            @if (Auth::guard('dealer')->check())
                <a class="header-new-btn"
                   href="{{ route('newcar') }}"><span>{{ sitekey('home_static_six', 'name') }}</span></a>
            @elseif (Auth::guard('trader')->check())
                <a class="header-new-btn"
                   href="{{ route('newspare') }}"><span>{{ sitekey('home_static_six', 'name') }}</span></a>
            @endif
        </div>
    </div>
</div>
</div>
