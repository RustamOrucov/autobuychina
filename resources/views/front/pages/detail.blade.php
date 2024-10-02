@extends('front.layout.layout')
@section('front_content')
    <div class="ads">
        <div class="breadcrumbs-container">
            <div class="tz-container tz-align-center tz-d-flex">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__i"><a class="breadcrumbs__i-link"
                            href="/autos?q%5Bmake%5D%5B%5D=1">{{ $car->carModel->name }}</a></li>
                    <li class="breadcrumbs__i"><a class="breadcrumbs__i-link"
                            href="/autos?q%5Bmake%5D%5B%5D=1&amp;q%5Bmodel%5D%5B%5D=5245">{{ $car->ModelType->name }}</a>
                    </li>
                    <li class="breadcrumbs__i"><span class="breadcrumbs__i-text">Ad number № 8736387</span></li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="product-heading-container">
                <div class="js-product-heading product-heading tz-d-flex tz-align-center tz-justify-between">
                    <div class="tz-container tz-d-flex tz-align-center tz-justify-between">
                        <div class="product-heading__left tz-d-flex tz-align-center">
                            <h1 class="product-title">{{ $car->carModel->name }} {{ $car->ModelType->name }} TUNED
                                {{ $car->engine_v }}.L,{{ $car->year }},25 000 km</h1>
                        </div>
                        <div class="product-heading__right tz-d-flex tz-align-center">
                            <div class="product-bookmarks">
                                <a class="product-bookmarks__link added hide js-unbookmark-item" data-remote="true"
                                    rel="nofollow" data-id="{{ $car->id }}">In favorites</a>
                                <a class="product-bookmarks__link js-bookmark-item" data-remote="true" rel="nofollow"
                                    data-id="{{ $car->id }}">
                                    Save in favorites</a>
                            </div>

                            <div class="product-report">
                                <a class="product-report__btn js-product-report-btn" data-reported-text="Şikayət etmisiniz"
                                    data-not-allowed="true" href="#">Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product tz-container">
                <div class="tz-d-flex tz-justify-between tz-gap-20">
                    <main class="product-content">
                        <section class="product-section product-photos" style="position: relative;">
                            <div class="previues"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="next"><i class="fa-solid fa-angle-right"></i></div>
                            <div class="zoom-img"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></div>
                            <div class="counter"><span>1/5</span></div>
                            <div class="single-item">
                                <div class="im-box"><img id="ma-img" width="100%" height="100%" data-hover=""
                                        src="{{ asset('storage/' . $car->car_image) }}" alt=""></div>


                            </div>
                        </section>
                        <div class="product-photos__slider-nav">
                            @foreach ($car->carImages as $image)
                                <div class="product-photos__slider-nav-i js-open-gallery active">
                                    <div class="product-photos__slider-nav-i_picture"
                                        style="background-image: url({{ asset('asset/' . $image->image) }});"></div>
                                </div>
                            @endforeach


                            <div class="product-photos__slider-nav-i js-open-gallery">
                                <div class="product-photos__slider-nav-i_picture"
                                    style="background-image: url('/assets/img/bmw.jpg')">
                                    <div
                                        class="product-photos__slider-nav-i_text tz-d-flex tz-align-center tz-justify-center">
                                        +7 şəkil</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-section product-section--without-border-top">
                            <ul class="product-statistics">
                                <li class="product-statistics__i"><span class="product-statistics__i-text">Updated:
                                        {{ $car->created_at->format('d.m.Y') }}</span></li>
                                <li class="product-statistics__i"><span class="product-statistics__i-text">View Count :
                                        {{ $car->view_count }}</span></li>
                            </ul>
                        </div>
                        <div class="product-section product-section--wide">
                            <div class="product-properties tz-d-flex tz-justify-between tz-gap-10">
                                <div class="product-properties__column">
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">City</label>
                                        <span class="product-properties__i-value">{{ $car->region->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Brand</label>
                                        <span class="product-properties__i-value">{{ $car->carModel->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Model</label>
                                        <span class="product-properties__i-value">{{ $car->ModelType->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Year</label>
                                        <span class="product-properties__i-value">{{ $car->year }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Color</label>
                                        <span class="product-properties__i-value">{{ $car->Cylinder->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Engine</label>
                                        <span class="product-properties__i-value">{{ $car->EngineVolume->name / 1000 }}
                                            L/{{ $car->engine_v }}a.g/{{ $car->FuelType->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Mileage</label>
                                        <span class="product-properties__i-value">{{ $car->odometer_km }} km</span>
                                    </div>
                                </div>
                                <div class="product-properties__column">
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Transmission</label>
                                        <span class="product-properties__i-value">{{ $car->Damage->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Gear</label>
                                        <span class="product-properties__i-value">{{ $car->Transmission->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">New ?</label>
                                        <span class="product-properties__i-value">
                                            {{ $car->used === 1 ? 'Yes' : 'No' }}
                                        </span>
                                    </div>
                                    {{-- <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Sahiblər</label>
                                        <span class="product-properties__i-value">1</span>
                                    </div> --}}
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Condition</label>
                                        <span class="product-properties__i-value">Vuruğu yoxdur, rənglənməyib</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($car->vincode)
                            <section class="product-section">
                                <div class="product-vin tz-d-flex tz-align-center tz-justify-between">
                                    <div class="product-vin__left">
                                        <div class="tz-d-flex tz-align-center tz-justify-between">
                                            <div class="product-vin__title">VIN-kod:
                                                <span class="js-copy-text">{{ $car->vincode }}</span>
                                            </div>
                                            <div class="product-vin__copy">
                                                <div class="product-vin__copy-icon js-copy-icon" style="cursor:pointer;">
                                                </div>
                                                <div class="product-vin__copy-text js-copy-copied is-hidden">Copied</div>
                                            </div>
                                        </div>
                                        <div class="product-vin__info">Check the VIN code before buying the car.</div>
                                    </div>
                                    <a target="_blank" class="product-vin__check-link"
                                        href="https://google.com/search?tbm=isch&amp;q={{ $car->vincode }}">Search on the
                                        internet</a>
                                </div>
                            </section>
                        @endif

                        @if ($car->item_comment !== null)
                            <div class="product-section product-section--wide">
                                <div class="product-description-container js-description-container">
                                    <div class="product-description__content js-description-content">
                                        <p>{{ $car->item_comment }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="product-section product-section--wide">
                            <div class="product-extras tz-d-flex tz-align-center tz-gap-10 tz-wrap-wrap">


                                @foreach ($equipments as $equipment)
                                    <li class="product-extras__i">{{ $equipment->name }}</li>
                                @endforeach


                            </div>
                        </div>
                        {{-- <div class="product-section product-section--wide">
                            <div class="product-actions tz-d-flex tz-align-center tz-justify-between">
                                <div class="product-actions__left">
                                    <form action="">
                                        <a href="#" class="product-actions__i js-click-edit-request">Duzelis et</a>
                                    </form>
                                    <form action="">
                                        <a href="#" class="product-actions__i js-click-expire-request">Elani Sil</a>
                                    </form>
                                </div>
                                <div class="product-actions__id">
                                    Elanın nömrəsi: 8769791
                                </div>
                            </div>
                        </div> --}}
                    </main>
                    <aside class="product-sidebar-container">
                        <div class="product-sidebar js-sticky-sidebar">
                            <div class="product-sidebar__box product-sidebar__box--bordered">
                                <div class="product-price">
                                    <div class="product-price__i product-price__i--bold">{{ $car->price }}
                                        {{ $car->Ro->name }}</div>
                                    <div class="product-price__i tz-mt-10">≈ 169 998 AZN</div>
                                </div>
                                {{-- <div class="product-labels tz-d-flex tz-gap-10 tz-mt-15">
                                    <div class="product-labels__i tz-d-flex tz-align-center">
                                        <div class="product-labels__i-icon product-labels__i-icon--loan"></div>Kredit
                                    </div>
                                    <div class="product-labels__i tz-d-flex tz-align-center">
                                        <div class="product-labels__i-icon product-labels__i-icon--barter"></div>Barter
                                    </div>
                                </div> --}}
                                <div class="product-shop">
                                    <div class="product-shop__delimiter tz-mt-15"></div>
                                    <div class="product-shop__owner tz-d-flex tz-align-center">
                                        <div class="product-shop__owner-logo"
                                            style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F11%2F15%2F16%2F22%2F13%2F6cfeae00-e63c-4378-b671-3e6e74a22cab%2Fqayalogo.png)">
                                        </div>
                                        <div class="product-shop__owner-right">
                                            <div class="product-shop__owner-name">Qaya</div>
                                        </div>
                                    </div>
                                    <div class="product-phones tz-mt-15">
                                        <div class="product-phones__btn js-phones-click-btn" data-log-show-phone="true"
                                            data-stat="product-call-btn" data-trigger-button="main">
                                            <div class="product-phones__btn-title">Contact Number :</div>
                                            <div class="product-phones__btn-value">(010) 555 55 55</div>
                                        </div>

                                    </div>
                                    <div class="product-shop__delimiter tz-mt-15"></div>
                                    <div class="product-shop__promo">Məqsədimiz – məmnuniyyətinizdir</div>
                                    <div class="product-shop__description">Avtosalon "Qaya" – sərfəli barter, kredit və
                                        lizinq şərtləri. Sifarişlə Almaniya, Koreya və Amerikadan avtomobillərin gətirilməsi
                                        üzrə xidmətlər.</div>
                                    <div class="product-shop__count"><a
                                            class="product-shop__link product-shop__count-value" target="_blank"
                                            href="/avtosalonlar/avtosalon-qaya">18 listings</a></div>
                                    <div class="product-shop__delimiter tz-mt-15"></div>
                                    <div class="product-shop__schedule">Every day: 09:00 AM–09:00 PM</div>
                                    <div class="product-shop__location"><a target="_blank"
                                            class="product-shop__link product-shop__location-link"
                                            href="https://www.google.com/maps?q=40.413436%2C49.952466&amp;ll=40.413436%2C49.952466&amp;z=15">Bakı
                                            ş., Nizami r., R.Rüstəmov küç. 57a</a></div><a
                                        class="tz-btn tz-btn--blue tz-btn--full" target="_blank"
                                        href="/avtosalonlar/avtosalon-qaya">Dealership</a>
                                </div>
                            </div>
                            {{-- <div
                                class="product-services product-services--inline tz-d-flex tz-justify-between tz-align-center tz-gap-5">
                                <a id="bump_open" class="product-services__i product-services__i--bump"
                                    data-reveal-id="bump_modal" data-animation="fade" href="#bump_open">
                                    <div>
                                        <div class="product-services__i-title">İrəli çək</div>
                                        <div class="product-services__i-price"><span class="price-val">3</span><span
                                                class="price-cur">AZN</span>-dən</div>
                                    </div>
                                </a><a id="vip_open" class="product-services__i product-services__i--vip"
                                    data-reveal-id="vip_modal" data-animation="fade" href="#vip_open">
                                    <div>
                                        <div class="product-services__i-title">VIP</div>
                                        <div class="product-services__i-price"><span class="price-val">5</span><span
                                                class="price-cur">AZN</span>-dən</div>
                                    </div>
                                </a><a id="featured_open" class="product-services__i product-services__i--featured"
                                    data-reveal-id="featured_modal" data-animation="fade" href="#featured_open">
                                    <div>
                                        <div class="product-services__i-title">Premium</div>
                                        <div class="product-services__i-price"><span class="price-val">7</span><span
                                                class="price-cur">AZN</span>-dən</div>
                                    </div>
                                </a></div> --}}
                            <div class="tz-mt-20"></div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="product-embed-and-related">
                <div class="tz-container">
                    <div class="section-title">
                        <p class="section-title_name">Similar ads</p><a class="section-title_more" target="_blank"
                            href="/autos?q%5Bmake%5D%5B%5D=14-lexus&amp;q%5Bmodel%5D%5B%5D=134">Show all</a>
                    </div>
                    <div class="products">

                        @foreach ($cars as $car)
                            <div class="products-i"><a class="products-i__link" target="_blank"
                                    href="{{ route('detail', ['car' => $car->id]) }}"></a>

                                <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                                    href="#" data-id="{{ $car->id }}" style="display: inline-block;">
                                    <div class="bookmarking"></div>
                                </a>

                                <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow"
                                    href="#" data-id="{{ $car->id }}" style="display: none;">
                                    <div class="bookmarking added"></div>
                                </a>
                                <div class="products-i__top"><img alt="{{ $car->ModelType->name }}" loading="lazy"
                                        src="{{ asset('storage/' . $car->car_image) }}">
                                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">{{ $car->price }}<span>USD</span></div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}
                                        {{ $car->ModelType->name }}</div>
                                    <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                                        {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km
                                    </div>
                                    <div class="products-i__datetime">{{ $car->region->name ?? '' }},
                                        {{ $car->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="reveal-modal report-modal js-modal-report reveal-modal_opened" id="report"
        style="visibility: visible;display:none">
        <form class="simple_form default-form new_report" id="new_report"
            data-auth-url="https://hello.turbo.az/?return_to=aHR0cHM6Ly90dXJiby5hei9hdXRvcy84NzUxMzMyLWxhbmQtcm92ZXItcmFuZ2Utcm92ZXI="
            novalidate="novalidate" action="/autos/8751332-land-rover-range-rover/reports" accept-charset="UTF-8"
            data-remote="true" method="post"><input type="hidden" name="access_token" id="access_token"
                autocomplete="off">
            <div class="report-modal__header tz-d-flex tz-align-center tz-justify-between">
                <div class="report-modal__header-title">Complain</div>
                <div class="close-reveal-modal"></div>
            </div>
            <div class="report-modal__content">
                <div>
                    <select id="mon-menu-deroulant">
                        <option>Reason for complaint</option>
                        <option value="option2">It is impossible to stay interested</option>
                        <option value="option3">The advertisement is not current</option>
                        <option value="option3">Wrong price</option>
                        <option value="option3">Wrong indicators</option>
                        <option value="option3">Repeat advertisement</option>
                        <option value="option3">Wrong city </option>
                        <option value="option3">The pictures are not correct </option>
                        <option value="option3">The car is delivered by order</option>
                        <option value="option3">Suspicions of fraud</option>
                        <option value="option3">The car is from the showroom</option>


                    </select>
                </div>
                <hr class="js-report-divider">
                <div class="input text optional report_description field_with_hint asdeh217ds">
                    <textarea class="text optional form-control" name="report[description]" id="report_description"></textarea><span class="hint">Do not enter anything here.</span>
                </div>
                <div class="input text optional report_body">
                    <textarea rows="1" class="text optional form-control js-body-input" data-title="Şikayəti təsvir edin"
                        placeholder="Şikayəti təsvir edin" name="report[body]" id="report_body"></textarea>
                </div>
                <hr>
            </div>
            <div class="report-modal__footer"><button name="button" type="submit" data-disable-with=""
                    class="tz-btn tz-btn--blue tz-btn--full tz-btn--spinner js-auth-iframe-link">Göndər</button></div>
        </form>
    </div>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const copyIcon = document.querySelector('.js-copy-icon');
            const copyText = document.querySelector('.js-copy-text').textContent;
            const copiedMessage = document.querySelector('.js-copy-copied');

            copyIcon.addEventListener('click', function() {
                navigator.clipboard.writeText(copyText).then(function() {
                    copiedMessage.classList.remove('is-hidden');

                    setTimeout(function() {
                        copiedMessage.classList.add('is-hidden');
                    }, 2000);
                }).catch(function(err) {
                    console.error('Kopyalama başarısız oldu: ', err);
                });
            });
        });


        // modal show and close function
        function toggleModal(displayState) {
            document.getElementById('report').style.display = displayState;
        }

        document.querySelector('.js-product-report-btn').addEventListener('click', function(event) {
            event.preventDefault();
            toggleModal('block');
        });

        document.querySelector('.close-reveal-modal').addEventListener('click', function(event) {
            event.preventDefault();
            toggleModal('none');
        });
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('report');
            if (modal.style.display === 'block' && !modal.contains(event.target) && !event.target.matches(
                    '.js-product-report-btn')) {
                toggleModal('none');
            }
        });

        // function end
    </script>
@endsection
