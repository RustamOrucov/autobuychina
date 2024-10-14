@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true;
    ?>

<style>
    .products-i__top{
        width: 175px;
        height: 134px;
    }
    .products-i__top img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>



    <div class="body-inner" style="padding-top: 59.2px;">
        <div class="header home js-header is-sticky-header">
            <div class="header__tabs"><a class="header__tabs-i header__tabs-i--turbo az" href="/">
                    <h1 class="header__logo header__logo--red"><img src="{{ asset('storage/' . $logoImages->m_logo) }}"
                            width="120"></h1>
                </a>
            </div><a class="header__btn header__btn--new" href="#"><span>New Add</span></a>
        </div>
        <div class="content">
            <div class="short-search short-search--home">
                <form class="simple_form advanced-search short-search-form js-advanced-search" id="new_q"
                    data-advanced-select="true" novalidate="novalidate" action="#" accept-charset="UTF-8"
                    method="get">
                    <div class="tz-form__box">
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="q_make" data-reset="true"><label
                                class="tz-form__group-label tz-form__group-label--select" for="q_make">All Brand</label><input name="q[make][]" type="hidden" value=""
                                autocomplete="off"><select multiple="multiple" class="select optional form-control"
                                name="q[make][]" id="q_make">
                                <option value="">All Brand</option>
                                <option value="280">Abarth</option>

                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--open tz-form__group-btn--shown"></span>
                            <div class="tz-form__group-divider"></div>
                        </div><a class="links-i links-i_full-search" href="{{ route('mobile.filter') }}">Filters</a><input
                            autocomplete="off" type="hidden" name="q[sort]" id="q_sort" style="width: 15px;"><span
                            style="display: none;"></span>
                    </div>
                </form>
            </div>
            <div class="moto-nav"><a class="nav-i moto-nav__title" data-stat="main-page-moto-link" href="">Moto</a>
            </div>
            <div class="autocatalog-nav"><a class="nav-i autocatalog-nav__title" data-stat="header-moto-link"
                    href="">Avtokataloq<span class="label-new">yeni</span></a></div>
            <div class="links links_products">
                <div class="links-i"><span>To day:</span><a href="">{{ $recentCarCount }} new add</a></div>
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
                    <div class="products js-import-container">
                    @foreach ($cars as $car)


                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="{{ route('mobile.cardetail',['car'=>$car->id]) }}"></a>
                                <a class="js-bookmark-toggle js-bookmark-item" data-remote="true" rel="nofollow"
                    href="#" data-id="{{ $car->id }}" style="display: inline-block;">
                    <div class="bookmarking"></div>
                </a>

                <a class="js-bookmark-toggle js-unbookmark-item hide" data-remote="true"
                    rel="nofollow" href="#" data-id="{{ $car->id }}"
                    style="display: none;">
                    <div class="bookmarking added"></div>
                </a>
                            <div class="products-i__top"><img alt="{{ $car->carModel->name }}" loading="lazy"
                                    src="{{ asset('storage/' . $car->car_image) }}">
                                    @if ($car->vincode !== null)
                                    <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"><div class="products-i__label products-i__label--vin">VIN</div></div>
                                   @endif
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                {{-- <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div> --}}

                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">{{ $car->price }}<span> {{ $car->Ro->name }}</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }} {{ $car->ModelType->name }}</div>
                                <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},  {{ $car->EngineVolume->name / 1000 }} L, {{ $car->odometer_km }} km</div>
                                <div class="products-i__datetime">{{ $car->region->name ?? '' }}, {{ $car->created_at->diffForHumans() }}</div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="section-loader"></div>
                </section>

            </div>
        </div>
        <footer class="footer">
            <div class="footer__blk">
                <div class="footer__app-promotion"><a class="footer__app-store-btn js-footer-app-link"
                        data-stat="turboaz-app-footer-btn" href="#"><img alt=""
                            src="{{ asset('storage/' . $logoImages->m_logo) }}"></a>
                    <div class="footer__app-promotion-info"><a data-stat="turboaz-app-footer-btn"
                            class="footer__app-promotion-link js-footer-app-link"
                            href="#">{{ $seoData->seo_title ?? 'AutobuyChina' }}</a><span>Everything in one
                            app!</span></div>
                </div>
            </div>
            <div class="footer__blk"><a target="_blank" class="footer__link footer__link--pages"
                    href="">Rules</a><a target="_blank" class="footer__link footer__link--pages"
                    href="">User Agreement</a></div>
            <div class="footer__blk">
                <div class="footer__title">Help : </div><a class="footer__link footer__link--contact"
                    href="tel: +994125057755">(055) 555-55-55</a>
                <a class="footer__link footer__link--social" href="mailto:turbo@turbo.az"><i
                        class="footer__link--social_icon footer__link--social_icon--email"></i></a><a target="_blank"
                    class="footer__link footer__link--social" href="https://www.facebook.com/www.turbo.az"><i
                        class="footer__link--social_icon footer__link--social_icon--facebook"></i></a><a target="_blank"
                    class="footer__link footer__link--social" href="https://www.instagram.com/turbo.az/"><i
                        class="footer__link--social_icon footer__link--social_icon--instagram"></i></a>
            </div>
            <div class="footer__blk"><a class="footer__link footer__link--inline" rel="nofollow"
                    href="/?desktop_site=1">Tam versiya</a><a class="footer__link footer__link--inline js-lang-switch"
                    href="https://ru.turbo.az/">Русский язык</a>
                <div class="footer__info">Saytın Administrasiyası reklam bannerlərinin və yerləşdirilmiş elanların
                    məzmununa görə məsuliyyət daşımır.</div>
                <div class="footer__copyright">© 2006-2024 Digital Classifieds MMC. VÖEN: 1405631661</div>
            </div>
        </footer>
    </div>
    <!-- Daha Cox Popup -->
    <div class="popup popup--drawer js-drawer" id="js-drawer">
        <div class="popup-header"><span class="header__nav-btn--back js-popup-back-btn"></span>
            <div class="popup-header__title">Daha çox</div>
            <div class="popup-header__title popup-header__title--settings">Ayarlar</div>
        </div>
        <div class="popup__content">
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link popup__list-i_link--lang js-lang-switch"
                        href="https://ru.turbo.az/">Русский язык</a></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" href="/help/popular_questions">Yardım</a>
                </div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" data-stat="more-moto-link"
                        href="/autocatalog">Avtokataloq<span
                            class="popup__list-i_label popup__list-i_label--az"></span></a></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" data-stat="more-moto-link"
                        href="/motosiklet">Moto</a></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link" href="/autos">Bütün
                        elanlar</a></div>
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link"
                        href="/avtosalonlar">Salonlar</a></div>
                <div class="popup__list-i popup__list-i--with-border"><a target="_blank" class="popup__list-i_link"
                        href="https://tap.az/elanlar/neqliyyat/ehtiyyat-hisseleri-ve-aksesuarlar?utm_source=turboaz&amp;utm_medium=link&amp;utm_content=accessories&amp;utm_campaign=mobile">Ehtiyat
                        hissələr və aksesuarlar</a></div>
                <div class="popup__list-i popup__list-i--with-border"><a target="_blank" data-stat="rental-burger"
                        class="popup__list-i_link"
                        href="https://tap.az/elanlar/xidmetler/neqliyyat-icaresi?utm_source=turboaz&amp;utm_medium=mobile&amp;utm_campaign=rentacar&amp;utm_id=burger">İcarə</a>
                </div>
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link js-popup-drawer-open"
                        data-open="contacts" href="#">Bizimlə əlaqə</a></div>
                <div class="popup__list-i popup__list-i--with-border popup__list-advertising"><a
                        data-stat="advertising-landing-burger-btn" class="popup__list-i_link" href="/advertising">Reklam
                        yerləşdir</a><span class="label-new status-new">yeni</span></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i popup__list-i--with-border popup__list-i_link delete-account drawer-link"
                    id="js-delete-account">Şəxsi kabineti sil</div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" rel="nofollow" data-method="delete"
                        href="/session">Çıxış</a></div>
            </div>
            <div class="popup__list-i popup__list-i--full-version"><a rel="nofollow" href="/?desktop_site=1">Tam
                    versiya</a></div>
        </div>
    </div>
    <!-- End Popup -->
    <!-- Select Category Popup -->
    <div class="select-category select-category--full-height js-select-category select-category--q_make"
    data-select="q_make">
