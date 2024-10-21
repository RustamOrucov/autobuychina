{{-- popup start --}}


<div class="popup popup--drawer js-drawer" id="js-drawer">

    <div class="popup-header"><span class="header__nav-btn--back js-popup-back-btn"></span>
        <div class="popup-header__title">More</div>
        <div class="popup-header__title popup-header__title--settings">Ayarlar</div>
    </div>
    <div class="popup__content">
        <div class="popup__list">
            <div class="popup__list-i"><a class="popup__list-i_link popup__list-i_link--lang js-lang-switch"
                    href="#" onclick="return false;">Русский язык</a></div>
        </div>
        <div class="popup__list">
            <div class="popup__list-i"><a class="popup__list-i_link" href="{{ route('mobile.questions') }}">Support</a>
            </div>
        </div>
        <div class="popup__list">
            <div class="popup__list-i"><a class="popup__list-i_link" data-stat="more-moto-link" href="#"
                    onclick="return false;">Auto Catalog<span
                        class="popup__list-i_label popup__list-i_label--az"></span></a></div>
        </div>

        <div class="popup__list">
            <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link" href="/">All
                    cars</a></div>
            <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link"
                    href="{{ route('mobile.alldealers') }}">Dealers</a></div>
            <div class="popup__list-i popup__list-i--with-border"><a target="_blank" class="popup__list-i_link"
                    href="#" onclick="return false;">Spare parts and accessories</a></div>

            <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link js-popup-drawer-open"
                    data-open="contacts" id="mobile-contact-open" href="#" onclick='return false;'>Contact Us</a>
            </div>

        </div>

        <div class="popup__list">
            <div class="popup__list-i"><a class="popup__list-i_link" rel="nofollow" data-method="delete" href="#"
                    onclick="return false;">Logout</a></div>
        </div>
        {{-- <div class="popup__list-i popup__list-i--full-version"><a rel="nofollow" href="/?desktop_site=1">Tam
                versiya</a></div> --}}
    </div>
</div>
{{-- popuop end --}}

<div class="popup popup--low js-popup-drawer " data-popup-id="contacts">
    <div class="popup-header">
        <div class="popup-header__title">Contact methods</div>
        <div class="popup-header__right">
            <div class="popup-header__btn popup-header__btn--cancel js-popup-close"></div>
        </div>
    </div>
    <div class="popup__content">
        <div class="popup__list popup__list--no-indent">
            <div class="popup__list-i"><a
                    class="popup__list-i_link popup__list-i_link--with-icon popup__list-i_link--phones js-popup-drawer-open"
                    data-open="call" href="tel:+1234567890">Call</a></div>
            <div class="popup__list-i"><a
                    class="popup__list-i_link popup__list-i_link--with-icon popup__list-i_link--email"
                    href="mailto:autobuychina.com">Write a letter</a></div>
            <div class="popup__list-i"><a target="_blank"
                    class="popup__list-i_link popup__list-i_link--with-icon popup__list-i_link--facebook"
                    href="https://www.facebook.com">Facebook</a></div>
            <div class="popup__list-i"><a target="_blank"
                    class="popup__list-i_link popup__list-i_link--with-icon popup__list-i_link--instagram"
                    href="https://www.instagram.com">Instagram</a></div>
        </div>
    </div>
</div>



