@extends('front.layout.layout')
@section('front_content')
    <div class=" shops">
        <div class="tz-container tz-align-center tz-d-flex breadcrumbs-container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__i"><span class="breadcrumbs__i-link" href="#">{{sitekey('avto_car','title')}}</span></li>
                <li class="breadcrumbs__i"><span class="breadcrumbs__i-text">{{ $dealer->d_name }}</span></li>
            </ul>
        </div>
        <div class="shop-container">
            <div class="shop--cover" style="background-image: url({{ asset($dealer->background ? 'storage/'.$dealer->background : 'images/default-background.jpg') }})">
            </div>
            <div class="shop-header">
                <div class="shop-header-left">
                    <div class="shop--logo" style="background-image: url({{ asset($dealer->logo ? 'storage/'.$dealer->logo : 'images/default-background.jpg') }})">
                    </div>
                    <div class="shop--products-count">{{$cars->count()}} {{sitekey('avto_car','desc')}}</div>
                </div>
                <div class="shop-header-right">
                    <div class="shop-header-text">
                        <h1 class="shop--title">{{ $dealer->d_name }}</h1>
                        <div class="shop-header-table">
                            <div class="shop-header-cell shop-header-cell_description">
                                <div class="shop--views"><svg class="icon-svg icon-svg--eye" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#eye"></use>
                                    </svg>{{ $dealer->view_count }}</div>
                                <h2 class="shop--description">{{ $dealer->content }}</h2>
                                <div class="shop--location-wrap"><svg class="icon-svg icon-svg--location" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#location"></use>
                                    </svg>
                                    <a target="_blank" class="shop--location"
                                    href="https://www.google.com/maps?q={{ $dealer->latitude }},{{ $dealer->longitude }}&ll={{ $dealer->latitude }},{{ $dealer->longitude }}&z=15">
                                   {{ $dealer->adress }}
                                 </a>
                                    </div>
                            </div>
                            <div class="shop-header-cell shop-header-cell_feedback">
                                <div class="shop-phones"><svg class="icon-svg icon-svg--phone" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#phone"></use>
                                    </svg>
                                    <div class="shop-phones-i"><a class="shop-phones--number" data-register-call="true" href="tel:{{ $dealer->phone }}">{{ $dealer->phone }}</a></div>
                                </div>
                                <div class="shop--schedule">{{sitekey('avto_car','text')}}: {{ substr($dealer->opening_time, 0, 5) }} - {{ substr($dealer->closing_time, 0, 5) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="shop--special-offer">{{ $dealer->title }}</div>
                </div>
            </div>
        </div>
        <div class="page-content page-content-shop tz-container">
            <div class="products-title">
                <p class="products-title-amount">{{$cars->count()}} {{sitekey('avto_car','desc')}}</p>
                <div class="products-title-sort js-shop-sort"><select name="sort-variants" id="sort-variants">
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=date" value="date">{{sitekey('avto_car_one','title')}}
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=price_asc" value="price_asc">
                        {{sitekey('avto_car_one','text')}}</option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=price_desc" value="price_desc">
                        {{sitekey('avto_car_one','desc')}}</option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=mileage" value="mileage">{{sitekey('avto_car_two','title')}}
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=reg_year" value="reg_year">
                            {{sitekey('avto_car_one','name')}}</option>
                    </select></div>
            </div>
            <div class="products">
            @foreach($cars as $car)


                <div class="products-i vipped featured salon"><a class="products-i__link" target="_blank" href="{{route('detail',['car'=>$car->id])}}"></a><a class="js-bookmark-item-8647294" data-remote="true" rel="nofollow" data-method="post" href="#">

                    </a>
                    <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                    href="#" data-id="{{ $car->id }}" style="display: inline-block;">
                    <div class="bookmarking"></div>
                </a>

                <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true"
                    rel="nofollow" href="#" data-id="{{ $car->id }}"
                    style="display: none;">
                    <div class="bookmarking added"></div>
                </a>
                    <div class="products-i__top custom-car-img-container">
                    <img alt="{{ $car->ModelType->name }}" loading="lazy" src="{{asset('storage/'.$car->car_image)}}">
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
{{--                            <div class="products-i__label products-i__label--salon">{{sitekey('avto_car_two','text')}}</div>--}}
                        </div>
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                            @if($car->status === 1)
                            <div class="products-i__label products-i__label--salon">{{sitekey('avto_car_two','desc')}}</div>
                            @else
                            <div class="products-i__label products-i__label--salon" style="background: red;color:white">{{sitekey('avto_car_two','name')}}</div>
                            @endif
                        </div>
                        <div class="products-i__info">

                        </div>
                    </div>

                    <div class="products-i__bottom">
                        <div class="products-i__price products-i__bottom-text">
                            <div class="product-price">{{$car->price}} <span>{{$car->Ro->name ?? 'USD'}}</span></div>
                        </div>
                        <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}   {{ $car->ModelType->name }}</div>
                        <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                            {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                        <div class="products-i__datetime">{{ $car->region->name ?? '' }} ,
                            {{ $car->created_at->diffForHumans() }}</div>
                    </div>
                </div>

            @endforeach

            </div>
        </div>
    </div>
@endsection
