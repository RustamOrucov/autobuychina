@extends('front.layout.layout')
@section('front_content')
    <div class=" shops">
        <div class="tz-container tz-align-center tz-d-flex breadcrumbs-container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__i"><span class="breadcrumbs__i-link" href="#">Trader</span></li>
                <li class="breadcrumbs__i"><span class="breadcrumbs__i-text">{{ $trader->name }}</span></li>
            </ul>
        </div>
        <div class="shop-container">
            <div class="shop--cover"
                 style="background-image: url({{ asset($trader->background ? 'storage/'.$trader->background : 'images/default-background.jpg') }})">
            </div>
            <div class="shop-header">
                <div class="shop-header-left">
                    <div class="shop--logo"
                         style="background-image: url({{ asset($trader->logo ? 'storage/'.$trader->logo : 'images/default-background.jpg') }})">
                    </div>
                    <div class="shop--products-count">{{$spares->count()}} announcement</div>
                </div>
                <div class="shop-header-right">
                    <div class="shop-header-text">
                        <h1 class="shop--title">{{ $trader->t_name }}</h1>
                        <div class="shop-header-table">
                            <div class="shop-header-cell shop-header-cell_description">
                                <div class="shop--views">
                                    <svg class="icon-svg icon-svg--eye" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#eye"></use>
                                    </svg>{{ $trader->view_count }}</div>
                                <h2 class="shop--description">{{ $trader->item_comment }}</h2>
                                <div class="shop--location-wrap">
                                    <svg class="icon-svg icon-svg--location" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#location"></use>
                                    </svg>
                                    <a target="_blank" class="shop--location"
                                       href="https://www.google.com/maps?q={{ $trader->latitude }},{{ $trader->longitude }}&ll={{ $trader->latitude }},{{ $trader->longitude }}&z=15">
                                        {{ $trader->adress }}
                                    </a>
                                </div>
                            </div>
                            <div class="shop-header-cell shop-header-cell_feedback">
                                <div class="shop-phones">
                                    <svg class="icon-svg icon-svg--phone" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#phone"></use>
                                    </svg>
                                    <div class="shop-phones-i"><a class="shop-phones--number" data-register-call="true"
                                                                  href="tel:{{ $trader->phone }}">{{ $trader->phone }}</a>
                                    </div>
                                </div>
                                <div class="shop--schedule">Every day: {{ substr($trader->opening_time, 0, 5) }}
                                    - {{ substr($trader->closing_time, 0, 5) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="shop--special-offer">{{ $trader->name }}</div>
                </div>
            </div>
        </div>
        <div class="page-content page-content-shop tz-container">
            <div class="products-title">
                <p class="products-title-amount">{{$spares->count()}} announcement</p>
                <div class="products-title-sort js-shop-sort"><select name="sort-variants" id="sort-variants">
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=date" value="date">Tarixə görə
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=price_asc" value="price_asc">
                            Əvvəlcə ucuz
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=price_desc" value="price_desc">
                            Əvvəlcə bahalı
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=mileage" value="mileage">Yürüş
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=reg_year" value="reg_year">
                            Buraxılış ili
                        </option>
                    </select></div>
            </div>
            <div class="products">
                @foreach($spares as $spare)

                    <div class="products-i vipped featured salon"><a class="products-i__link" target="_blank"
                                                                     href="{{route('parts-detail',['spare'=>$spare->id])}}"></a><a
                            class="js-bookmark-item-{{ $spare->id }}" data-remote="true" rel="nofollow" data-method="post"
                            href="#">

                        </a>
                        <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                           href="#" data-id="{{ $spare->id }}" style="display: inline-block;">
                            <div class="bookmarking"></div>
                        </a>

                        <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true"
                           rel="nofollow" href="#" data-id="{{ $spare->id }}"
                           style="display: none;">
                            <div class="bookmarking added"></div>
                        </a>
                        <div class="products-i__top custom-car-img-container">
                            <img alt="Hyundai Grandeur" loading="lazy" src="{{asset('storage/'.$spare->spare_image)}}">
                            <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                {{--                            <div class="products-i__label products-i__label--salon">Salon</div>--}}
                            </div>
                            <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                @if($spare->status === 1)
                                    <div class="products-i__label products-i__label--salon">Active</div>
                                @else
                                    <div class="products-i__label products-i__label--salon"
                                         style="background: red;color:white">Deactive
                                    </div>
                                @endif
                            </div>
                            <div class="products-i__info">

                            </div>
                        </div>

                        <div class="products-i__bottom">
                            <div class="products-i__price products-i__bottom-text">
                                <div class="product-price">{{$spare->price}} </div>
                                {{--                                <span>{{$spare->ro->id}}</span>--}}
                            </div>
                            <div class="products-i__datetime">{{ $spare->region->name ?? '' }} ,
                                {{ $spare->created_at->diffForHumans() }}</div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
