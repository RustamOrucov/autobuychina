@extends('mobile.layout.layout')
@section('mobile_content')
    <script src="{{ asset('assets_/js/car.js') }}"></script>


    <div class="body-inner" style="padding-top: 61px;">
        <div class="header js-header is-sticky-header">
            <div class="header__nav">
            <div class="header__nav-left">@include('mobile.inc.back-button')</div>
                <div class="header__nav-title">
                    <h1>{{sitekey('register_mobile','desc')}}</h1>
                </div>
                <div class="header__nav-right"></div>
            </div>
        </div>
        <div class="content">
            <div class="new-auto">
                <div class="limits-container tz-form__blk">
                    <div class="limits limits--current-step limits--limit">
                        <div class="limits--description">
                            <div class="text-success">{{sitekey('register_mobile','name')}} <span class="phone-num">
                                    {{ auth('dealer')->user()->d_name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tz-form__divider"></div>
                {{-- @if ($errors->any())
                <div class="error-summary">
                    <h4>{{sitekey('add_mobile','title')}}</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
                <form class="simple_form new-product-form product-form js-product-form js-filter-form tz-form"
                id="new_auto" data-auth-url="" data-advanced-select="true" novalidate="novalidate"
                      enctype="multipart/form-data" action="{{ route('mobile.addcar') }}" accept-charset="UTF-8"
                      method="post">
                    @csrf
                    <input type="text" hidden name="dealer_id" value="{{ auth('dealer')->user()->id }}">
                    {{-- select brand start --}}
                    <div class="tz-form__blk">
                        <div class="tz-form__group tz-form__group--img js-select-category-open" data-open="auto_make_id"
                            data-reset="true">
                            <div class="tz-form__group-img js-make-logo-container"><img
                                    src="{{ asset('assets_/img/icon-make--grey-e8ba093a9424dd0c7f93b5104c401938cb6e3ec4839a463fe35fac41018438f2.svg') }}">
                            </div>
                            <input class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_make_id">{{sitekey('list_car','desc')}} <abbr title="required">*</abbr></label>

                                <select
                                class="select required form-control is-hidden js_make_id" data-models-url=""
                                name="car_models_id" id="auto_make_id" required>

                                <option value="" label=" "></option>


                                @foreach ($properties['brands'] as $brand)
                                    <option  value="{{ $brand->id }}"   {{ old('car_models_id', isset($model) ? $model->car_models_id : '') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                        </div>
                        @error('car_models_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                        <div class="toggle-models js-toggle-models tz-form__group tz-form__group--bordered--top js-select-category-open"
                            data-open="auto_model_id"><input class="tz-form__group-input" placeholder=" " readonly=""
                                type="text"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_model">{{sitekey('filter_key','text')}} <abbr title="required">*</abbr></label><select
                                class="is-hidden js-select-model js_model_id" name="model_type_id" id="auto_model_id">
                                <option value="">{{sitekey('add_mobile','text')}}</option>
                                @foreach ($properties['models'] as $model)
                                    <option value="{{ $model->id }}" {{ old('model_type_id', isset($model) ? $model->model_type_id : '') == $model->id ? 'selected' : '' }}>{{ $model->name }}</option>
                                @endforeach

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>

                                @error('model_type_id')
                                <span class="error">{{ $message }}</span>
                                @enderror

                    </div>

                    <div class="select-category select-category--full-height js-select-category select-category--auto_make_id"
                        data-select="auto_make_id">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                </div>
                                <div class="popup-header__title">{{sitekey('list_car','desc')}}</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="{{sitekey('filter_mobile_2','text')}}"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__blk" id="js-popular-makes-container">
                                <div class="select-category__blk-content">
                                    @foreach ($properties['brands'] as $brand)
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


                    <div class="select-category select-category--full-height js-select-category js-select-category-models select-category--auto_model_id"
                        data-select="auto_model_id">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                </div>
                                <div class="popup-header__title">{{sitekey('filter_key','text')}}</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="{{sitekey('add_mobile','desc')}}"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            <div class="select-category__blk-content js-models-list js-models-list-disabled-groups">
                                @foreach ($properties['models'] as $model)
                                    <div class="select-category__i js-category-select-item"
                                        data-id="{{ $model->id }}">
                                        <div class="select-category__i-name js-category-select-item-name ">
                                            {{ $model->name }}</div>
                                        <span class="select-category__i-radio"></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>



                    {{-- select brand end --}}


                    {{-- car images start --}}
                    <div class="tz-form__divider"></div>

                    <div class="tz-form__blk">
                        <div class="input pond pond-grid" data-endpoint="" data-name="gallery[photo_ids][]"
                            data-target-format="">
                            <label for="" class="string optional control-label">{{sitekey('list_car_six','text')}}</label>
                            <div class="pond-inner">
                                <div class="pond-notice-container">
                                    <div class="pond-notice pond-notice--grey pond-notice--first">
                                        <div class="pond-notice__title pond-notice__title--red">{{sitekey('list_car_six','desc')}}</div>
                                        <div class="pond-notice__text">{{sitekey('list_car_six','name')}}</div>
                                    </div>
                                </div>

                                <div class="pond-img-list ui-sortable" id="imageContainer">
                                    <div class="custom-hidden" style="display: flex; gap: 10px">
                                        <input type="file" name="carimages[]" id="carImageInput" multiple
                                            style="display: none;">
                                        <label style="width:160px"
                                            class="pond-img-card js-pond-img-card pond-img-card--front"
                                            id="backImageUpload">
                                            <span>{{sitekey('list_car_seven','title')}}</span>

                                        </label>
                                        <label style="width:160px"
                                            class="pond-img-card js-pond-img-card pond-img-card--front"
                                            id="mainImageUpload">
                                            <span>{{sitekey('list_car_seven','text')}}</span>

                                        </label>
                                        <div class="pond-img-card js-pond-img-card pond-img-card--dashboard"
                                            id="frontPanelUpload">
                                            <span>{{sitekey('list_car_seven','desc')}}</span>
                                        </div>
                                    </div>
                                    <label class="pond-new-img-button pond-new-img" id="addImageBtn">
                                        <span class="icon"></span>
                                        <span class="text text--default">{{sitekey('list_car_seven','name')}}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($errors->get('carimages.*') as $index => $messages)
                    @foreach ($messages as $message)
                        <span class="error">{{ $message }}</span>
                    @endforeach
                @endforeach
                    {{-- car images end --}}

                    {{-- car ban start --}}

                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">

                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="auto_category_id"><input class="tz-form__group-input" placeholder=" "
                                readonly="" type="text"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_category">{{sitekey('filter_key_three','title')}} <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="ban_id" id="auto_category_id">
                                <option value="" label=" "></option>
                                @foreach ($properties['bans'] as $ban)
                                    <option value="{{ $ban->id }}" {{ old('ban_id', isset($model) ? $model->ban_id : '') == $ban->id ? 'selected' : '' }}>{{ $ban->name }}</option>
                                @endforeach

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        @error('ban_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                        <div class="select-category select-category--rounded js-select-category select-category--auto_category_id"
                            data-select="auto_category_id">
                            <div class="select-category__header-container">
                                <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                    <div class="select-category__header-title">{{sitekey('filter_key_three','title')}}</div>
                                    <div class="select-category__header-cancel js-close-popup-btn"></div>
                                </div>
                            </div>
                            @foreach ($properties['bans'] as $ban)
                                <div class="select-category__body">
                                    <div class="select-category__i js-category-select-item"
                                        data-id="{{ $ban->id }}">
                                        <div class="select-category__i-name">{{ $ban->name }}</div><span
                                            class="select-category__i-radio"></span>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                        {{-- select ban end --}}


                        <div class="tz-form__group-container">
                            <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                    class="string required form-control tz-form__group-input" data-number="true"
                                    placeholder=" " type="number" name="odometer_km" id="auto_mileage" value="{{ old('odometer_km', isset($model) ? $model->odometer_km : '') }}"><label
                                    class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                    for="auto_mileage" >{{sitekey('detail_car_two','title')}} <abbr title="required">*</abbr></label><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                <div class="tz-form__group-divider"></div>
                            </div>
                            <div class="tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                data-open="auto_mileage_unit"><select name="" id="auto_mileage_unit">

                                    <option selected="selected" value="km">km</option>
                                </select>
                                <div class="tz-form__short-btn"></div>
                            </div>
                            <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                              @error('odometer_km')
            <span class="error">{{ $message }}</span>
                           @enderror
                        </div>







                        {{-- select year start --}}

                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="auto_reg_year"><input class="tz-form__group-input" placeholder=" " readonly=""
                                type="text" value=""><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_reg_year">{{sitekey('car_detail_one','desc')}} <abbr title="required">*</abbr></label><select wrapper="false"
                                label="false" class="select required form-control is-hidden" name="year"
                                id="auto_reg_year">
                                <option value="" label=" "></option>
                                @foreach ($properties['years'] as $year)
                                    <option value="{{ $year->year }}" {{ old('year', isset($model) ? $model->year : '') == $year->year ? 'selected' : '' }}>{{ $year->year }}</option>
                                @endforeach


                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        @error('year')
                        <span class="error">{{ $message }}</span>
                                       @enderror




                        <div class="select-category select-category--rounded js-select-category select-category--auto_reg_year"
                            data-select="auto_reg_year">
                            <div class="select-category__header-container">
                                <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                    <div class="select-category__header-title"><span class="translation_missing"
                                            title="translation missing: az.activerecord.attributes.ad.year">{{sitekey('car_detail_one','desc')}}</span>
                                    </div>
                                    <div class="select-category__header-cancel js-close-popup-btn"></div>
                                </div>
                            </div>
                            <div class="select-category__body">
                                @foreach ($properties['years'] as $year)
                                    <div class="select-category__i js-category-select-item"
                                        data-id="{{ $year->year }}">
                                        <div class="select-category__i-name">{{ $year->year }}</div><span
                                            class="select-category__i-radio"></span>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                        {{-- select year end --}}

                        {{-- select  engine start --}}

                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="auto_engine_volume"><input class="tz-form__group-input" placeholder=" "
                                readonly="" type="number" value=""><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_engine_volume">{{sitekey('add_mobile','name')}}<sup>3</sup> <abbr
                                    title="required">*</abbr></label><select wrapper="false"
                                class="select required form-control is-hidden" label="false" name="engine_volume_id"
                                id="auto_engine_volume">
                                <option value="" label=" "></option>
                                @foreach ($properties['enginevolumes'] as $engine)
                                    <option value="{{ $engine->id }}" {{ old('engine_volume_id', isset($model) ? $model->engine_volume_id : '') == $engine->id ? 'selected' : '' }}>{{ $engine->name }}</option>
                                @endforeach

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        @error('engine_volume_id')
                        <span class="error">{{ $message }}</span>
                    @enderror

                        <div class="select-category select-category--rounded js-select-category select-category--auto_engine_volume"
                            data-select="auto_engine_volume">
                            <div class="select-category__header-container">
                                <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                    <div class="select-category__header-title">{{sitekey('add_mobile','name')}}<sup>3</sup> </div>
                                    <div class="select-category__header-cancel js-close-popup-btn"></div>
                                </div>
                            </div>
                            @foreach ($properties['enginevolumes'] as $engine)
                                <div class="select-category__body">
                                    <div class="select-category__i js-category-select-item"
                                        data-id="{{ $engine->id }}">
                                        <div class="select-category__i-name">{{ $engine->name }}</div><span
                                            class="select-category__i-radio"></span>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                        {{-- select engine end --}}


                        {{-- engine power start --}}

                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string required form-control tz-form__group-input" data-number="true"
                                placeholder=" " maxlength="4" size="4" type="text" name="engine_v"
                                id="auto_power" value="{{ old('engine_v', isset($model) ? $model->engine_v : '') }}"><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_power">{{sitekey('add_mobile_1','title')}} <abbr title="required">*</abbr></label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>

                        @error('engine_v')
                        <span class="error">{{ $message }}</span>
                    @enderror
                        {{-- engine power end --}}

                        {{-- color start --}}
                        <div class="tz-form__group js-select-category-open" data-open="auto_color_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_color">Color <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="cylinder_id" id="auto_color_id">
                                <option value="" label=" "></option>
                                @foreach ($properties['colors'] as $color)
                                    <option value="{{ $color->id }}" {{ old('cylinder_id', isset($model) ? $model->cylinder_id : '') == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                                @endforeach


                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        @error('cylinder_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                        <div class="select-category select-category--rounded js-select-category select-category--auto_color_id"
                            data-select="auto_color_id">
                            <div class="select-category__header-container">
                                <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                    <div class="select-category__header-title">{{sitekey('filter_key_three','name')}}</div>
                                    <div class="select-category__header-cancel js-close-popup-btn"></div>
                                </div>
                            </div>
                            @foreach ($properties['colors'] as $color)
                                <div class="select-category__body">
                                    <div class="select-category__i js-category-select-item select-category__i--color"
                                        data-id="{{ $color->id }}">
                                        <div class="select-category__i-color"
                                            style="background-color: {{ $color->hex }}"></div>
                                        <div class="select-category__i-name">{{ $color->name }}</div><span
                                            class="select-category__i-radio"></span>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                        {{-- color end --}}

                        {{-- markets start --}}
                        <div class="tz-form__group js-select-category-open" data-open="auto_market_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string optional control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_market">{{sitekey('list_car_three','text')}}</label><select class="select optional form-control is-hidden"
                                name="market_id" id="auto_market_id" required>
                                <option value="" label=" "></option>
                                @foreach ($properties['markets'] as $market)
                                    <option value="{{ $market->id }}" {{ old('market_id', isset($model) ? $model->market_id : '') == $market->id ? 'selected' : '' }}>{{ $market->name }}</option>
                                @endforeach

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>

                                @error('market_id')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        <div class="select-category select-category--rounded js-select-category select-category--auto_market_id"
                            data-select="auto_market_id">
                            <div class="select-category__header-container">
                                <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                                    <div class="select-category__header-title">{{sitekey('list_car_three','text')}}</div>
                                    <div class="select-category__header-cancel js-close-popup-btn"></div>
                                </div>
                            </div>
                            <div class="select-category__body">
                                @foreach ($properties['markets'] as $market)
                                    <div class="select-category__i js-category-select-item"
                                        data-id="{{ $market->id }}">
                                        <div class="select-category__i-name">{{ $market->name }}</div><span
                                            class="select-category__i-radio"></span>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        {{-- markets end --}}
                    </div>






                    <div class="tz-form__divider"></div>


                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{sitekey('filter_static_four','title')}}<abbr> *</abbr></div>

                        <div class="tz-form__group tz-form__group--radio">
                            @foreach ($properties['fueltypes'] as $fuel)
                                <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                        value="{{ $fuel->id }}" name="fuel_type_id"
                                        id="auto_fuel_type_id_{{ $fuel->id }}"><label
                                        class="collection_radio_buttons"
                                        for="auto_fuel_type_id_{{ $fuel->id }}">{{ $fuel->name }}</label></span>
                            @endforeach



                        </div>

                    </div>

                    @error('fuel_type_id')
                    <span class="error">{{ $message }}</span>
                @enderror


                    <div class="tz-form__divider"></div>


                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{sitekey('add_mobile_1','text')}}<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio">
                            @foreach ($properties['transmissions'] as $transmission)
                                <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                        value="{{ $transmission->id }}" name="transmission_id"
                                        id="auto_gear_id_{{ $transmission->id }}" ><label class="collection_radio_buttons"
                                        for="auto_gear_id_{{ $transmission->id }}">{{ $transmission->name }}</label></span>
                            @endforeach

                        </div>
                    </div>

                    @error('transmission_id')
                    <span class="error">{{ $message }}</span>
                @enderror


                    <div class="tz-form__divider"></div>


                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{sitekey('filter_static_four','desc')}}<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio">
                            @foreach ($properties['damages'] as $damage)
                                <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                        value="{{ $damage->id }}" name="damage_id"
                                        id="auto_transmission_id_{{ $damage->id }}"><label
                                        class="collection_radio_buttons"
                                        for="auto_transmission_id_{{ $damage->id }}">{{ $damage->name }}</label></span>
                            @endforeach

                        </div>
                    </div>


                    @error('damage_id')
                    <span class="error">{{ $message }}</span>
                @enderror

                    <div class="tz-form__divider"></div>


                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{sitekey('add_mobile_1','desc')}}</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="1" name="of_passenger" id="auto_seats_count_1" {{ isset($model) && $model->of_passenger == '1' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_1">1</label></span>

                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="2" name="of_passenger" id="auto_seats_count_2" {{ isset($model) && $model->of_passenger == '2' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_2">2</label></span>

                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="3" name="of_passenger" id="auto_seats_count_3" {{ isset($model) && $model->of_passenger == '3' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_3">3</label></span>

                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="4" name="of_passenger" id="auto_seats_count_4" {{ isset($model) && $model->of_passenger == '4' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_4">4</label></span>

                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="5" name="of_passenger" id="auto_seats_count_5" {{ isset($model) && $model->of_passenger == '5' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_5">5</label></span>

                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="6" name="of_passenger" id="auto_seats_count_6" {{ isset($model) && $model->of_passenger == '6' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_6">6</label></span>

                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="7" name="of_passenger" id="auto_seats_count_7" {{ isset($model) && $model->of_passenger == '7' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_7">7</label></span>
                            <span class="radio"><input class="radio_buttons optional form-control" type="radio"
                                    value="8" name="of_passenger" id="auto_seats_count_8" {{ isset($model) && $model->of_passenger == '8' ? 'selected' : '' }}><label
                                    class="collection_radio_buttons" for="auto_seats_count_8">8+</label></span>
                            <div>

                                <span class="radio"><input checked="" class="radio_buttons" id="auto_seats_count_0"
                                        name="of_passenger" type="radio" value=""><label
                                        class="collection_radio_buttons" for="auto_seats_count_0">{{sitekey('add_mobile_1','name')}}</label></span>



                            </div>
                        </div>
                    </div>

                    @error('of_passenger')
                    <span class="error">{{ $message }}</span>
                @enderror



                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">{{sitekey('add_mobile_2','title')}}</div>
                        <div class="tz-form__group">
                            @foreach ($properties['equipments'] as $equipment)
                                <span><input class="tz-form__check-input" type="checkbox" value="{{ $equipment->id }}"
                                        name="car_equipment[]" id="auto_extra_ids_{{ $equipment->id }}"><label
                                        class="tz-form__check-label tz-text tz-text--primary"
                                        for="auto_extra_ids_{{ $equipment->id }}">{{ $equipment->name }}</label></span>
                            @endforeach


                        </div>
                    </div>
                    @error('car_equipment[]')
                    <span class="error">{{ $message }}</span>
                @enderror



                    <div class="tz-form__divider"></div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__switch tz-form__group">
                            <label for="auto_crashed">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center">
                                    <input name="crashed" type="hidden" value="0" autocomplete="off">
                                    <input class="boolean optional form-control" type="checkbox" value="1"
                                        name="crashed" id="auto_crashed">
                                    <div class="tz-form__switch-text">{{sitekey('add_mobile_2','text')}}</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">{{sitekey('list_car_three','name')}}</div>
                            </label>
                            <div class="tz-form__group-divider"></div>
                        </div>

                        @error('crashed')
                        <span class="error">{{ $message }}</span>
                    @enderror


                        <div class="tz-form__switch tz-form__group"><label for="auto_painted">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="painted" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="painted" id="auto_painted">
                                    <div class="tz-form__switch-text">{{sitekey('add_mobile_2','desc')}}</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">{{sitekey('list_car_four','text')}}</div>
                            </label>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        @error('painted')
                        <span class="error">{{ $message }}</span>
                    @enderror
                        <div class="tz-form__switch tz-form__group"><label for="auto_for_spare_parts">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="for_spare_parts" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="for_spare_parts" id="auto_for_spare_parts">
                                    <div class="tz-form__switch-text">{{sitekey('add_mobile_2','name')}}</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">{{sitekey('filter_mobile_1','name')}}</div>
                            </label></div>
                            @error('for_spare_parts')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--textarea">
                            <div class="card-header p-0 pt-1" style="margin-top:8px">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    @foreach (config('app.languages') as $index => $lang)
                                        <li class="nav-item">
                                            <a class="nav-link {{ $loop->first ? 'active show' : '' }} @error("$lang.name") text-danger @enderror"
                                                id="custom-tabs-one-{{ $lang }}-tab" data-toggle="pill"
                                                href="#tab-{{ $lang }}" role="tab"
                                                aria-controls="custom-tabs-one-{{ $lang }}"
                                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                {{ strtoupper($lang) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <label class="text optional control-label tz-form__group-label tz-form__group-label--textarea"
                                for="auto_description">{{sitekey('car_detail_4','name')}}</label>
                            @foreach (config('app.languages') as $index => $lang)
                                <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                    id="tab-{{ $lang }}" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                                    <div>

                                        <textarea id="summernote{{ $index }}" placeholder="desc{{ $lang }}"
                                            name="{{ $lang }}[item_comment]" class="form-control cm-item-comment">
                                {{ old("$lang.item_comment", isset($model) ? $model->translateOrDefault($lang)->item_comment ?? '' : '') }}
                                     </textarea>
                                        @error("$lang.item_comment")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string optional form-control tz-form__group-input tz-form__group-input--uppercase"
                                placeholder=" " maxlength="17" size="17" type="text" name="vincode"
                                id="auto_vin"><label class="tz-form__group-label tz-form__group-label--select"
                                for="auto_vin">{{sitekey('list_car_five','desc')}}</label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>

                    </div>
                    @error('vincode')
                    <span class="error">{{ $message }}</span>
                @enderror
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group-container">
                            <div class="tz-form__group tz-form__group--bordered--bottom tz-form__group--price"><input
                                    class="string required form-control tz-form__group-input" data-number="true"
                                    placeholder=" " type="text" name="price" id="auto_price"><label
                                    class="string required control-label tz-form__group-label tz-form__group-label--select"
                                    for="auto_price">{{sitekey('list_car_two','desc')}} <abbr title="required">*</abbr></label><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                <div class="tz-form__group-divider"></div>
                            </div>
                            <div class="tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                data-open="auto_currency"><select name="" id="auto_currency">
                                    <option selected value="usd">{{sitekey('list_car_three','title')}}</option>
                                </select>
                                <div class="tz-form__short-btn"></div>
                            </div>
                        </div>

                    </div>
                    @error('price')
                    <span class="error">{{ $message }}</span>
                @enderror
                    <div class="tz-form__divider"></div>

                    {{-- city filter start  --}}
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group js-select-category-open" data-open="auto_region_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_region">{{sitekey('filter_key_two','desc')}} <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="region_id" id="auto_region_id">
                                @foreach ($properties['regions'] as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>

                    @error('region_id')
                    <span class="error">{{ $message }}</span>
                @enderror
                    <div class="select-category select-category--full-height js-select-category select-category--auto_region_id"
                        data-select="auto_region_id">
                        <div class="select-category__header-container">
                            <div class="popup-header">
                                <div class="popup-header__left">
                                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                                </div>
                                <div class="popup-header__title">{{sitekey('filter_key_two','desc')}}</div>
                                <div class="popup-header__right"></div>
                            </div>
                            <div class="select-category__search"><input type="text" name="" id=""
                                    class="select-category__search-input js-search-input" placeholder="{{sitekey('filter_mobile','title')}}"
                                    autocomplete="off"></div>
                        </div>
                        <div class="select-category__body select-category__body--type-2">
                            @foreach ($properties['regions'] as $region)
                            <div class="select-category__i js-category-select-item" data-id="{{ $region->id }}">
                                <div class="select-category__i-name js-category-select-item-name">{{ $region->name }}</div><span
                                    class="select-category__i-radio"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- city filter end --}}

                    <div class="tz-form__divider"></div>
                    <div class="tz-container tz-form__bottom">
                        <button type="submit"
                            class="tz-btn tz-btn--primary tz-btn--full">{{sitekey('add_mobile_3','title')}}</button>
                        <div class="new-product--confirm-rules">{{sitekey('list_car_eight','text')}}<a target="_blank" href="{{ route('mobile.agrement') }}">{{sitekey('list_car_eight','desc')}}</a>{{sitekey('list_car_1','title')}}<a target="_blank" href="{{ route('mobile.rules') }}">{{sitekey('list_car_eight','name')}}</a>.
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>


    <script>
        document.getElementById('addImageBtn').addEventListener('click', function () {
            document.getElementById('carImageInput').click();
        });

        const uploadedFiles = [];

        document.getElementById('carImageInput').addEventListener('change', function (event) {
            const files = Array.from(event.target.files);
            uploadedFiles.push(...files);

            const element = document.querySelector('.custom-hidden');
            element.style.display = 'none';

            files.forEach((file) => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const newImageCard = document.createElement('div');
                    newImageCard.classList.add('pond-img-card', 'js-pond-img-card');
                    newImageCard.style.position = 'relative';

                    const imageElement = document.createElement('img');
                    imageElement.src = e.target.result;
                    imageElement.style.width = '100%';
                    imageElement.style.height = '100%';
                    imageElement.style.borderRadius = '5px';
                    imageElement.style.objectFit = 'cover';
                    imageElement.style.transition = 'transform 0.3s';

                    const deleteBtn = document.createElement('button');
                    deleteBtn.innerHTML = 'X';
                    deleteBtn.style.position = 'absolute';
                    deleteBtn.style.top = '10px';
                    deleteBtn.style.right = '10px';
                    deleteBtn.style.fontWeight = 'bold';
                    deleteBtn.style.color = 'red';
                    deleteBtn.style.backgroundColor = 'transparent';
                    deleteBtn.style.border = 'none';
                    deleteBtn.style.padding = '5px';
                    deleteBtn.style.cursor = 'pointer';

                    const rotateRightBtn = document.createElement('button');
                    rotateRightBtn.innerHTML = '⟳';
                    rotateRightBtn.style.position = 'absolute';
                    rotateRightBtn.style.bottom = '10px';
                    rotateRightBtn.style.right = '10px';
                    rotateRightBtn.style.fontWeight = 'bold';
                    rotateRightBtn.style.backgroundColor = 'transparent';
                    rotateRightBtn.style.color = 'blue';
                    rotateRightBtn.style.border = 'none';
                    rotateRightBtn.style.padding = '5px';
                    rotateRightBtn.style.cursor = 'pointer';

                    const rotateLeftBtn = document.createElement('button');
                    rotateLeftBtn.innerHTML = '⟲';
                    rotateLeftBtn.style.position = 'absolute';
                    rotateLeftBtn.style.bottom = '10px';
                    rotateLeftBtn.style.left = '10px';
                    rotateLeftBtn.style.fontWeight = 'bold';
                    rotateLeftBtn.style.backgroundColor = 'transparent';
                    rotateLeftBtn.style.color = 'blue';
                    rotateLeftBtn.style.border = 'none';
                    rotateLeftBtn.style.padding = '5px';
                    rotateLeftBtn.style.cursor = 'pointer';

                    let rotation = 0;

                    deleteBtn.addEventListener('click', function () {
                        newImageCard.remove();
                        const index = uploadedFiles.indexOf(file);
                        if (index > -1) {
                            uploadedFiles.splice(index, 1);
                        }
                    });

                    rotateRightBtn.addEventListener('click', function (event) {
                        event.preventDefault();
                        rotation += 90;
                        imageElement.style.transform = `rotate(${rotation}deg)`;
                    });

                    rotateLeftBtn.addEventListener('click', function (event) {
                        event.preventDefault();
                        rotation -= 90;
                        imageElement.style.transform = `rotate(${rotation}deg)`;
                    });

                    newImageCard.appendChild(imageElement);
                    newImageCard.appendChild(deleteBtn);
                    newImageCard.appendChild(rotateRightBtn);
                    newImageCard.appendChild(rotateLeftBtn);

                    document.getElementById('imageContainer').appendChild(newImageCard);
                };

                reader.readAsDataURL(file);
            });

            const dataTransfer = new DataTransfer();
            uploadedFiles.forEach(file => {
                dataTransfer.items.add(file);
            });
            document.getElementById('carImageInput').files = dataTransfer.files;
        });
    </script>
@endsection