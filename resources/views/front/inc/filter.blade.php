<form action="{{ route('mainFilter') }}" method="POST" class="simple_form main-search js-main-search">
    @csrf
    <div class="tz-container">
        <div class="main-search__row"></div>
        <div class="main-search__row main-search__row-4 tz-d-grid">
            {{-- marka selec filter start  --}}
            <div class="main-search__item">
                <select class="select optional form-control js-search-select-make" data-dropdown-title="{{sitekey('list_car','desc')}}" id="q_make" style="display: none;">
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
                            {{ isset($selectfilters['q']['make']) ? $brands->firstWhere('id', $selectfilters['q']['make'])->name : '{{sitekey('list_car','desc')}}' }}
                        </div>
                        <div class="tz-dropdown__values is-hidden">{{sitekey('home_car_one', 'title')}}</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text" data-val="">{{sitekey('home_car_one', 'text')}}</div>
                            @foreach ($brands as $brand)
                                <div class="tz-dropdown__option" data-val="{{ $brand->id }}">
                                    <div class="tz-dropdown__option-label">
                                        <span class="text">{{ $brand->name }}</span>
                                    </div>
                                </div>
                            @endforeach
                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                            {{ isset($selectfilters['q']['model']) ? implode(', ', $models->whereIn('id', (array) $selectfilters['q']['model'])->pluck('name')->toArray()) : '{{sitekey('filter_key', 'text')}}' }}
                        </div>
                        <div class="tz-dropdown__values is-hidden">{{sitekey('home_car_one', 'desc')}}</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                    <span class="text">{{sitekey('home_car_one', 'name')}}</span>
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
                        class="main-search__control-tab js-main-search-controls-tab" for="q_used">{{sitekey('filter_key','name')}}</label>

                    <input type="radio" value="1" name="q[used]" id="q_used_0"
                        {{ isset($selectfilters['q']['used']) && $selectfilters['q']['used'] == 1 ? 'checked' : '' }}><label
                        class="main-search__control-tab js-main-search-controls-tab" for="q_used_0">{{sitekey('filter_key_two','title')}}</label>

                    <input type="radio" value="2" name="q[used]" id="q_used_1"
                        {{ isset($selectfilters['q']['used']) && $selectfilters['q']['used'] == 2 ? 'checked' : '' }}><label
                        class="main-search__control-tab js-main-search-controls-tab" for="q_used_1">{{sitekey('filter_key_two','text')}}</label>
                </div>
            </div>


            {{-- Select city filter --}}

            <div class="main-search__item">
                <input name="q[regions][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['regions'][0] ?? '')) }}" autocomplete="off">
                <select name="q[regions][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_key_two', 'desc')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_key_two', 'desc')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_region" style="display: none;">
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}" {{ in_array($region->id, explode(',', old('selected_regions', $selectfilters['q']['regions'][0] ?? ''))) ? 'selected' : '' }}>{{ $region->name }}</option>
                    @endforeach
                </select>
                <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                        <input type="text" class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">{{sitekey('filter_key_two','desc')}}</div>
                        <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_two','desc')}}</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                            <label for="q_price_from">{{sitekey('list_car_1','desc')}}</label>
                            <span class="tz-form__floating-btn js-reset-input"></span>
                        </div>
                    </div>
                    <div class="tz-form__group-item">
                        <div class="tz-form__floating">
                            <input inputmode="numeric" class="string optional form-control js-val-with-spaces"
                                   placeholder=" " maxlength="11" pattern="[0-9]*" size="11" type="text"
                                   name="q[price_max]" id="q_price_to"
                                   value="{{ $selectfilters['q']['price_max'] ?? '' }}"> <!-- Price max value -->
                            <label for="q_price_to">{{sitekey('list_car_1','name')}}</label>
                            <span class="tz-form__floating-btn js-reset-input"></span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="main-search__item">
                <select class="select optional form-control js-search-select-make" data-dropdown-title="{{sitekey('list_car_three','title')}}"
                        data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('list_car_three','title')}}"
                        data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" id="q_currency" style="display: none;">
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
                            {{ isset($selectfilters['q']['price_model']) ? $selectfilters['q']['price_model'] : '{{sitekey('filter_key_two', 'name')}}' }}
                        </div>
                        <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_two','name')}}</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>

                            @foreach ($currencies as $currency)
                                <div class="tz-dropdown__option {{ isset($selectfilters['q']['price_model']) && $selectfilters['q']['price_model'] == $currency->name ? 'is-selected' : '' }}"
                                     data-val="{{ $currency->name }}">
                                    <div class="tz-dropdown__option-label"><span class="text">{{ $currency->name }}</span></div>
                                </div>
                            @endforeach

                            <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden" data-val="">
                                <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- price filter end --}}


            {{-- SELECT CAR TYPE filter --}}





            <div class="main-search__item">
                <input name="q[ban][]" type="hidden" id="q_regions_hidden" value="{{ implode(',', explode(',', $selectfilters['q']['ban'][0] ?? '')) }}" autocomplete="off">
                <select name="q[ban][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_key_three', 'title')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_key_two', 'desc')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_ban" style="display: none;">
                    @foreach ($bans as $ban)
                        <option value="{{ $ban->id }}" {{ in_array($ban->id, explode(',', old('selected_ban', $selectfilters['q']['ban'][0] ?? ''))) ? 'selected' : '' }}>{{ $ban->name }}</option>
                    @endforeach
                </select>
                <div class="tz-dropdown" data-id="q_ban" data-multiple="true">
                    <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                        <input type="text" class="tz-dropdown__search is-hidden">
                        <div class="tz-dropdown__label">{{sitekey('filter_key_three','title')}}</div>
                        <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_three','title')}}</div>
                    </div>
                    <div class="tz-dropdown__content">
                        <div class="tz-dropdown__list">
                            <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                                data-dropdown-title="{{sitekey('filter_key', 'text')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}"
                                data-dropdown-placeholder="{{sitekey('filter_key_three', 'text')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}"
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
                                    {{ isset($selectfilters['q']['min_year']) ? $selectfilters['q']['min_year'] : '{{sitekey('filter_key_three', 'text')}}' }}
                                </div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_three','text')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                         data-val="">{{sitekey('home_car_one', 'text')}}</div>

                                    @foreach ($years as $year)
                                        <div class="tz-dropdown__option {{ isset($selectfilters['q']['min_year']) && $selectfilters['q']['min_year'] == $year->year ? 'is-selected' : '' }}"
                                             data-val="{{ $year->year }}" data-group="">
                                            <div class="tz-dropdown__option-label"><span
                                                    class="text">{{ $year->year }}</span></div>
                                        </div>
                                    @endforeach

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                         data-val="">
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Max Year -->
                    <div class="main-search__item">
                        <select name="q[max_year][]" class="select optional form-control js-search-select-make"
                                data-dropdown-title="{{sitekey('car_detail_one', 'desc')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}"
                                data-dropdown-placeholder="{{sitekey('filter_key_three', 'desc')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}"
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
                                    {{ isset($selectfilters['q']['max_year']) ? $selectfilters['q']['max_year'] : '{{sitekey('filter_key_three', 'desc')}}' }}
                                </div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_three','desc')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                         data-val="">{{sitekey('home_car_one', 'text')}}</div>

                                    @foreach ($years as $year)
                                        <div class="tz-dropdown__option {{ isset($selectfilters['q']['max_year']) && $selectfilters['q']['max_year'] == $year->year ? 'is-selected' : '' }}"
                                             data-val="{{ $year->year }}" data-group="">
                                            <div class="tz-dropdown__option-label"><span
                                                    class="text">{{ $year->year }}</span></div>
                                        </div>
                                    @endforeach

                                    <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                         data-val="">
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                        <select name="q[colors][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_key_three', 'name')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_key_three', 'name')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_color" style="display: none;">
                            @foreach ($colors as $color)
                                <option data-tz-dropdown-option="{{ $color->hex }}" value="{{ $color->id }}" {{ in_array($color->id, explode(',', old('selected_colors', $selectfilters['q']['colors'][0] ?? ''))) ? 'selected' : '' }}>
                                    {{ $color->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_color" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">{{sitekey('filter_key_three','name')}}</div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_three','name')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                        <select name="q[fuel_types][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_static_four', 'title')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_static_four', 'title')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_fuel" style="display: none;">
                            @foreach ($fueltypes as $fuel)
                                <option value="{{ $fuel->id }}" {{ in_array($fuel->id, explode(',', old('selected_fuel_types', $selectfilters['q']['fuel_types'][0] ?? ''))) ? 'selected' : '' }}>{{ $fuel->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">{{sitekey('filter_static_four','title')}}</div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_static_four','title')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                        <select name="q[gears][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_static_four', 'text')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_static_four', 'text')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_gear" style="display: none;">
                            @foreach ($transmissions as $transmission)
                                <option value="{{ $transmission->id }}" {{ in_array($transmission->id, explode(',', old('selected_gears', $selectfilters['q']['gears'][0] ?? ''))) ? 'selected' : '' }}>{{ $transmission->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_gear" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">{{sitekey('filter_static_four','text')}}</div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_static_four','text')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                        <select name="q[transmissions][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_static_four', 'desc')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_static_four', 'desc')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_transmissions" style="display: none;">
                            @foreach ($damages as $damage)
                                <option value="{{ $damage->id }}" {{ in_array($damage->id, explode(',', old('selected_transmissions', $selectfilters['q']['transmissions'][0] ?? ''))) ? 'selected' : '' }}>{{ $damage->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">{{sitekey('filter_static_four','desc')}}</div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_static_four','desc')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                                    data-dropdown-title="{{sitekey('home_car_two', 'title')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}"
                                    data-dropdown-placeholder="{{sitekey('home_car_one', 'title')}}"
                                    data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" id="q_engine" style="display: none;">
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
                                        {{ isset($selectfilters['q']['engine_min']) ? $enginevolumes->firstWhere('id', $selectfilters['q']['engine_min'])->name : '{{sitekey('filter_static_four', 'name')}}' }}
                                    </div>
                                    <div class="tz-dropdown__values is-hidden">{{sitekey('home_car_two', 'desc')}}</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                             data-val="">{{sitekey('home_car_one', 'text')}}</div>

                                        @foreach ($enginevolumes as $engine)
                                            <div class="tz-dropdown__option {{ isset($selectfilters['q']['engine_min']) && $selectfilters['q']['engine_min'] == $engine->id ? 'is-selected' : '' }}"
                                                 data-val="{{ $engine->id }}" data-group="">
                                                <div class="tz-dropdown__option-label"><span
                                                        class="text">{{ $engine->name }}</span></div>
                                            </div>
                                        @endforeach

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                             data-val="">
                                            <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Engine Max -->
                        <div class="main-search__item">
                            <select class="select optional form-control js-search-select-make"
                                    data-dropdown-title="{{sitekey('home_car_two', 'name')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}"
                                    data-dropdown-placeholder="{{sitekey('home_car_one', 'title')}}"
                                    data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" id="q_engineto"
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
                                        {{ isset($selectfilters['q']['engine_max']) ? $enginevolumes->firstWhere('id', $selectfilters['q']['engine_max'])->name : '{{sitekey('filter_key_five', 'title')}}' }}
                                    </div>
                                    <div class="tz-dropdown__values is-hidden">{{sitekey('home_car_two', 'desc')}}</div>
                                </div>
                                <div class="tz-dropdown__content">
                                    <div class="tz-dropdown__list">
                                        <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                             data-val="">{{sitekey('home_car_one', 'text')}}</div>
                                        @foreach ($enginevolumes as $engine)
                                            <div class="tz-dropdown__option {{ isset($selectfilters['q']['engine_max']) && $selectfilters['q']['engine_max'] == $engine->id ? 'is-selected' : '' }}"
                                                 data-val="{{ $engine->id }}" data-group="">
                                                <div class="tz-dropdown__option-label"><span
                                                        class="text">{{ $engine->name }}</span></div>
                                            </div>
                                        @endforeach

                                        <div class="tz-dropdown__option tz-dropdown__option--not-found is-hidden"
                                             data-val="">
                                            <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                                <label for="q_power_from">{{sitekey('filter_key_five','text')}}</label>
                                <span class="tz-form__floating-btn js-reset-input"></span>
                            </div>
                        </div>
                        <div class="tz-form__group-item">
                            <div class="tz-form__floating">
                                <input class="string optional form-control js-val-with-spaces" data-maxlength="4"
                                       placeholder=" " maxlength="4" size="4" type="text"
                                       name="q[power_to]" id="q_power_to"
                                       value="{{ $selectfilters['q']['power_to'] ?? '' }}">
                                <label for="q_power_to">{{sitekey('filter_key_five','desc')}}</label>
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
                                <label for="q_mileage_from">{{sitekey('filter_key_five','name')}}</label>
                                <span class="tz-form__floating-btn js-reset-input"></span>
                            </div>
                        </div>
                        <div class="tz-form__group-item">
                            <div class="tz-form__floating">
                                <input class="string optional form-control js-val-with-spaces" placeholder=" "
                                       maxlength="9" size="9" type="text" name="q[mileage_to]"
                                       id="q_mileage_to" value="{{ $selectfilters['q']['mileage_to'] ?? '' }}">
                                <label for="q_mileage_to">{{sitekey('filter_key_five','desc')}}</label>
                                <span class="tz-form__floating-btn js-reset-input"></span>
                            </div>
                        </div>
                    </div>
                </div>


                {{--
                <div class="main-search__item main-search__item--4"><input name="q[owners_count][]"
                        type="hidden" value="" autocomplete="off"><select
                        class="select optional form-control js-search-select-multi-with-search-color"
                        data-dropdown-title="{{sitekey('avto_car', 'name')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}"
                        data-dropdown-placeholder="{{sitekey('avto_car', 'name')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}"
                        multiple="multiple" name="q[owners_count][]" id="q_owner" style="display: none;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                    <div class="tz-dropdown" data-id="q_owner">
                        <div class="tz-dropdown__selected tz-dropdown__selected--bordered"><input type="text"
                                class="tz-dropdown__search is-hidden">
                            <div class="tz-dropdown__label">{{sitekey('avto_car', 'name')}}</div>
                            <div class="tz-dropdown__values is-hidden">{{sitekey('avto_car', 'name')}}</div>
                        </div>
                        <div class="tz-dropdown__content">
                            <div class="tz-dropdown__list">
                                <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false"
                                    data-val="">{{sitekey('home_car_one', 'text')}}</div>

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
                                            class="text">{{sitekey('home_car_one', 'name')}}</span></label></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- owners count end  --}}

                {{-- seats count start  --}}
                <div class="main-search__item main-search__item--4">
                    <div class="main-search__item">
                        <input name="q[seats_count][]" type="hidden" id="q_seats_count" value="{{ implode(',', explode(',', $selectfilters['q']['seats_count'][0] ?? '')) }}" autocomplete="off">
                        <select name="q[seats_count][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('home_car_two', 'text')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('home_car_two', 'text')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="seats_count" style="display: none;">
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}" {{ in_array($i, explode(',', old('selected_seats_count', $selectfilters['q']['seats_count'][0] ?? ''))) ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        <div class="tz-dropdown" data-id="q_region" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">{{sitekey('filter_key_six','title')}}</div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_six','title')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                        <select name="q[markets][]" class="select optional form-control js-search-select-multi-with-search" data-dropdown-title="{{sitekey('filter_key_six', 'text')}}" data-dropdown-reset="{{sitekey('home_car_one', 'text')}}" data-dropdown-placeholder="{{sitekey('filter_key_six', 'text')}}" data-dropdown-not-found="{{sitekey('home_car_one', 'name')}}" multiple="multiple" id="q_markets" style="display: none;">
                            @foreach ($markets as $market)
                                <option value="{{ $market->id }}" {{ in_array($market->id, explode(',', old('selected_markets', $selectfilters['q']['markets'][0] ?? ''))) ? 'selected' : '' }}>{{ $market->name }}</option>
                            @endforeach
                        </select>
                        <div class="tz-dropdown" data-id="q_markets" data-multiple="true">
                            <div class="tz-dropdown__selected tz-dropdown__selected--bordered">
                                <input type="text" class="tz-dropdown__search is-hidden">
                                <div class="tz-dropdown__label">{{sitekey('filter_key_six','text')}}</div>
                                <div class="tz-dropdown__values is-hidden">{{sitekey('filter_key_six','text')}}</div>
                            </div>
                            <div class="tz-dropdown__content">
                                <div class="tz-dropdown__list">
                                    <div class="tz-dropdown__option tz-dropdown__option--reset tz-dropdown__option--text false" data-val="">{{sitekey('home_car_one', 'text')}}</div>
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
                                        <label class="tz-dropdown__option-label"><span class="text">{{sitekey('home_car_one', 'name')}}</span></label>
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
                <label class="tz-form__check-label" for="q_crashed">{{sitekey('filter_key_six','desc')}}</label>

                <input name="q[painted]" type="hidden" value="0" autocomplete="off">
                <input class="tz-form__check-input" type="checkbox" value="1" name="q[painted]"
                       id="q_painted"
                    {{ isset($selectfilters['q']['painted']) && $selectfilters['q']['painted'] == 1 ? 'checked' : '' }}>
                <label class="tz-form__check-label" for="q_painted">{{sitekey('filter_key_six','name')}}</label>

                <input name="q[only_damaged]" type="hidden" value="0" autocomplete="off">
                <input class="tz-form__check-input" type="checkbox" value="1" name="q[only_damaged]"
                       id="q_only_damaged"
                    {{ isset($selectfilters['q']['only_damaged']) && $selectfilters['q']['only_damaged'] == 1 ? 'checked' : '' }}>
                <label class="tz-form__check-label" for="q_only_damaged">{{sitekey('filter_key_seven','title')}}</label>
            </div>







            <div class="main-search__blk main-search__blk--checkbox-list">
                <div class="main-search__blk-title"><span>{{sitekey('filter_key_seven','title')}}</span></div>
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
                <div class="main-search__ad-count">{{sitekey('filter_key_seven','desc')}}: <a
                        href="{{ route('newAddListings') }}"><span>{{ $recentCarCount }} {{sitekey('home_static_six', 'name')}}</span></a>
                </div>
            </div>
            <div class="main-search__footer-right">
                <div class=" tz-btn tz-btn-link ">
                    <a class="custom-filter-reset-button" href="/">
                    {{sitekey('filter_key_seven','name')}}
                    </a>
                </div>
                <div
                    class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow js-main-search-slide-down">
                    <span>{{sitekey('filter_key_eight','name')}}</span>
                </div>
                <div
                    class="main-search__btn tz-btn tz-btn-link tz-btn-link--primary tz-btn-link--arrow is-hidden is-active js-main-search-slide-up">
                    <span>{{sitekey('filter_key_eight','text')}}</span>
                </div>
                <button type="submit" class="main-search__btn tz-btn tz-btn--primary">{{sitekey('filter_key_eight','desc')}}</button>
            </div>
        </div>



    </div>
</form>
