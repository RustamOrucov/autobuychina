@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="body-inner" style="padding-top: 61px;">
        <div class="header js-header is-sticky-header">
            <div class="header__nav">
                <div class="header__nav-left"><span class="header__nav-btn--back js-header-back-btn"
                        data-back-to-url="https://turbo.az/profile" onclick="history.back()"></span></div>
                <div class="header__nav-title">
                    <h1>New Ads</h1>
                </div>
                <div class="header__nav-right"></div>
            </div>
        </div>
        <div class="content">
            <div class="new-auto">
                <div class="limits-container tz-form__blk">
                    <div class="limits limits--current-step limits--limit">
                        <div class="limits--description">
                            <div class="text-success">You are ads an ad under the name <span class="phone-num">
                                    {{ auth('dealer')->user()->d_name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tz-form__divider"></div>
                <form class="simple_form new-product-form product-form js-product-form js-filter-form tz-form"
                    id="new_auto" data-auth-url="" data-advanced-select="true" novalidate="novalidate" enctype=""
                    action="" accept-charset="UTF-8" data-remote="true" method="post">
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--img js-select-category-open" data-open="auto_make_id"
                            data-reset="true">
                            <div class="tz-form__group-img js-make-logo-container"><img
                                    src="https://turbo.azstatic.com/assets/mobile/icon-make--grey-e8ba093a9424dd0c7f93b5104c401938cb6e3ec4839a463fe35fac41018438f2.svg">
                            </div>
                            <input class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_make_id">Marka <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden js_make_id"
                                data-models-url="https://turbo.az/api/v2/makes/:id/models" name="auto[make_id]"
                                id="auto_make_id">
                                <option value="" label=" "></option>
                                <option value="280">Abarth</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                        </div>



                        <div class="toggle-models js-toggle-models tz-form__group tz-form__group--bordered--top js-select-category-open"
                            data-open="auto_model_id"><input class="tz-form__group-input" placeholder=" " readonly=""
                                type="text"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_model">Model <abbr title="required">*</abbr></label><select
                                class="is-hidden js-select-model js_model_id" name="auto[model_id]" id="auto_model_id">
                                <option value="">Select</option>
                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>


                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk">
                        <div class="input pond pond-grid" data-endpoint=""
                            data-name="gallery[photo_ids][]" data-target-format="">
                            <div class="pond-inner">
                                <div class="pond-notice-container">
                                    <div class="pond-notice pond-notice--grey pond-notice--first">
                                        <div class="pond-notice__title pond-notice__title--red">It is forbidden !</div>
                                        <div class="pond-notice__text">Screenshots, framed images, and screen images.
                                        </div>
                                    </div>

                                </div>
                                <input accept="image/*" class="pond-new-img-field" multiple="true" name="images[]"
                                    type="file">
                                <div class="pond-message"></div>
                                <div class="pond-img-list ui-sortable ui-sortable-disabled">
                                    <div class="pond-img-card js-pond-img-card pond-img-card--front">
                                        <span>Front view</span>
                                    </div>
                                    <div class="pond-img-card js-pond-img-card pond-img-card--back">
                                        <span>Back view</span>
                                    </div>
                                    <div class="pond-img-card js-pond-img-card pond-img-card--dashboard">
                                        <span>Front panel</span>
                                    </div>
                                    <label class="pond-new-img-button pond-new-img"><span class="icon"></span><span
                                            class="text text--default">Add image</span></label>
                                </div>
                            </div>
                            <script id="pond_img_template" type="text/html">
                                <div class="pond-img">
                                    <div class="pond-img-thumb-container"></div>
                                    <div class="pond-img-actions"><a class="pond-img-delete" href="#"
                                                                     title="Destroy"></a></div>
                                </div></script>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="auto_category_id"><input class="tz-form__group-input" placeholder=" " readonly=""
                                type="text"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_category">Ban <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="auto[category_id]"
                                id="auto_category_id">
                                <option value="" label=" "></option>
                                <option value="9">Avtobus</option>
                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group-container">
                            <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                    class="string required form-control tz-form__group-input" data-number="true"
                                    placeholder=" " type="text" name="auto[mileage]" id="auto_mileage"><label
                                    class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                    for="auto_mileage">Mileage <abbr title="required">*</abbr></label><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                <div class="tz-form__group-divider"></div>
                            </div>
                            <div class="tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                data-open="auto_mileage_unit"><select name="auto[mileage_unit]" id="auto_mileage_unit">
                                    <option selected="selected" value="km">km</option>

                                </select>
                                <div class="tz-form__short-btn"></div>
                            </div>
                            <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                        </div>
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="auto_reg_year"><input class="tz-form__group-input" placeholder=" " readonly=""
                                type="text" value=""><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_reg_year">Year <abbr title="required">*</abbr></label><select wrapper="false"
                                label="false" class="select required form-control is-hidden" name="auto[reg_year]"
                                id="auto_reg_year">
                                <option value="" label=" "></option>
                                <option value="2024">2024</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="auto_engine_volume"><input class="tz-form__group-input" placeholder=" "
                                readonly="" type="number" value=""><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_engine_volume">Engine capacity, sm<sup>3</sup> <abbr
                                    title="required">*</abbr></label><select wrapper="false"
                                class="select required form-control is-hidden" label="false" name="auto[engine_volume]"
                                id="auto_engine_volume">
                                <option value="" label=" "></option>
                                <option value="50">50</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string required form-control tz-form__group-input" data-number="true"
                                placeholder=" " maxlength="4" size="4" type="text" name="auto[power]"
                                id="auto_power"><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_power">Engine power, a.g. <abbr title="required">*</abbr></label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group js-select-category-open" data-open="auto_color_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_color">Color <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="auto[color_id]" id="auto_color_id">
                                <option value="" label=" "></option>
                                <option value="5">Qara</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group js-select-category-open" data-open="auto_market_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string optional control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_market">Markets</label><select
                                class="select optional form-control is-hidden" name="auto[market_id]"
                                id="auto_market_id">
                                <option value="" label=" "></option>
                                <option value="1">Amerika</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Fuel type<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[fuel_type_id]" id="auto_fuel_type_id_1"><label
                                    class="collection_radio_buttons" for="auto_fuel_type_id_1">Benzin</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Gear shift<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[gear_id]" id="auto_gear_id_1"><label class="collection_radio_buttons"
                                    for="auto_gear_id_1">Back</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Transmission<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="2"
                                    name="auto[transmission_id]" id="auto_transmission_id_2"><label
                                    class="collection_radio_buttons"
                                    for="auto_transmission_id_2">Avtomat</label></span>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Passenger count</div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[seats_count]" id="auto_seats_count_1"><label
                                    class="collection_radio_buttons" for="auto_seats_count_1">1</label></span>
                            <div><span class="radio"><input checked="" class="radio_buttons"
                                        id="auto_seats_count_0" name="auto[seats_count]" type="radio"
                                        value=""><label class="collection_radio_buttons"
                                        for="auto_seats_count_0">Not to be recorded</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Car equipments</div>
                        <div class="tz-form__group"><span><input class="tz-form__check-input" type="checkbox"
                                    value="4" name="auto[extra_ids][]" id="auto_extra_ids_4"><label
                                    class="tz-form__check-label tz-text tz-text--primary" for="auto_extra_ids_4">Yüngül
                                    lehimli disklər</label></span>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__switch tz-form__group"><label for="auto_crashed">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="auto[crashed]" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="auto[crashed]" id="auto_crashed">
                                    <div class="tz-form__switch-text">Has a dent</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">One or more parts have been replaced or repaired.
                                </div>
                            </label>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__switch tz-form__group"><label for="auto_painted">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="auto[painted]" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="auto[painted]" id="auto_painted">
                                    <div class="tz-form__switch-text">Repainted</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">One or more parts have been repainted or cosmetic work has been done.
                                </div>
                            </label>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__switch tz-form__group"><label for="auto_for_spare_parts">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="auto[for_spare_parts]" type="hidden" value="0"
                                        autocomplete="off"><input class="boolean optional form-control" type="checkbox"
                                        value="1" name="auto[for_spare_parts]" id="auto_for_spare_parts">
                                    <div class="tz-form__switch-text">Damaged</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">It needs repair or is completely unusable.
                                </div>
                            </label></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--textarea"><label
                                class="text optional control-label tz-form__group-label tz-form__group-label--textarea"
                                for="auto_description">Additional information</label>
                            <textarea class="text optional form-control tz-form__group-textarea"
                                placeholder="Note the advantages and important points." name="auto[description]" id="auto_description"></textarea>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string optional form-control tz-form__group-input tz-form__group-input--uppercase"
                                placeholder=" " maxlength="17" size="17" type="text" name="auto[vin]"
                                id="auto_vin"><label class="tz-form__group-label tz-form__group-label--select"
                                for="auto_vin">VIN-code</label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>

                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group-container">
                            <div class="tz-form__group tz-form__group--bordered--bottom tz-form__group--price"><input
                                    class="string required form-control tz-form__group-input" data-number="true"
                                    placeholder=" " type="text" name="auto[price]" id="auto_price"><label
                                    class="string required control-label tz-form__group-label tz-form__group-label--select"
                                    for="auto_price">Price <abbr title="required">*</abbr></label><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                <div class="tz-form__group-divider"></div>
                            </div>
                            <div class="tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                data-open="auto_currency"><select name="auto[currency]" id="auto_currency">
                                    <option selected value="usd">USD</option>
                                </select>
                                <div class="tz-form__short-btn"></div>
                            </div>
                        </div>

                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group js-select-category-open" data-open="auto_region_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text"
                                value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_region">City <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="auto[region_id]"
                                id="auto_region_id">
                                <option value="62">Xaçmaz</option>

                            </select><span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-container tz-form__bottom">
                        <button name="button" type="submit" data-disable-with=""
                            class="tz-btn tz-btn--primary tz-btn--full">Share the ads
                        </button>
                        <div class="new-product--confirm-rules">By placing an ad, you confirm that you agree with Turbo.az's <a target="_blank"
                            href="{{ route('mobile.agrement') }}">User Agreement</a> and <a target="_blank" href="{{ route('mobile.rules') }}">Rules</a>.
                    </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
