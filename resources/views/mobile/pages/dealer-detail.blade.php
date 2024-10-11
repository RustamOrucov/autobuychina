@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="header js-header custom-header-cardetail" style="">
        <div class="header__nav">
            <div class="header__nav-left"><span class="header__nav-btn--back js-header-back-btn" data-back-to-url=""></span>
            </div><a class="header__logo header__logo--red" href="/"><img alt="autobuychina" width="140"
                    src="{{ asset('storage/' . $logoImages->m_logo) }}"></a>
            <div class="header__nav-right">
                <button class="custom-share-btn-mobile" onclick="share()">
                    <img width="20" src="{{ asset('assets_/img/share.png') }}" alt="">
                </button>


            </div>
        </div>
    </div>


    <div class="content">
        <div class="shop-container">
            <div class="shop--cover"><img
                    src="{{ asset($dealer->background ? 'storage/' . $dealer->background : 'images/default-background.jpg') }}">
            </div>
            <div class="shop">
                <div class="shop-header">
                    <div class="shop--logo"
                        style="background-image: url({{ asset($dealer->logo ? 'storage/' . $dealer->logo : 'images/default-background.jpg') }})">
                    </div>
                    <h1 class="shop--title">{{ $dealer->d_name }}</h1>
                    <div class="shop--views custom-view-mobile"><img width="20" src="{{ asset('assets_/img/eye.png') }}"
                            alt=""> <span>{{ $dealer->view_count }}</span></div>
                    <div class="shop--ads-count">{{ $cars->count() }} announcement</div>
                </div>
                <div class="shop--description">{{ $dealer->content }}</div><a
                    class="shop--special-offer"><span>{{ $dealer->title }}</span></a>
            </div>
        </div>
        <div class="shop--location">
            <div class="shop--location-address"><a target="_blank"
                    href="https://www.google.com/maps?q={{ $dealer->latitude }},{{ $dealer->longitude }}&ll={{ $dealer->latitude }},{{ $dealer->longitude }}&z=15">
                    {{ $dealer->adress }}</a></div>
        </div>
        <div class="section-title section-title--shop tz-align-center">
            <p class="section-title_name">{{ $cars->count() }} announcement</p>
            <div class="products-sort styled js-select-category-open js-shops-sort" data-open="q_sort"><select
                    name="sort-variants" id="q_sort" style="width: 124.213px;">
                    <option data-path="/avtosalonlar/avtosalon-badamdar-satish-merkezi?q%5Bsort%5D=date" value="date">
                        Tarixə görə</option>
                    <option data-path="/avtosalonlar/avtosalon-badamdar-satish-merkezi?q%5Bsort%5D=price_asc"
                        value="price_asc">Əvvəlcə ucuz</option>
                    <option data-path="/avtosalonlar/avtosalon-badamdar-satish-merkezi?q%5Bsort%5D=price_desc"
                        value="price_desc">Əvvəlcə bahalı</option>
                    <option data-path="/avtosalonlar/avtosalon-badamdar-satish-merkezi?q%5Bsort%5D=mileage" value="mileage">
                        Yürüş</option>
                    <option data-path="/avtosalonlar/avtosalon-badamdar-satish-merkezi?q%5Bsort%5D=reg_year"
                        value="reg_year">Buraxılış ili</option>
                </select><span style="display: none;">Tarixə görə</span><span style="display: none;">Tarixə görə</span>
            </div>
        </div>
        <div class="products" data-advanced-select="">
            @foreach ($cars as $car)
                <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                        href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>

                    <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow" href="#"
                        data-id="{{ $car->id }}" style="display: inline-block;">
                        <div class="bookmarking"></div>
                    </a>

                    <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow" href="#"
                        data-id="{{ $car->id }}" style="display: none;">
                        <div class="bookmarking added"></div>
                    </a>


                    <div class="products-i__top"><img alt="{{ $car->carModel->name }}" loading="lazy"
                            src="{{ asset('storage/' . $car->car_image) }}">
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                            @if ($car->vincode !== null)
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--vin">VIN</div>
                                </div>
                            @endif
                        </div>


                    </div>
                    <div class="products-i__bottom">
                        <div class="products-i__price products-i__bottom-text">
                            <div class="product-price">{{ $car->price }} <span>{{ $car->Ro->name }}</span></div>
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



    <div class="bottom-phone-container js-bottom-phone-container"><a class="js-bottom-phone bottom-phone"
            data-log-show-phone="true" data-trigger-button="main" href="tel:(055)555 55 55">Call</a></div>
@endsection
