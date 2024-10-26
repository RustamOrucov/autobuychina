@extends('mobile.layout.layout')
@section('mobile_content')


    <div class="body-inner" style="">
        <div class="lotriver-top-banner" id="js-lotriver-top-banner">
            <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
            <div id="ad_ph_1" style="display:none;"></div>
        </div>


        <div class="header js-header custom-header-cardetail" style="">
            <div class="header__nav">
                <div class="header__nav-left"><span class="header__nav-btn--back js-header-back-btn back-button"
                        data-back-to-url=""></span></div><a class="header__logo header__logo--red" href="/"><img
                        alt="autobuychina" width="140" src="{{ asset('storage/' . $logoImages->m_logo) }}"></a>
                <div class="header__nav-right">
                    <button class="custom-share-btn-mobile" onclick="share()">
                        <img width="20" src="{{ asset('assets_/img/share.png') }}" alt="">
                    </button>
                    <div class="top-bookmarking">
                        <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow" href="#"
                            data-id="{{ $car->id }}" style="display: inline-block;">
                            <div class="bookmarking"></div>
                        </a>

                        <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow"
                            href="#" data-id="{{ $car->id }}" style="display: none;">
                            <div class="bookmarking added"></div>
                        </a>

                    </div>

                </div>
            </div>
        </div>




        <div class="content">
            <div class="product product--bordered">
                @if ($car->dealer != null)
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__i"><a class="breadcrumbs__i-text"
                                href="/autos?q%5Bmake%5D%5B%5D=3">{{ $car->carModel->name }}</a>
                        </li>
                        <li class="breadcrumbs__i"><a class="breadcrumbs__i-text"
                                href="/autos?q%5Bmake%5D%5B%5D=3&amp;q%5Bmodel%5D%5B%5D=1">{{ $car->ModelType->name }}</a>
                        </li>
                        <li class="breadcrumbs__i"><span class="breadcrumbs__i-text">Ad number № {{ $car->id + 999 }}</span>
                        </li>
                    </ul>
                    <a class="product-shop tz-d-flex tz-align-center"
                        href="{{ route('mobile.dealer.detail', ['dealer' => $car->Dealer]) }}">
                        <div class="product-shop__logo"
                            style="background-image: url({{ $car->Dealer && $car->Dealer->logo ? asset('storage/' . $car->Dealer->logo) : 'Auto BuyChina' }})">
                        </div>
                        <div class="product-shop__info">
                            <div class="product-shop__info-title">
                                {{ $car->Dealer && $car->Dealer->d_name ? $car->Dealer->d_name : 'Auto BuyChina' }}</div>
                            <div class="product-shop__info-count">{{ $car->Dealer->cars->count() }} cars</div>
                        </div>
                        <div class="product-shop__arrow"></div>
                    </a>
                @endif
                <div class="product-photos">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"
                                style="background-image: url('{{ asset('storage/' . $car->car_image) }}'); width: 422px;">
                            </div>
                            @foreach ($car->carImages as $car)
                                <div class="swiper-slide"
                                    style="background-image: url('{{ asset('storage/' . $car->image) }}'); width: 422px;">
                                </div>
                            @endforeach


                        </div>
                        <div class="product-photos__slider-counter"></div>
                    </div>

                    <div class="reveal-modal product-gallery js-product-gallery tz-d-flex"
                        style="visibility: visible; display: none;">

                        <div class="product-gallery__content">
                            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="pswp__bg"></div>
                                <div class="pswp__scroll-wrap">
                                    <div class="pswp__container" style="transform: translate3d(-10406px, 0px, 0px);">
                                        <div class="pswp__item"
                                            style="display: block; transform: translate3d(10879px, 0px, 0px);">
                                            <div class="pswp__zoom-wrap"
                                                style="transform: translate3d(0px, 84px, 0px) scale(1);"><img
                                                    class="pswp__img" src=""
                                                    style="opacity: 1; width: 422px; height: 317px;"></div>
                                        </div>
                                        <div class="pswp__item" style="transform: translate3d(9933px, 0px, 0px);">
                                            <div class="pswp__zoom-wrap"
                                                style="transform: translate3d(31px, 0px, 0px) scale(1);"><img
                                                    class="pswp__img" src=""
                                                    style="opacity: 1; width: 360px; height: 484px;"></div>
                                        </div>
                                        <div class="pswp__item"
                                            style="display: block; transform: translate3d(10406px, 0px, 0px);">
                                            <div class="pswp__zoom-wrap"
                                                style="transform: translate3d(0px, 84px, 0px) scale(1);"><img
                                                    class="pswp__img" src=""
                                                    style="opacity: 1; width: 422px; height: 316px;"></div>
                                        </div>
                                    </div>
                                    <div class="pswp__ui pswp__ui--hidden">
                                        <div
                                            class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap pswp__element--disabled">
                                            <div class="pswp__share-tooltip"></div>
                                        </div>

                                        <button class="pswp__button pswp__button--arrow--left pswp__element--disabled"
                                            title="Previous (arrow left)">
                                        </button>

                                        <button class="pswp__button pswp__button--arrow--right pswp__element--disabled"
                                            title="Next (arrow right)">
                                        </button>

                                        <div class="pswp__caption pswp__element--disabled">
                                            <div class="pswp__caption__center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-section product-header">
                    <div class="tz-d-flex">
                        <div class="product-price">
                            <div class="product-price__i product-price__i--bold">{{ $car->price }}
                                {{ $car->Ro->name }}</div>
                        </div>
                    </div>
                    <h1 class="product-name">{{ $car->carModel->name }}
                        {{ $car->ModelType->name }}, <span class="nobr">2.0 L</span>, <span
                            class="nobr">{{ $car->year }}
                            il</span>, <span class="nobr">{{ $car->odometer_km }} km</span><span
                            class="custom-class-mobile-drive"> {{ $car->Drive->name }}</span></h1>
                </div>
                @if ($car->Dealer != null)
                    <a href="{{ route('mobile.dealer.detail', ['dealer' => $car->Dealer]) }}">
                        <div class="product-installment">
                            <div class="tz-btn tz-btn--primary tz-btn--full js-installment-modal-btn"
                                data-stat="installment-modal-call-btn">{{ $car->Dealer->d_name }}</div>

                        </div>
                    </a>
                @endif
                <div class="product-divider"></div>

                <ul class="product-properties product-section product-table">
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_key_two', 'desc') }}</div>
                        <div class="product-table__row-value">{{ $car->region->name ?? '' }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_key', 'title') }}</div>
                        <div class="product-table__row-value"><a target="_blank" href="#"
                                onclick="return false;">{{ $car->carModel->name }}</a></div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_key', 'text') }}</div>
                        <div class="product-table__row-value"><a target="_blank" href="#"
                                onclick="return false;">{{ $car->ModelType->name }}</a></div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">Year</div>
                        <div class="product-table__row-value"><a target="_blank" href="#"
                                onclick="return false;">{{ $car->year }}</a>
                        </div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_key_three', 'title') }}</div>
                        <div class="product-table__row-value">{{ $car->ban->name }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_key_three', 'name') }}</div>
                        <div class="product-table__row-value">{{ $car->Cylinder->name }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">Engine</div>
                        <div class="product-table__row-value">{{ $car->EngineVolume->name / 1000 }}
                            L/{{ $car->engine_v }}a.g./{{ $car->FuelType->name }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">Millage</div>
                        <div class="product-table__row-value">{{ $car->odometer_km }} km</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_static_four', 'text') }}</div>
                        <div class="product-table__row-value">{{ $car->Transmission->name }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_static_four', 'desc') }}</div>
                        <div class="product-table__row-value">{{ $car->Damage->name }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">New</div>
                        <div class="product-table__row-value"> {{ $car->used === 1 ? 'Yes' : 'No' }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">Which market is it collected for</div>
                        <div class="product-table__row-value">{{ $car->market->name }}</div>
                    </li>
                    <li class="product-table__row">
                        <div class="product-table__row-name">{{ sitekey('filter_key_six', 'title') }}</div>
                        <div class="product-table__row-value"><span class="translation_missing"
                                title="translation missing: az.seats_counts.5">{{ $car->of_passenger }}</span></div>
                    </li>

                    <li class="product-table__row">
                        <div class="product-table__row-name">Situation</div>
                        <div class="product-table__row-value">
                            @if ($car->crashed === 1)
                                crashed
                            @endif
                            @if ($car->painted === 1)
                                painted
                            @endif
                            @if ($car->for_spare_parts === 1)
                                for spare parts
                            @endif
                        </div>
                    </li>
                </ul>
                <div class="product-divider"></div>
                <div class="product-section">
                    <div class="product-vin">
                        <div class="tz-d-flex tz-align-center">
                            <div class="product-vin__title">VIN-kod:<span class="js-copy-text">{{ $car->vincode }}</span>
                            </div>
                            <div class="product-vin__copy">
                                <div class="product-vin__copy-icon js-copy-icon" style="cursor:pointer;">
                                </div>
                                <div class="product-vin__copy-text js-copy-copied is-hidden">Copied</div>
                            </div>
                        </div>
                        <div class="product-vin__info">Check the VIN code before buying the car.</div><a target="_blank"
                            class="product-vin__check-link"
                            href="https://google.com/search?tbm=isch&amp;q={{ $car->vincode }}">Search on the
                            internet</a>
                    </div>
                </div>
                <div class="product-divider"></div>
                <section class="product-section">
                    <div class="product-description-container js-description-container is-expanded"><input
                            class="product-description__checkbox input--hidden" id="description-btn"
                            type="checkbox"><label
                            class="product-description__btn product-description__btn--more js-description-show-more"
                            for="description-btn">Read more</label>
                        <div class="product-description__content js-description-content">
                            {{ $car->item_comment }}
                        </div>
                    </div>
                </section>
                <div class="product-divider"></div>
                <section class="product-section product-section--wide">
                    <ul class="product-extras tz-d-flex tz-align-center tz-gap-10 tz-wrap-wrap">
                        @foreach ($equipments as $equipment)
                            <li class="product-extras__i">{{ $equipment->name }}</li>
                        @endforeach



                    </ul>
                </section>
                <div class="product-divider"></div>
                <div class="product-section">
                    @if ($car->Dealer != null)
                        <a href="{{ route('mobile.dealer.detail', ['dealer' => $car->Dealer]) }}">
                            <div class="product-owner tz-d-flex tz-align-center tz-justify-between">
                                <div class="product-owner__info">
                                    <div class="product-owner__info-name">{{ $car->Dealer->d_name }}</div>
                                    <div class="product-owner__info-schedule">Every day:
                                        {{  substr($car->Dealer->opening_time, 0, 5) }} -
                                        {{  substr($car->Dealer->closing_time, 0, 5) }}</div>
                                </div>
                                <div class="product-owner__logo"
                                    style="background-image: url({{ asset($car->Dealer->logo ? 'storage/' . $car->Dealer->logo : 'images/default-background.jpg') }})">
                                </div>
                            </div>
                        </a>
                    @endif
                    <div class="product-phones js-owner-phones"><a class="product-phones__i js-product-phones-link"
                            data-phone="(055) 555 55 55 " data-log-show-phone="true" data-trigger-button="contact"
                            href="#"><span class="product-phones__i-value">(055) 555 55 55</span><span
                                class="product-phones__i-text">Call</span></a></div>

                </div>
                <div class="product-divider"></div>
                <section class="product-section product-statistics product-table">
                    <div class="product-table__row">
                        <div class="product-table__row-name">Listing Number</div>
                        <div class="product-table__row-value">{{ $car->id + 999 }}</div>
                    </div>
                    <div class="product-table__row">
                        <div class="product-table__row-name">View count</div>
                        <div class="product-table__row-value">{{ $car->view_count }}</div>
                    </div>
                    <div class="product-table__row">
                        <div class="product-table__row-name">Updated</div>
                        <div class="product-table__row-value">{{ $car->updated_at->format('d.m.Y') }}</div>
                    </div>
                </section>

                <div class="product-actions product-actions--bordered">

                    <div class="product-divider"></div>

                    <div class="product-actions__bottom"><a
                            class="product-actions__i product-actions__i--report js-product-report js-product-report-btn"
                            href="#" onclick="return false;">Report</a></div>
                </div>

                {{-- report modal start  --}}

                <div class="reveal-modal report-modal js-modal-report reveal-modal_opened custom-mobile-report"
                    id="report" style="visibility: visible;display:none">
                    <form action="{{ route('report') }}" class="simple_form default-form new_report" id="new_report"
                        method="post"><input type="hidden" id="access_token" autocomplete="off">
                        @csrf
                        <input type="text" name="trap_field" style="display:none">
                        <div class="report-modal__header tz-d-flex tz-align-center tz-justify-between">
                            <div class="report-modal__header-title">Complain</div>
                            <div class="close-reveal-modal"></div>
                        </div>
                        <div class="report-modal__content">

                            <div>
                                <select id="mon-menu-deroulant" name="title" required>
                                    <option value="">Reason for complaint</option>
                                    <option value="It is impossible to stay interested">It is impossible to stay interested
                                    </option>
                                    <option value="The advertisement is not current">The advertisement is not current
                                    </option>
                                    <option value="Wrong price">Wrong price</option>
                                    <option value="Wrong indicators">Wrong indicators</option>
                                    <option value="Repeat advertisement">Repeat advertisement</option>
                                    <option value="Wrong city">Wrong city </option>
                                    <option value="The pictures are not correct">The pictures are not correct </option>
                                    <option value="The car is delivered by order">The car is delivered by order</option>
                                    <option value="Suspicions of fraud">Suspicions of fraud</option>
                                    <option value="The car is from the showroom">The car is from the showroom</option>
                                </select>
                            </div>

                            <hr class="js-report-divider">

                            <div class="input text optional report_body">
                                <textarea required rows="3" class="text optional form-control js-body-input" data-title="Şikayəti təsvir edin"
                                    placeholder="Describe the complaint max:400" name="description" id="report_body"></textarea>
                            </div>
                            <hr>
                        </div>
                        <div class="report-modal__footer"><button type="submit" data-disable-with=""
                                class="tz-btn tz-btn--blue tz-btn--full tz-btn--spinner js-auth-iframe-link">Send</button>
                        </div>
                    </form>
                </div>


                {{-- report model end --}}
                <div class="reveal-modal tz-confirm-modal js-report-success">

                </div>
                <div class="reveal-modal-bg js-report-reveal-modal-bg" style="display: none; cursor: pointer;"></div>
                <form class="simple_form default-form new_report" id="new_report" data-advanced-select="true"
                    data-auth-url="https://hello.turbo.az/?return_to=aHR0cHM6Ly90dXJiby5hei9hdXRvcy84ODAxNjMzLWJtdy0zMjg="
                    novalidate="novalidate" action="/autos/8801633-bmw-328/reports" accept-charset="UTF-8"
                    data-remote="true" method="post">
                    <div class="reveal-modal select-category select-category--rounded select-category--short js-select-category select-category--product-report js-modal-report"
                        data-select="product-report" id="report">
                        <div class="select-category__header-container tz-justify-between">
                            <div class="select-category__header--back js-back-popup-btn">İmtina</div>
                            <div class="select-category__header"><span
                                    class="select-category__header--title js-reports-modal-title"
                                    data-title="Şikayət səbəbi">Şikayət səbəbi</span></div>
                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                        </div>
                        <div class="select-category__body report__reason js-report-reason"><input
                                class="js-reports-reason-id" autocomplete="off" type="hidden"
                                name="report[report_reason_id]" id="report_report_reason_id">
                            <div class="select-category__i js-category-select-item" data-id="1">
                                <div class="select-category__i-name">Əlaqə saxlamaq olmur</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="2">
                                <div class="select-category__i-name">Elan aktual deyil</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="3">
                                <div class="select-category__i-name">Yanlış qiymət</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="5">
                                <div class="select-category__i-name">Yanlış göstəricilər</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="6">
                                <div class="select-category__i-name">Təkrar elan</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="7">
                                <div class="select-category__i-name">Yanlış şəhər</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="4">
                                <div class="select-category__i-name">Şəkillər düzgün deyil</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="42">
                                <div class="select-category__i-name">Avtomobil sifarişlə çatdırılır</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="9">
                                <div class="select-category__i-name">Dələduzluqda şübhələr</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                            <div class="select-category__i js-category-select-item" data-id="8">
                                <div class="select-category__i-name">Avtomobil salondandır</div>
                                <div class="select-category__i--arrow"></div>
                            </div>
                        </div>
                        <div class="select-category__body report__description js-report-description">
                            <div class="input text optional report_description field_with_hint asdeh217ds">
                                <textarea class="text optional form-control" name="report[description]" id="report_description"></textarea><span class="hint">Do not enter anything
                                    here.</span>
                            </div>
                            <div class="input text optional report_body">
                                <textarea rows="6" class="text optional form-control" placeholder="Şikayəti təsvir edin" name="report[body]"
                                    id="report_body"></textarea>
                            </div>
                            <div class="tz-container"><button name="button" type="submit"
                                    class="tz-btn tz-btn--primary tz-btn--full">Göndərmək</button></div>
                        </div>
                    </div>
                </form>
                <div class="report_response" id="report_response"></div>
                <div class="lotriver-load-banner" id="js-lotriver-load-banner">
                    <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                    <div id="ad_ph_2" style="display:none;"></div>
                </div>
            </div>
            <div class="tz-divider"></div>


            <div class="tz-section">
                <div class="tz-section__title tz-d-flex tz-justify-between tz-align-center">
                    <p class="tz-section__title-name">Similar listings</p><a class="tz-section__title-more" target="_blank"
                        href="#" onclick='return false;'>Show all</a>
                </div>
                <div class="products tz-section__list">

                    @foreach ($cars as $car)
                    <div class="products-i"><a class="products-i__link" target="_self"
                        href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>
                        <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                        href="#" data-id="{{ $car->id }}" style="display: inline-block;">
                        <div class="bookmarking"></div>
                    </a>

                    <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true"
                        rel="nofollow" href="#" data-id="{{ $car->id }}"
                        style="display: none;">
                        <div class="bookmarking added"></div>
                    </a>

                    <div class="products-i__top"><img alt="{{ $car->ModelType->name }}" loading="lazy"
                            src="{{ asset('storage/' . $car->car_image) }}">
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                        <div class="products-i__info"></div>
                    </div>
                    <div class="products-i__bottom">
                        <div class="products-i__price products-i__bottom-text">
                            <div class="product-price">{{ $car->price }} <span>{{ $car->Ro->name}}</span></div>
                        </div>
                        <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}
                            {{ $car->ModelType->name }}</div>
                        <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                            {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                        <div class="products-i__datetime">{{ $car->region->name ?? '' }},
                            {{ $car->created_at->diffForHumans() }}</div>
                    </div>
                </div>
                    @endforeach


                </div>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            on: {
                slideChange: function() {
                    var currentSlide = swiper.realIndex + 1;
                    var totalSlides = swiper.slides.length;
                    document.querySelector('.product-photos__slider-counter').textContent = currentSlide + '/' +
                        totalSlides;
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            var currentSlide = swiper.realIndex + 1;
            var totalSlides = swiper.slides.length;
            document.querySelector('.product-photos__slider-counter').textContent = currentSlide + '/' +
                totalSlides;
        });



document.querySelector('.back-button').addEventListener('click', function() {
    window.history.back();
});
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
        });
    });
});
    </script>
@endsection