<div class="select-category__header-container">
    <div class="popup-header">
        <div class="popup-header__left">
            <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
        </div>
        <div class="popup-header__title">Marka</div>
        <div class="popup-header__right"></div>
    </div>
    <div class="select-category__search">
        <input type="text" id="brand-search" class="select-category__search-input js-search-input" placeholder="Example, BMW" autocomplete="off" oninput="filterBrands()">
    </div>
</div>
<div class="select-category__body select-category__body--type-2">
    <div class="select-category__blk" id="js-popular-makes-container">
        <div class="select-category__blk-content">
            @foreach ($brands as $brand)
            <a href="/mobile/filter/{{ $brand->id }}">
                <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                    data-id="{{ $brand->id }}">
                    <div class="select-category__i-logo"><img loading="lazy"
                            src="{{ asset('storage/'.$brand->image) }}">
                    </div>
                    <div class="select-category__i-name js-category-select-item-name">{{ $brand->name }}</div><span
                        class="select-category__i-radio"></span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
</div>

<script>

    // brand search function start
function filterBrands() {
const input = document.getElementById('brand-search').value.toLowerCase();
const items = document.querySelectorAll('.select-category__i');

items.forEach(item => {
    const name = item.querySelector('.js-category-select-item-name').textContent.toLowerCase();
    if (name.includes(input)) {
        item.parentElement.style.display = 'block';
    } else {
        item.parentElement.style.display = 'none';
    }
});
}

// brand search function end
</script>

@endsection
