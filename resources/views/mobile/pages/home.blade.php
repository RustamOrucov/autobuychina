@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true;
    ?>


    <div class="body-inner" style="padding-top: 59.2px;">
        <div class="header home js-header is-sticky-header">
            <div class="header__tabs"><a class="header__tabs-i header__tabs-i--turbo az" href="/">
                    <h1 class="header__logo header__logo--red"><img src="{{ asset('storage/' . $logoImages->m_logo) }}"
                            width="140"></h1>
                </a>
            </div><a class="header__btn header__btn--new" href="#"><img width="26"
                    src="{{ asset('assets_/img/plus.png') }}" alt=""></a>
        </div>
        <div class="content">
            @if (isset($selectBrand))
                <div class="short-search short-search__search-results">
                    <div class="tz-form__box">
                        <div class="tz-form__group js-select-category-open" data-open="q_make" data-reset="true"><input
                                class="tz-form__group-input tz-form__group-input--lower" placeholder=" "
                                value="{{ $selectBrand->name }}" readonly="" type="text"><label
                                class="tz-form__group-label tz-form__group-label--select "
                                for="q_make">Brand</label><input name="q[make][]" type="hidden" value=""
                                autocomplete="off"><select multiple="multiple" class="select optional form-control"
                                name="q[make][]" id="q_make">
                            </select><span class="custom-model-reset-btn">
                                <a class="custom-reset-model" href="/" > </a>
                            </span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>

                        <div class="select-category select-category--full-height js-select-category select-category--q_make"
                            data-select="q_make">
                            <div class="select-category__header-container">
                                <div class="popup-header">
                                    <div class="popup-header__left">
                                        <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                    </div>
                                    <div class="popup-header__title">Brand</div>
                                    <div class="popup-header__right"></div>
                                </div>
                                <div class="select-category__search"><input type="text" name="" id=""
                                        class="select-category__search-input js-search-input" placeholder="Example, BMW"
                                        autocomplete="off"></div>
                            </div>
                            <div
                                class="select-category__body select-category__body--type-2 select-category__body--with-btn">
                                <div class="select-category__blk" id="js-popular-makes-container">
                                    <div class="select-category__blk-content">

                                        @foreach ($brands as $brand)
                                            <a href="{{ route('mobile.filter.brand', ['id' => $brand->id]) }}">
                                                <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                                                    data-id="4">
                                                    <div class="select-category__i-logo"><img loading="lazy"
                                                            src="{{ asset('storage/' . $brand->image) }}">
                                                    </div>
                                                    <div class="select-category__i-name js-category-select-item-name">
                                                        {{ $brand->name }}</div>
                                                        <span
                                                        class="select-category__i-radio @if ($brand->id == $selectBrand->id )
                                                        green-border
                                                        @endif"></span>
                                                </div>
                                            </a>
                                        @endforeach


                                    </div>
                                </div>

                            </div>
                        </div>






                        <div class="toggle-models js-toggle-models" style="display: block;">
                            <div class="tz-form__group tz-form__group--bordered--top js-select-category-open"
                                data-open="q_model"><input class="tz-form__group-input tz-form__group-input--lower custom-open-model"
                                    placeholder=" " readonly="" type="text" value="{{ $selectModel->name ?? ''}}"><label
                                    class="tz-form__group-label tz-form__group-label--select custom-model-select"
                                    for="q_model">Model</label><input name="q[model][]" type="hidden" value=""
                                    autocomplete="off"><select multiple="multiple"
                                    class="select optional form-control js-select-model" name="q[model][]"
                                    id="q_model">
                                </select>

                                <span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"> <a class="custom-reset-model" href="{{ route('mobile.filter.brand', ['id' => $selectBrand->id]) }}"> </a></span>


                                    <span
                                    class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                        </div>

                        <div class="select-category select-category--full-height js-select-category js-select-category-models select-category--q_model js-submit-form-on-click"
                            data-select="q_model">
                            <div class="select-category__header-container">
                                <div class="popup-header">
                                    <div class="popup-header__left">
                                        <div class="popup-header__btn popup-header__btn--back js-close-popup-btn custom-close-btn">
                                        </div>
                                    </div>
                                    <div class="popup-header__title">Model</div>
                                    <div class="popup-header__right"></div>
                                </div>
                                <div class="select-category__search"><input type="text" name="" id=""
                                        class="select-category__search-input js-search-input" placeholder="Search model..."
                                        autocomplete="off"></div>
                            </div>

                            <div
                                class="select-category__body select-category__body--type-2 select-category__body--with-btn">
                                <div class="select-category__blk-content js-models-list">
                                  @foreach ($models as $model )
                                  <a href="{{ route('mobile.filter.model',['brandId'=>$selectBrand->id,'modelId'=>$model->id]) }}">
                                  <div class="select-category__i js-category-select-item" data-id="4050"
                                  style="">
                                  <div class="select-category__i-name js-category-select-item-name "> {{ $model->name }}
                                  </div> <span class="select-category__i-radio @if (isset($selectModel) && $model->id == $selectModel->id)
                                    green-border
                                @endif"></span>
                                   </div>
                                </a>
                                  @endforeach

                                </div>
                            </div>
                        </div>





                    </div>
                    <div class="filters-container"><a class="links-i links-i_full-search"
                            href="{{ route('mobile.filter') }}">Filters</a>
                        <div class="products-sort styled js-select-category-open" data-open="q_sort"><select
                                class="select optional form-control" name="q[sort]" id="q_sort"
                                style="width: 123.9px;">
                                <option data-path="/autos?q%5Bmake%5D%5B%5D=5&amp;q%5Bsort%5D=date" selected="selected"
                                    value="date">To date</option>
                                <option data-path="/autos?q%5Bmake%5D%5B%5D=5&amp;q%5Bsort%5D=price_asc"
                                    value="price_asc">Əvvəlcə ucuz</option>
                                <option data-path="/autos?q%5Bmake%5D%5B%5D=5&amp;q%5Bsort%5D=price_desc"
                                    value="price_desc">Əvvəlcə bahalı</option>
                                <option data-path="/autos?q%5Bmake%5D%5B%5D=5&amp;q%5Bsort%5D=mileage" value="mileage">
                                    Yürüş</option>
                                <option data-path="/autos?q%5Bmake%5D%5B%5D=5&amp;q%5Bsort%5D=reg_year"
                                    value="reg_year">Buraxılış ili</option>
                            </select><span style="display: none;">Tarixə görə</span><span style="display: none;">Tarixə
                                görə</span></div>
                    </div>

                    <div class="products-search-title">
                        <h1>{{ $selectBrand->name }} sale</h1><span> {{ $cars->count() }} advertsement</span>
                    </div>
                </div>
            @else
                <div class="short-search short-search--home">
                    <form class="simple_form advanced-search short-search-form js-advanced-search" id="new_q"
                        data-advanced-select="true" novalidate="novalidate" accept-charset="UTF-8" method="get">

                        <div class="tz-form__box">
                            <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                                data-open="q_make" data-reset="true"><label
                                    class="tz-form__group-label tz-form__group-label--select" for="q_make">All
                                    Brand</label><input name="q[make][]" type="hidden" value=""
                                    autocomplete="off"><select multiple="multiple"
                                    class="select optional form-control" name="q[make][]" id="q_make">
                                    <option value="">All Brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach

                                </select><span
                                    class="tz-form__group-btn tz-form__group-btn--open tz-form__group-btn--shown"></span>
                                <div class="tz-form__group-divider"></div>
                            </div><a class="links-i links-i_full-search" href="{{ route('mobile.filter') }}">Filters</a><input
                                autocomplete="off" type="hidden" name="q[sort]" id="q_sort"
                                style="width: 15px;"><span style="display: none;"></span>
                        </div>
                    </form>

                    {{-- brand popup start  --}}
                    <div class="select-category select-category--full-height js-select-category select-category--q_make"
                        data-select="q_make">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div
                                        class="popup-header__btn popup-header__btn--back js-close-popup-btn custom-mobile-close">
                                    </div>
                                </div>
                                <div class="popup-header__title">Marka</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search">
                                <input type="text" id="brand-search"
                                    class="select-category__search-input js-search-input" placeholder="Example, BMW"
                                    autocomplete="off" oninput="filterBrands()">
                            </div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__blk" id="js-popular-makes-container">
                                <div class="select-category__blk-content">
                                    @foreach ($brands as $brand)
                                        <a href="{{ route('mobile.filter.brand', ['id' => $brand->id]) }}">
                                            <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                                                data-id="{{ $brand->id }}">
                                                <div class="select-category__i-logo"><img loading="lazy"
                                                        src="{{ asset('storage/' . $brand->image) }}">
                                                </div>
                                                <div class="select-category__i-name js-category-select-item-name">
                                                    {{ $brand->name }}
                                                </div><span class="select-category__i-radio"></span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- brand popup en  --}}

                </div>


                <div class="moto-nav"><a class="nav-i moto-nav__title" data-stat="main-page-moto-link"
                        href="">Moto</a>
                </div>
                <div class="autocatalog-nav"><a class="nav-i autocatalog-nav__title" data-stat="header-moto-link"
                        href="">Avtokataloq<span class="label-new">yeni</span></a></div>
            @endif





            <div class="links links_products">
                @if (isset($recentCarCount))
                    <div class="links-i"><span>To day:</span><a href="">{{ $recentCarCount }} new add</a></div>
                @endif
            </div>
            <div class="lotriver-top-banner" id="js-lotriver-top-banner">
                <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                <div id="ad_ph_1" style="display:none;"></div>
            </div>
            <div class="quick-links">

                <a class="quick-links-i" target="_blank" href="#">Aksesuarlar</a>

            </div>
            <div class="products-container">
                <section data-cursor="1727077204.374989_8184490" data-section="featured" id="section-featured">
                    <div id="car-list" class="products js-import-container">
                        @foreach ($cars as $car)
                            <div class="products-i vipped featured" data-id="{{ $car->id }}">
                                <a class="products-i__link" target="_self"
                                    href="{{ route('mobile.cardetail', ['car' => $car->id]) }}"></a>

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
                                    <div class='custom-car-img-container'>
                                        <img src="{{ asset('storage/' . $car->car_image) }}" loading="lazy"
                                            alt="{{ $car->carModel->name }}">
                                    </div>
                                    @if ($car->vincode !== null)
                                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                            <div class="products-i__label products-i__label--vin">VIN</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">{{ $car->price }}<span> {{ $car->Ro->name }}</span>
                                        </div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">
                                        {{ $car->carModel->name }} {{ $car->ModelType->name }}
                                    </div>
                                    <div class="products-i__attributes products-i__bottom-text">
                                        {{ $car->year }}, {{ $car->EngineVolume->name / 1000 }} L,
                                        {{ $car->odometer_km }} km
                                    </div>
                                    <div class="products-i__datetime">{{ $car->region->name ?? '' }},
                                        {{ $car->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="section-loader" style="display: none;"></div>
                </section>

            </div>
        </div>

    </div>



    <script>
        function timeAgo(dateString) {
            const date = new Date(dateString);
            const now = new Date();
            const seconds = Math.floor((now - date) / 1000);
            const minutes = Math.floor(seconds / 60);
            const hours = Math.floor(minutes / 60);
            const days = Math.floor(hours / 24);

            if (days > 1) {
                return `${days} ago`;
            } else if (days === 1) {
                return "1 day ago";
            } else if (hours > 1) {
                return `${hours} hours ago`;
            } else if (hours === 1) {
                return "1 hourse ago";
            } else if (minutes > 1) {
                return `${minutes} minute ago`;
            } else if (minutes === 1) {
                return "1 minute ago";
            } else {
                return "now";
            }
        }

        // Infiniti scroll mobile start
        let page = 1;
        let isLoading = false;
        const loadingIndicator = document.querySelector('.section-loader');
        const carList = document.getElementById('car-list');

        window.addEventListener('scroll', handleScroll);

        function handleScroll() {
            const nearBottom = (window.innerHeight + window.scrollY) >= (document.documentElement.scrollHeight - 600);
            if (nearBottom && !isLoading) {
                loadMoreCars();
            }
        }

        function loadMoreCars() {
            isLoading = true;
            loadingIndicator.style.display = 'block';
            page++;

            fetch(`mobile/cars?page=${page}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text();
                })
                .then(text => {
                    try {
                        return JSON.parse(text);
                    } catch (error) {
                        throw new Error('Invalid JSON format');
                    }
                })
                .then(data => {

                    if (data.data && Array.isArray(data.data)) {
                        data.data.forEach(car => {

                            const carItem = document.createElement('div');
                            carItem.className = 'products-i vipped featured';
                            carItem.setAttribute('data-id', car.id);

                            carItem.innerHTML = `
                                <a href="mobile/cardetail/${car.id}" class="products-i__link"></a>

                                <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                                    href="#" data-id="${car.id}" style="display: inline-block;">
                                    <div class="bookmarking"></div>
                                </a>

                                <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true"
                                    rel="nofollow" href="#" data-id="${car.id}" style="display: none;">
                                    <div class="bookmarking added"></div>
                                </a>

                                <div class="products-i__top">
                                    <div class='custom-car-img-container'>
                                        <img src="${car.car_image ? '/storage/' + car.car_image : '/storage/default.jpg'}" loading="lazy"
                                             alt="${car.car_model ? car.car_model.name : ''}">
                                    </div>
                                    ${car.vincode ? `
                                                                        <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                                                            <div class="products-i__label products-i__label--vin">VIN</div>
                                                                        </div>` : ''}
                                </div>

                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">${car.price} <span>${car.ro ? car.ro.name : ''}</span></div>
                                    </div>

                                    <div class="products-i__name products-i__bottom-text">
                                        ${car.car_model ? car.car_model.name : ''} ${car.model_type ? car.model_type.name : ''}
                                    </div>

                                    <div class="products-i__attributes products-i__bottom-text">
                                        ${car.year}, ${car.engine_v / 1000} L, ${car.odometer_km} km
                                    </div>

                                    <div class="products-i__datetime">
                                        ${car.region ? car.region.name : ''}, ${timeAgo(car.created_at)}
                                    </div>
                                </div>
                            `;

                            carList.appendChild(carItem);
                        });
                    } else {
                        console.error('Cars not found:', data);
                    }

                    bindBookmarkEvents();
                    loadingIndicator.style.display = 'none';
                    isLoading = false;

                    if (page >= data.last_page) {
                        window.removeEventListener('scroll', handleScroll);
                        loadingIndicator.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Data load error:', error);
                    loadingIndicator.style.display = 'none';
                    isLoading = false;
                });
        }
        // Infiniti scroll mobile end


        document.querySelector('.custom-open-model').addEventListener('click', function() {
            document.querySelector('.js-select-category-models').classList.add('select-category--open')
        })
        document.querySelector('.custom-model-select').addEventListener('click', function() {
            document.querySelector('.js-select-category-models').classList.add('select-category--open')
        })
        document.querySelector('.custom-close-btn').addEventListener('click', function() {
            console.log('test');

            document.querySelector('.js-select-category-models').classList.remove('select-category--open')
        })
    </script>
@endsection