{{-- ////////////////////////      --}}


<div class="tab-bar-container">
    <div class="tab-bar js-bar">
        <ul>
            <li><a class="tab-bar__link @if (Request::is('mobile')) active @endif" href="/"><i
                        class="tab-bar__link-icon"><svg height="20" viewBox="0 0 20 20" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="evenodd">
                                <path
                                    d="M29.568.174c.241-.232.623-.232.864 0l9.25 8.866c.206.205.318.475.318.751 0 .574-.468 1.042-1.042 1.042H37.5v7.5c0 .92-.746 1.667-1.667 1.667l-3.85-.001V20h-3.967l-.001-.001h3.968v-5.01c0-.514-.386-.936-.883-.994l-.117-.007h-1.967c-.553 0-1 .448-1 1L28.015 20h-3.848c-.873 0-1.588-.669-1.66-1.522l-.007-.144v-7.5h-1.458c-.574 0-1.042-.468-1.042-1.042 0-.276.112-.546.308-.741z"
                                    transform="translate(-29 -680) translate(0 655) translate(9 25)"></path>
                            </g>
                        </svg></i><span class="tab-bar__link-text">Home</span></a></li>
            <li><a class="tab-bar__link @if (Request::is('mobile/favorite')) active @endif"
                    href="{{ route('mobile.favorite') }}"><i class="tab-bar__link-icon"><svg height="20"
                            viewBox="0 0 24 20" width="24" xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="evenodd">
                                <g>
                                    <path
                                        d="M19.787.83C18.85.311 17.773.014 16.625.014c-2.026 0-3.84.923-5.037 2.37C10.384.938 8.572.015 6.544.015c-1.145 0-2.22.297-3.16.814C1.367 1.946 0 4.094 0 6.563 0 7.27.115 7.947.323 8.58 1.447 13.631 11.588 20 11.588 20S21.722 13.63 22.848 8.58c.207-.634.324-1.312.324-2.018 0-2.468-1.367-4.615-3.385-5.734z"
                                        transform="translate(-250 -680) translate(0 655) translate(232 25) translate(18)">
                                    </path>
                                </g>
                            </g>
                        </svg></i><span class="tab-bar__link-text">Favorites</span></a></li>
            <li><a class="tab-bar__link tab-bar__link--centered" href="#" onclick="return false;"><i
                        class="tab-bar__link-icon"><svg height="45" viewBox="0 0 46 45" width="46"
                            xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circlegradient" x1="0%" x2="98.965%" y1="0%"
                                    y2="98.965%">
                                    <stop offset="0%" stop-color="#CA1016"></stop>
                                    <stop offset="43.571%" stop-color="#C01817"></stop>
                                    <stop offset="100%" stop-color="#B41312"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd" transform="translate(.5)">
                                <circle style="fill:#77c81d" cx="22.5" cy="22.5"
                                    fill="url(#circlegradient)" r="22.5"></circle>
                                <path
                                    d="M32.619 21.286h-9.31V12.38a.81.81 0 1 0-1.619 0v8.905h-9.309a.81.81 0 1 0 0 1.619h9.31v9.714a.81.81 0 1 0 1.619 0v-9.714h9.309a.81.81 0 1 0 0-1.62z"
                                    fill="#FFF" fill-rule="nonzero" stroke="#FFF" stroke-width="1.171"></path>
                            </g>
                        </svg></i><span class="tab-bar__link-text">New add</span></a></li>
            <li><a class="tab-bar__link" href="#" onclick="return false;"><i
                        class="tab-bar__link-icon tab-bar__link-icon--rounded"><svg height="20"
                            viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="evenodd">
                                <path
                                    d="M9.898 0C4.432 0 0 4.431 0 9.898c0 5.466 4.432 9.898 9.898 9.898 5.467 0 9.899-4.432 9.899-9.898C19.797 4.43 15.365 0 9.898 0zm0 2.96c1.809 0 3.275 1.466 3.275 3.273 0 1.809-1.466 3.274-3.275 3.274-1.808 0-3.273-1.465-3.273-3.274 0-1.807 1.465-3.273 3.273-3.273zm-.002 14.248c-1.804 0-3.456-.657-4.73-1.745-.31-.264-.49-.653-.49-1.06 0-1.833 1.484-3.3 3.318-3.3h3.81c1.834 0 3.312 1.467 3.312 3.3 0 .408-.178.795-.489 1.06-1.274 1.088-2.927 1.745-4.73 1.745z"
                                    transform="translate(-326 -680) translate(0 655) translate(306 25) translate(20)">
                                </path>
                            </g>
                        </svg></i><span class="tab-bar__link-text">Cabinet</span></a></li>
            <li>
                <div class="tab-bar__link js-drawer-open"><i class="tab-bar__link-icon"><svg height="20"
                            viewBox="0 0 28 22" width="26" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.917 18.005c.598 0 1.083.56 1.083 1.25s-.485 1.25-1.083 1.25H2.083c-.598 0-1.083-.56-1.083-1.25s.485-1.25 1.083-1.25zm0-8c.598 0 1.083.56 1.083 1.25s-.485 1.25-1.083 1.25H2.083c-.598 0-1.083-.56-1.083-1.25s.485-1.25 1.083-1.25zm0-9c.598 0 1.083.56 1.083 1.25s-.485 1.25-1.083 1.25H2.083C1.485 3.505 1 2.945 1 2.255s.485-1.25 1.083-1.25z"
                                fill-rule="nonzero"></path>
                        </svg></i><span class="tab-bar__link-text">More</span></div>
            </li>
        </ul>
    </div>
</div>

<div class="popup-background-overlay js-background-overlay"></div>

<script>
    document.getElementById('mobile-contact-open').addEventListener('click', function() {
        document.querySelector('.js-popup-drawer').classList.toggle('open');
        document.querySelector('.popup-background-overlay').classList.toggle('new-overlay');
    });

    document.querySelector('.js-popup-close').addEventListener('click', function() {
        document.querySelector('.js-popup-drawer').classList.remove('open');
        document.querySelector('.popup-background-overlay').classList.remove('new-overlay');

    })


    document.addEventListener('click', function(event) {
        var popupDrawer = document.querySelector('.js-popup-drawer');
        var isClickInside = popupDrawer.contains(event.target) || event.target.id === 'mobile-contact-open';

        if (!isClickInside) {
            popupDrawer.classList.remove('open');
            document.querySelector('.popup-background-overlay').classList.remove('new-overlay');

        }
    });
</script>
