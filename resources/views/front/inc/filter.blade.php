<form action="{{ route('mainFilter') }}" method="POST" class="simple_form main-search js-main-search">
    @csrf
    <div class="tz-container">
        <div class="main-search__row"></div>
        <div class="main-search__row main-search__row-4 tz-d-grid">
            {{-- marka selec filter start  --}}
            <div class="main-search__item">
                <!-- Marka Dropdown -->
                <select name="q[make][]" class="select optional form-control js-search-select-make"
                        data-dropdown-title="Marka" id="q_make">

                    <option ></option>

                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>

                <div class="tz-dropdown" data-id="q_make">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                        <input type="text" class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">Marka</div>
                        <div class="tz-dropdown__values is-hidden">Markanı yazın</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text"
                                 data-val="">Sıfırla</div>

                            @foreach ($brands as $brand)
                                <div class="tz-dropdown__option" data-val="{{ $brand->id }}">
                                    <div class="tz-dropdown__option-label"><span
                                            class="text">{{ $brand->name }}</span></div>
                                </div>
                            @endforeach

                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                 data-val="">
                                <label class="tz-dropdown__option-label"><span class="text">Heç nə
                                                tapılmadı</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- marka select end   --}}

            {{-- model select start --}}


            <div class="main-search__item">
                <select name="q[model][]" class="select optional form-control js-search-select-model"
                        id="q_model">
                    <option value="" label=" "></option>
                    @foreach ($models as $model)
                        <option value="{{ $model->id }}" data-brand-id="{{ $model->brand_id }}">
                            {{ $model->name }}</option>
                    @endforeach
                </select>

                <div class="tz-dropdown" data-id="q_model">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                        <input type="text" class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">Model</div>
                        <div class="tz-dropdown__values is-hidden">Model yazın</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text"
                                 data-val="">Sıfırla</div>

                            @foreach ($models as $model)
                                <div class="tz-dropdown__option" data-brand-id="{{ $model->car_models_id }}"
                                     data-val="{{ $model->id }}">
                                    <div class="tz-dropdown__option-label"><span
                                            class="text">{{ $model->name }}</span></div>
                                </div>
                            @endforeach

                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                 data-val="">
                                <label class="tz-dropdown__option-label"><span class="text">Heç nə
                                                tapılmadı</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- model select end --}}


            <div class="main-search__item">
                <div class="main-search__control tz-d-flex tz-align-center"><input checked="checked" id="q_used"
                                                                                   name="q[used]" type="radio" value=""><label
                        class="main-search__control-tab js-main-search-controls-tab"
                        for="q_used">All</label><input type="radio" value="0" name="q[used]"
                                                       id="q_used_0"><label class="main-search__control-tab js-main-search-controls-tab"
                                                                            for="q_used_0">New</label><input type="radio" value="1" name="q[used]"
                                                                                                             id="q_used_1"><label class="main-search__control-tab js-main-search-controls-tab"
                                                                                                                                  for="q_used_1">Used</label></div>
            </div>


            {{-- Select city filter --}}
            <div class="main-search__item"><input name="q[regions][]" type="hidden" value=""
                                                  autocomplete="off"><select name="q[regions][]"
                                                                             class="select optional form-control js-search-select-multi-with-search"
                                                                             data-dropdown-title="City" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="City"
                                                                             data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_region"
                                                                             style="display: none;">
                    "@foreach ($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                    @endforeach
                </select>
                <div class="tz-dropdown" data-id="q_region">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                              class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">City</div>
                        <div class="tz-dropdown__values is-hidden">City</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                 data-val="">Sıfırla</div>
                            @foreach ($regions as $region)
                                <div class="tz-dropdown__option " data-val="{{ $region->id }}" data-group="">
                                    <label class="tz-dropdown__option-label"
                                           for="q_region_{{ $region->id }}"><span
                                            class="text">{{ $region->name }}</span><input type="checkbox"
                                                                                          class="tz-dropdown__option-checkbox"
                                                                                          id="q_region_{{ $region->id }}"><span
                                            class="tz-dropdown__option-tickmark"></span></label>
                                </div>
                            @endforeach

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
                                                              name="q[price_from]" id="q_price_from"><label for="q_price_from">Price,
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
                    @foreach ($currencies as $currency)
                        <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                    @endforeach

                </select>
                <div class="tz-dropdown" data-id="q_make">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                              class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">Currency</div>
                        <div class="tz-dropdown__values is-hidden">Currency</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                 data-val="">Sıfırla</div>

                            @foreach ($currencies as $currency)
                                <div class="tz-dropdown__option " data-val="{{ $currency->id }}" data-group="">
                                    <div class="tz-dropdown__option-label"><span
                                            class="text">{{ $currency->name }}</span></div>
                                </div>
                            @endforeach

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



            <div class="main-search__item"><input name="q[ban][]" type="hidden" value=""
                                                  autocomplete="off"><select
                    class="select optional form-control js-search-select-multi-with-search"
                    data-dropdown-title="Ban növü" data-dropdown-reset="Sıfırla"
                    data-dropdown-placeholder="Ban növü" data-dropdown-not-found="Heç nə tapılmadı"
                    multiple="multiple" name="q[ban][]" id="q_category" style="display: none;">

                    @foreach ($bans as $ban)
                        <option value="{{ $ban->id }}">{{ $ban->name }}</option>
                    @endforeach

                </select>
                <div class="tz-dropdown" data-id="q_category">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                              class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">Car type</div>
                        <div class="tz-dropdown__values is-hidden">Car type</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                 data-val="">Sıfırla</div>
                            @foreach ($bans as $ban)
                                <div class="tz-dropdown__option " data-val="{{ $ban->id }}" data-group="">
                                    <label class="tz-dropdown__option-label"
                                           for="q_category_{{ $ban->id }}"><span
                                            class="text">{{ $ban->name }}</span><input type="checkbox"
                                                                                       class="tz-dropdown__option-checkbox"
                                                                                       id="q_category_{{ $ban->id }}"><span
                                            class="tz-dropdown__option-tickmark"></span></label>
                                </div>
                            @endforeach
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

                            @foreach ($years as $year)
                                <option value="{{ $year->year }}">{{ $year->year }}</option>
                            @endforeach

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

                                    @foreach ($years as $year)
                                        <div class="tz-dropdown__option " data-val="{{ $year->year }}"
                                             data-group="">
                                            <div class="tz-dropdown__option-label"><span
                                                    class="text">{{ $year->year }}</span>
                                            </div>
                                        </div>
                                    @endforeach

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

                            @foreach ($years as $year)
                                <option value="{{ $year->year }}">{{ $year->year }}</option>
                            @endforeach

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

                                    @foreach ($years as $year)
                                        <div class="tz-dropdown__option " data-val="{{ $year->year }}"
                                             data-group="">
                                            <div class="tz-dropdown__option-label"><span
                                                    class="text">{{ $year->year }}</span>
                                            </div>
                                        </div>
                                    @endforeach

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

                <div class="main-search__item main-search__item--4"><input name="q[colors][]" type="hidden"
                                                                           value="" autocomplete="off"><select
                        class="select optional form-control js-search-select-multi-with-search-color"
                        data-dropdown-title="Rəng" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Rəng"
                        data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[colors][]"
                        id="q_color" style="display: none;">

                        @foreach ($colors as $color)
                            <option data-tz-dropdown-option="{{ $color->hex }}" value="{{ $color->id }}">
                                {{ $color->name }}</option>
                        @endforeach

                    </select>
                    <div class="tz-dropdown" data-id="q_color">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                                  class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">Color</div>
                            <div class="tz-dropdown__values is-hidden">Color</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                     data-val="">Sıfırla</div>

                                @foreach ($colors as $color)
                                    <div class="tz-dropdown__option " data-val="{{ $color->id }}"
                                         data-group=""><label class="tz-dropdown__option-label"
                                                              for="q_color_{{ $color->id }}"><span class="circle"
                                                                                                   style="background-color:{{ $color->hex }}"></span><span
                                                class="text">{{ $color->name }}</span><input type="checkbox"
                                                                                             class="tz-dropdown__option-checkbox"
                                                                                             id="q_color_{{ $color->id }}"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>
                                @endforeach


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



                <div class="main-search__item main-search__item--4"><input name="q[fuel_types][]" type="hidden"
                                                                           value="" autocomplete="off"><select
                        class="select optional form-control js-search-select-multi-with-search-color"
                        data-dropdown-title="Fuel" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Fuel"
                        data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[fuel_types][]"
                        id="q_color" style="display: none;">

                        @foreach ($fueltypes as $fueltype)
                            <option value="{{ $fueltype->id }}">{{ $fueltype->name }}</option>
                        @endforeach

                    </select>
                    <div class="tz-dropdown" data-id="q_color">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                                  class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">Fuel type</div>
                            <div class="tz-dropdown__values is-hidden">Fuel type</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                     data-val="">Sıfırla</div>

                                @foreach ($fueltypes as $fueltype)
                                    <div class="tz-dropdown__option " data-val="{{ $fueltype->id }}"
                                         data-group=""><label class="tz-dropdown__option-label"
                                                              for="q_fuel_{{ $fueltype->id }}"><span class="circle"></span><span
                                                class="text">{{ $fueltype->name }}</span><input type="checkbox"
                                                                                                class="tz-dropdown__option-checkbox"
                                                                                                id="q_fuel_{{ $fueltype->id }}"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>
                                @endforeach


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



                <div class="main-search__item main-search__item--4"><input name="q[gears][]" type="hidden"
                                                                           value="" autocomplete="off"><select
                        class="select optional form-control js-search-select-multi-with-search-color"
                        data-dropdown-title="Gear" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Gear"
                        data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" name="q[gears][]"
                        id="q_gears" style="display: none;">

                        @foreach ($transmissions as $transmision)
                            <option value="{{ $transmision->id }}">{{ $transmision->name }}</option>
                        @endforeach

                    </select>
                    <div class="tz-dropdown" data-id="q_gears">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                                  class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">Gear</div>
                            <div class="tz-dropdown__values is-hidden">Gear</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                     data-val="">Sıfırla</div>

                                @foreach ($transmissions as $transmision)
                                    <div class="tz-dropdown__option " data-val="{{ $transmision->id }}"
                                         data-group=""><label class="tz-dropdown__option-label"
                                                              for="q_trans_{{ $transmision->id }}"><span
                                                class="circle"></span><span
                                                class="text">{{ $transmision->name }}</span><input
                                                type="checkbox" class="tz-dropdown__option-checkbox"
                                                id="q_trans_{{ $transmision->id }}"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>
                                @endforeach


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



                <div class="main-search__item main-search__item--4"><input name="q[transmissions][]"
                                                                           type="hidden" value="" autocomplete="off"><select
                        class="select optional form-control js-search-select-multi-with-search-color"
                        data-dropdown-title="Damage" data-dropdown-reset="Sıfırla"
                        data-dropdown-placeholder="Gear" data-dropdown-not-found="Heç nə tapılmadı"
                        multiple="multiple" name="q[transmissions][]" id="q_damages" style="display: none;">
                        @foreach ($damages as $damage)
                            <option value="{{ $damage->id }}">{{ $damage->name }}</option>
                        @endforeach
                    </select>
                    <div class="tz-dropdown" data-id="q_damages">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                                  class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">Transmission</div>
                            <div class="tz-dropdown__values is-hidden">Transmission</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                     data-val="">Sıfırla</div>

                                @foreach ($damages as $damage)
                                    <div class="tz-dropdown__option " data-val="{{ $damage->id }}"
                                         data-group=""><label class="tz-dropdown__option-label"
                                                              for="q_damages_{{ $damage->id }}"><span class="circle"></span><span
                                                class="text">{{ $damage->name }}</span><input type="checkbox"
                                                                                              class="tz-dropdown__option-checkbox"
                                                                                              id="q_damages_{{ $damage->id }}"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>
                                @endforeach

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
                                    data-dropdown-not-found="Heç nə tapılmadı" id="q_engine" style="display: none;">
                                <option value="" label=" "></option>
                                @foreach ($enginevolumes as $engine)
                                    <option value="{{ $engine->id }}">{{ $engine->name }}</option>
                                @endforeach
                            </select>
                            <div class="tz-dropdown" data-id="q_engine">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input
                                        type="text" class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Engine min</div>
                                    <div class="tz-dropdown__values is-hidden">Həcm yazın</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                             data-val="">Sıfırla</div>

                                        @foreach ($enginevolumes as $engine)
                                            <div class="tz-dropdown__option " data-val="{{ $engine->id }}"
                                                 data-group="">
                                                <div class="tz-dropdown__option-label"><span
                                                        class="text">{{ $engine->name }}</span>
                                                </div>
                                            </div>
                                        @endforeach

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
                                    data-dropdown-not-found="Heç nə tapılmadı" id="q_engineto"
                                    style="display: none;">
                                <option value="" label=" "></option>
                                @foreach ($enginevolumes as $engine)
                                    <option value="{{ $engine->id }}">{{ $engine->name }}</option>
                                @endforeach
                            </select>
                            <div class="tz-dropdown" data-id="q_engineto">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input
                                        type="text" class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Engine max</div>
                                    <div class="tz-dropdown__values is-hidden">Həcm yazın</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                             data-val="">Sıfırla</div>
                                        @foreach ($enginevolumes as $engine)
                                            <div class="tz-dropdown__option " data-val="{{ $engine->id }}"
                                                 data-group="">
                                                <div class="tz-dropdown__option-label"><span
                                                        class="text">{{ $engine->name }}</span>
                                                </div>
                                            </div>
                                        @endforeach

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
                                    name="q[power_from]" id="q_power_from"><label for="q_power_from">Power (a.
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
                                    id="q_mileage_from"><label for="q_mileage_from">Millage (km),
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




                {{--                        <div class="main-search__item main-search__item--4 js-filtered-control-item"> --}}
                {{--                            <div class="main-search__control main-search__control--shops tz-d-flex tz-align-center"> --}}
                {{--                                <input checked="checked" id="q_only_shops" name="q[only_shops]" type="radio" --}}
                {{--                                    value=""><label class="main-search__control-tab" --}}
                {{--                                    for="q_only_shops">Hamısı</label><input type="radio" value="1" --}}
                {{--                                    name="q[only_shops]" id="q_only_shops_1"><label class="main-search__control-tab" --}}
                {{--                                    for="q_only_shops_1">Salonlar</label> --}}
                {{--                                <input type="radio" value="0" --}}
                {{--                                    name="q[only_shops]" id="q_only_shops_0"><label class="main-search__control-tab" --}}
                {{--                                    for="q_only_shops_0">Şəxsi</label> --}}
                {{--                            </div> --}}
                {{--                        </div> --}}



                {{-- owners count start --}}

                <div class="main-search__item main-search__item--4"><input name="q[owners_count][]"
                                                                           type="hidden" value="" autocomplete="off"><select
                        class="select optional form-control js-search-select-multi-with-search-color"
                        data-dropdown-title="Owners count" data-dropdown-reset="Sıfırla"
                        data-dropdown-placeholder="Owners count" data-dropdown-not-found="Heç nə tapılmadı"
                        multiple="multiple" name="q[owners_count][]" id="q_owner" style="display: none;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                    <div class="tz-dropdown" data-id="q_owner">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                                  class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">Owners count</div>
                            <div class="tz-dropdown__values is-hidden">Owners count</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                     data-val="">Sıfırla</div>

                                <div class="tz-dropdown__option " data-val="1" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_owner_1"><span
                                            class="circle"></span><span class="text">1</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_owner_1"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="2" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_owner_2"><span
                                            class="circle"></span><span class="text">2</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_owner_2"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="3" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_owner_3"><span
                                            class="circle"></span><span class="text">3</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_owner_3"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="4" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_owner_4"><span
                                            class="circle"></span><span class="text">4+</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_owner_4"><span
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
                        data-dropdown-title="Seats count" data-dropdown-reset="Sıfırla"
                        data-dropdown-placeholder="Seats count" data-dropdown-not-found="Heç nə tapılmadı"
                        multiple="multiple" name="q[seats_count][]" id="q_seat" style="display: none;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8+</option>

                    </select>
                    <div class="tz-dropdown" data-id="q_seat">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                                                                                  class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">Seats count</div>
                            <div class="tz-dropdown__values is-hidden">Seats count</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                     data-val="">Sıfırla</div>

                                <div class="tz-dropdown__option " data-val="1" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_1"><span
                                            class="circle"></span><span class="text">1</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_1"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>

                                <div class="tz-dropdown__option " data-val="2" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_2"><span
                                            class="circle"></span><span class="text">2</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_2"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="3" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_3"><span
                                            class="circle"></span><span class="text">3</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_3"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="4" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_4"><span
                                            class="circle"></span><span class="text">4</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_4"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="5" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_5"><span
                                            class="circle"></span><span class="text">5</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_5"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="6" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_6"><span
                                            class="circle"></span><span class="text">6</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_6"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="7" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_7"><span
                                            class="circle"></span><span class="text">7</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_7"><span
                                            class="tz-dropdown__option-tickmark"></span></label></div>
                                <div class="tz-dropdown__option " data-val="8" data-group=""><label
                                        class="tz-dropdown__option-label" for="q_seat_8"><span
                                            class="circle"></span><span class="text">8+</span><input
                                            type="checkbox" class="tz-dropdown__option-checkbox"
                                            id="q_seat_8"><span
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
                        @foreach ($markets as $market)
                            <option value="{{ $market->id }}">{{ $market->name }}</option>
                        @endforeach

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

                                @foreach ($markets as $market)
                                    <div class="tz-dropdown__option " data-val="{{ $market->id }}"
                                         data-group=""><label class="tz-dropdown__option-label"
                                                              for="q_market_{{ $market->id }}"><span class="circle"></span><span
                                                class="text">{{ $market->name }}</span><input type="checkbox"
                                                                                              class="tz-dropdown__option-checkbox"
                                                                                              id="q_market_{{ $market->id }}"><span
                                                class="tz-dropdown__option-tickmark"></span></label></div>
                                @endforeach

                                <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                     data-val=""><label class="tz-dropdown__option-label"><span
                                            class="text">Heç
                                                    nə tapılmadı</span></label></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- market select end --}}





                {{-- status select start --}}

                {{--                        <div class="main-search__item main-search__item--4"> --}}
                {{--                            <select name="q[avilibilty_status][]" --}}
                {{--                                class="select optional form-control js-search-select-make" data-dropdown-title="Marka" --}}
                {{--                                data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Status" --}}
                {{--                                data-dropdown-not-found="Heç nə tapılmadı" id="q_make" style="display: none;"> --}}
                {{--                                <option value="" label=" "></option> --}}
                {{--                                <option value="280">Satisdadir</option> --}}
                {{--                                <option value="28">Sifarisle</option> --}}

                {{--                            </select> --}}
                {{--                            <div class="tz-dropdown" data-id="q_make"> --}}
                {{--                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text" --}}
                {{--                                        class="tz-dropdown__search is-hidden"> --}}
                {{--                                    <div class="tz-dropdown__label">Status</div> --}}
                {{--                                    <div class="tz-dropdown__values is-hidden">Status</div> --}}
                {{--                                </div> --}}
                {{--                                <div class="tz-dropdown__content"> --}}
                {{--                                    <div class="tz-dropdown__list"> --}}
                {{--                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" --}}
                {{--                                            data-val="">Sıfırla</div> --}}
                {{--                                        <div class="tz-dropdown__option " data-val="280" data-group=""> --}}
                {{--                                            <div class="tz-dropdown__option-label"><span class="text">Satisdadir</span> --}}
                {{--                                            </div> --}}
                {{--                                        </div> --}}
                {{--                                        <div class="tz-dropdown__option " data-val="28" data-group=""> --}}
                {{--                                            <div class="tz-dropdown__option-label"><span class="text">Sifarisle</span> --}}
                {{--                                            </div> --}}
                {{--                                        </div> --}}

                {{--                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" --}}
                {{--                                            data-val=""><label class="tz-dropdown__option-label"><span --}}
                {{--                                                    class="text">Heç nə --}}
                {{--                                                    tapılmadı</span></label></div> --}}
                {{--                                    </div> --}}
                {{--                                </div> --}}
                {{--                            </div> --}}
                {{--                        </div> --}}

                {{-- select status end --}}
            </div>

            <div class="main-search__blk main-search__blk--checkbox-list d-flex" style="margin-top:10px;">

                <input name="q[crashed]" type="hidden" value="1" autocomplete="off"><input
                    class="tz-form__check-input" type="checkbox" value="0" name="q[crashed]"
                    id="q_crashed"><label class="tz-form__check-label" for="q_crashed">No Damage</label>


                <input name="q[painted]" type="hidden" value="1" autocomplete="off"><input
                    class="tz-form__check-input" type="checkbox" value="0" name="q[painted]"
                    id="q_painted"><label class="tz-form__check-label" for="q_painted">Unpainted</label>

                <input name="q[for_spare_parts]" type="hidden" value="0" autocomplete="off"><input
                    class="tz-form__check-input" type="checkbox" value="1" name="q[for_spare_parts]"
                    id="q_for_spare_parts"><label class="tz-form__check-label" for="q_for_spare_parts">Only
                    damaged vehicles</label>


            </div>





            <div class="main-search__blk main-search__blk--checkbox-list">
                <div class="main-search__blk-title"><span>Vehicle Equipment</span>
                </div>
                @foreach ($equipments as $equipment)
                    <span><input class="tz-form__check-input" type="checkbox" value="{{ $equipment->id }}"
                                 name="q[equipments][]" id="q_extras_{{ $equipment->id }}"><label
                            class="tz-form__check-label tz-text tz-text--primary"
                            for="q_extras_{{ $equipment->id }}">{{ $equipment->name }}</label></span>
                @endforeach


            </div>




        </div>




        <div class="main-search__footer tz-d-flex tz-justify-between tz-align-center">
            <div class="main-search__footer-left">
                <div class="main-search__ad-count">Today: <a
                        href="{{ route('newAddListings') }}"><span>{{ $recentCarCount }} new listing</span></a>
                </div>
            </div>
            <div class="main-search__footer-right">
                <div class=" tz-btn tz-btn-link ">
                    <button type="button" onClick="window.location.reload()"
                            style="background: transparent; border: none; cursor: pointer;">
                        Reset
                    </button>
                </div>
                <div
                    class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow js-main-search-slide-down">
                    <span>More filters</span>
                </div>
                <div
                    class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow is-hidden is-active js-main-search-slide-up">
                    <span>Hide</span>
                </div>
                <button  type="submit" class="main-search__btn tz-btn tz-btn--primary">Show
                    listings</button>
            </div>
        </div>



    </div>
</form>
