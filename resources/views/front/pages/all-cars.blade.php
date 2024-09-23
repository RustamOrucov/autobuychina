@extends('front.layout.layout')
@section('front_content')
    {{-- filter form start --}}
    @include('front.inc.filter')

    {{-- filter form end --}}
    <div class="section-title section-title--grey">
        <div class="tz-container tz-align-center tz-d-flex tz-justify-between">
            <p class="section-title_name">ELANLAR</p>
        </div>
    </div>
    <div class="tz-container">
        <div class="products-title">
            <p class="products-title-amount">10000 elan</p>
            <div class="products-title-sort"><select name="sort-variants" id="sort-variants">
                    <option data-path="/autos?q%5Bsort%5D=date" value="date">Tarixə görə</option>
                    <option data-path="/autos?q%5Bsort%5D=price_asc" value="price_asc">Əvvəlcə ucuz</option>
                    <option data-path="/autos?q%5Bsort%5D=price_desc" value="price_desc">Əvvəlcə bahalı</option>
                    <option data-path="/autos?q%5Bsort%5D=mileage" value="mileage">Yürüş</option>
                    <option data-path="/autos?q%5Bsort%5D=reg_year" value="reg_year">Buraxılış ili</option>
                </select></div>
        </div>
        <div class="products">
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8644331-hyundai-grand-santa-fe"></a><a class="js-bookmark-item-8644331" data-remote="true" rel="nofollow" data-method="post" href="/autos/8644331-hyundai-grand-santa-fe/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8644331" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8644331-hyundai-grand-santa-fe/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Hyundai Grand Santa Fe" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F07%2F25%2F09%2F58%2F49%2F3d89f542-6b86-46f4-9a0f-e82082e9193c%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">38 500 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Hyundai Grand Santa Fe</div>
                    <div class="products-i__attributes products-i__bottom-text">2015, 2.2 L, 130 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:32</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8798930-ford-fusion-north-america"></a><a class="js-bookmark-item-8798930" data-remote="true" rel="nofollow" data-method="post" href="/autos/8798930-ford-fusion-north-america/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8798930" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8798930-ford-fusion-north-america/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Ford Fusion (North America)" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F20%2F11%2F18%2F29%2F77848cd2-c2e9-4feb-a68e-2ece90110b8b%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">22 800 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Ford Fusion (North America)</div>
                    <div class="products-i__attributes products-i__bottom-text">2016, 1.5 L, 168 483 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:32</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8765972-chevrolet-equinox"></a><a class="js-bookmark-item-8765972" data-remote="true" rel="nofollow" data-method="post" href="/autos/8765972-chevrolet-equinox/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8765972" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8765972-chevrolet-equinox/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Chevrolet Equinox" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F07%2F20%2F46%2F36%2F8a4ee451-5600-43c2-8b72-4c0f1f5dc773%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">23 400 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Chevrolet Equinox</div>
                    <div class="products-i__attributes products-i__bottom-text">2018, 1.5 L, 110 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:32</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8766400-mercedes-e-240"></a><a class="js-bookmark-item-8766400" data-remote="true" rel="nofollow" data-method="post" href="/autos/8766400-mercedes-e-240/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8766400" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8766400-mercedes-e-240/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Mercedes E 240" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F08%2F01%2F28%2F20%2F26725f0e-daa7-413e-a9f9-19f31b7033a8%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">17 300 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Mercedes E 240</div>
                    <div class="products-i__attributes products-i__bottom-text">2004, 2.6 L, 299 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8781938-land-rover-range-rover"></a><a class="js-bookmark-item-8781938" data-remote="true" rel="nofollow" data-method="post" href="/autos/8781938-land-rover-range-rover/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8781938" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8781938-land-rover-range-rover/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Land Rover Range Rover" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F13%2F16%2F46%2F39%2Fd1b83ba7-b2c8-48ff-b64f-7187efc1d812%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">53 500 <span>$</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Land Rover Range Rover</div>
                    <div class="products-i__attributes products-i__bottom-text">2017, 3.0 L, 184 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8781938-land-rover-range-rover"></a><a class="js-bookmark-item-8781938" data-remote="true" rel="nofollow" data-method="post" href="/autos/8781938-land-rover-range-rover/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8781938" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8781938-land-rover-range-rover/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Land Rover Range Rover" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F13%2F16%2F46%2F39%2Fd1b83ba7-b2c8-48ff-b64f-7187efc1d812%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">53 500 <span>$</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Land Rover Range Rover</div>
                    <div class="products-i__attributes products-i__bottom-text">2017, 3.0 L, 184 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8781938-land-rover-range-rover"></a><a class="js-bookmark-item-8781938" data-remote="true" rel="nofollow" data-method="post" href="/autos/8781938-land-rover-range-rover/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8781938" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8781938-land-rover-range-rover/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Land Rover Range Rover" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F13%2F16%2F46%2F39%2Fd1b83ba7-b2c8-48ff-b64f-7187efc1d812%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">53 500 <span>$</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Land Rover Range Rover</div>
                    <div class="products-i__attributes products-i__bottom-text">2017, 3.0 L, 184 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>

            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8766145-bmw-320"></a><a class="js-bookmark-item-8766145" data-remote="true" rel="nofollow" data-method="post" href="/autos/8766145-bmw-320/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8766145" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8766145-bmw-320/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="BMW 320" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F07%2F21%2F57%2F28%2F93752c45-6dcc-40f8-aa37-7dfb998103f1%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">27 500 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">BMW 320</div>
                    <div class="products-i__attributes products-i__bottom-text">2014, 2.0 L, 230 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8722613-hyundai-tucson"></a><a class="js-bookmark-item-8722613" data-remote="true" rel="nofollow" data-method="post" href="/autos/8722613-hyundai-tucson/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8722613" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8722613-hyundai-tucson/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Hyundai Tucson" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F22%2F17%2F27%2F24%2Fdf394aa2-c78c-4ed7-b95e-d683b11c1891%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info">
                        <div class="products-i__icon products-i__icon--barter">
                            <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür</div>
                        </div>
                    </div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">29 400 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Hyundai Tucson</div>
                    <div class="products-i__attributes products-i__bottom-text">2019, 2.0 L, 98 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i vipped salon"><a class="products-i__link" target="_blank" href="/autos/7749999-jeep-wrangler"></a><a class="js-bookmark-item-7749999" data-remote="true" rel="nofollow" data-method="post" href="/autos/7749999-jeep-wrangler/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-7749999" data-remote="true" rel="nofollow" data-method="delete" href="/autos/7749999-jeep-wrangler/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Jeep Wrangler" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2023%2F09%2F19%2F14%2F36%2F55%2Faf39cb78-e7ab-40f3-896a-bdf01e464d30%2F88111_lEBDwmYV7SPtrXrRoL0T5g.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                        <div class="products-i__label products-i__label--salon">Salon</div>
                    </div>
                    <div class="products-i__paid"><span class="vipped-icon"></span></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">27 900 <span>$</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Jeep Wrangler</div>
                    <div class="products-i__attributes products-i__bottom-text">2013, 3.6 L, 136 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8783163-opel-astra"></a><a class="js-bookmark-item-8783163" data-remote="true" rel="nofollow" data-method="post" href="/autos/8783163-opel-astra/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8783163" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8783163-opel-astra/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Opel Astra" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F14%2F10%2F15%2F02%2F83a668af-42e5-4a5a-a465-8e20f0b44934%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">10 700 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Opel Astra</div>
                    <div class="products-i__attributes products-i__bottom-text">2007, 1.3 L, 400 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i vipped salon"><a class="products-i__link" target="_blank" href="/autos/8515702-kia-sorento"></a><a class="js-bookmark-item-8515702" data-remote="true" rel="nofollow" data-method="post" href="/autos/8515702-kia-sorento/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8515702" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8515702-kia-sorento/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Kia Sorento" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F06%2F08%2F13%2F17%2F37%2Ff5037b39-a95a-46b4-9ecf-994a02e8435e%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                        <div class="products-i__label products-i__label--salon">Salon</div>
                    </div>
                    <div class="products-i__paid"><span class="vipped-icon"></span></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">32 500 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Kia Sorento</div>
                    <div class="products-i__attributes products-i__bottom-text">2012, 2.0 L, 177 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8780760-opel-astra"></a><a class="js-bookmark-item-8780760" data-remote="true" rel="nofollow" data-method="post" href="/autos/8780760-opel-astra/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8780760" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8780760-opel-astra/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Opel Astra" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F13%2F09%2F54%2F21%2Fb57db9df-4548-4ffa-b368-3954ea87afb5%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">12 600 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Opel Astra</div>
                    <div class="products-i__attributes products-i__bottom-text">2007, 1.3 L, 267 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i salon"><a class="products-i__link" target="_blank" href="/autos/8791157-nissan-note"></a><a class="js-bookmark-item-8791157" data-remote="true" rel="nofollow" data-method="post" href="/autos/8791157-nissan-note/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8791157" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8791157-nissan-note/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Nissan Note" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F17%2F10%2F34%2F14%2F417b0670-84a9-4e1c-94fd-82467162369a%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                        <div class="products-i__label products-i__label--salon">Salon</div>
                    </div>
                    <div class="products-i__info">
                        <div class="products-i__icon products-i__icon--loan">
                            <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                        </div>
                    </div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">18 600 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Nissan Note</div>
                    <div class="products-i__attributes products-i__bottom-text">2017, 1.2 L, 43 170 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i vipped featured"><a class="products-i__link" target="_blank" href="/autos/8761629-audi-a4"></a><a class="js-bookmark-item-8761629" data-remote="true" rel="nofollow" data-method="post" href="/autos/8761629-audi-a4/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8761629" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8761629-audi-a4/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Audi A4" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F05%2F22%2F43%2F27%2Fa0db35bb-38f3-4552-994d-b9fa5f291894%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__paid"><span class="featured-icon"></span><span class="vipped-icon"></span>
                    </div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">13 000 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Audi A4</div>
                    <div class="products-i__attributes products-i__bottom-text">2009, 1.8 L, 236 000 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:31</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8752289-toyota-camry"></a><a class="js-bookmark-item-8752289" data-remote="true" rel="nofollow" data-method="post" href="/autos/8752289-toyota-camry/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8752289" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8752289-toyota-camry/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Toyota Camry" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F02%2F16%2F05%2F36%2Fec4ca4ce-92c8-4aae-8dc9-e28826788047%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info">
                        <div class="products-i__icon products-i__icon--barter">
                            <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür</div>
                        </div>
                        <div class="products-i__icon products-i__icon--loan">
                            <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                        </div>
                    </div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">36 800 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Toyota Camry</div>
                    <div class="products-i__attributes products-i__bottom-text">2019, 2.5 L, 192 900 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:30</div>
                </div>
            </div>
            <div class="products-i salon"><a class="products-i__link" target="_blank" href="/autos/8542599-hyundai-grandeur"></a><a class="js-bookmark-item-8542599" data-remote="true" rel="nofollow" data-method="post" href="/autos/8542599-hyundai-grandeur/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8542599" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8542599-hyundai-grandeur/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="Hyundai Grandeur" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F06%2F18%2F13%2F05%2F53%2F8d84ec02-adab-49fd-b9a1-f915ae2ec06b%2F64677_XEKjwmAveF1J7d42VxCbsw.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                        <div class="products-i__label products-i__label--salon">Salon</div>
                    </div>
                    <div class="products-i__info">
                        <div class="products-i__icon products-i__icon--barter">
                            <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür</div>
                        </div>
                    </div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">31 900 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">Hyundai Grandeur</div>
                    <div class="products-i__attributes products-i__bottom-text">2015, 2.2 L, 155 000 km</div>
                    <div class="products-i__datetime">Xırdalan, bugün 11:30</div>
                </div>
            </div>
            <div class="products-i"><a class="products-i__link" target="_blank" href="/autos/8798927-zil-130"></a><a class="js-bookmark-item-8798927" data-remote="true" rel="nofollow" data-method="post" href="/autos/8798927-zil-130/bookmarks">
                    <div class="bookmarking"></div>
                </a><a class="hide js-unbookmark-item-8798927" data-remote="true" rel="nofollow" data-method="delete" href="/autos/8798927-zil-130/bookmarks">
                    <div class="bookmarking added"></div>
                </a>
                <div class="products-i__top"><img alt="ZIL 130" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F20%2F09%2F12%2F49%2F33f66178-c15c-4137-b199-dfb9c65bb6f2%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">3 000 <span>AZN</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">ZIL 130</div>
                    <div class="products-i__attributes products-i__bottom-text">1992, 6.0 L, 456 700 km</div>
                    <div class="products-i__datetime">Bakı, bugün 11:30</div>
                </div>
            </div>
        </div>
    </div>
@endsection
