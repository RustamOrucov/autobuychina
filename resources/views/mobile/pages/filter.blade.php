@extends('mobile.layout.layout')
@section('mobile_content')
    <script src="{{ asset('assets_/js/filterrun.js') }}"></script>





    <div class="body-inner" style="padding: 0 15px;border-bottom:1px solid black">
        <div class="header__nav">
            <div class="header__nav-left">
                @include('mobile.inc.back-button')
            </div>
            <div class="header__nav-title" style="color:#000">{{sitekey('home_mobile','name')}}</div>
            <div class="header__nav-right">
                <div class="popup-header__btn popup-header__btn--reset js-filter-header-reset-form">{{sitekey('filter_key_seven','title')}}</div>
            </div>
        </div>
    </div>





    <div class="content">
        <div class="search-product">
            <div class="filter" style="padding-top: 0;">
                <form class="simple_form tz-form filter__form js-filter-form" id="new_q" data-advanced-select="true"
                    novalidate="novalidate" action="{{ route('mobile.search') }}" accept-charset="UTF-8" method="get">
                    @php
                    $selectedRegions = $selectfilters['q']['regions'] ?? [];
                @endphp
                    {{-- city filter start --}}
                    <div class="tz-form__blk">
                        <div class="tz-form__group js-select-category-open" data-open="q_region"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label class="tz-form__group-label tz-form__group-label--select"
                                for="q_region">{{ sitekey('filter_key_two', 'desc') }}</label><input  type="hidden" value=""
                                autocomplete="off"><select multiple="multiple"
                                class="select optional form-control is-hidden" name="q[regions][]" id="q_region">
                                @foreach ($filters['regions'] as $region)
                                    <option value="{{ $region->id }}"    {{ in_array($region->id, $selectedRegions) ? 'selected' : '' }}>{{ $region->name }}</option>
                                @endforeach
                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>



                    <div class="select-category select-category--full-height js-select-category select-category--q_region"
                        data-select="q_region">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                </div>
                                <div class="popup-header__title">{{ sitekey('filter_key_two', 'desc') }}</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="{{sitekey('filter_mobile','title')}}"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            @foreach ($filters['regions'] as $region)
                                <div class="select-category__i js-category-select-item" data-id="{{ $region->id }}">
                                    <div class="select-category__i-name js-category-select-item-name">{{ $region->name }}
                                    </div><span class="select-category__i-radio"></span>
                                </div>
                            @endforeach
                        </div>
                    </div>







                    {{-- city filter end --}}



                    {{-- model and brand filter start --}}

                    <div class="tz-form__divider"></div>

                    <div class="filter__box js-short-search" style="display: block">
                        <div class="tz-form__box">
                            <div class="tz-form__group js-select-category-open" data-open="q_make" data-reset="true"><input
                                    class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                    value="{{ isset($selectBrand) ? $selectBrand->name : '' }}"><label
                                    class="tz-form__group-label tz-form__group-label--select"
                                    for="q_make">{{ sitekey('filter_key', 'title') }}</label><input name="q[make]"  type="hidden" value="{{  isset($selectBrand) ? $selectBrand->id : '' }}"
                                    autocomplete="off"><select multiple="multiple"
                                    class="select optional form-control is-hidden" name="q[make]" id="q_make" value=''>
                                    @foreach ($filters['brands'] as $brand)
                                        <option value="{{ $brand->id }}" >{{ $brand->name }}</option>
                                    @endforeach
                                </select><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                    class="tz-form__group-btn tz-form__group-btn--open"></span></div>

                            <div class="toggle-models js-toggle-models" style="display: block;">
                                <div class="tz-form__group tz-form__group--bordered--top js-select-category-open"
                                    data-open="q_model"><input class="tz-form__group-input" placeholder=" " readonly=""
                                        type="text" value="{{ isset($selectModel) ? $selectModel->name : '' }}"><label
                                        class="tz-form__group-label tz-form__group-label--select"
                                        for="q_model">{{ sitekey('filter_key', 'text')  }}</label><input name="q[model]"  type="hidden"
                                        value="{{ isset($selectModel) ? $selectModel->id : '' }}" autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden js-select-model" name="q[model]"
                                        id="q_model">

                                        @foreach ($filters['models'] as $model)
                                            <option class="{{ $model->id }}" data-count="{{ $model->id }}"
                                                value="{{ $model->id }}">{{ $model->name }}</option>
                                        @endforeach
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                            </div>



                        </div>
                    </div>







                    {{-- <div class="tz-form__blk tz-form__blk--top-border js-popular-makes">
                        <div class="tz-form__blk-title">{{ sitekey('filter_mobile', 'text') }}</div>
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
                                data-open="q_make">{{ sitekey('filter_mobile', 'desc') }}</div>
                        </div>
                    </div> --}}

                    <div class="select-category select-category--full-height js-select-category select-category--q_make"
                        data-open-next="q_model" data-select="q_make">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                </div>
                                <div class="popup-header__title">{{ sitekey('filter_key', 'title') }}</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="{{ sitekey('filter_mobile', 'name') }}"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__blk" id="js-popular-makes-container">
                                <div class="select-category__blk-content">
                                    @foreach ($filters['brands'] as $brand)
                                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                                            data-id="{{ $brand->id }}">
                                            <div class="select-category__i-logo"><img loading="lazy"
                                                    src="{{ asset('storage/' . $brand->image) }}">
                                            </div>
                                            <div class="select-category__i-name js-category-select-item-name">
                                                {{ $brand->name }}</div>
                                            <span class="select-category__i-radio"></span>
                                        </div>
                                    @endforeach



                                </div>
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
                                <div class="popup-header__title">{{ sitekey('filter_key', 'text')  }}</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="{{ sitekey('filter_mobile_1', 'title')  }}"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__blk-content js-models-list">

                                @foreach ($filters['models'] as $model)
                                    <div class="select-category__i js-category-select-item"
                                        data-id="{{ $model->id }}">
                                        <div class="select-category__i-name js-category-select-item-name ">
                                            {{ $model->name }}</div> <span class="select-category__i-radio"></span>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    {{-- model and brand filter end --}}

                    <div class="filter__tabs">

                        {{-- all new used start --}}
                        @php
                        $selectedUsed = $selectfilters['q']['used'] ?? '';
                    @endphp

                    <div class="filter__tabs-header">
                        <input
                            type="radio"
                            value=""
                            name="q[used]"
                            id="q_used"
                            {{ $selectedUsed === '' ? 'checked' : '' }}
                        >
                        <label class="filter__tab js-filter-tab" for="q_used">
                            {{ sitekey('filter_key', 'name') }}
                        </label>

                        <input
                            type="radio"
                            value="1"
                            name="q[used]"
                            id="q_used_0"
                            {{ $selectedUsed === '1' ? 'checked' : '' }}
                        >
                        <label class="filter__tab js-filter-tab" for="q_used_0">
                            {{ sitekey('filter_key_two', 'title') }}
                        </label>

                        <input
                            type="radio"
                            value="2"
                            name="q[used]"
                            id="q_used_1"
                            {{ $selectedUsed === '2' ? 'checked' : '' }}
                        >
                        <label class="filter__tab js-filter-tab" for="q_used_1">
                            {{ sitekey('filter_key_two', 'text') }}
                        </label>
                    </div>

                        {{-- all new used end --}}



                        <div class="filter__tabs-content">
                            <div class="tz-form__blk tz-form__blk--top-border">


                                {{-- ban start  --}}
                                @php
                                $selectedBans = $selectfilters['q']['ban'] ?? [];
                            @endphp
                                <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open js-tab-content-group"
                                    data-open="q_category"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text"><label
                                        class="tz-form__group-label tz-form__group-label--select" for="q_category">{{ sitekey('filter_key_three', 'title') }}
                                    </label><input type="hidden" value=""
                                        autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden" name="q[ban][]"
                                        id="q_category">
                                        @foreach ($filters['bans'] as $ban)
                                            <option value="{{ $ban->id }}"   {{ in_array($ban->id, $selectedBans) ? 'selected' : '' }}>{{ $ban->name }}</option>
                                        @endforeach

                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span>
                                    <div class="tz-form__group-divider"></div>
                                </div>



                                <div class="select-category select-category--rounded js-select-category select-category--q_category"
                                    data-select="q_category">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">{{ sitekey('filter_key_three', 'title') }}</div>
                                            <div class="select-category__header-cancel js-close-popup-btn" id="close-ban">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        @foreach ($filters['bans'] as $ban)
                                            <div class="select-category__i js-category-select-item"
                                                data-id="{{ $ban->id }}">
                                                <div class="select-category__i-name">{{ $ban->name }}</div><span
                                                    class="select-category__i-radio"></span>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                {{-- ban end  --}}

                                {{-- odometr km start --}}
                                @php
                                $mileageFrom = $selectfilters['q']['mileage_from'] ?? '';
                                $mileageTo = $selectfilters['q']['mileage_to'] ?? '';
                            @endphp

                            <div class="tz-form__group tz-form__group--range js-tab-content-group" data-hidden-id="[&quot;1&quot;]">
                                <label class="tz-form__group-label" for="q_mileage">{{ sitekey('filter_key_five', 'name') }}</label>
                                <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                    <div class="tz-form__group-fields__half">
                                        <input class="string optional form-control tz-form__group-input js-val-with-spaces"
                                               placeholder="{{ sitekey('filter_mobile_1', 'text')  }}" maxlength="8" pattern="[0-9]*" size="8"
                                               type="text" name="q[mileage_from]" id="q_mileage_from"
                                               value="{{ $mileageFrom }}">
                                        <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                    </div>
                                    <div class="tz-form__group-fields__half">
                                        <input class="string optional form-control tz-form__group-input js-val-with-spaces"
                                               placeholder="{{ sitekey('filter_key_five', 'desc')  }}" maxlength="8" pattern="[0-9]*" size="8"
                                               type="text" name="q[mileage_to]" id="q_mileage_to"
                                               value="{{ $mileageTo }}">
                                        <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                    </div>
                                </div>
                            </div>


                                {{-- odometr km end --}}

                                {{-- Year start  --}}
                                @php
                                $minYear = $selectfilters['q']['min_year'] ?? '';
                                $maxYear = $selectfilters['q']['max_year'] ?? '';
                                @endphp
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_reg_year">{{ sitekey('filter_key_three', 'text') }}</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_year_from"><input class="tz-form__group-input"
                                                placeholder="{{ sitekey('filter_mobile_1', 'text')  }}" readonly="" type="number" value=""><select
                                                wrapper="false" label="false"
                                                class="select optional form-control is-hidden" name="q[min_year]"
                                                id="q_year_from">
                                                <option value="" label=" "></option>
                                                @foreach ($filters['years'] as $year)
                                                    <option value="{{ $year->year }}" {{ $year->year == $minYear ? 'selected' : '' }}>{{ $year->year }}</option>
                                                @endforeach
                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_year_to"><input class="tz-form__group-input" placeholder="{{ sitekey('filter_key_five', 'desc')  }}"
                                                readonly="" type="number" value=""><select wrapper="false"
                                                class="select optional form-control is-hidden" label="false"
                                                name="q[max_year]" id="q_year_to">
                                                <option value="" label=" "></option>
                                                @foreach ($filters['years'] as $year)
                                                    <option value="{{ $year->year }}"  {{ $year->year == $maxYear ? 'selected' : '' }}>{{ $year->year }}</option>
                                                @endforeach

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
                                                    title="translation missing: az.activerecord.attributes.ad.year">{{ sitekey('filter_key_three', 'desc') }}</span>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">

                                        @foreach ($filters['years'] as $year)
                                            <div class="select-category__i js-category-select-item"
                                                data-id="{{ $year->year }}">
                                                <div class="select-category__i-name">{{ $year->year }}</div><span
                                                    class="select-category__i-radio"></span>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="select-category select-category--rounded js-select-category select-category--q_year_from"
                                    data-select="q_year_from">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title"><span class="translation_missing"
                                                    title="translation missing: az.activerecord.attributes.ad.year">{{ sitekey('filter_key_three', 'text') }}</span>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        @foreach ($filters['years'] as $year)
                                            <div class="select-category__i js-category-select-item"
                                                data-id="{{ $year->year }}">
                                                <div class="select-category__i-name">{{ $year->year }}</div><span
                                                    class="select-category__i-radio"></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- year end  --}}


                                {{-- odometr v3 start --}}
                                @php
                                $engineMin = $selectfilters['q']['engine_min'] ?? '';
                                $engineMax = $selectfilters['q']['engine_max'] ?? '';
                            @endphp
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_engine_volume">{{ sitekey('filter_static_four', 'name')  }},
                                        sm<sup>3</sup></label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_engine_volume_from"><input class="tz-form__group-input"
                                                placeholder="{{ sitekey('filter_mobile_1', 'text')  }}" readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[engine_min]" id="q_engine_volume_from">
                                                <option value="" label=" "></option>

                                                @foreach ($filters['enginevolumes'] as $engine)
                                                    <option value="{{ $engine->id }}"  {{ $engine->id == $engineMin ? 'selected' : '' }}>{{ $engine->name }}</option>
                                                @endforeach

                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                            data-open="q_engine_volume_to"><input class="tz-form__group-input"
                                                placeholder="{{ sitekey('filter_key_five', 'desc')  }}" readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[engine_max]" id="q_engine_volume_to">
                                                <option value="" label=" "></option>

                                                @foreach ($filters['enginevolumes'] as $engine)
                                                    <option value="{{ $engine->id }}"  {{ $engine->id == $engineMax ? 'selected' : '' }}>{{ $engine->name }}</option>
                                                @endforeach

                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="select-category select-category--rounded js-select-category select-category--q_engine_volume_from"
                                    data-select="q_engine_volume_from">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">{{ sitekey('filter_static_four', 'name')  }}, sm<sup>3</sup>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">

                                        @foreach ($filters['enginevolumes'] as $engine)
                                            <div class="select-category__i js-category-select-item"
                                                data-id="{{ $engine->id }}">
                                                <div class="select-category__i-name">{{ $engine->name }}</div><span
                                                    class="select-category__i-radio"></span>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>


                                <div class="select-category select-category--rounded js-select-category select-category--q_engine_volume_to"
                                    data-select="q_engine_volume_to">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">{{ sitekey('filter_key_five', 'title') }}, sm<sup>3</sup>
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        @foreach ($filters['enginevolumes'] as $engine)
                                            <div class="select-category__i js-category-select-item"
                                                data-id="{{ $engine->id }}">
                                                <div class="select-category__i-name">{{ $engine->name }}</div><span
                                                    class="select-category__i-radio"></span>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>

                                {{-- odometr v3 end --}}


                                {{-- Engine power start --}}

                                @php
                                $powerFrom = $selectfilters['q']['power_from'] ?? ''; // Get 'power_from' if it exists
                                $powerTo = $selectfilters['q']['power_to'] ?? '';     // Get 'power_to' if it exists
                            @endphp

                            <div class="tz-form__group tz-form__group--range js-tab-content-group">
                                <label class="tz-form__group-label" for="q_power">
                                    {{ sitekey('filter_key_five', 'text') }}
                                </label>
                                <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                    <div class="tz-form__group-fields__half q_power">
                                        <input
                                            class="numeric integer optional form-control tz-form__group-input"
                                            placeholder="{{ sitekey('filter_mobile_1', 'text')  }}" maxlength="4" pattern="[0-9]*" type="number"
                                            step="1" size="4" name="q[power_from]" id="q_power_from"
                                            value="{{ $powerFrom }}"><!-- Set the 'power_from' value here -->
                                        <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                    </div>
                                    <div class="tz-form__group-fields__half q_power">
                                        <input
                                            class="numeric integer optional form-control tz-form__group-input"
                                            placeholder="{{ sitekey('filter_key_five', 'desc') }}" maxlength="4" pattern="[0-9]*" type="number"
                                            step="1" size="4" name="q[power_to]" id="q_power_to"
                                            value="{{ $powerTo }}"><!-- Set the 'power_to' value here -->
                                        <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                    </div>
                                </div>
                            </div>


                                {{-- Engine pwer end  --}}



                                {{-- color start  --}}

                                @php
                                $selectedColors = $selectfilters['q']['colors'] ?? []; // Get 'colors' array if it exists
                                @endphp
                                <div class="tz-form__group js-select-category-open js-tab-content-group"
                                    data-open="q_color"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text" value=""><label
                                        class="tz-form__group-label tz-form__group-label--select"
                                        for="q_color">{{ sitekey('filter_key_three', 'name') }}</label><input type="hidden"
                                        value="" autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden" name="q[colors][]" id="q_color">
                                        @foreach ($filters['colors'] as $color)
                                            <option value="{{ $color->id }}"  {{ in_array($color->id, $selectedColors) ? 'selected' : '' }}>{{ $color->name }}</option>
                                        @endforeach
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span>
                                    <div class="tz-form__group-divider"></div>
                                </div>


                                <div class="select-category select-category--rounded js-select-category select-category--q_color"
                                    data-select="q_color">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">{{ sitekey('filter_key_three', 'name') }}</div>
                                            <div class="select-category__header-cancel js-close-popup-btn"></div>
                                        </div>
                                    </div>
                                    <div class="select-category__body">
                                        @foreach ($filters['colors'] as $color)
                                        <div class="select-category__i js-category-select-item select-category__i--color"
                                            data-id="{{ $color->id }}">
                                            <div class="select-category__i-color" style="background-color: {{ $color->hex }}"></div>
                                            <div class="select-category__i-name">{{ $color->name }}</div><span
                                                class="select-category__i-radio"></span>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>


                                {{-- color end  --}}



                                {{-- market start  --}}
                                @php
                                $selectedMarkets = $selectfilters['q']['markets'] ?? []; // Get 'markets' array if it exists
                                @endphp
                                <div class="tz-form__group js-select-category-open js-tab-content-group"
                                    data-open="q_market"><input class="tz-form__group-input" placeholder=" "
                                        readonly="" type="text" value=""><label
                                        class="tz-form__group-label tz-form__group-label--select" for="q_market">{{ sitekey('filter_key_six', 'text') }}</label><input type="hidden"
                                        value="" autocomplete="off"><select multiple="multiple"
                                        class="select optional form-control is-hidden" name="q[markets][]" id="q_market">
                                        @foreach ($filters['markets'] as $market)
                                        <option value="{{ $market->id }}" {{ in_array($market->id, $selectedMarkets) ? 'selected' : '' }}>{{ $market->name }}</option>
                                        @endforeach
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span></div>



                                <div class="select-category select-category--rounded js-select-category select-category--q_market"
                                    data-select="q_market" id="q_market">
                                    <div class="select-category__header-container">
                                        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                            <div class="select-category__header-title">{{ sitekey('filter_key_six', 'text') }}
                                            </div>
                                            <div class="select-category__header-cancel js-close-popup-btn"
                                                id="close-market"></div>
                                        </div>
                                    </div>
                                    @foreach ($filters['markets'] as $market)
                                    <div class="select-category__body">
                                        <div class="select-category__i js-category-select-item" data-id="{{ $market->id }}">
                                            <div class="select-category__i-name">{{ $market->name }}</div><span
                                                class="select-category__i-radio"></span>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                {{-- market end --}}

                                {{-- price start  --}}

                                @php
                                $minPrice = $selectfilters['q']['price_min'] ?? ''; // Get the minimum price if it exists
                                $maxPrice = $selectfilters['q']['price_max'] ?? ''; // Get the maximum price if it exists
                                $priceModel = $selectfilters['q']['price_model'] ?? 'usd'; // Default to USD if not set
                            @endphp

                            <div class="tz-form__blk tz-form__blk--top-border">
                                <div class="tz-form__group tz-form__group--range tz-form__group--price">
                                    <label class="tz-form__group-label" for="q_price">{{ sitekey('list_car_two', 'desc') }}</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--3 tz-d-grid">
                                        <div class="tz-form__group-fields__half">
                                            <input inputmode="numeric" type="number"
                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                placeholder="{{ sitekey('filter_mobile_1', 'text') }}" maxlength="11" pattern="[0-9]*" size="11"
                                                name="q[price_min]" id="q_price_from" value="{{ $minPrice }}">
                                            <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half">
                                            <input inputmode="numeric" type="number"
                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                placeholder="{{ sitekey('filter_key_five', 'desc') }}" maxlength="11" pattern="[0-9]*" size="11"
                                                name="q[price_max]" id="q_price_to" value="{{ $maxPrice }}">
                                            <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="filter__short tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                            data-open="q_currency">
                                            <select name="q[price_model]" id="q_currency">
                                                <option value="usd" {{ $priceModel === 'usd' ? 'selected' : '' }}>{{sitekey('list_car_three','title')}}</option>
                                                <!-- Add other currency options here if needed -->
                                                <option value="eur" {{ $priceModel === 'eur' ? 'selected' : '' }}>EUR</option>
                                                <option value="azn" {{ $priceModel === 'azn' ? 'selected' : '' }}>AZN</option>
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
                        <div class="tz-form__blk-title">{{ sitekey('filter_static_four', 'title') }}</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <span>
                                <input checked="checked" id="q_fuel_type_0" name="q[fuel_types][]" type="radio"
                                    value=""><label class="collection_radio_buttons" for="q_fuel_type_0">{{ sitekey('filter_mobile_1', 'desc') }}</label></span>
                            @foreach ($filters['fueltypes'] as $fuel)
                                <span>
                                    <input type="radio" value="{{ $fuel->id }}" name="q[fuel_types][]"
                                        id="q_fuel_type_{{ $fuel->id }}"
                                        {{ isset($selectfilters['q']['fuel_types']) && in_array($fuel->id, $selectfilters['q']['fuel_types']) ? 'checked' : '' }}>
                                    <label class="collection_radio_buttons" for="q_fuel_type_{{ $fuel->id }}">{{ $fuel->name }}</label>
                                </span>
                            @endforeach
                        </div>
                    </div>


                    {{-- fuel type end --}}

                    {{-- transmission start --}}
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{ sitekey('filter_static_four', 'text') }}</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <span>
                                <input checked="checked" id="q_gear_0" name="q[gears][]" type="radio" value="">
                                <label class="collection_radio_buttons" for="q_gear_0">{{ sitekey('filter_mobile_1', 'desc') }}</label>
                            </span>
                            @foreach ($filters['transmissions'] as $transmission)
                                <span>
                                    <input type="radio" value="{{ $transmission->id }}" name="q[gears][]"
                                        id="q_gear_{{ $transmission->id }}"
                                        {{ isset($selectfilters['q']['gears']) && in_array($transmission->id, $selectfilters['q']['gears']) ? 'checked' : '' }}>
                                    <label class="collection_radio_buttons" for="q_gear_{{ $transmission->id }}">{{ $transmission->name }}</label>
                                </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- transmission end --}}


                    {{-- Gear shift start --}}

                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{ sitekey('filter_static_four', 'desc') }}</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <div class="tz-form__group-list">
                                <span>
                                    <input checked="checked" id="q_transmission_0" name="q[transmissions][]" type="radio" value="">
                                    <label class="collection_radio_buttons" for="q_transmission_0">{{ sitekey('filter_mobile_1', 'desc') }}</label>
                                </span>
                                @foreach ($filters['damages'] as $gear)
                                    <span>
                                        <input type="radio" value="{{ $gear->id }}" name="q[transmissions][]"
                                            id="q_transmission_{{ $gear->id }}"
                                            {{ isset($selectfilters['q']['transmissions']) && in_array($gear->id, $selectfilters['q']['transmissions']) ? 'checked' : '' }}>
                                        <label class="collection_radio_buttons" for="q_transmission_{{ $gear->id }}">{{ $gear->name }}</label>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Gear shift end --}}

                    {{-- Passenger count start  --}}
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{ sitekey('filter_key_six', 'title') }}</div>
                        <div class="tz-form__group">
                            <span>
                                <input type="checkbox" value="1" name="q[seats_count][]" id="q_seats_count_1"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(1, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_1">1</label>
                            </span>
                            <span>
                                <input type="checkbox" value="2" name="q[seats_count][]" id="q_seats_count_2"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(2, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_2">2</label>
                            </span>
                            <span>
                                <input type="checkbox" value="3" name="q[seats_count][]" id="q_seats_count_3"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(3, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_3">3</label>
                            </span>
                            <span>
                                <input type="checkbox" value="4" name="q[seats_count][]" id="q_seats_count_4"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(4, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_4">4</label>
                            </span>
                            <span>
                                <input type="checkbox" value="5" name="q[seats_count][]" id="q_seats_count_5"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(5, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_5">5</label>
                            </span>
                            <span>
                                <input type="checkbox" value="6" name="q[seats_count][]" id="q_seats_count_6"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(6, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_6">6</label>
                            </span>
                            <span>
                                <input type="checkbox" value="7" name="q[seats_count][]" id="q_seats_count_7"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(7, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_7">7</label>
                            </span>
                            <span>
                                <input type="checkbox" value="8" name="q[seats_count][]" id="q_seats_count_8"
                                    {{ isset($selectfilters['q']['seats_count']) && in_array(8, $selectfilters['q']['seats_count']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_seats_count_8">8+</label>
                            </span>
                        </div>
                    </div>


                    {{-- passenger count end  --}}

                    {{-- car equipment start --}}
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{ sitekey('filter_key_seven', 'text') }}</div>
                        <div class="tz-form__group">
                            @foreach ($filters['equipments'] as $equipment)
                            <span>
                                <input type="checkbox" value="{{ $equipment->id }}" name="q[equipments][]"
                                    id="q_extras_{{ $equipment->id }}"
                                    {{ isset($selectfilters['q']['equipments']) && in_array($equipment->id, $selectfilters['q']['equipments']) ? 'checked' : '' }}>
                                <label class="collection_check_boxes" for="q_extras_{{ $equipment->id }}">{{ $equipment->name }}</label>
                            </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- car equipment end --}}


                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{ sitekey('detail_car_two', 'desc') }}</div>
                        <div class="tz-form__group">
                            <div class="tz-form__group-list">
                                <input name="q[crashed]" type="hidden" value="0" autocomplete="off">
                                <input class="boolean optional form-control" type="checkbox" value="1" name="q[crashed]" id="q_crashed"
                                    {{ isset($selectfilters['q']['crashed']) && $selectfilters['q']['crashed'] == 1 ? 'checked' : '' }}>
                                <label class="boolean optional control-label" for="q_crashed">{{ sitekey('filter_key_six', 'desc') }}</label>

                                <input name="q[painted]" type="hidden" value="0" autocomplete="off">
                                <input class="boolean optional form-control" type="checkbox" value="1" name="q[painted]" id="q_painted"
                                    {{ isset($selectfilters['q']['painted']) && $selectfilters['q']['painted'] == 1 ? 'checked' : '' }}>
                                <label class="boolean optional control-label" for="q_painted">{{ sitekey('filter_key_six', 'name') }}</label>
                            </div>
                        </div>
                    </div>


                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__checkbox tz-form__group">
                            <label class="" for="q_for_spare_parts">
                                <div class="tz-form__checkbox-top tz-d-flex tz-justify-between tz-align-center">
                                    <input name="q[only_damaged]" type="hidden" value="0" autocomplete="off">
                                    <input class="boolean optional form-control" type="checkbox" value="1" name="q[only_damaged]" id="q_for_spare_parts"
                                        {{ isset($selectfilters['q']['only_damaged']) && $selectfilters['q']['only_damaged'] == 1 ? 'checked' : '' }}>
                                    <div class="tz-form__checkbox-text">{{ sitekey('list_car_four', 'desc') }}</div>
                                    <div class="tz-form__checkbox-tickmark"></div>
                                </div>
                                <div class="tz-form__checkbox-description">{{ sitekey('filter_mobile_1', 'name') }}</div>
                            </label>
                        </div>
                    </div>


                    <div class="tz-container filter__bottom"><button type="submit" data-disable-with=""
                            class="tz-btn tz-btn--primary tz-btn--full">{{ sitekey('filter_mobile_2', 'title') }}</button></div>
                </form>
            </div>
        </div>
    </div>




@endsection
