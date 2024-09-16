@extends('front.layout.layout')

@section('front_content')
    <div class="home">
        <form action="" class="simple_form main-search js-main-search">
            <div class="tz-container">
                <div class="main-search__row"></div>


                <div class="main-search__row main-search__row-4 tz-d-grid">
                    {{-- marka selec filter start  --}}

                    <div class="main-search__item">
                        <select name="q[make][]" class="select optional form-control js-search-select-make"
                            data-dropdown-title="Marka" data-dropdown-reset="Sıfırla"
                            data-dropdown-placeholder="Markanı yazın" data-dropdown-not-found="Heç nə tapılmadı"
                            id="q_make" style="display: none;">
                            <option value="" label=" "></option>
                            <option value="280">Abarth</option>
                            <option value="28">Acura</option>

                        </select>
                        <div class="tz-dropdown" data-id="q_make">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                    class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">Marka</div>
                                <div class="tz-dropdown__values is-hidden">Markanı yazın</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                        data-val="">Sıfırla</div>
                                    <div class="tz-dropdown__option " data-val="280" data-group="">
                                        <div class="tz-dropdown__option-label"><span class="text">Abarth</span></div>
                                    </div>
                                    <div class="tz-dropdown__option " data-val="28" data-group="">
                                        <div class="tz-dropdown__option-label"><span class="text">Acura</span></div>
                                    </div>

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                        data-val=""><label class="tz-dropdown__option-label"><span class="text">Heç nə
                                                tapılmadı</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- marka select end   --}}

                    {{-- model select start --}}


                    <div class="main-search__item">
                        <select name="q[model][]" class="select optional form-control js-search-select-make"
                            data-dropdown-title="Model" data-dropdown-reset="Sıfırla"
                            data-dropdown-placeholder="Model yazın" data-dropdown-not-found="Heç nə tapılmadı"
                            id="q_make" style="display: none;">
                            <option value="" label=" "></option>
                            <option value="1">model 1</option>
                            <option value="2">model 2</option>

                        </select>
                        <div class="tz-dropdown" data-id="q_make">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                    class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">Model</div>
                                <div class="tz-dropdown__values is-hidden">Model yazın</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                        data-val="">Sıfırla</div>
                                    <div class="tz-dropdown__option " data-val="1" data-group="">
                                        <div class="tz-dropdown__option-label"><span class="text">model 1</span></div>
                                    </div>
                                    <div class="tz-dropdown__option " data-val="2" data-group="">
                                        <div class="tz-dropdown__option-label"><span class="text">model 2</span></div>
                                    </div>

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                        data-val=""><label class="tz-dropdown__option-label"><span class="text">Heç nə
                                                tapılmadı</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- model select end --}}


                    <div class="main-search__item">
                        <div class="main-search__control tz-d-flex tz-align-center"><input checked="checked" id="q_used"
                                name="q[used]" type="radio" value=""><label
                                class="main-search__control-tab js-main-search-controls-tab"
                                for="q_used">Hamısı</label><input type="radio" value="0" name="q[used]"
                                id="q_used_0"><label class="main-search__control-tab js-main-search-controls-tab"
                                for="q_used_0">Yeni</label><input type="radio" value="1" name="q[used]"
                                id="q_used_1"><label class="main-search__control-tab js-main-search-controls-tab"
                                for="q_used_1">Sürülmüş</label></div>
                    </div>


                    {{-- Select city filter --}}
                    <div class="main-search__item"><input name="q[region][]" type="hidden" value=""
                            autocomplete="off"><select name="q[region][]"
                            class="select optional form-control js-search-select-multi-with-search"
                            data-dropdown-title="Şəhər" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Şəhər"
                            data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_region"
                            style="display: none;">
                            <option value="7">Ağcabədi</option>


                        </select>
                        <div class="tz-dropdown" data-id="q_region">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                    class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">Şəhər</div>
                                <div class="tz-dropdown__values is-hidden">Şəhər</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                        data-val="">Sıfırla</div>
                                    <div class="tz-dropdown__option " data-val="7" data-group=""><label
                                            class="tz-dropdown__option-label" for="q_region_7"><span
                                                class="text">Ağcabədi</span><input type="checkbox"
                                                class="tz-dropdown__option-checkbox" id="q_region_7"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                        data-val=""><label class="tz-dropdown__option-label"><span class="text">Heç
                                                nə
                                                tapılmadı</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- city filter end --}}

                </div>


                <div class="main-search__row main-search__row-4 tz-d-grid">


                    {{-- price filter start --}}

                    <div class="main-search__item">
                        <div class="tz-form__group tz-form__group--col-2 tz-d-grid">
                            <div class="tz-form__group-item">
                                <div class="tz-form__floating"><input inputmode="numeric"
                                        class="string optional form-control js-val-with-spaces" placeholder=" "
                                        maxlength="11" pattern="[0-9]*" size="11" type="text"
                                        name="q[price_from]" id="q_price_from"><label for="q_price_from">Qiymət,
                                        min.</label><span class="tz-form__floating-btn js-reset-input"></span></div>
                            </div>
                            <div class="tz-form__group-item">
                                <div class="tz-form__floating"><input inputmode="numeric"
                                        class="string optional form-control js-val-with-spaces" placeholder=" "
                                        maxlength="11" pattern="[0-9]*" size="11" type="text"
                                        name="q[price_to]" id="q_price_to"><label for="q_price_to">maks.</label><span
                                        class="tz-form__floating-btn js-reset-input"></span></div>
                            </div>
                        </div>
                    </div>



                    <div class="main-search__item">
                        <select name="q[price_model][]" class="select optional form-control js-search-select-make"
                            data-dropdown-title="AZN" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="AZN"
                            data-dropdown-not-found="Heç nə tapılmadı" id="q_make" style="display: none;">
                            <option value="" label=" "></option>
                            <option value="1">AZN</option>

                        </select>
                        <div class="tz-dropdown" data-id="q_make">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                    class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">AZN</div>
                                <div class="tz-dropdown__values is-hidden">AZN</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                        data-val="">Sıfırla</div>
                                    <div class="tz-dropdown__option " data-val="1" data-group="">
                                        <div class="tz-dropdown__option-label"><span class="text">AZN</span></div>
                                    </div>

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                        data-val=""><label class="tz-dropdown__option-label"><span class="text">Heç
                                                nə
                                                tapılmadı</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- price filter end --}}


                    {{-- SELECT CAR TYPE filter --}}



                    <div class="main-search__item"><input name="q[category][]" type="hidden" value=""
                            autocomplete="off"><select
                            class="select optional form-control js-search-select-multi-with-search"
                            data-dropdown-title="Ban növü" data-dropdown-reset="Sıfırla"
                            data-dropdown-placeholder="Ban növü" data-dropdown-not-found="Heç nə tapılmadı"
                            multiple="multiple" name="q[category][]" id="q_category" style="display: none;">
                            <option value="9">Avtobus</option>

                        </select>
                        <div class="tz-dropdown" data-id="q_category">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                    class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">Ban növü</div>
                                <div class="tz-dropdown__values is-hidden">Ban növü</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                        data-val="">Sıfırla</div>
                                    <div class="tz-dropdown__option " data-val="9" data-group=""><label
                                            class="tz-dropdown__option-label" for="q_category_9"><span
                                                class="text">Avtobus</span><input type="checkbox"
                                                class="tz-dropdown__option-checkbox" id="q_category_9"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                        data-val=""><label class="tz-dropdown__option-label"><span class="text">Heç
                                                nə
                                                tapılmadı</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- select car type end --}}

                    {{-- select year start --}}


                    <div class="main-search__item">
                        <div class="tz-form__group tz-form__group--col-2">




                            <div class="main-search__item">
                                <select name="q[min_year][]" class="select optional form-control js-search-select-make"
                                    data-dropdown-title="Model" data-dropdown-reset="Sıfırla"
                                    data-dropdown-placeholder="Min year" data-dropdown-not-found="Heç nə tapılmadı"
                                    id="q_make" style="display: none;">
                                    <option value="" label=" "></option>
                                    <option value="1">2000</option>
                                    <option value="2">2001</option>

                                </select>
                                <div class="tz-dropdown" data-id="q_make">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input
                                            type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Min year</div>
                                        <div class="tz-dropdown__values is-hidden">Min year</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                data-val="">Sıfırla</div>
                                            <div class="tz-dropdown__option " data-val="2000" data-group="">
                                                <div class="tz-dropdown__option-label"><span class="text">2000</span>
                                                </div>
                                            </div>
                                            <div class="tz-dropdown__option " data-val="2001" data-group="">
                                                <div class="tz-dropdown__option-label"><span class="text">2001</span>
                                                </div>
                                            </div>

                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                                data-val=""><label class="tz-dropdown__option-label"><span
                                                        class="text">Heç nə
                                                        tapılmadı</span></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="main-search__item">
                                <select name="q[max_year][]" class="select optional form-control js-search-select-make"
                                    data-dropdown-title="Year" data-dropdown-reset="Sıfırla"
                                    data-dropdown-placeholder="Max year" data-dropdown-not-found="Heç nə tapılmadı"
                                    id="q_make" style="display: none;">
                                    <option value="" label=" "></option>
                                    <option value="1">2000</option>
                                    <option value="2">2001</option>

                                </select>
                                <div class="tz-dropdown" data-id="q_make">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input
                                            type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Max year</div>
                                        <div class="tz-dropdown__values is-hidden">Max year</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                data-val="">Sıfırla</div>
                                            <div class="tz-dropdown__option " data-val="2000" data-group="">
                                                <div class="tz-dropdown__option-label"><span class="text">2000</span>
                                                </div>
                                            </div>
                                            <div class="tz-dropdown__option " data-val="2001" data-group="">
                                                <div class="tz-dropdown__option-label"><span class="text">2001</span>
                                                </div>
                                            </div>

                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                                data-val=""><label class="tz-dropdown__option-label"><span
                                                        class="text">Heç nə
                                                        tapılmadı</span></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    {{-- select year end --}}


                </div>


                <div class="slide-blk js-main-search-slide-blk">
                    <div class="tz-d-flex tz-wrap-wrap tz-gap-10">

                        {{-- color select start --}}

                        <div class="main-search__item main-search__item--4"><input name="q[color][]" type="hidden"
                                value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Rəng" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Rəng"
                                data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[color][]"
                                id="q_color" style="display: none;">
                                <option data-tz-dropdown-option="#000000" value="5">Qara</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Rəng</div>
                                    <div class="tz-dropdown__values is-hidden">Rəng</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span class="circle"
                                                    style="background-color:#000000"></span><span
                                                    class="text">Qara</span><input type="checkbox"
                                                    class="tz-dropdown__option-checkbox" id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- color select end --}}


                        {{-- select fuel type start --}}



                        <div class="main-search__item main-search__item--4"><input name="q[fuel_type][]" type="hidden"
                                value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Rəng" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Fuel"
                                data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[fuel_type][]"
                                id="q_color" style="display: none;">
                                <option value="5">Benzin</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Rəng</div>
                                    <div class="tz-dropdown__values is-hidden">Rəng</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span
                                                    class="circle"></span><span class="text">Benzin</span><input
                                                    type="checkbox" class="tz-dropdown__option-checkbox"
                                                    id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                            {{-- select fuel type end  --}}
                        </div>


                        {{-- gear filter start  --}}



                        <div class="main-search__item main-search__item--4"><input name="q[gear][]" type="hidden"
                                value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Gear" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Gear"
                                data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[gear][]"
                                id="q_color" style="display: none;">
                                <option value="5">Arxa</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Gear</div>
                                    <div class="tz-dropdown__values is-hidden">Gear</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span
                                                    class="circle"></span><span class="text">Arxa</span><input
                                                    type="checkbox" class="tz-dropdown__option-checkbox"
                                                    id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- gear filter ent --}}


                        {{-- transmision filter start  --}}



                        <div class="main-search__item main-search__item--4"><input name="q[transmission][]"
                                type="hidden" value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Gear" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Gear"
                                data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[transmission][]"
                                id="q_color" style="display: none;">
                                <option value="5">Avtomat</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Transmission</div>
                                    <div class="tz-dropdown__values is-hidden">Transmission</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span
                                                    class="circle"></span><span class="text">Avtomat</span><input
                                                    type="checkbox" class="tz-dropdown__option-checkbox"
                                                    id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- transmision filter end --}}

                        {{-- engine volume start --}}

                        <div class="main-search__item main-search__item--3">
                            <div class="tz-form__group tz-form__group--col-2">

                                <div class="main-search__item">
                                    <select name="q[engine_volume_from]"
                                        class="select optional form-control js-search-select-make"
                                        data-dropdown-title="Həcm min" data-dropdown-reset="Sıfırla"
                                        data-dropdown-placeholder="Markanı yazın"
                                        data-dropdown-not-found="Heç nə tapılmadı" id="q_make" style="display: none;">
                                        <option value="" label=" "></option>
                                        <option value="50">50</option>

                                    </select>
                                    <div class="tz-dropdown" data-id="q_make">
                                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input
                                                type="text" class="tz-dropdown__search is-hidden">
                                            <div class="tz-dropdown__label">Həcm min</div>
                                            <div class="tz-dropdown__values is-hidden">Həcm yazın</div>
                                        </div>
                                        <div class="tz-dropdown__content">
                                            <div class="tz-dropdown__list">
                                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                    data-val="">Sıfırla</div>
                                                <div class="tz-dropdown__option " data-val="50" data-group="">
                                                    <div class="tz-dropdown__option-label"><span class="text">50</span>
                                                    </div>
                                                </div>


                                                <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                                    data-val=""><label class="tz-dropdown__option-label"><span
                                                            class="text">Heç nə
                                                            tapılmadı</span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-search__item">
                                    <select name="q[engine_volume_to]"
                                        class="select optional form-control js-search-select-make"
                                        data-dropdown-title="Həcm max" data-dropdown-reset="Sıfırla"
                                        data-dropdown-placeholder="Markanı yazın"
                                        data-dropdown-not-found="Heç nə tapılmadı" id="q_make" style="display: none;">
                                        <option value="" label=" "></option>
                                        <option value="50">50</option>

                                    </select>
                                    <div class="tz-dropdown" data-id="q_make">
                                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input
                                                type="text" class="tz-dropdown__search is-hidden">
                                            <div class="tz-dropdown__label">Həcm max</div>
                                            <div class="tz-dropdown__values is-hidden">Həcm yazın</div>
                                        </div>
                                        <div class="tz-dropdown__content">
                                            <div class="tz-dropdown__list">
                                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                    data-val="">Sıfırla</div>
                                                <div class="tz-dropdown__option " data-val="50" data-group="">
                                                    <div class="tz-dropdown__option-label"><span class="text">50</span>
                                                    </div>
                                                </div>


                                                <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                                    data-val=""><label class="tz-dropdown__option-label"><span
                                                            class="text">Heç nə
                                                            tapılmadı</span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        {{-- engine volume end --}}


                        <div class="main-search__item main-search__item--3">
                            <div class="tz-form__group tz-form__group--col-2 tz-d-grid">
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating"><input
                                            class="string optional form-control js-val-with-spaces" data-maxlength="4"
                                            placeholder=" " maxlength="4" size="4" type="text"
                                            name="q[power_from]" id="q_power_from"><label for="q_power_from">Güc (a.
                                            g.), min.</label><span class="tz-form__floating-btn js-reset-input"></span>
                                    </div>
                                </div>
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating"><input
                                            class="string optional form-control js-val-with-spaces" data-maxlength="4"
                                            placeholder=" " maxlength="4" size="4" type="text"
                                            name="q[power_to]" id="q_power_to"><label for="q_power_to">maks.</label><span
                                            class="tz-form__floating-btn js-reset-input"></span></div>
                                </div>
                            </div>
                        </div>



                        <div class="main-search__item main-search__item--3 js-filtered-control-item"
                            data-hidden-id="[&quot;1&quot;]">
                            <div class="tz-form__group tz-form__group--col-2 tz-d-grid">
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating"><input
                                            class="string optional form-control js-val-with-spaces" placeholder=" "
                                            maxlength="9" size="9" type="text" name="q[mileage_from]"
                                            id="q_mileage_from"><label for="q_mileage_from">Yürüş (km),
                                            min.</label><span class="tz-form__floating-btn js-reset-input"></span></div>
                                </div>
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating"><input
                                            class="string optional form-control js-val-with-spaces" placeholder=" "
                                            maxlength="9" size="9" type="text" name="q[mileage_to]"
                                            id="q_mileage_to"><label for="q_mileage_to">maks.</label><span
                                            class="tz-form__floating-btn js-reset-input"></span></div>
                                </div>
                            </div>
                        </div>




                        <div class="main-search__item main-search__item--4 js-filtered-control-item">
                            <div class="main-search__control main-search__control--shops tz-d-flex tz-align-center">
                                <input checked="checked" id="q_only_shops" name="q[only_shops]" type="radio"
                                    value=""><label class="main-search__control-tab"
                                    for="q_only_shops">Hamısı</label><input type="radio" value="1"
                                    name="q[only_shops]" id="q_only_shops_1"><label class="main-search__control-tab"
                                    for="q_only_shops_1">Salonlar</label><input type="radio" value="0"
                                    name="q[only_shops]" id="q_only_shops_0"><label class="main-search__control-tab"
                                    for="q_only_shops_0">Şəxsi</label>
                            </div>
                        </div>



                        {{-- owners count start --}}

                        <div class="main-search__item main-search__item--4"><input name="q[owners_count][]"
                                type="hidden" value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Owners count" data-dropdown-reset="Sıfırla"
                                data-dropdown-placeholder="Owners count" data-dropdown-not-found="Heç nə tapılmadı"
                                multiple="multiple" name="q[owners_count][]" id="q_color" style="display: none;">
                                <option value="5">1</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Owners count</div>
                                    <div class="tz-dropdown__values is-hidden">Owners count</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span
                                                    class="circle"></span><span class="text">1</span><input
                                                    type="checkbox" class="tz-dropdown__option-checkbox"
                                                    id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- owners count end  --}}

                        {{-- seats count start  --}}
                        <div class="main-search__item main-search__item--4"><input name="q[seats_count][]" type="hidden"
                                value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Owners count" data-dropdown-reset="Sıfırla"
                                data-dropdown-placeholder="Seats count" data-dropdown-not-found="Heç nə tapılmadı"
                                multiple="multiple" name="q[seats_count][]" id="q_color" style="display: none;">
                                <option value="5">1</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Seats count</div>
                                    <div class="tz-dropdown__values is-hidden">Owners count</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span
                                                    class="circle"></span><span class="text">1</span><input
                                                    type="checkbox" class="tz-dropdown__option-checkbox"
                                                    id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- seats count end --}}


                        {{-- market select start --}}

                        <div class="main-search__item main-search__item--4"><input name="q[markets][]" type="hidden"
                                value="" autocomplete="off"><select
                                class="select optional form-control js-search-select-multi-with-search-color"
                                data-dropdown-title="Owners count" data-dropdown-reset="Sıfırla"
                                data-dropdown-placeholder="Markets" data-dropdown-not-found="Heç nə tapılmadı"
                                multiple="multiple" name="q[markets][]" id="q_color" style="display: none;">
                                <option value="5">China</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_color">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Markets</div>
                                    <div class="tz-dropdown__values is-hidden">Markets</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>

                                        <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                                class="tz-dropdown__option-label" for="q_color_5"><span
                                                    class="circle"></span><span class="text">China</span><input
                                                    type="checkbox" class="tz-dropdown__option-checkbox"
                                                    id="q_color_5"><span
                                                    class="tz-dropdown__option-tickmark"></span></label></div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç
                                                    nə tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- market select end --}}


                        <div class="main-search__item"><input name="q[crashed]" type="hidden" value="1"
                                autocomplete="off"><input class="tz-form__check-input" type="checkbox" value="0"
                                name="q[crashed]" id="q_crashed"><label class="tz-form__check-label"
                                for="q_crashed">Vuruğu yoxdur</label></div>
                        <div class="main-search__item"><input name="q[painted]" type="hidden" value="1"
                                autocomplete="off"><input class="tz-form__check-input" type="checkbox" value="0"
                                name="q[painted]" id="q_painted"><label class="tz-form__check-label"
                                for="q_painted">Rənglənməyib</label></div>
                        <div class="main-search__item"><input name="q[for_spare_parts]" type="hidden" value="0"
                                autocomplete="off"><input class="tz-form__check-input" type="checkbox" value="1"
                                name="q[for_spare_parts]" id="q_for_spare_parts"><label class="tz-form__check-label"
                                for="q_for_spare_parts">Yalnız qəzalı avtomobillər</label></div>


                        {{-- status select start --}}

                        <div class="main-search__item main-search__item--4">
                            <select name="q[avilibilty_status][]"
                                class="select optional form-control js-search-select-make" data-dropdown-title="Marka"
                                data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Status"
                                data-dropdown-not-found="Heç nə tapılmadı" id="q_make" style="display: none;">
                                <option value="" label=" "></option>
                                <option value="280">Satisdadir</option>
                                <option value="28">Sifarisle</option>

                            </select>
                            <div class="tz-dropdown" data-id="q_make">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                        class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Status</div>
                                    <div class="tz-dropdown__values is-hidden">Status</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                            data-val="">Sıfırla</div>
                                        <div class="tz-dropdown__option " data-val="280" data-group="">
                                            <div class="tz-dropdown__option-label"><span class="text">Satisdadir</span>
                                            </div>
                                        </div>
                                        <div class="tz-dropdown__option " data-val="28" data-group="">
                                            <div class="tz-dropdown__option-label"><span class="text">Sifarisle</span>
                                            </div>
                                        </div>

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                            data-val=""><label class="tz-dropdown__option-label"><span
                                                    class="text">Heç nə
                                                    tapılmadı</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- select status end --}}



                    </div>



                    <div class="main-search__blk main-search__blk--checkbox-list">
                        <div class="main-search__blk-title"><span>Avtomobilin təchizatı</span></div>
                        <span><input class="tz-form__check-input" type="checkbox" value="4" name="q[extras][]"
                                id="q_extras_4"><label class="tz-form__check-label tz-text tz-text--primary"
                                for="q_extras_4">Yüngül lehimli disklər</label></span>
                               
                    </div>




                </div>




                <div class="main-search__footer tz-d-flex tz-justify-between tz-align-center">
                    <div class="main-search__footer-left">
                        <div class="main-search__ad-count">Bu gün: <a href="#"><span>0 yeni elan</span></a>
                        </div>
                    </div>
                    <div class="main-search__footer-right">
                        <div class="main-search__btn main-search__btn--reset tz-btn tz-btn-link js-main-search-reset-btn">
                            <span>Sıfırla</span>
                        </div>
                        <div
                            class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow js-main-search-slide-down">
                            <span>Daha çox filtr</span>
                        </div>
                        <div
                            class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow is-hidden is-active js-main-search-slide-up">
                            <span>Gizlət</span>
                        </div><button name="commit" type="submit"
                            class="main-search__btn tz-btn tz-btn--primary">Elanları göstər</button>
                    </div>
                </div>



            </div>
        </form>



        <div class="page-content page-content--grey">
            <div class="products-container index-products-container">
                <section>
                    <div class="section-title section-title--grey">
                        <div class="tz-container tz-d-flex tz-align-center tz-justify-between">
                            <p class="section-title_name">ELANLAR</p>
                            <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                                <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                                <div id="ad_ph_2" style="display:none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tz-container">
                        <div class="products products--featured js-import-container">

                            <div class="products-i vipped featured">
                                <a href="" class="products-i__link"></a>
                                <div class="products-i__top">
                                    <img src="/assets/img/bmw.jpg" loading="lazy" alt="">
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">
                                            70 200 <span>AZN</span>
                                        </div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">BMW M4 TUNED</div>
                                    <div class="products-i__attributes products-i__bottom-text">2018, 2 L, 25 000 km
                                    </div>
                                    <div class="products-i__datetime">Amerika, bugun 10:49</div>
                                </div>
                            </div>
                            <div class="products-i vipped featured">
                                <a href="" class="products-i__link"></a>
                                <div class="products-i__top">
                                    <img src="/assets/img/bmw.jpg" loading="lazy" alt="">
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">
                                            70 200 <span>AZN</span>
                                        </div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">BMW M4 TUNED</div>
                                    <div class="products-i__attributes products-i__bottom-text">2018, 2 L, 25 000 km
                                    </div>
                                    <div class="products-i__datetime">Amerika, bugun 10:49</div>
                                </div>
                            </div>
                            <div class="products-i vipped featured">
                                <a href="" class="products-i__link"></a>
                                <div class="products-i__top">
                                    <img src="/assets/img/bmw.jpg" loading="lazy" alt="">
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">
                                            70 200 <span>AZN</span>
                                        </div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">BMW M4 TUNED</div>
                                    <div class="products-i__attributes products-i__bottom-text">2018, 2 L, 25 000 km
                                    </div>
                                    <div class="products-i__datetime">Amerika, bugun 10:49</div>
                                </div>
                            </div>
                            <div class="products-i vipped featured">
                                <a href="" class="products-i__link"></a>
                                <div class="products-i__top">
                                    <img src="/assets/img/bmw.jpg" loading="lazy" alt="">
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">
                                            70 200 <span>AZN</span>
                                        </div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">BMW M4 TUNED</div>
                                    <div class="products-i__attributes products-i__bottom-text">2018, 2 L, 25 000 km
                                    </div>
                                    <div class="products-i__datetime">Amerika, bugun 10:49</div>
                                </div>
                            </div>
                            <div class="products-i vipped featured">
                                <a href="" class="products-i__link"></a>
                                <div class="products-i__top">
                                    <img src="/assets/img/bmw.jpg" loading="lazy" alt="">
                                    <div class="products-i__info"></div>
                                </div>
                                <div class="products-i__bottom">
                                    <div class="products-i__price products-i__bottom-text">
                                        <div class="product-price">
                                            70 200 <span>AZN</span>
                                        </div>
                                    </div>
                                    <div class="products-i__name products-i__bottom-text">BMW M4 TUNED</div>
                                    <div class="products-i__attributes products-i__bottom-text">2018, 2 L, 25 000 km
                                    </div>
                                    <div class="products-i__datetime">Amerika, bugun 10:49</div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
