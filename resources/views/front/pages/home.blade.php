@extends('front.layout.layout')

@section('front_content')


    <div class="home">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


{{-- @dd($selectfilters['q']['regions']) --}}


        {{-- filter form start --}}
        <form action="{{ route('mainFilter') }}" method="POST" class="simple_form main-search js-main-search">
            @csrf
            <div class="tz-container">
                <div class="main-search__row"></div>
                <div class="main-search__row main-search__row-4 tz-d-grid">
                    {{-- marka selec filter start  --}}
                    <div class="main-search__item">
                        <select class="select optional form-control js-search-select-make" data-dropdown-title="Marka" id="q_make" style="display: none;">
                            <option></option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" {{ isset($selectfilters['q']['make']) && $selectfilters['q']['make'] == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>

                        <input type="hidden" name="q[make]" value="{{ $selectfilters['q']['make'] ?? '' }}" id="hidden_make">

                        <div class="tz-dropdown" data-id="q_make" data-multiple="false">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">
                                    {{ isset($selectfilters['q']['make']) ? $brands->firstWhere('id', $selectfilters['q']['make'])->name : 'Marka' }}
                                </div>
                                <div class="tz-dropdown__values is-hidden">Markanı yazın</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text" data-val="">Sıfırla</div>
                                    @foreach ($brands as $brand)
                                        <div class="tz-dropdown__option" data-val="{{ $brand->id }}">
                                            <div class="tz-dropdown__option-label">
                                                <span class="text">{{ $brand->name }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                        <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- marka select end   --}}

                    {{-- model select start --}}

                    <div class="main-search__item">
                        <select name="q[model][]" class="select optional form-control js-search-select-model" id="q_model" style="display: none;">
                            <option value="" label=" "></option>
                            @foreach ($models as $model)
                                <option value="{{ $model->id }}" data-brand-id="{{ $model->brand_id }}" {{ isset($selectfilters['q']['model']) && in_array($model->id, (array) $selectfilters['q']['model']) ? 'selected' : '' }}>
                                    {{ $model->name }}
                                </option>
                            @endforeach
                        </select>
                        <input type="hidden" name="q[model]" value="{{ isset($selectfilters['q']['model']) ? implode(',', (array) $selectfilters['q']['model']) : '' }}" id="hidden_model">

                        <div class="tz-dropdown" data-id="q_model">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">
                                    {{ isset($selectfilters['q']['model']) ? implode(', ', $models->whereIn('id', (array) $selectfilters['q']['model'])->pluck('name')->toArray()) : 'Model' }}
                                </div>
                                <div class="tz-dropdown__values is-hidden">Model yazın</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text" data-val="">Sıfırla</div>
                                    @foreach ($models as $model)
                                        <div class="tz-dropdown__option" data-val="{{ $model->id }}">
                                            <div class="tz-dropdown__option-label">
                                                <span class="text">{{ $model->name }}</span>
                                                <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                <span class="tz-dropdown__option-tickmark"></span>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                        <label class="tz-dropdown__option-label">
                                            <span class="text">Heç nə tapılmadı</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- model select end --}}


                    <div class="main-search__item">
                        <div class="main-search__control tz-d-flex tz-align-center">
                            <input value="" id="q_used" name="q[used]" type="radio"
                                {{ !isset($selectfilters['q']['used']) || $selectfilters['q']['used'] === null ? 'checked' : '' }}><label
                                class="main-search__control-tab js-main-search-controls-tab" for="q_used">All</label>

                            <input type="radio" value="1" name="q[used]" id="q_used_0"
                                {{ isset($selectfilters['q']['used']) && $selectfilters['q']['used'] == 1 ? 'checked' : '' }}><label
                                class="main-search__control-tab js-main-search-controls-tab" for="q_used_0">New</label>

                            <input type="radio" value="2" name="q[used]" id="q_used_1"
                                {{ isset($selectfilters['q']['used']) && $selectfilters['q']['used'] == 2 ? 'checked' : '' }}><label
                                class="main-search__control-tab js-main-search-controls-tab" for="q_used_1">Used</label>
                        </div>
                    </div>


                    {{-- Select city filter --}}

                    <div class="main-search__item">
                        <input name="q[regions][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['regions'][0] ?? '')) }}" autocomplete="off">
                        <select name="q[regions][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="City" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="City" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_region" style="display: none;">
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}" {{ in_array($region->id, explode(',', old('selected_regions', $selectfilters['q']['regions'][0] ?? ''))) ? 'selected' : '' }}>{{ $region->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">City</div>
                                <div class="tz-dropdown__values is-hidden">City</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                    @foreach ($regions as $region)
                                        <div class="tz-dropdown__option" data-val="{{ $region->id }}">
                                            <label class="tz-dropdown__option-label">
                                                <span class="text">{{ $region->name }}</span>
                                                <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                <span class="tz-dropdown__option-tickmark"></span>
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                        <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                    </div>
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
                                <div class="tz-form__floating">
                                    <input inputmode="numeric" class="string optional form-control js-val-with-spaces"
                                        placeholder=" " maxlength="11" pattern="[0-9]*" size="11" type="text"
                                        name="q[price_min]" id="q_price_from"
                                        value="{{ $selectfilters['q']['price_min'] ?? '' }}"> <!-- Price min value -->
                                    <label for="q_price_from">Price, min.</label>
                                    <span class="tz-form__floating-btn js-reset-input"></span>
                                </div>
                            </div>
                            <div class="tz-form__group-item">
                                <div class="tz-form__floating">
                                    <input inputmode="numeric" class="string optional form-control js-val-with-spaces"
                                        placeholder=" " maxlength="11" pattern="[0-9]*" size="11" type="text"
                                        name="q[price_max]" id="q_price_to"
                                        value="{{ $selectfilters['q']['price_max'] ?? '' }}"> <!-- Price max value -->
                                    <label for="q_price_to">maks.</label>
                                    <span class="tz-form__floating-btn js-reset-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="main-search__item">
                        <select class="select optional form-control js-search-select-make" data-dropdown-title="AZN"
                            data-dropdown-reset="Sıfırla" data-dropdown-placeholder="AZN"
                            data-dropdown-not-found="Heç nə tapılmadı" id="q_currency" style="display: none;">
                            <option value="" label=" "></option>
                            @foreach ($currencies as $currency)
                                <option value="{{ $currency->name }}"
                                    {{ isset($selectfilters['q']['price_model']) && $selectfilters['q']['price_model'] == $currency->name ? 'selected' : '' }}>
                                    {{ $currency->name }}
                                </option>
                            @endforeach
                        </select>

                        <input type="hidden" name="q[price_model]"
                            value="{{ $selectfilters['q']['price_model'] ?? '' }}">

                        <div class="tz-dropdown" data-id="q_currency">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">
                                    {{ isset($selectfilters['q']['price_model']) ? $selectfilters['q']['price_model'] : 'Currency' }}
                                </div>
                                <div class="tz-dropdown__values is-hidden">Currency</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">
                                        Sıfırla
                                    </div>

                                    @foreach ($currencies as $currency)
                                        <div class="tz-dropdown__option {{ isset($selectfilters['q']['price_model']) && $selectfilters['q']['price_model'] == $currency->name ? 'is-selected' : '' }}"
                                            data-val="{{ $currency->name }}">
                                            <div class="tz-dropdown__option-label"><span class="text">{{ $currency->name }}</span></div>
                                        </div>
                                    @endforeach

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                        <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- price filter end --}}


                    {{-- SELECT CAR TYPE filter --}}





                    <div class="main-search__item">
                        <input name="q[ban][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['ban'][0] ?? '')) }}" autocomplete="off">
                        <select name="q[ban][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Ban" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="City" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_ban" style="display: none;">
                            @foreach ($bans as $ban)
                                <option value="{{ $ban->id }}" {{ in_array($ban->id, explode(',', old('selected_ban', $selectfilters['q']['ban'][0] ?? ''))) ? 'selected' : '' }}>{{ $ban->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_ban" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">Ban</div>
                                <div class="tz-dropdown__values is-hidden">Ban</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                    @foreach ($bans as $ban)
                                        <div class="tz-dropdown__option" data-val="{{ $ban->id }}">
                                            <label class="tz-dropdown__option-label">
                                                <span class="text">{{ $ban->name }}</span>
                                                <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                <span class="tz-dropdown__option-tickmark"></span>
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                        <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>










                    {{-- select car type end --}}

                    {{-- select year start --}}


                    <div class="main-search__item">
                        <div class="tz-form__group tz-form__group--col-2">

                            <!-- Min Year -->
                            <div class="main-search__item">
                                <select class="select optional form-control js-search-select-make"
                                    data-dropdown-title="Model" data-dropdown-reset="Sıfırla"
                                    data-dropdown-placeholder="Min year" data-dropdown-not-found="Heç nə tapılmadı"
                                    id="q_min_year" style="display: none;">
                                    <option value="" label=" "></option>

                                    @foreach ($years as $year)
                                        <option value="{{ $year->year }}"
                                            {{ isset($selectfilters['q']['min_year']) && $selectfilters['q']['min_year'] == $year->year ? 'selected' : '' }}>
                                            {{ $year->year }}
                                        </option>
                                    @endforeach
                                </select>

                                <input type="hidden" name="q[min_year]"
                                    value="{{ $selectfilters['q']['min_year'] ?? '' }}">

                                <div class="tz-dropdown" data-id="q_min_year">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">
                                            {{ isset($selectfilters['q']['min_year']) ? $selectfilters['q']['min_year'] : 'Min year' }}
                                        </div>
                                        <div class="tz-dropdown__values is-hidden">Min year</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                data-val="">Sıfırla</div>

                                            @foreach ($years as $year)
                                                <div class="tz-dropdown__option {{ isset($selectfilters['q']['min_year']) && $selectfilters['q']['min_year'] == $year->year ? 'is-selected' : '' }}"
                                                    data-val="{{ $year->year }}" data-group="">
                                                    <div class="tz-dropdown__option-label"><span
                                                            class="text">{{ $year->year }}</span></div>
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

                            <!-- Max Year -->
                            <div class="main-search__item">
                                <select name="q[max_year][]" class="select optional form-control js-search-select-make"
                                    data-dropdown-title="Year" data-dropdown-reset="Sıfırla"
                                    data-dropdown-placeholder="Max year" data-dropdown-not-found="Heç nə tapılmadı"
                                    id="q_max_year" style="display: none;">
                                    <option value="" label=" "></option>

                                    @foreach ($years as $year)
                                        <option value="{{ $year->year }}"
                                            {{ isset($selectfilters['q']['max_year']) && $selectfilters['q']['max_year'] == $year->year ? 'selected' : '' }}>
                                            {{ $year->year }}
                                        </option>
                                    @endforeach
                                </select>

                                <input type="hidden" name="q[max_year]"
                                    value="{{ $selectfilters['q']['max_year'] ?? '' }}">

                                <div class="tz-dropdown" data-id="q_max_year">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">
                                            {{ isset($selectfilters['q']['max_year']) ? $selectfilters['q']['max_year'] : 'Max year' }}
                                        </div>
                                        <div class="tz-dropdown__values is-hidden">Max year</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                data-val="">Sıfırla</div>

                                            @foreach ($years as $year)
                                                <div class="tz-dropdown__option {{ isset($selectfilters['q']['max_year']) && $selectfilters['q']['max_year'] == $year->year ? 'is-selected' : '' }}"
                                                    data-val="{{ $year->year }}" data-group="">
                                                    <div class="tz-dropdown__option-label"><span
                                                            class="text">{{ $year->year }}</span></div>
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

                        </div>
                    </div>


                    {{-- select year end --}}


                </div>


                <div class="slide-blk js-main-search-slide-blk">
                    <div class="tz-d-flex tz-wrap-wrap tz-gap-10">

                        {{-- color select start --}}

                        <div class="main-search__item main-search__item--4">

                            <div class="main-search__item">
                                <input name="q[colors][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['colors'][0] ?? '')) }}" autocomplete="off">
                                <select name="q[colors][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Color" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Color" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_color" style="display: none;">
                                    @foreach ($colors as $color)
                                        <option data-tz-dropdown-option="{{ $color->hex }}" value="{{ $color->id }}" {{ in_array($color->id, explode(',', old('selected_colors', $selectfilters['q']['colors'][0] ?? ''))) ? 'selected' : '' }}>
                                            {{ $color->name }}</option>
                                        @endforeach
                                </select>
                                <div class="tz-dropdown" data-id="q_color" data-multiple="true">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Color</div>
                                        <div class="tz-dropdown__values is-hidden">Color</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                            @foreach ($colors as $color)
                                                <div class="tz-dropdown__option" data-val="{{ $color->id }}">
                                                    <label class="tz-dropdown__option-label">
                                                        <span class="circle"
                                                        style="background-color:{{ $color->hex }}"></span>
                                                        <span class="text">{{ $color->name }}</span>
                                                        <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                        <span class="tz-dropdown__option-tickmark"></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                                <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                        {{-- color select end --}}


                        {{-- select fuel type start --}}

                        <div class="main-search__item main-search__item--4">
                        <div class="main-search__item">
                            <input name="q[fuel_types][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['fuel_types'][0] ?? '')) }}" autocomplete="off">
                            <select name="q[fuel_types][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Fuel Type" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Fuel Type" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_fuel" style="display: none;">
                                @foreach ($fueltypes as $fuel)
                                    <option value="{{ $fuel->id }}" {{ in_array($fuel->id, explode(',', old('selected_fuel_types', $selectfilters['q']['fuel_types'][0] ?? ''))) ? 'selected' : '' }}>{{ $fuel->name }}</option>
                                @endforeach
                            </select>
                            <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                                <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                    <input type="text" class="tz-dropdown__search is-hidden">
                                    <div class="tz-dropdown__label">Fuel Type</div>
                                    <div class="tz-dropdown__values is-hidden">Fuel Type</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                        @foreach ($fueltypes as $fuel)
                                            <div class="tz-dropdown__option" data-val="{{ $fuel->id }}">
                                                <label class="tz-dropdown__option-label">
                                                    <span class="text">{{ $fuel->name }}</span>
                                                    <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                    <span class="tz-dropdown__option-tickmark"></span>
                                                </label>
                                            </div>
                                        @endforeach
                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                            <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        {{-- gear filter start  --}}


                        <div class="main-search__item main-search__item--4">
                            <div class="main-search__item">
                                <input name="q[gears][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['gears'][0] ?? '')) }}" autocomplete="off">
                                <select name="q[gears][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Gear" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Gear" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_gear" style="display: none;">
                                    @foreach ($transmissions as $transmission)
                                        <option value="{{ $transmission->id }}" {{ in_array($transmission->id, explode(',', old('selected_gears', $selectfilters['q']['gears'][0] ?? ''))) ? 'selected' : '' }}>{{ $transmission->name }}</option>
                                    @endforeach
                                </select>
                                <div class="tz-dropdown" data-id="q_gear" data-multiple="true">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Gear</div>
                                        <div class="tz-dropdown__values is-hidden">Gear</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                            @foreach ($transmissions as $transmission)
                                                <div class="tz-dropdown__option" data-val="{{ $transmission->id }}">
                                                    <label class="tz-dropdown__option-label">
                                                        <span class="text">{{ $transmission->name }}</span>
                                                        <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                        <span class="tz-dropdown__option-tickmark"></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                                <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- gear filter ent --}}


                        {{-- transmision filter start  --}}



                        <div class="main-search__item main-search__item--4">

                            <div class="main-search__item">
                                <input name="q[transmissions][]" type="hidden" id="q_transmissions" value="{{ implode(',', explode(',', $selectfilters['q']['transmissions'][0] ?? '')) }}" autocomplete="off">
                                <select name="q[transmissions][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Transmission" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Transmission" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_transmissions" style="display: none;">
                                    @foreach ($damages as $damage)
                                        <option value="{{ $damage->id }}" {{ in_array($damage->id, explode(',', old('selected_transmissions', $selectfilters['q']['transmissions'][0] ?? ''))) ? 'selected' : '' }}>{{ $damage->name }}</option>
                                    @endforeach
                                </select>
                                <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Transmission</div>
                                        <div class="tz-dropdown__values is-hidden">Transmission</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                            @foreach ($damages as $damage)
                                                <div class="tz-dropdown__option" data-val="{{ $damage->id }}">
                                                    <label class="tz-dropdown__option-label">
                                                        <span class="text">{{ $damage->name }}</span>
                                                        <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                        <span class="tz-dropdown__option-tickmark"></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                                <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- transmision filter end --}}

                        {{-- engine volume start --}}

                        <div class="main-search__item main-search__item--3">
                            <div class="tz-form__group tz-form__group--col-2">

                                <!-- Engine Min -->
                                <div class="main-search__item">
                                    <select class="select optional form-control js-search-select-make"
                                        data-dropdown-title="Həcm min" data-dropdown-reset="Sıfırla"
                                        data-dropdown-placeholder="Markanı yazın"
                                        data-dropdown-not-found="Heç nə tapılmadı" id="q_engine" style="display: none;">
                                        <option value="" label=" "></option>
                                        @foreach ($enginevolumes as $engine)
                                            <option value="{{ $engine->id }}"
                                                {{ isset($selectfilters['q']['engine_min']) && $selectfilters['q']['engine_min'] == $engine->id ? 'selected' : '' }}>
                                                {{ $engine->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="q[engine_min]"
                                        value="{{ $selectfilters['q']['engine_min'] ?? '' }}">

                                    <div class="tz-dropdown" data-id="q_engine">
                                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                            <input type="text" class="tz-dropdown__search is-hidden">
                                            <div class="tz-dropdown__label">
                                                {{ isset($selectfilters['q']['engine_min']) ? $enginevolumes->firstWhere('id', $selectfilters['q']['engine_min'])->name : 'Engine min' }}
                                            </div>
                                            <div class="tz-dropdown__values is-hidden">Həcm yazın</div>
                                        </div>
                                        <div class="tz-dropdown__content">
                                            <div class="tz-dropdown__list">
                                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                    data-val="">Sıfırla</div>

                                                @foreach ($enginevolumes as $engine)
                                                    <div class="tz-dropdown__option {{ isset($selectfilters['q']['engine_min']) && $selectfilters['q']['engine_min'] == $engine->id ? 'is-selected' : '' }}"
                                                        data-val="{{ $engine->id }}" data-group="">
                                                        <div class="tz-dropdown__option-label"><span
                                                                class="text">{{ $engine->name }}</span></div>
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

                                <!-- Engine Max -->
                                <div class="main-search__item">
                                    <select class="select optional form-control js-search-select-make"
                                        data-dropdown-title="Həcm max" data-dropdown-reset="Sıfırla"
                                        data-dropdown-placeholder="Markanı yazın"
                                        data-dropdown-not-found="Heç nə tapılmadı" id="q_engineto"
                                        style="display: none;">
                                        <option value="" label=" "></option>
                                        @foreach ($enginevolumes as $engine)
                                            <option value="{{ $engine->id }}"
                                                {{ isset($selectfilters['q']['engine_max']) && $selectfilters['q']['engine_max'] == $engine->id ? 'selected' : '' }}>
                                                {{ $engine->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="q[engine_max]"
                                        value="{{ $selectfilters['q']['engine_max'] ?? '' }}">

                                    <div class="tz-dropdown" data-id="q_engineto">
                                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                            <input type="text" class="tz-dropdown__search is-hidden">
                                            <div class="tz-dropdown__label">
                                                {{ isset($selectfilters['q']['engine_max']) ? $enginevolumes->firstWhere('id', $selectfilters['q']['engine_max'])->name : 'Engine max' }}
                                            </div>
                                            <div class="tz-dropdown__values is-hidden">Həcm yazın</div>
                                        </div>
                                        <div class="tz-dropdown__content">
                                            <div class="tz-dropdown__list">
                                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                                    data-val="">Sıfırla</div>
                                                @foreach ($enginevolumes as $engine)
                                                    <div class="tz-dropdown__option {{ isset($selectfilters['q']['engine_max']) && $selectfilters['q']['engine_max'] == $engine->id ? 'is-selected' : '' }}"
                                                        data-val="{{ $engine->id }}" data-group="">
                                                        <div class="tz-dropdown__option-label"><span
                                                                class="text">{{ $engine->name }}</span></div>
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

                            </div>
                        </div>

                        {{-- engine volume end --}}


                        <div class="main-search__item main-search__item--3">
                            <div class="tz-form__group tz-form__group--col-2 tz-d-grid">
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating">
                                        <input class="string optional form-control js-val-with-spaces" data-maxlength="4"
                                            placeholder=" " maxlength="4" size="4" type="text"
                                            name="q[power_from]" id="q_power_from"
                                            value="{{ $selectfilters['q']['power_from'] ?? '' }}">
                                        <label for="q_power_from">Power (a.g.), min.</label>
                                        <span class="tz-form__floating-btn js-reset-input"></span>
                                    </div>
                                </div>
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating">
                                        <input class="string optional form-control js-val-with-spaces" data-maxlength="4"
                                            placeholder=" " maxlength="4" size="4" type="text"
                                            name="q[power_to]" id="q_power_to"
                                            value="{{ $selectfilters['q']['power_to'] ?? '' }}">
                                        <label for="q_power_to">maks.</label>
                                        <span class="tz-form__floating-btn js-reset-input"></span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="main-search__item main-search__item--3 js-filtered-control-item"
                            data-hidden-id="[&quot;1&quot;]">
                            <div class="tz-form__group tz-form__group--col-2 tz-d-grid">
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating">
                                        <input class="string optional form-control js-val-with-spaces" placeholder=" "
                                            maxlength="9" size="9" type="text" name="q[mileage_from]"
                                            id="q_mileage_from" value="{{ $selectfilters['q']['mileage_from'] ?? '' }}">
                                        <label for="q_mileage_from">Millage (km), min.</label>
                                        <span class="tz-form__floating-btn js-reset-input"></span>
                                    </div>
                                </div>
                                <div class="tz-form__group-item">
                                    <div class="tz-form__floating">
                                        <input class="string optional form-control js-val-with-spaces" placeholder=" "
                                            maxlength="9" size="9" type="text" name="q[mileage_to]"
                                            id="q_mileage_to" value="{{ $selectfilters['q']['mileage_to'] ?? '' }}">
                                        <label for="q_mileage_to">maks.</label>
                                        <span class="tz-form__floating-btn js-reset-input"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--
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
                        </div> --}}

                        {{-- owners count end  --}}

                        {{-- seats count start  --}}
                        <div class="main-search__item main-search__item--4">
                            <div class="main-search__item">
                                <input name="q[seats_count][]" type="hidden" id="q_seats_count" value="{{ implode(',', explode(',', $selectfilters['q']['seats_count'][0] ?? '')) }}" autocomplete="off">
                                <select name="q[seats_count][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Seats Count" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Seats Count" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="seats_count" style="display: none;">
                                    @for ($i = 1; $i <= 8; $i++)
                                    <option value="{{ $i }}" {{ in_array($i, explode(',', old('selected_seats_count', $selectfilters['q']['seats_count'][0] ?? ''))) ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                                </select>
                                <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Seat Count</div>
                                        <div class="tz-dropdown__values is-hidden">Seat Count</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                            @for ($i =1 ; $i <=8 ;$i++)
                                                <div class="tz-dropdown__option" data-val="{{ $i }}">
                                                    <label class="tz-dropdown__option-label">
                                                        <span class="text">
                                                            @if ($i === 8)
                                                             8+
                                                             @else
                                                             {{ $i }}
                                                            @endif


                                                        </span>
                                                        <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                        <span class="tz-dropdown__option-tickmark"></span>
                                                    </label>
                                                </div>
                                            @endfor
                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                                <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- seats count end --}}


                        {{-- market select start --}}

                        <div class="main-search__item main-search__item--4">
                            <div class="main-search__item">
                                <input name="q[markets][]" type="hidden" id="q_markets" value="{{ implode(',', explode(',', $selectfilters['q']['markets'][0] ?? '')) }}" autocomplete="off">
                                <select name="q[markets][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="Market" data-dropdown-reset="Sıfırla" data-dropdown-placeholder="Market" data-dropdown-not-found="Heç nə tapılmadı" multiple="multiple" id="q_markets" style="display: none;">
                                    @foreach ($markets as $market)
                                        <option value="{{ $market->id }}" {{ in_array($market->id, explode(',', old('selected_markets', $selectfilters['q']['markets'][0] ?? ''))) ? 'selected' : '' }}>{{ $market->name }}</option>
                                    @endforeach
                                </select>
                                <div class="tz-dropdown" data-id="q_markets" data-multiple="true">
                                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                        <input type="text" class="tz-dropdown__search is-hidden">
                                        <div class="tz-dropdown__label">Market</div>
                                        <div class="tz-dropdown__values is-hidden">Market</div>
                                    </div>
                                    <div class="tz-dropdown__content">
                                        <div class="tz-dropdown__list">
                                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">Sıfırla</div>
                                            @foreach ($markets as $market)
                                                <div class="tz-dropdown__option" data-val="{{ $market->id }}">
                                                    <label class="tz-dropdown__option-label">
                                                        <span class="text">{{ $market->name }}</span>
                                                        <input type="checkbox" class="tz-dropdown__option-checkbox">
                                                        <span class="tz-dropdown__option-tickmark"></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                                <label class="tz-dropdown__option-label"><span class="text">Heç nə tapılmadı</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- market select end --}}

                    </div>

                    <div class="main-search__blk main-search__blk--checkbox-list d-flex" style="margin-top:10px;">
                        <input name="q[crashed]" type="hidden" value="0" autocomplete="off">
                        <input class="tz-form__check-input" type="checkbox" value="1" name="q[crashed]"
                            id="q_crashed"
                            {{ isset($selectfilters['q']['crashed']) && $selectfilters['q']['crashed'] == 1 ? 'checked' : '' }}>
                        <label class="tz-form__check-label" for="q_crashed">No Damage</label>

                        <input name="q[painted]" type="hidden" value="0" autocomplete="off">
                        <input class="tz-form__check-input" type="checkbox" value="1" name="q[painted]"
                            id="q_painted"
                            {{ isset($selectfilters['q']['painted']) && $selectfilters['q']['painted'] == 1 ? 'checked' : '' }}>
                        <label class="tz-form__check-label" for="q_painted">Unpainted</label>

                        <input name="q[only_damaged]" type="hidden" value="0" autocomplete="off">
                        <input class="tz-form__check-input" type="checkbox" value="1" name="q[only_damaged]"
                            id="q_only_damaged"
                            {{ isset($selectfilters['q']['only_damaged']) && $selectfilters['q']['only_damaged'] == 1 ? 'checked' : '' }}>
                        <label class="tz-form__check-label" for="q_only_damaged">Only damaged vehicles</label>
                    </div>







                    <div class="main-search__blk main-search__blk--checkbox-list">
                        <div class="main-search__blk-title"><span>Vehicle Equipment</span></div>
                        @foreach ($equipments as $equipment)
                            <span>
                                <input class="tz-form__check-input" type="checkbox" value="{{ $equipment->id }}"
                                    name="q[equipments][]" id="q_extras_{{ $equipment->id }}"
                                    {{ isset($selectfilters['q']['equipments']) && in_array($equipment->id, $selectfilters['q']['equipments']) ? 'checked' : '' }}>
                                <label class="tz-form__check-label tz-text tz-text--primary"
                                    for="q_extras_{{ $equipment->id }}">{{ $equipment->name }}</label>
                            </span>
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
                            <a class="custom-filter-reset-button" href="/">
                                Reset
                            </a>
                        </div>
                        <div
                            class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow js-main-search-slide-down">
                            <span>More filters</span>
                        </div>
                        <div
                            class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow is-hidden is-active js-main-search-slide-up">
                            <span>Hide</span>
                        </div>
                        <button type="submit" class="main-search__btn tz-btn tz-btn--primary">Show
                            listings</button>
                    </div>
                </div>



            </div>
        </form>

        {{-- filter form end --}}

        <div class="page-content page-content--grey">
            <div class="products-container index-products-container">
                <section>
                    <div class="section-title section-title--grey">
                        <div class="tz-container tz-d-flex tz-align-center tz-justify-between">
                            <p class="section-title_name">Announcements</p>
                            <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                                <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                                <div id="ad_ph_2" style="display:none;"></div>
                            </div>
                        </div>
                    </div>


                    <div class="tz-container">
                        <div class="products products--featured js-import-container" id="car-list">

                            @foreach ($cars as $car)
                                <div class="products-i vipped featured" data-id="{{ $car->id }}">
                                    <a href="" class="products-i__link"></a>
                                    <div class="products-i__top">
                                        <img width='220' height='170'
                                            src="{{ asset('storage/' . $car->car_image) }}" loading="lazy"
                                            alt="{{ $car->ModelType->name }}">
                                        <div class="products-i__info"></div>
                                    </div>
                                    <div class="products-i__bottom">
                                        <div class="products-i__price products-i__bottom-text">
                                            <div class="product-price">{{ $car->price }}
                                                <span>{{ $car->Ro->name }}</span>
                                            </div>
                                        </div>
                                        <div class="products-i__name products-i__bottom-text">{{ $car->carModel->name }}
                                            {{ $car->ModelType->name }}</div>
                                        <div class="products-i__attributes products-i__bottom-text">{{ $car->year }},
                                            {{ $car->engine_v }} L, {{ $car->odometer_km }} km</div>
                                        <div class="products-i__datetime">{{ $car->region->name ?? '' }} ,
                                            {{ $car->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="loading" style="display: none;"><img src="{{ asset('assets/img/loading.gif') }}"
                                alt="Loading..." style="background: transparent;"></div>
                        <button id="load-more"></button>
                    </div>

                </section>
            </div>
        </div>
    </div>


    {{-- <script>
        // infiniti scroll function start

        let page = 1;
        const loadingIndicator = document.querySelector('.loading');

        window.addEventListener('scroll', () => {
            const nearBottom = window.innerHeight + window.scrollY >= document.body.offsetHeight - 100;
            if (nearBottom) {
                loadMoreCars();
            }
        });

        function loadMoreCars() {
            loadingIndicator.style.display = 'block';
            page++;
            fetch(`/cars?page=${page}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text(); // İlk olarak yanıtı metin olarak al
                })
                .then(text => {
                    console.log('Raw response:', text); // Yanıtın tam olarak ne olduğunu görmek için konsola yazdır
                    try {
                        return JSON.parse(text); // JSON formatına çevirmeyi dene
                    } catch (error) {
                        throw new Error('Invalid JSON format');
                    }
                })
                .then(data => {
                    const carList = document.getElementById('car-list');

                    data.data.forEach(car => {
                        const carItem = document.createElement('div');
                        carItem.className = 'products-i vipped featured';
                        carItem.setAttribute('data-id', car.id);
                        carItem.innerHTML = `
                <a href="" class="products-i__link"></a>
                <div class="products-i__top">
                    <img src="{{ asset('storage/') }}/${car.car_image}" loading="lazy" alt="${car.ModelType.name}">
                    <div class="products-i__info"></div>
                </div>
                <div class="products-i__bottom">
                    <div class="products-i__price products-i__bottom-text">
                        <div class="product-price">${car.price} <span>${car.Ro.name}</span></div>
                    </div>
                    <div class="products-i__name products-i__bottom-text">${car.carModel.name} ${car.ModelType.name}</div>
                    <div class="products-i__attributes products-i__bottom-text">${car.year}, ${car.engine_v} L, ${car.odometer_km} km</div>
                    <div class="products-i__datetime">${car.region.name}, ${new Date(car.created_at).toLocaleString()}</div>
                </div>
            `;
                        carList.appendChild(carItem);
                    });

                    loadingIndicator.style.display = 'none';
                    if (page >= data.last_page) {
                        window.removeEventListener('scroll', loadMoreCars);
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error.message);
                    loadingIndicator.style.display = 'none';
                });


        }

        //   infiniti scroll function end
    </script> --}}

<script>
document.addEventListener("DOMContentLoaded", function () {
    function initializeDropdown(dropdown) {
        const hiddenInput = dropdown.parentElement.querySelector('input[type="hidden"]');
        const dropdownOptions = dropdown.querySelectorAll('.tz-dropdown__option');
        const dropdownLabel = dropdown.querySelector('.tz-dropdown__label');
        const isMultiple = dropdown.getAttribute('data-multiple') === "true";

        let selectedItems = [];

        // Load previous selections from the hidden input
        if (hiddenInput && hiddenInput.value) {
            selectedItems = hiddenInput.value.split(',').filter(Boolean);
            if (!isMultiple) {
                const selectedText = selectedItems[0];
                const selectedBrand = Array.from(dropdownOptions).find(option => option.getAttribute('data-val') === selectedText);
                dropdownLabel.textContent = selectedBrand ? selectedBrand.querySelector('.tz-dropdown__option-label .text').textContent : 'Marka';
            } else {
                const selectedNames = selectedItems.map(id => {
                    const selectedRegion = Array.from(dropdownOptions).find(option => option.getAttribute('data-val') === id);
                    return selectedRegion ? selectedRegion.querySelector('.tz-dropdown__option-label .text').textContent : '';
                }).filter(Boolean);
                dropdownLabel.textContent = selectedNames.join(', ') || 'City';

                dropdownOptions.forEach(option => {
                    const optionValue = option.getAttribute('data-val');
                    if (selectedItems.includes(optionValue)) {
                        option.classList.add('is-selected');
                        const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                        if (checkbox) checkbox.checked = true;
                    }
                });
            }
        }

        // Handle option clicks
        dropdownOptions.forEach(option => {
            const selectedValue = option.getAttribute('data-val');
            const optionLabel = option.querySelector('.tz-dropdown__option-label .text');

            option.addEventListener('click', (event) => {
                event.stopPropagation();

                if (isMultiple) {
                    // Handle multiple selections
                    const checkbox = option.querySelector('.tz-dropdown__option-checkbox');
                    if (checkbox.checked) {
                        checkbox.checked = false;
                        option.classList.remove('is-selected');
                        selectedItems = selectedItems.filter(item => item !== selectedValue);
                    } else {
                        checkbox.checked = true;
                        option.classList.add('is-selected');
                        selectedItems.push(selectedValue);
                    }
                    const selectedNames = selectedItems.map(id => {
                        const selectedRegion = Array.from(dropdownOptions).find(opt => opt.getAttribute('data-val') === id);
                        return selectedRegion ? selectedRegion.querySelector('.tz-dropdown__option-label .text').textContent : '';
                    }).filter(Boolean);
                    dropdownLabel.textContent = selectedNames.join(', ') || 'City';
                } else {
                    // Handle single selection
                    dropdownOptions.forEach(opt => {
                        const cb = opt.querySelector('.tz-dropdown__option-checkbox');
                        if (cb) cb.checked = false;
                        opt.classList.remove('is-selected');
                    });
                    option.classList.add('is-selected');
                    dropdownLabel.textContent = optionLabel.textContent;
                    selectedItems = [selectedValue];
                }

                // Update the hidden input
                hiddenInput.value = selectedItems.join(',');
            });
        });
    }

    // Initialize both dropdowns
    document.querySelectorAll('.tz-dropdown').forEach(dropdown => {
        initializeDropdown(dropdown);
    });
});

</script>

@endsection
