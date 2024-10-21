@extends('mobile.layout.layout')
@section('mobile_content')
<script src="{{ asset('assets_/js/filterrun.js') }}"></script>

    <div class="body-inner" style="padding: 0 15px;">
        <div class="header__nav">
            <div class="header__nav-left">
                <spanb class="header__nav-btn--back js-header-filter-back-btn "></spanb>
            </div>
            <div class="header__nav-title">Filters</div>
            <div class="header__nav-right">
                <div class="popup-header__btn popup-header__btn--reset js-filter-header-reset-form">Reset</div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="search-product">
            <div class="filter" style="padding-top: 0;">
                <form class="simple_form tz-form filter__form js-filter-form" id="new_q" data-advanced-select="true"
                    novalidate="novalidate" action="" accept-charset="UTF-8" method="get">

                    {{-- city filter start --}}
                    <div class="tz-form__blk">
                        <div class="tz-form__group js-select-category-open" id="q_region" data-open="q_region"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label class="tz-form__group-label tz-form__group-label--select"
                                for="q_region">City</label><input name="q[region][]" type="hidden" value=""
                                autocomplete="off"><select multiple="multiple"
                                class="select optional form-control is-hidden" name="q[region][]" id="q_region">
                                <option value="7">Ağcabədi</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                        </div>
                    </div>

                    <div class="select-category select-category--full-height js-select-category select-category--q_region"
                        data-select="q_region">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"
                                        id="close-region"></div>
                                </div>
                                <div class="popup-header__title">City</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="Search City"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__i js-category-select-item" data-id="7">
                                <div class="select-category__i-name js-category-select-item-name">Ağcabədi</div><span
                                    class="select-category__i-radio"></span>
                            </div>
                        </div>
                    </div>
                    {{-- city filter end --}}

                    <div class="tz-form__divider"></div>

                    {{-- model and brand filter start --}}


                    <div class="tz-form__blk tz-form__blk--top-border js-popular-makes">
                        <div class="tz-form__blk-title">Brand and model</div>
                        <div class="popular-items-list tz-d-grid js-select-category" data-select="q_make">

                            <div class="popular-items__i js-popular-item" data-id="4">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F52%2Fc0231997-84f3-4e49-8a46-15d634db7502%2Fmercedes-benz-9%4054x.png">
                                </div>
                                <div class="popular-items__i-name">Mercedes</div>
                            </div>

                        </div>
                        <div class="tz-container">
                            <div class="tz-btn tz-btn--full tz-btn--primary--outline js-select-category-open js-popular-btn"
                                data-open="q_make">Show all brands</div>
                        </div>
                    </div>

                    <div class="filter__box js-short-search is-hidden">
                        <div class="tz-form__box"><input class="js-country-input" name="q[country]" type="hidden">
                            <div class="tz-form__group js-select-category-open" data-open="q_make" data-reset="true">
                                <input class="tz-form__group-input" placeholder=" " readonly="" type="text"><label
                                    class="tz-form__group-label tz-form__group-label--select"
                                    for="q_make">Brand</label><input name="q[make][]" type="hidden" value=""
                                    autocomplete="off"><select multiple="multiple"
                                    class="select optional form-control is-hidden" name="q[make][]" id="q_make">
                                    <option value="">All brands</option>
                                    <option value="280">Abarth</option>

                                </select><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                    class="tz-form__group-btn tz-form__group-btn--open"></span>
                            </div>
                            <div class="toggle-models js-toggle-models">
                                <div class="tz-form__group tz-form__group--bordered--top js-select-category-open"
                                    data-open="q_model"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text"><label
                                        class="tz-form__group-label tz-form__group-label--select"
                                        for="q_model">Model</label><input name="q[model][]" type="hidden"
                                        value="" autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden js-select-model" name="q[model][]"
                                        id="q_model">
                                        <option value="">All models</option>
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="select-category select-category--full-height js-select-category js-select-category-models select-category--q_model"
                        data-select="q_model">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                </div>
                                <div class="popup-header__title">Model</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="Search model"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__i js-category-select-item" data-id="5038">
                            <div class="select-category__i-name js-category-select-item-name "> GLC 220 d 4MATIC Coupe
                            </div> <span class="select-category__i-radio"></span>
                        </div>
                    </div>

                    <div class="select-category select-category--full-height js-select-category select-category--q_make"
                        data-open-next="q_model" data-select="q_make">
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
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__blk" id="js-popular-makes-container">
                                <div class="select-category__blk-content">

                                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                                        data-id="4">
                                        <div class="select-category__i-logo"><img loading="lazy"
                                                src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F52%2Fc0231997-84f3-4e49-8a46-15d634db7502%2Fmercedes-benz-9%4054x.png">
                                        </div>
                                        <div class="select-category__i-name js-category-select-item-name">Mercedes</div>
                                        <span class="select-category__i-radio"></span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>




                    {{-- model and brand filter end --}}

                    <div class="filter__tabs">

                        {{-- all new used start --}}
                        <div class="filter__tabs-header"><input checked="checked" id="q_used" name="q[used]"
                                type="radio" value=""><label class="filter__tab js-filter-tab"
                                for="q_used">All</label><input type="radio" value="0" name="q[used]"
                                id="q_used_0"><label class="filter__tab js-filter-tab" for="q_used_0">New</label><input
                                type="radio" value="1" name="q[used]" id="q_used_1"><label
                                class="filter__tab js-filter-tab" for="q_used_1">Used</label></div>
                        {{-- all new used end --}}



                        <div class="filter__tabs-content">
                            <div class="tz-form__blk tz-form__blk--top-border">


                                {{-- ban start  --}}

                                <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open js-tab-content-group"
                                    data-open="q_category"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text"><label
                                        class="tz-form__group-label tz-form__group-label--select" for="q_category">Ban
                                    </label><input name="q[category][]" type="hidden" value=""
                                        autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden" name="q[category][]"
                                        id="q_category">
                                        <option value="9">Avtobus</option>

                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span>
                                    <div class="tz-form__group-divider"></div>
                                </div>



                                <div class="select-category select-category--rounded js-select-category select-category--q_category"
                                    data-select="q_category">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">Ban type</div>
                                            <div class="select-category__header-cancel js-close-popup-btn" id="close-ban">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="9">
                                            <div class="select-category__i-name">Avtobus</div><span
                                                class="select-category__i-radio"></span>
                                        </div>
                                    </div>
                                </div>

                                {{-- ban end  --}}

                                {{-- odometr km start --}}
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"
                                    data-hidden-id="[&quot;1&quot;]"><label class="tz-form__group-label"
                                        for="q_mileage">Millage, km</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half"><input
                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                placeholder="min." maxlength="8" pattern="[0-9]*" size="8"
                                                type="text" name="q[mileage_from]" id="q_mileage_from"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half"><input
                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                placeholder="maks." maxlength="8" pattern="[0-9]*" size="8"
                                                type="text" name="q[mileage_to]" id="q_mileage_to"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>

                                {{-- odometr km end --}}

                                {{-- Year start  --}}

                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_reg_year">Year</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_year_from"><input class="tz-form__group-input"
                                                placeholder="min." readonly="" type="number" value=""><select
                                                wrapper="false" label="false"
                                                class="select optional form-control is-hidden" name="q[year_from]"
                                                id="q_year_from">
                                                <option value="" label=" "></option>
                                                <option value="2024">2024</option>

                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_year_to"><input class="tz-form__group-input" placeholder="maks."
                                                readonly="" type="number" value=""><select wrapper="false"
                                                class="select optional form-control is-hidden" label="false"
                                                name="q[year_to]" id="q_year_to">
                                                <option value="" label=" "></option>
                                                <option value="2024">2024</option>

                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="select-category select-category--rounded js-select-category select-category--q_year_to"
                                    data-select="q_year_to">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title"><span class="translation_missing"
                                                    title="translation missing: az.activerecord.attributes.ad.year">Year</span>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="2024">
                                            <div class="select-category__i-name">2024</div><span
                                                class="select-category__i-radio"></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="select-category select-category--rounded js-select-category select-category--q_year_from"
                                    data-select="q_year_from">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title"><span class="translation_missing"
                                                    title="translation missing: az.activerecord.attributes.ad.year">Year</span>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="2024">
                                            <div class="select-category__i-name">2024</div><span
                                                class="select-category__i-radio"></span>
                                        </div>

                                    </div>
                                </div>

                                {{-- year end  --}}


                                {{-- odometr v3 start --}}

                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_engine_volume">Engine capacity,
                                        sm<sup>3</sup></label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_engine_volume_from"><input class="tz-form__group-input"
                                                placeholder="min." readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[engine_volume_from]" id="q_engine_volume_from">
                                                <option value="" label=" "></option>
                                                <option value="0">0</option>

                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_engine_volume_to"><input class="tz-form__group-input"
                                                placeholder="maks." readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[engine_volume_to]" id="q_engine_volume_to">
                                                <option value="" label=" "></option>
                                                <option value="0">0</option>

                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="select-category select-category--rounded js-select-category select-category--q_engine_volume_from"
                                    data-select="q_engine_volume_from">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">Engine capacity, sm<sup>3</sup>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="0">
                                            <div class="select-category__i-name">0</div><span
                                                class="select-category__i-radio"></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="select-category select-category--rounded js-select-category select-category--q_engine_volume_to"
                                    data-select="q_engine_volume_to">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">Engine Capacity, sm<sup>3</sup>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="0">
                                            <div class="select-category__i-name">0</div><span
                                                class="select-category__i-radio"></span>
                                        </div>

                                    </div>
                                </div>





                                {{-- odometr v3 end --}}


                                {{-- Engine power start --}}


                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_power">Engine Power, a.g.</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half q_power"><input
                                                class="numeric integer optional form-control tz-form__group-input"
                                                placeholder="min." maxlength="4" pattern="[0-9]*" type="number"
                                                step="1" size="4" name="q[power_from]"
                                                id="q_power_from"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half q_power"><input
                                                class="numeric integer optional form-control tz-form__group-input"
                                                placeholder="maks." maxlength="4" pattern="[0-9]*" type="number"
                                                step="1" size="4" name="q[power_to]" id="q_power_to"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Engine pwer end  --}}



                                {{-- color start  --}}


                                <div class="tz-form__group js-select-category-open js-tab-content-group" id="q_color"
                                    data-open="q_color"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text" value=""><label
                                        class="tz-form__group-label tz-form__group-label--select"
                                        for="q_color">Color</label><input name="q[color][]" type="hidden"
                                        value="" autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden" name="q[color][]">
                                        <option value="5">Qara</option>

                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span>
                                    <div class="tz-form__group-divider"></div>
                                </div>



                                <div class="select-category select-category--rounded js-select-category select-category--q_color"
                                    data-select="q_color">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">Color</div>
                                            <div class="select-category__header-cancel js-close-popup-btn" id="close-btn">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item select-category__i--color"
                                            data-id="5">
                                            <div class="select-category__i-color" style="background-color: #000000"></div>
                                            <div class="select-category__i-name">Black</div><span
                                                class="select-category__i-radio"></span>
                                        </div>
                                    </div>
                                </div>




                                {{-- color end  --}}



                                {{-- market start  --}}

                                <div class="tz-form__group js-select-category-open js-tab-content-group"
                                    data-open="q_market"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text" value=""><label
                                        class="tz-form__group-label tz-form__group-label--select" for="q_market">Which
                                        market is it assembled for?</label><input name="q[market][]" type="hidden"
                                        value="" autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden" name="q[market][]" id="q_market">
                                        <option value="1">Amerika</option>
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span></div>



                                <div class="select-category select-category--rounded js-select-category select-category--q_market"
                                    data-select="q_market" id="q_market">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">Which market is it assembled for?
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"
                                                id="close-market"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="1">
                                            <div class="select-category__i-name">Amerika</div><span
                                                class="select-category__i-radio"></span>
                                        </div>
                                    </div>
                                </div>

                                {{-- market end --}}

                                {{-- price start  --}}

                                <div class="tz-form__blk tz-form__blk--top-border">
                                    <div class="tz-form__group tz-form__group--range tz-form__group--price"><label
                                            class="tz-form__group-label" for="q_price">Price</label>
                                        <div class="tz-form__group-fields tz-form__group-fields--3 tz-d-grid">
                                            <div class="tz-form__group-fields__half"><input inputmode="numeric"
                                                    class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                    placeholder="min." maxlength="11" pattern="[0-9]*" size="11"
                                                    type="text" name="q[price_from]" id="q_price_from"><span
                                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                            </div>
                                            <div class="tz-form__group-fields__half"><input inputmode="numeric"
                                                    class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                    placeholder="maks." maxlength="11" pattern="[0-9]*" size="11"
                                                    type="text" name="q[price_to]" id="q_price_to"><span
                                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                            </div>
                                            <div class="filter__short tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                                data-open="q_currency"><select name="q[currency]" id="q_currency">
                                                    <option value="usd">USD</option>
                                                </select>
                                                <div class="tz-form__short-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- price end --}}


                            </div>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>

                    {{-- fuel type start --}}

                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Fuel type</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <span><input checked="checked" id="q_fuel_type_0" name="q[fuel_type][]" type="radio"
                                    value=""><label class="collection_radio_buttons" for="q_fuel_type_0">Not
                                    important</label></span>
                            <span><input multiple="multiple" type="radio" value="1" name="q[fuel_type][]"
                                    id="q_fuel_type_1"><label class="collection_radio_buttons"
                                    for="q_fuel_type_1">Gasoline</label></span>
                        </div>
                    </div>


                    {{-- fuel type end --}}

                    {{-- transmission start --}}

                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Transmission</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <span><input checked="checked" id="q_gear_0" name="q[gear][]" type="radio"
                                    value=""><label class="collection_radio_buttons" for="q_gear_0">Not
                                    important</label></span>
                            <span><input multiple="multiple" type="radio" value="1" name="q[gear][]"
                                    id="q_gear_1"><label class="collection_radio_buttons"
                                    for="q_gear_1">Back</label></span>

                        </div>
                    </div>

                    {{-- transmission end --}}


                    {{-- Gear shift start --}}

                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Gear shift</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <div class="tz-form__group-list">
                                <span><input checked="checked" id="q_transmission_0" name="q[transmission][]"
                                        type="radio" value=""><label class="collection_radio_buttons"
                                        for="q_transmission_0">Not important</label></span>
                                <span><input multiple="multiple" type="radio" value="2" name="q[transmission][]"
                                        id="q_transmission_2"><label class="collection_radio_buttons"
                                        for="q_transmission_2">Automatic</label></span>

                            </div>
                        </div>
                    </div>

                    {{-- Gear shift end --}}

                    {{-- Passenger count start  --}}

                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Passenger count</div>
                        <div class="tz-form__group"><span><input type="checkbox" value="1" name="q[seats_count][]"
                                    id="q_seats_count_1"><label class="collection_check_boxes"
                                    for="q_seats_count_1">1</label></span><span><input type="checkbox" value="2"
                                    name="q[seats_count][]" id="q_seats_count_2"><label class="collection_check_boxes"
                                    for="q_seats_count_2">2</label></span><span><input type="checkbox" value="3"
                                    name="q[seats_count][]" id="q_seats_count_3"><label class="collection_check_boxes"
                                    for="q_seats_count_3">3</label></span><span><input type="checkbox" value="4"
                                    name="q[seats_count][]" id="q_seats_count_4"><label class="collection_check_boxes"
                                    for="q_seats_count_4">4</label></span><span><input type="checkbox" value="5"
                                    name="q[seats_count][]" id="q_seats_count_5"><label class="collection_check_boxes"
                                    for="q_seats_count_5">5</label></span><span><input type="checkbox" value="6"
                                    name="q[seats_count][]" id="q_seats_count_6"><label class="collection_check_boxes"
                                    for="q_seats_count_6">6</label></span><span><input type="checkbox" value="7"
                                    name="q[seats_count][]" id="q_seats_count_7"><label class="collection_check_boxes"
                                    for="q_seats_count_7">7</label></span><span><input type="checkbox" value="8"
                                    name="q[seats_count][]" id="q_seats_count_8"><label class="collection_check_boxes"
                                    for="q_seats_count_8">8+</label></span></div>
                    </div>

                    {{-- passenger count end  --}}

                    {{-- car equipment start --}}
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Car equipments</div>
                        <div class="tz-form__group"><span><input type="checkbox" value="4" name="q[extras][]"
                                    id="q_extras_4"><label class="collection_check_boxes" for="q_extras_4">Yüngül
                                    lehimli disklər</label></span>
                            <span><input type="checkbox" value="5" name="q[extras][]" id="q_extras_5"><label
                                    class="collection_check_boxes" for="q_extras_5">ABS</label></span>

                        </div>
                    </div>
                    {{-- car equipment end --}}


                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Condition</div>
                        <div class="tz-form__group">
                            <div class="tz-form__group-list"><input name="q[crashed]" type="hidden" value="1"
                                    autocomplete="off"><input class="boolean optional form-control" type="checkbox"
                                    value="0" name="q[crashed]" id="q_crashed"><label
                                    class="boolean optional control-label" for="q_crashed">No damage</label><input
                                    name="q[painted]" type="hidden" value="1" autocomplete="off"><input
                                    class="boolean optional form-control" type="checkbox" value="0"
                                    name="q[painted]" id="q_painted"><label class="boolean optional control-label"
                                    for="q_painted">Not repainted</label></div>
                        </div>
                    </div>


                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__checkbox tz-form__group"><label class="" for="q_for_spare_parts">
                                <div class="tz-form__checkbox-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="q[for_spare_parts]" type="hidden" value="0"
                                        autocomplete="off"><input class="boolean optional form-control" type="checkbox"
                                        value="1" name="q[for_spare_parts]" id="q_for_spare_parts">
                                    <div class="tz-form__checkbox-text">Damaged or for spare parts</div>
                                    <div class="tz-form__checkbox-tickmark"></div>
                                </div>
                                <div class="tz-form__checkbox-description">It needs repair or is completely unusable.</div>
                            </label></div>
                    </div>

                    <div class="tz-container filter__bottom"><button name="button" type="submit" data-disable-with=""
                            class="tz-btn tz-btn--primary tz-btn--full">Search</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
