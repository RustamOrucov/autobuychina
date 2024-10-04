@extends('front.layout.layout')
@section('front_content')
    <div class=" shops">
        <div class="tz-container tz-align-center tz-d-flex breadcrumbs-container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__i"><span class="breadcrumbs__i-link" href="#">Dealer</span></li>
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
                    <div class="shop--products-count">16 elan</div>
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
                                <div class="shop--schedule">Every day: {{ substr($dealer->opening_time, 0, 5) }} - {{ substr($dealer->closing_time, 0, 5) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="shop--special-offer">{{ $dealer->title }}</div>
                </div>
            </div>
        </div>
        <div class="page-content page-content-shop tz-container">
            <div class="products-title">
                <p class="products-title-amount">16 elan</p>
                <div class="products-title-sort js-shop-sort"><select name="sort-variants" id="sort-variants">
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=date" value="date">Tarixə görə
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=price_asc" value="price_asc">
                            Əvvəlcə ucuz</option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=price_desc" value="price_desc">
                            Əvvəlcə bahalı</option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=mileage" value="mileage">Yürüş
                        </option>
                        <option data-path="/avtosalonlar/hyundai-azerbaijan?q%5Bsort%5D=reg_year" value="reg_year">
                            Buraxılış ili</option>
                    </select></div>
            </div>
            <div class="products">



                <div class="products-i vipped featured salon"><a class="products-i__link" target="_blank" href="/autos/8647294-hyundai-grandeur"></a><a class="js-bookmark-item-8647294" data-remote="true" rel="nofollow" data-method="post" href="/autos/8647294-hyundai-grandeur/bookmarks">
                        <div class="bookmarking"></div>
                    </a><a class="hide js-unbookmark-item-8647294" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8647294-hyundai-grandeur/bookmarks">
                        <div class="bookmarking added"></div>
                    </a>
                    <div class="products-i__top"><img alt="Hyundai Grandeur" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F07%2F26%2F13%2F21%2F53%2F5d4c5ab2-88d8-43a8-bd49-4458baa47c34%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                            <div class="products-i__label products-i__label--salon">Salon</div>
                        </div>
                        <div class="products-i__paid"><span class="featured-icon"></span><span class="vipped-icon"></span></div>
                        <div class="products-i__info">
                            <div class="products-i__icon products-i__icon--loan">
                                <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                            </div>
                        </div>
                    </div>
                    <div class="products-i__bottom">
                        <div class="products-i__price products-i__bottom-text">
                            <div class="product-price">77 900 <span>AZN</span></div>
                        </div>
                        <div class="products-i__name products-i__bottom-text">Hyundai Grandeur</div>
                        <div class="products-i__attributes products-i__bottom-text">2024, 1.6 L, 0 km</div>
                        <div class="products-i__datetime">Bakı, dünən 18:39</div>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
@endsection
