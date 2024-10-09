@extends('front.layout.layout')
@section('front_content')

<div class="main-container bookmarks">
    <div class="">
        <div class="">
            <div class="section-title">
                <h1 class="section-title_name">Favorite Ads</h1>
            </div>
            <div class="products-title">
                <p class="products-title-amount">{{ $count }} cars</p>
                <div class="products-title-sort"><select name="sort-variants" id="sort-variants">
                        <option data-path="/bookmarks?sort=date" value="date">Tarixə görə</option>
                        <option data-path="/bookmarks?sort=price_asc" value="price_asc">Əvvəlcə ucuz</option>
                        <option data-path="/bookmarks?sort=price_desc" value="price_desc">Əvvəlcə bahalı</option>
                        <option data-path="/bookmarks?sort=mileage" value="mileage">Yürüş</option>
                        <option data-path="/bookmarks?sort=reg_year" value="reg_year">Buraxılış ili</option>
                    </select></div>
            </div>
            <div class="products bookmarks" id="js-bookmarks-container">

                @foreach ($cars as  $car)
                <div class="products-i vipped featured salon"><a class="products-i__link" target="_blank"
                    href="{{ route('detail',['car'=>$car->id]) }}"></a>

                    <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                    href="#" data-id="{{ $car->id }}" style="display: inline-block;">
                    <div class="bookmarking"></div>
                </a>

                <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true"
                    rel="nofollow" href="#" data-id="{{ $car->id }}"
                    style="display: none;">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top">
                    <div class="custom-car-img-container">
                    <img alt="{{ $car->ModelType->name }}" loading="lazy"
                        src="{{ asset('storage/' . $car->car_image) }}">
                    </div>



                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">{{ $car->price }} <span>{{ $car->Ro->name }}</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }} {{ $car->ModelType->name }}</div>
                    <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},{{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                    <div class="products-i__datetime">{{ $car->region->name ?? '' }} , {{ $car->created_at->diffForHumans() }}</div>
                </div>
            </div>
                @endforeach


            </div>
            <div class="pagination-container"></div>
        </div>
    </div>
</div>


@endsection
