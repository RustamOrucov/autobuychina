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
                    <li class="breadcrumbs__i"><span class="breadcrumbs__i-text">{{sitekey('car_detail','title')}} № {{ $car->id + 999 }}</span></li>
                </ul>
            </div>
            {{-- sdsd --}}
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
                                    {{sitekey('car_detail','text',)}}</a>
                            </div>

                            <div class="product-report">
                                <a class="product-report__btn js-product-report-btn" data-reported-text="Şikayət etmisiniz"
                                    data-not-allowed="true" href="#">{{sitekey('car_detail','desc')}}</a>
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
{{--                            <div class="zoom-img"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></div>--}}
                            <div class="counter"><span>1/5</span></div>
                            <div class="single-item">
                                <div class="im-box">
                                    <img id="ma-img" width="100%" height="100%" src="{{ asset('storage/' . $car->car_image) }}" alt="">
                                </div>
                            </div>
                        </section>
                        <div class="product-photos__slider-nav">

                            @foreach ($car->carImages as $image)
                                <div class="product-photos__slider-nav-i js-open-gallery active">
                                    <div class="product-photos__slider-nav-i_picture"
                                        style="background-image: url({{ asset('storage/' . $image->image) }});"></div>
                                </div>
                            @endforeach


                            <div class="product-photos__slider-nav-i js-open-gallery">
                                <div class="product-photos__slider-nav-i_picture"
                                    style="background-image: url('{{ asset('storage/' . $car->car_image) }}')">
                                    <div
                                        class="product-photos__slider-nav-i_text tz-d-flex tz-align-center tz-justify-center">
                                        +{{ $car->carImages->count() }} pictures</div>
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
                                        <label for="" class="product-properties__i-name">{{sitekey('filter_key_two', 'desc')}}</label>
                                        <span class="product-properties__i-value">{{ $car->region->name ?? '' }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">{{sitekey('filter_key', 'title')}}</label>
                                        <span class="product-properties__i-value">{{ $car->carModel->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">{{ sitekey('filter_key', 'text') }}</label>
                                        <span class="product-properties__i-value">{{ $car->ModelType->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">Year</label>
                                        <span class="product-properties__i-value">{{ $car->year }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">{{sitekey('filter_key_three', 'name')}}</label>
                                        <span class="product-properties__i-value">{{ $car->Cylinder->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">{{sitekey('filter_key_three','title')}}</label>
                                        <span class="product-properties__i-value">{{ $car->ban->name }}</span>
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
                                        <label for="" class="product-properties__i-name">{{sitekey('filter_static_four', 'desc')}}</label>
                                        <span class="product-properties__i-value">{{ $car->Damage->name }}</span>
                                    </div>
                                    <div class="product-properties__i">
                                        <label for="" class="product-properties__i-name">{{sitekey('filter_static_four', 'text')}}</label>
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
                                        <div class="product-vin__info">{{sitekey('car_detail','name')}}</div>
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
                                        <p>{!! $car->item_comment !!}</p>
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
                                        {{ $car->Ro->name ?? 'USD' }}</div>

                                </div>
                                {{-- <div class="product-labels tz-d-flex tz-gap-10 tz-mt-15">
                                    <div class="product-labels__i tz-d-flex tz-align-center">
                                        <div class="product-labels__i-icon product-labels__i-icon--loan"></div>Kredit
                                    </div>
                                    <div class="product-labels__i tz-d-flex tz-align-center">
                                        <div class="product-labels__i-icon product-labels__i-icon--barter"></div>Barter
                                    </div>
                                </div> --}}
                                @if (isset($car->Dealer))
                                <div class="product-shop">
                                    <div class="product-shop__delimiter tz-mt-15"></div>
                                    <div class="product-shop__owner tz-d-flex tz-align-center">
                                        <div class="product-shop__owner-logo"
                                            style="background-image: url({{ $car->Dealer && $car->Dealer->logo ? asset('storage/' . $car->Dealer->logo) : 'Auto BuyChina' }})">
                                        </div>
                                        <div class="product-shop__owner-right">
                                            <div class="product-shop__owner-name">
                                                {{ $car->Dealer && $car->Dealer->d_name ? $car->Dealer->d_name : 'Auto BuyChina' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-phones tz-mt-15">
                                        <div class="product-phones__btn js-phones-click-btn" data-log-show-phone="true"
                                            data-stat="product-call-btn" data-trigger-button="main">
                                            <div class="product-phones__btn-title">Contact Number :</div>
                                            <div class="product-phones__btn-value"><a href="tel:{{$adminSettings->phone ?? ''}}" style="color: #fff;text-decoration: none">{{$adminSettings->phone ?? ''}}</a></div>
                                        </div>

                                    </div>
                                    <div class="product-shop__delimiter tz-mt-15"></div>
                                    <div class="product-shop__promo">
                                        {{ $car->Dealer && $car->Dealer->title ? $car->Dealer->title : 'Auto Buy China' }}
                                    </div>
                                    <div class="product-shop__description">
                                        {{ $car->Dealer && $car->Dealer->content ? $car->Dealer->content : ' ' }}</div>
                                    @if ($car->Dealer && $car->Dealer != null)
                                        <div class="product-shop__count"><a
                                                class="product-shop__link product-shop__count-value" target="_blank"
                                                href="{{ route('avtosalon-detail', ['id' => $car->Dealer->id]) }}">{{ $car->Dealer->cars->count() }}
                                                listings</a></div>

                                        <div class="product-shop__delimiter tz-mt-15"></div>
                                        <div class="product-shop__schedule">Every day:
                                            {{ $car->Dealer && $car->Dealer->opening_time ? substr($car->Dealer->opening_time, 0, 5) : '' }}
                                            :
                                            {{ $car->Dealer && $car->Dealer->closing_time ? substr($car->Dealer->closing_time, 0, 5) : '' }}
                                        </div>

                                        <div class="product-shop__location"><a target="_blank"
                                                class="product-shop__link product-shop__location-link"
                                                href="https://www.google.com/maps?q={{ $car->Dealer->latitude }},{{ $car->Dealer->longitude }}&ll={{ $car->Dealer->latitude }},{{ $car->Dealer->longitude }}&z=15">
                                                {{ $car->Dealer->adress }}</a></div>
                                        <a class="tz-btn tz-btn--blue tz-btn--full" target="_blank"
                                            href="{{ route('avtosalon-detail', ['id' => $car->Dealer->id]) }}">Dealership</a>
                                    @endif

                                </div>
                                @endif

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
                                <div class="products-i__top custom-car-img-container"><img
                                        alt="{{ $car->ModelType->name }}" loading="lazy"
                                        src="{{ asset('storage/' . $car->car_image) }}">
                                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">{{ $car->price }}<span>{{ $car->Ro->name }}</span></div>
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
        <form action="{{ route('report') }}" class="simple_form default-form new_report" id="new_report" method="post"><input type="hidden"
                id="access_token" autocomplete="off">
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
                        <option value="It is impossible to stay interested">It is impossible to stay interested</option>
                        <option value="The advertisement is not current">The advertisement is not current</option>
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
                    <textarea required rows="1" class="text optional form-control js-body-input" data-title="Şikayəti təsvir edin"
                        placeholder="Describe the complaint max:400" name="description" id="report_body"></textarea>
                </div>
                <hr>
            </div>
            <div class="report-modal__footer"><button  type="submit" data-disable-with=""
                    class="tz-btn tz-btn--blue tz-btn--full tz-btn--spinner js-auth-iframe-link">Send</button></div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mainImage = document.getElementById('ma-img');
            const thumbnails = Array.from(document.querySelectorAll('.product-photos__slider-nav-i_picture'));
            const initialImage = "{{ asset('storage/' . $car->car_image) }}";
            let images = [initialImage, ...thumbnails.map(thumb => thumb.style.backgroundImage.slice(5, -2))];
            images[images.length - 1] = initialImage;
            const totalImages = images.length;
            let currentIndex = 0;

            mainImage.src = images[currentIndex];

            const counterElement = document.querySelector('.counter span');
            const updateCounter = () => {
                counterElement.textContent = `${currentIndex + 1}/${totalImages}`;
            };
            updateCounter();

            document.querySelector('.previues').addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                mainImage.src = images[currentIndex];
                updateCounter();
            });

            document.querySelector('.next').addEventListener('click', function () {
                currentIndex = (currentIndex + 1) % totalImages;
                mainImage.src = images[currentIndex];
                updateCounter();
            });

            if (totalImages > 10) {
                const extraImagesCount = totalImages - 10;
                const extraImagesElement = document.querySelector('.product-photos__slider-nav-i_text');
                extraImagesElement.textContent = `+${extraImagesCount} şəkil`;
            }
        });
    </script>

@endsection
