@extends('front.layout.layout')
@section('front_content')
    <link href="{{asset('_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        .note-editor .note-toolbar,
        .note-popover .popover-content {
            background-color: #777777 !important;
        }

        .note-editable {
            background-color: #ffffff !important;
            color: #000;
        }
    </style>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="main-container ads">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">{{sitekey('list_car','title')}}</h1>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                </div>
            </div>
        </div>
        <div class="new-product">
            <div class="limits-container">
                <div class="limits limits--current-step limits--limit">
                    <div class="limits--description">
                        <div class="text-success">{{sitekey('list_car','text')}} <span
                                class="phone-num">{{ Auth::guard('dealer')->user()->d_name }}</span>.</div>

                    </div>
                </div>
            </div>


            <form class="simple_form product-form js-product-form" enctype="multipart/form-data"
                  action="{{ route('car-store') }}" method="post">
                @csrf
                <input type="hidden" name="dealer_id" value="{{ Auth::guard('dealer')->user()->id }}">
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_make_id"><label class="string required control-label"

                                for="auto_make_id">{{sitekey('list_car','desc')}} <abbr title="required">*</abbr></label><select

                                class="js_make_id required-element" name="car_models_id" id="auto_make_id" required>
                                <option value="" disabled selected>{{sitekey('list_car','name')}}</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        {{ old('car_models_id', isset($model) ? $model->car_models_id : '') == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select></div>

                    </div>
                    <div class="right-side">
                        <div class="input select required auto_fuel_type"><label class="select required control-label"
                                for="auto_fuel_type_id">{{sitekey('filter_static_four','title')}}<abbr title="required">*</abbr></label><select
                                class="select required form-control required-element" name="fuel_type_id"
                                id="auto_fuel_type_id" required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($fueltypes as $fuel)
                                    <option
                                        value="{{ $fuel->id }}" {{ old('fuel_type_id', isset($model) ? $model->fuel_type_id : '') == $fuel->id ? 'selected' : '' }}>
                                        {{ $fuel->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_model"><label class="string required control-label"
                                for="auto_model">{{sitekey('filter_key','text')}} <abbr title="required">*</abbr></label><select
                                class="js_model_id required-element" name="model_type_id" id="auto_model_id" required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($models as $model)
                                    <option
                                        value="{{ $model->id }}" {{ old('model_type_id', isset($model) ? $model->model_type_id : '') == $model->id ? 'selected' : '' }}>
                                        {{ $model->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_gear"><label class="select required control-label"
                                for="auto_gear_id">{{sitekey('filter_static_four','text')}} <abbr title="required">*</abbr></label><select
                                class="select  form-control required-element" name="transmission_id" id="auto_gear_id"
                                required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($transmissions as $transmission)
                                    <option
                                        value="{{ $transmission->id }}"{{ old('transmission_id', isset($model) ? $model->transmission_id : '') == $transmission->id ? 'selected' : '' }}>
                                        {{ $transmission->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_category"><label class="select required control-label"
                                for="auto_category_id">{{sitekey('filter_static_three','title')}} <abbr title="required">*</abbr></label><select
                                class="select required form-control required-element" name="ban_id" id="auto_category_id"
                                required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($bans as $ban)
                                    <option
                                        value="{{ $ban->id }}"{{ old('ban_id', isset($model) ? $model->ban_id : '') == $ban->id ? 'selected' : '' }}>
                                        {{ $ban->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_transmission"><label class="select required control-label"
                                for="auto_transmission_id">{{sitekey('list_car_one','title')}}<abbr title="required">*</abbr></label><select
                                class="select required form-control required-element" name="damage_id"
                                id="auto_transmission_id" required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($damages as $damage)
                                    <option
                                        value="{{ $damage->id }}" {{ old('damage_id', isset($model) ? $model->damage_id : '') == $damage->id ? 'selected' : '' }}>
                                        {{ $damage->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="integer required control-label"
                            for="auto_mileage">{{sitekey('list_car_one','text')}}<abbr title="required">*</abbr></label>
                        <input data-number="true" required class="string form-control required-element" value="{{ old('odometer_km', isset($model) ? $model->odometer_km : '') }}"
                            type="number" name="odometer_km">
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_reg_year"><label class="select required control-label"

                                for="auto_reg_year">{{sitekey('list_car_one','desc')}} <abbr title="required">*</abbr></label><select
                                class="select required form-control required-element" name="year" id="auto_reg_year"
                                required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($years as $year)
                                    <option
                                        value="{{ $year->year }}"{{ old('year', isset($model) ? $model->year : '') == $year ? 'selected' : '' }}>
                                        {{$year->year}}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_color"><label class="select required control-label"
                                for="auto_color_id">{{sitekey('filter_key_three','name')}} <abbr title="required">*</abbr></label><select
                                class="select required form-control required-element" name="cylinder_id"
                                id="auto_color_id" required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($colors as $color)
                                    <option
                                        value="{{ $color->id }}"{{ old('cylinder_id', isset($model) ? $model->cylinder_id : '') == $color->id ? 'selected' : '' }}>
                                        {{ $color->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_engine_volume"><label class="select required control-label"
                                for="auto_engine_volume">{{sitekey('list_car_one','name')}}<abbr title="required">*</abbr></label><select
                                class="select required form-control required-element" name="engine_volume_id"
                                id="auto_engine_volume" required>
                                <option value="">{{sitekey('list_car','name')}}</option>
                                @foreach ($enginevolumes as $enginevolume)
                                    <option
                                        value="{{ $enginevolume->id }}" {{ old('engine_volume_id', isset($model) ? $model->engine_volume_id : '') == $enginevolume->id ? 'selected' : '' }}>
                                        {{ $enginevolume->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                </div>


                <div class="new-product-i new-product-i--large--indent">

                    <div class="left-side">
                        <div class="input select optional auto_market"><label class="select optional control-label"
                                                                              for="auto_market_id">{{sitekey('list_car_two','title')}} *</label><select class="select optional form-control"
                                                                                                                          name="drive_id" id="auto_market_id" required>
                                <option>{{sitekey('list_car','name')}}</option>
                                @foreach ($drives as $drive)
                                    <option value="{{ $drive->id }}"
                                        {{ old('drive_id', isset($model) ? $model->drive_id : '') == $drive->id ? 'selected' : '' }}>
                                        {{ $drive->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach

                            </select></div>
                    </div>

                    <div class="right-side">
                        <div class="input string required auto_power"><label class="string required control-label"
                                                                             for="auto_power">{{sitekey('list_car_two','text')}} <abbr title="required">*</abbr></label><input
                                data-number="true" class="string required form-control required-element" value="{{ old('engine_v', isset($model) ? $model->engine_v : '') }}"
                                required type="text" name="engine_v" id="auto_power"></div>
                    </div>

                </div>


                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="string required control-label"
                            for="auto_price">{{sitekey('list_car_two','desc')}} <abbr title="required">*</abbr></label>
                        <div class="tz-d-inline">
                            <input data-number="true" required class="string required form-control required-element"
                                   type="text" value="{{ old('price', isset($model) ? $model->price : '') }}"
                                   name="price" id="auto_price">
                            <div class="tooltips">
                                <div class="tooltips-body">{{sitekey('list_car_two','name')}}</div>
                            </div>
                            <div class="input radio_buttons optional auto_currency">
                                <input type="hidden" name="ro_id" value="" autocomplete="off"><span
                                    class="radio">
                                    <input class="radio_buttons optional form-control" type="radio" value="1"
                                        checked name="ro_id" id="auto_currency_azn"><label
                                        class="collection_radio_buttons" for="auto_currency_azn">{{sitekey('list_car_three','title')}}</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select optional auto_market"><label class="select optional control-label"
                                                                              for="auto_market_id">{{sitekey('filter_key_two','desc')}}</label><select class="select optional form-control"
                                                                                                                       name="region_id" id="auto_market_id">
                                <option>{{sitekey('list_car','name')}}</option>
                                @foreach ($regions as $city)
                                    <option
                                        value="{{ $city->id }}"{{ old('region_id', isset($model) ? $model->region_id : '') == $city->id ? 'selected' : '' }}>
                                        {{ $city->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent">

                    <div class="left-side">
                        <div class="input select optional auto_market"><label class="select optional control-label"
                                for="auto_market_id">{{sitekey('list_car_three','text')}}</label><select class="select optional form-control"
                                name="market_id" id="auto_market_id">
                                <option>{{sitekey('list_car','name')}}</option>
                                @foreach ($markets as $market)
                                    <option
                                        value="{{ $market->id }}"{{ old('market_id', isset($model) ? $model->market_id : '') == $market->id ? 'selected' : '' }}>
                                        {{ $market->translateOrDefault(app()->getLocale())->name }}</option>
                                @endforeach

                            </select></div>
                    </div>

                </div>

                <div class="new-product-i new-product-i--large--indent new-product-i--inline"><label>{{sitekey('detail_car_two','desc')}}</label>
                    <div class="boolean boolean--top">
                        <div class="new-product-i__blk-container tz-d-flex tz-align-center">
                            <div class="new-product-i__blk"><input name="crashed" type="hidden" value="0"
                                    autocomplete="off"><input type="checkbox" value="1" name="crashed"
                                    id="auto_crashed"><label for="auto_crashed"><span class="title">{{sitekey('list_car_three','desc')}}</span><span class="description">{{sitekey('list_car_three','name')}}</span></label></div>
                            <div class="new-product-i__blk"><input name="painted" type="hidden" value="0"
                                    autocomplete="off"><input type="checkbox" value="1" name="painted"
                                    id="auto_painted"><label for="auto_painted"><span class="title">{{sitekey('list_car_three','desc')}}</span><span class="description">{{sitekey('list_car_four','title')}}</span><span class="description">{{sitekey('list_car_four','text')}}</span></label></div>
                            <div class="new-product-i__blk"><input name="for_spare_parts" type="hidden"
                                    value="0" autocomplete="off"><input type="checkbox" value="1"
                                    name="for_spare_parts" id="auto_for_spare_parts"><label
                                    for="auto_for_spare_parts"><span class="title">{{sitekey('list_car_four','desc')}}</span><span
                                        class="description">{{sitekey('list_car_four','name')}}</span></label></div>
                        </div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent new-product-i--inline"><label
                        class="integer optional control-label" for="auto_seats_count">{{sitekey('list_car_five','name')}}</label>
                    <div class="boolean">
                        <input type="hidden" name="of_passenger" value="" autocomplete="off"><span
                            class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '1' ? 'selected' : '' }} type="radio" value="1" name="of_passenger" id="auto_seats_count_1">
                            <label class="collection_radio_buttons" for="auto_seats_count_1">1</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '2' ? 'selected' : '' }} type="radio" value="2" name="of_passenger" id="auto_seats_count_2"><label class="collection_radio_buttons" for="auto_seats_count_2">2</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '3' ? 'selected' : '' }} type="radio" value="3" name="of_passenger" id="auto_seats_count_3"><label class="collection_radio_buttons" for="auto_seats_count_3">3</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '4' ? 'selected' : '' }} type="radio" value="4" name="of_passenger" id="auto_seats_count_4"><label class="collection_radio_buttons" for="auto_seats_count_4">4</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '5' ? 'selected' : '' }} type="radio" value="5" name="of_passenger" id="auto_seats_count_5"><label class="collection_radio_buttons" for="auto_seats_count_5">5</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '6' ? 'selected' : '' }} type="radio" value="6" name="of_passenger" id="auto_seats_count_6"><label class="collection_radio_buttons" for="auto_seats_count_6">6</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '7' ? 'selected' : '' }} type="radio" value="7" name="of_passenger" id="auto_seats_count_7"><label class="collection_radio_buttons" for="auto_seats_count_7">7</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" {{ isset($model) && $model->of_passenger == '8' ? 'selected' : '' }} type="radio" value="8" name="of_passenger" id="auto_seats_count_8"><label class="collection_radio_buttons" for="auto_seats_count_8">8+</label></span><span class="radio">
                            <input checked="" class="radio_buttons" id="auto_seats_count_0" name="of_passenger" type="radio" value=""><label class="collection_radio_buttons" for="auto_seats_count_0">{{sitekey('list_car_five','text')}}</label></span>
                    </div>
                </div>


                <div class="new-product-i new-product-i--large--indent new-product-i--uppercase">
                    <div class="input string optional auto_vin"><label for="auto_vin">{{sitekey('list_car_five','desc')}}</label><input
                            class="string optional form-control" maxlength="17" size="17" type="text"
                            name="vincode" id="auto_vin"
                            value="{{ old('vincode', isset($model) ? $model->vincode : '') }}">
                        <div class="new-product-i__hint-container">
                            <div class="tz-hint-btn">{{sitekey('list_car_five','name')}}</div>
                            <div class="tz-hint">
                                <div class="tz-hint__title">{{sitekey('list_car_five','name')}}</div><img alt=""
                                    src="{{ asset('assets/img/vinfront.jpg') }}">
                                <div class="tz-hint__info">{{sitekey('list_car_2','title')}}</div><img alt=""
                                    src="{{ asset('assets/img/vinback.jpg') }}">
                                <div class="tz-hint__info">{{sitekey('list_car_2','text')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header p-0 pt-1">
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
                <div class="tab-content" style="margin:10px 0 20px 0;" id="custom-tabs-one-tabContent">
                    @foreach (config('app.languages') as $index => $lang)
                        <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $lang }}"
                             role="tabpanel" aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                            <div class="form-group col-12 mt-3">
                                <label>{{sitekey('car_detail_4','name')}}</label>
                                <textarea id="summernote{{ $index }}" placeholder="desc{{ $lang }}"
                                          name="{{ $lang }}[item_comment]" class="form-control">
                            {{ old("$lang.item_comment", isset($model) ? $model->translateOrDefault($lang)->item_comment ?? '' : '') }}
                        </textarea>
                                @error("$lang.item_comment")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="input check_boxes optional auto_extras"><label class="check_boxes optional control-label">{{sitekey('list_car_six','title')}}</label>

                    <div style="display: flex; gap:20px;">
                        @foreach ($higlits as $highlight)
                            <span class="checkbox"> <input class="check_boxes optional form-control" type="checkbox"
                                                           value="{{ $highlight->id }}" name="car_equipment[]"
                                                           id="auto_extra_ids_{{ $highlight->id }}" {{ isset($model) && is_array(json_decode($model->car_equipment, true)) && in_array($highlight->id, json_decode($model->car_equipment, true)) ? 'checked' : '' }}><label
                                    class="collection_check_boxes"
                                    for="auto_extra_ids_{{ $highlight->id }}">{{ $highlight->name }}</label></span>
                        @endforeach
                    </div>


                </div>
                <div class="input pond pond-grid" data-endpoint="" data-name="gallery[photo_ids][]"
                    data-target-format=""><label for="" class="string optional control-label">{{sitekey('list_car_six','text')}}</label>
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
                                <label class="pond-img-card js-pond-img-card pond-img-card--front" id="backImageUpload">
                                    <span>{{sitekey('list_car_seven','title')}}</span>
                                    <input type="file" name="carimages[]" class="carImageInput">
                                </label>
                                <label class="pond-img-card js-pond-img-card pond-img-card--front" id="mainImageUpload">
                                    <span>{{sitekey('list_car_seven','text')}}</span>
                                    <input type="file" name="carimages[]" class="carImageInput">
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

                <div class="new-product-i">
                    <div class="left-side seller-information">
                        <button type="submit" class="submit-button" data-disable-with="save...">{{sitekey('list_car_eight','title')}}</button>
                    </div>
                    <div class="right-side"></div>
                </div>
                <div class="new-product--confirm-rules">
                {{sitekey('list_car_eight','text')}}
                    <a target="_blank" href="{{ route('useragrement') }}">{{sitekey('list_car_eight','desc')}}</a>
                    {{sitekey('list_car_1','title')}} <a target="_blank" href="{{ route('rule') }}">{{sitekey('list_car_eight','name')}}</a>.
                </div>
            </form>
        </div>
    </div>


    @push('js')
        <script>
            $(document).ready(function () {
                function initializeSummernote() {
                    @foreach (config('app.languages') as $index => $lang)
                    $('#summernote{{ $index }}').summernote({
                        height: 100
                    });
                    @endforeach
                }

                initializeSummernote();

                $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                    initializeSummernote();
                });
            });
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
    @endpush
@endsection
