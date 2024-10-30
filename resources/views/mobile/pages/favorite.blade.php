@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true
    ?>
    <div class="body-inner">
        <div class="header js-header">
            <div class="header__nav">
                <div class="header__nav-left"></div>
                <div class="header__nav-title">{{sitekey('detail_mobile_5','text')}}</div>
                <div class="header__nav-right"></div>
            </div>
        </div>
        <div class="content">
            <div class="bookmarks-container products-container" data-advanced-select="">
                <div class="products bookmarks" id="js-bookmarks-container">
                    <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                                               href="/autos/8845672-kia-sorento"></a><a
                            class="js-unbookmark-item-8845672" data-remote="true" rel="nofollow" data-method="delete"
                            href="/autos/8845672-kia-sorento/bookmarks">
                            <div class="bookmarking added"></div>
                        </a><a class="hide js-bookmark-item-8845672" data-remote="true" rel="nofollow"
                               data-method="post" href="/autos/8845672-kia-sorento/bookmarks">
                            <div class="bookmarking"></div>
                        </a>
                        <div class="products-i__top"><img alt="Kia Sorento" loading="lazy"
                                                          src="https://turbo.azstatic.com/uploads/f460x343/2024%2F10%2F07%2F18%2F46%2F22%2Fb0d3b1e6-2bc5-4323-9333-685c9fded657%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                            <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                            <div class="products-i__paid"><span class="featured-icon"></span><span
                                    class="vipped-icon"></span></div>
                            <div class="products-i__info"></div>
                        </div>
                        <div class="products-i__bottom">
                            <div class="products-i__price products-i__bottom-text">
                                <div class="product-price">27 500 <span>USD</span></div>
                            </div>
                            <div class="products-i__name products-i__bottom-text">Kia Sorento</div>
                            <div class="products-i__attributes products-i__bottom-text">2011, 2.0 L, 266 000 km</div>
                            <div class="products-i__datetime">Bakı, bugün 11:00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="select-category select-category--rounded select-category--short js-select-category select-category--q_sort"
                data-select="q_sort">
                <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                    <div class="select-category__header-title">{{sitekey('detail_mobile_5','desc')}}</div>
                    <div class="select-category__header-cancel js-close-popup-btn"></div>
                </div>
                <div class="select-category__body"><a href="/bookmarks?sort=date">
                        <div class="select-category__i js-category-select-item js-list-i" data-id="date">
                            <div class="select-category__i-name">{{sitekey('avto_car_one','title')}}</div>
                            <span class="select-category__i-radio"></span></div>
                    </a><a href="/bookmarks?sort=price_asc">
                        <div class="select-category__i js-category-select-item js-list-i" data-id="price_asc">
                            <div class="select-category__i-name">{{sitekey('avto_car_one','text')}}</div>
                            <span class="select-category__i-radio"></span></div>
                    </a><a href="/bookmarks?sort=price_desc">
                        <div class="select-category__i js-category-select-item js-list-i" data-id="price_desc">
                            <div class="select-category__i-name">{{sitekey('avto_car_one','desc')}}</div>
                            <span class="select-category__i-radio"></span></div>
                    </a><a href="/bookmarks?sort=mileage">
                        <div class="select-category__i js-category-select-item js-list-i" data-id="mileage">
                            <div class="select-category__i-name">{{sitekey('avto_car_two','title')}}</div>
                            <span class="select-category__i-radio"></span></div>
                    </a><a href="/bookmarks?sort=reg_year">
                        <div class="select-category__i js-category-select-item js-list-i" data-id="reg_year">
                            <div class="select-category__i-name">{{sitekey('avto_car_one','name')}}</div>
                            <span class="select-category__i-radio"></span></div>
                    </a></div>
            </div>
            <div class="select-category-bg"></div>
        </div>
    </div>
@endsection
