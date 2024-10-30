@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true;
    ?>
    <div class="header js-header" style="">
        <div class="header__nav">

            <div class="custom-mobil-dealers ">Cabinet</div>


        </div>
    </div>
    <div class="body-inner">
        <div class="content">
            <div class="shop-container">
                <div class="shop--cover"><img
                        src="{{ asset($dealer->background ? 'storage/' . $dealer->background : '_assets/images/bg-themes/1.png') }}">
                </div>
                <div class="shop">
                    <div class="shop-header">
                        <div class="shop--logo"
                            style="background-image: url({{ asset($dealer->logo ? 'storage/' . $dealer->logo : '_assets/images/bg-themes/1.png') }})">
                        </div>
                        <h1 class="shop--title">{{ $dealer->d_name }}</h1>
                        <div class="shop--views"><img width="20" src="{{ asset('assets_/img/eye.png') }}"
                                alt=""> {{ $dealer->view_count }}</div>
                        <div class="shop--ads-count">{{ $cars->count() }} advertisement</div>
                    </div>
                    <div class="shop--description">{{ $dealer->content }}
                    </div><a class="shop--special-offer"><span>{{ $dealer->title }}</span></a>
                </div>
            </div>
            <div class="shop--location">
                <div class="shop--location-address"><a target="_blank"
                        href="https://www.google.com/maps?q={{ $dealer->latitude }},{{ $dealer->longitude }}&ll={{ $dealer->latitude }},{{ $dealer->longitude }}&z=15">
                        {{ $dealer->adress }}</a></div>
            </div>


            <div class="profile-content">
                <div class="profile-content">
                    <div class="profile-items">
                        <div class="profile-items_filters">
                            <a data-stat="all-tab-profile" class="profile-items_filters-i all active" href="#"
                                onclick="filterProducts('all', this); return false;">
                                <span class="profile-items_filters-i_label">All deal ({{ $cars->count() }})</span>
                            </a>

                            <a data-stat="published-tab-profile" class="profile-items_filters-i published" href="#"
                                onclick="filterProducts('active', this); return false;">
                                <span class="profile-items_filters-i_label">Active
                                    ({{ $cars->where('status', 1)->count() }})</span>
                            </a>

                            <a data-stat="expired-tab-profile" class="profile-items_filters-i expired" href="#"
                                onclick="filterProducts('inactive', this); return false;">
                                <span class="profile-items_filters-i_label">In Active
                                    ({{ $cars->where('status', 0)->count() }})</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-container" data-status="all">

                <div class="products">
                    @foreach ($cars as $car)
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>
                            <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow" href="#"
                                data-id="{{ $car->id }}" style="display: inline-block;">
                                <div class="bookmarking"></div>
                            </a>

                            <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow"
                                href="#" data-id="{{ $car->id }}" style="display: none;">
                                <div class="bookmarking added"></div>
                            </a>

                            <div class="products-i__top"><img alt="{{ $car->ModelType->name }}" loading="lazy"
                                    src="{{ asset('storage/' . $car->car_image) }}">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon"
                                        @if ($car->status == 0) style="background: red" @endif>
                                        {{ $car->status == 1 ? 'Active' : 'InActive' }}</div>
                                </div>

                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">{{$car->price}} <span>USD</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}   {{ $car->ModelType->name }}</div>
                                <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                                    {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                                <div class="products-i__datetime">{{ $car->region->name ?? '' }} ,
                                    {{ $car->created_at->format('Y.m.d') }}</div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="product-container" data-status="active" style="display:none">
                <div class="products">
                    @foreach ($cars->where('status', 1) as $car)
                    <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                        href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>
                    <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow" href="#"
                        data-id="{{ $car->id }}" style="display: inline-block;">
                        <div class="bookmarking"></div>
                    </a>

                    <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow"
                        href="#" data-id="{{ $car->id }}" style="display: none;">
                        <div class="bookmarking added"></div>
                    </a>

                    <div class="products-i__top"><img alt="{{ $car->ModelType->name }}" loading="lazy"
                            src="{{ asset('storage/' . $car->car_image) }}">
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                            <div class="products-i__label products-i__label--salon"
                                @if ($car->status == 0) style="background: red" @endif>
                                {{ $car->status == 1 ? 'Active' : 'InActive' }}</div>
                        </div>

                        <div class="products-i__info"></div>
                    </div>
                    <div class="products-i__bottom">
                        <div class="products-i__price products-i__bottom-text">
                            <div class="product-price">{{$car->price}} <span>{{$car->Ro->name ?? 'USD'}}</span></div>
                        </div>
                        <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}   {{ $car->ModelType->name }}</div>
                        <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                            {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                        <div class="products-i__datetime">{{ $car->region->name ?? '' }} ,
                            {{ $car->created_at->format('Y.m.d') }}</div>
                    </div>
                </div>
                    @endforeach


                </div>
            </div>
            <div class="product-container"  data-status="inactive" style="display: none">

                <div class="products">
                    @foreach ($cars->where('status', 0) as $car)
                    <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                        href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>
                    <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow" href="#"
                        data-id="{{ $car->id }}" style="display: inline-block;">
                        <div class="bookmarking"></div>
                    </a>

                    <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true" rel="nofollow"
                        href="#" data-id="{{ $car->id }}" style="display: none;">
                        <div class="bookmarking added"></div>
                    </a>

                    <div class="products-i__top"><img alt="{{ $car->ModelType->name }}" loading="lazy"
                            src="{{ asset('storage/' . $car->car_image) }}">
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                            <div class="products-i__label products-i__label--salon"
                                @if ($car->status == 0) style="background: red" @endif>
                                {{ $car->status == 1 ? 'Active' : 'InActive' }}</div>
                        </div>

                        <div class="products-i__info"></div>
                    </div>
                    <div class="products-i__bottom">
                        <div class="products-i__price products-i__bottom-text">
                            <div class="product-price">{{$car->price}} <span>{{$car->Ro->name}}</span></div>
                        </div>
                        <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}   {{ $car->ModelType->name }}</div>
                        <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                            {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                        <div class="products-i__datetime">{{ $car->region->name ?? '' }} ,
                            {{ $car->created_at->format('Y.m.d') }}</div>
                    </div>
                </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <script>
        function filterProducts(status, element) {
            document.querySelectorAll('.product-container').forEach(function(productDiv) {
                productDiv.style.display = 'none';
            });

            var selectedProducts = document.querySelector('.product-container[data-status="' + status + '"]');
            if (selectedProducts) {
                selectedProducts.style.display = 'block';
            }

            document.querySelectorAll('.profile-items_filters-i').forEach(function(filterLink) {
                filterLink.classList.remove('active');
            });

            element.classList.add('active');
        }
    </script>

@endsection
