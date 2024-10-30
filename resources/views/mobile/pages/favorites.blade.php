@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true;
    ?>

    <div class="header js-header">
        <div class="header__nav ">

            <div class="header__nav-title ">{{sitekey('home_static','title')}}</div>

        </div>
    </div>

    <div class="products bookmarks" id="js-bookmarks-container">

        @foreach ($cars as $car)
            <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                    href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>
                <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow" href="#"
                    data-id="{{ $car->id }}" style="display: inline-block;">
                    <div class="bookmarking"></div>
                </a>

                <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow" href="#"
                    data-id="{{ $car->id }}" style="display: none;">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="{{ $car->ModelType->name }}" loading="lazy"
                        src="{{ asset('storage/' . $car->car_image) }}">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    @if ($car->vincode !== null)
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                            <div class="products-i__label products-i__label--vin">{{sitekey('home_car_three','title')}}</div>
                        </div>
                    @endif
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

    @if ($cars->isEmpty())
    <div class="bookmarks_empty" style="display: block;">
        <p>{{sitekey('detail_mobile_5','name')}}</p>
    </div>
    @endif
@endsection
