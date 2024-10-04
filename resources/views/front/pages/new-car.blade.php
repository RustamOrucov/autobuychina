@extends('front.layout.layout')
@section('front_content')
    <style>
        .pond-img-card {
            position: relative;
            cursor: pointer;
            /* Tıklanabilir olduğu için imleci değiştirelim */
        }

        input[type="file"] {
            display: none;
            /* Input elemanını gizle */
        }

        #previewImage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Resmin boyutunu div'e göre kaplat */
        }
    </style>

    <div class="main-container ads">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">PLACE AN ADVERTISEMENT</h1>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                </div>
            </div>
        </div>
        <div class="new-product">
            <div class="limits-container">
                <div class="limits limits--current-step limits--limit">
                    <div class="limits--description">
                        <div class="text-success">You are posting an ad from the number <span
                                class="phone-num">{{ Auth::guard('dealer')->user()->phone }}</span>.</div>
                    </div>
                </div>
            </div>
            {{-- <div class="form-header">
                <div class="new-product--notice">
                    <ul>
                        <li>Üç ay ərzində bir nəqliyyat vasitəsi yalnız bir dəfə pulsuz dərc oluna bilər.</li>
                        <li>Üç ay ərzində təkrar və ya oxşar elanlar (marka/model, rəng) ödənişlidir.</li>
                        <li>Elanınızı saytın ön sıralarında görmək üçün "İrəli çək" xidmətindən istifadə edin.</li>
                    </ul>
                </div>
            </div> --}}

            <form class="simple_form product-form js-product-form" id="new_auto" novalidate="novalidate"
                enctype="multipart/form-data" action="#" accept-charset="UTF-8" data-remote="true" method="post">
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_make_id"><label class="string required control-label"
                                for="auto_make_id">Marka <abbr title="required">*</abbr></label><select class="js_make_id"
                                name="car_models_id" id="auto_make_id">
                                <option value="">Select</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_fuel_type"><label class="select required control-label"
                                for="auto_fuel_type_id">Fuel type<abbr title="required">*</abbr></label><select
                                class="select required form-control" name="fuel_type_id" id="auto_fuel_type_id">
                                <option>Select</option>
                                @foreach ($fueltypes as $fuel)
                                    <option value="{{ $fuel->id }}">{{ $fuel->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_model"><label class="string required control-label"
                                for="auto_model">Model <abbr title="required">*</abbr></label><select class="js_model_id"
                                name="model_type_id" id="auto_model_id">
                                <option value="">Select</option>
                                @foreach ($models as $model)
                                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_gear"><label class="select required control-label"
                                for="auto_gear_id">Gear <abbr title="required">*</abbr></label><select
                                class="select required form-control" name="transmission_id" id="auto_gear_id">
                                <option>Select</option>
                                @foreach ($transmissions as $transmission)
                                    <option value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_category"><label class="select required control-label"
                                for="auto_category_id">Ban <abbr title="required">*</abbr></label><select
                                class="select required form-control" name="ban_id" id="auto_category_id">
                                <option>Select</option>
                                @foreach ($bans as $ban)
                                    <option value="{{ $ban->id }}">{{ $ban->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_transmission"><label class="select required control-label"
                                for="auto_transmission_id">Transmission<abbr title="required">*</abbr></label><select
                                class="select required form-control" name="damage_id" id="auto_transmission_id">
                                <option>Select</option>
                                @foreach ($damages as $damage)
                                    <option value="{{ $damage->id }}">{{ $damage->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="integer required control-label"
                            for="auto_mileage">Millage<abbr title="required">*</abbr></label>
                        <input data-number="true" class="string required form-control" type="text" name="odometer_km">
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_reg_year"><label class="select required control-label"
                                for="auto_reg_year">İl <abbr title="required">*</abbr></label><select
                                class="select required form-control" name="year" id="auto_reg_year">
                                <option>Select</option>
                                @foreach ($years as $year)
                                    <option value="{{ $year->year }}">{{ $year->year }}</option>
                                @endforeach
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_color"><label class="select required control-label"
                                for="auto_color_id">Color <abbr title="required">*</abbr></label><select
                                class="select required form-control" name="cylinder_id" id="auto_color_id">
                                <option>Select</option>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_engine_volume"><label class="select required control-label"
                                for="auto_engine_volume">Engine Volume,
                                sm<sup>3</sup> <abbr title="required">*</abbr></label><select
                                class="select required form-control" name="engine_volume_id" id="auto_engine_volume">
                                <option>Select</option>
                                @foreach ($enginevolumes as $enginevolume)
                                    <option value="{{ $enginevolume->id }}">{{ $enginevolume->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="string required control-label"
                            for="auto_price">Price <abbr title="required">*</abbr></label>
                        <div class="tz-d-inline"><input data-number="true" class="string required form-control"
                                type="text" name="price" id="auto_price">
                            <div class="tooltips">
                                <div class="tooltips-body">The full price of the car must be entered in the price section.
                                    Please enter the price in USD.</div>
                            </div>
                            <div class="input radio_buttons optional auto_currency">
                                <input type="hidden" name="ro_id" value="" autocomplete="off"><span
                                    class="radio">
                                    <input class="radio_buttons optional form-control" type="radio" value="1"
                                        checked name="ro_id" id="auto_currency_azn"><label
                                        class="collection_radio_buttons" for="auto_currency_azn">USD</label></span>

                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input string required auto_power"><label class="string required control-label"
                                for="auto_power">Power (A.g) <abbr title="required">*</abbr></label><input
                                data-number="true" class="string required form-control" type="text" name="engine_v"
                                id="auto_power"></div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent">
                    {{-- <div class="left-side">
                        <div class="input select optional auto_prior_owners_count"><label
                                class="select optional control-label" for="auto_prior_owners_count">Neçənci
                                sahibisiniz?</label><select class="select optional form-control"
                                name="auto[prior_owners_count]" id="auto_prior_owners_count">
                                <option value="" label=" "></option>
                                <option value="1">Birinci</option>
                                <option value="2">İkinci</option>
                                <option value="3">Üçüncü</option>
                                <option value="4">Dördüncü və ya daha çox</option>
                            </select></div>
                    </div> --}}
                    <div class="left-side">
                        <div class="input select optional auto_market"><label class="select optional control-label"
                                for="auto_market_id">Markets</label><select class="select optional form-control"
                                name="market_id" id="auto_market_id">
                                <option>Select</option>
                                @foreach ($markets as $market)
                                    <option value="{{ $market->id }}">{{ $market->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select optional auto_market"><label class="select optional control-label"
                                for="auto_market_id">City</label><select class="select optional form-control"
                                name="region_id" id="auto_market_id">
                                <option>Select</option>
                                @foreach ($regions as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach

                            </select></div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent new-product-i--inline"><label>Condition</label>
                    <div class="boolean boolean--top">
                        <div class="new-product-i__blk-container tz-d-flex tz-align-center">
                            <div class="new-product-i__blk"><input name="auto[crashed]" type="hidden" value="0"
                                    autocomplete="off"><input type="checkbox" value="1" name="auto[crashed]"
                                    id="auto_crashed"><label for="auto_crashed"><span class="title">Has a
                                        seed</span><span class="description">One or more parts have been replaced or
                                        repaired.</span></label></div>
                            <div class="new-product-i__blk"><input name="auto[painted]" type="hidden" value="0"
                                    autocomplete="off"><input type="checkbox" value="1" name="auto[painted]"
                                    id="auto_painted"><label for="auto_painted"><span class="title">Has been
                                        repainted</span><span class="description">One or more parts have been repainted or
                                        cosmetic work has been done</span></label></div>
                            <div class="new-product-i__blk"><input name="auto[for_spare_parts]" type="hidden"
                                    value="0" autocomplete="off"><input type="checkbox" value="1"
                                    name="auto[for_spare_parts]" id="auto_for_spare_parts"><label
                                    for="auto_for_spare_parts"><span class="title">Damaged or for spare parts</span><span
                                        class="description">Needs repair or is completely unusable.</span></label></div>
                        </div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent new-product-i--inline"><label
                        class="integer optional control-label" for="auto_seats_count">Of Passenger</label>
                    <div class="boolean">
                        <input type="hidden" name="of_passenger" value="" autocomplete="off"><span
                            class="radio"><input class="radio_buttons optional form-control" type="radio"
                                value="1" name="of_passenger" id="auto_seats_count_1"><label
                                class="collection_radio_buttons" for="auto_seats_count_1">1</label></span><span
                            class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="2"
                                name="of_passenger" id="auto_seats_count_2"><label class="collection_radio_buttons"
                                for="auto_seats_count_2">2</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="3"
                                name="of_passenger" id="auto_seats_count_3"><label class="collection_radio_buttons"
                                for="auto_seats_count_3">3</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="4"
                                name="of_passenger" id="auto_seats_count_4"><label class="collection_radio_buttons"
                                for="auto_seats_count_4">4</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="5"
                                name="of_passenger" id="auto_seats_count_5"><label class="collection_radio_buttons"
                                for="auto_seats_count_5">5</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="6"
                                name="of_passenger" id="auto_seats_count_6"><label class="collection_radio_buttons"
                                for="auto_seats_count_6">6</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="7"
                                name="of_passenger" id="auto_seats_count_7"><label class="collection_radio_buttons"
                                for="auto_seats_count_7">7</label></span><span class="radio">
                            <input class="radio_buttons optional form-control" type="radio" value="8"
                                name="of_passenger" id="auto_seats_count_8"><label class="collection_radio_buttons"
                                for="auto_seats_count_8">8+</label></span><span class="radio">
                            <input checked="" class="radio_buttons" id="auto_seats_count_0" name="of_passenger"
                                type="radio" value=""><label class="collection_radio_buttons"
                                for="auto_seats_count_0">Do not mention</label></span>
                    </div>
                </div>


                <div class="new-product-i new-product-i--large--indent new-product-i--uppercase">
                    <div class="input string optional auto_vin"><label for="auto_vin">VIN-code</label><input
                            class="string optional form-control" maxlength="17" size="17" type="text"
                            name="vincode" id="auto_vin">
                        <div class="new-product-i__hint-container">
                            <div class="tz-hint-btn">Where can the VIN code be found?</div>
                            <div class="tz-hint">
                                <div class="tz-hint__title">Where can the VIN code be found?</div><img alt=""
                                    src="{{ asset('assets/img/vinfront.jpg') }}">
                                <div class="tz-hint__info">On the front side of the vehicle registration certificate
                                    (technical passport).</div><img alt=""
                                    src="{{ asset('assets/img/vinback.jpg') }}">
                                <div class="tz-hint__info">On the back side of the new generation registration certificate.
                                </div>
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
                                <label>Additional information</label>
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

                <div class="input check_boxes optional auto_extras"><label class="check_boxes optional control-label">Car
                        Equipment</label>
                    <input type="hidden" name="auto[extra_ids][]" value="" autocomplete="off">

                    <div style="display: flex; gap:20px;">
                        @foreach ($higlits as $highlight)
                            {{-- <div class="fs-5" style="margin-top:15px">
                                        <label for="status{{$highlight->id}}" class="form-label">{{$highlight->name}}</label>
                                        <input name="car_equipment[]" class="form-check-input" type="checkbox" value="{{$highlight->id}}" id="status{{$highlight->id}}"
                                            {{ isset($model) && is_array(json_decode($model->car_equipment, true)) && in_array($highlight->id, json_decode($model->car_equipment, true)) ? 'checked' : '' }}>
                                    </div> --}}
                            <span class="checkbox"> <input class="check_boxes optional form-control" type="checkbox"
                                    value="{{ $highlight->id }}" name="car_equipment[]"
                                    id="auto_extra_ids_{{ $highlight->id }}"><label class="collection_check_boxes"
                                    for="auto_extra_ids_{{ $highlight->id }}">{{ $highlight->name }}</label></span>
                        @endforeach
                    </div>


                </div>
                <div class="input pond pond-grid" data-endpoint="" data-name="gallery[photo_ids][]"
                    data-target-format=""><label for="" class="string optional control-label">Images</label>
                    <div class="pond-inner">
                        <div class="pond-notice-container">
                            <div class="pond-notice pond-notice--grey pond-notice--first">
                                <div class="pond-notice__title pond-notice__title--red">It is forbidden!</div>
                                <div class="pond-notice__text">Screenshots, framed images, and screen pictures.</div>
                            </div>

                        </div>

                        <div class="pond-message"></div>
                        <div class="pond-img-list ui-sortable ui-sortable-disabled">


                            <div class="pond-img-card js-pond-img-card pond-img-card--front" id="imageUpload">
                                <span>Main image</span>
                                <input type="file" name="car_image" id="carImageInput">
                                <img id="previewImage" style="display: none; width: 100%;" />
                            </div>


                                <input type="file" name="carimages[]" id="">
                                <div class="pond-img-card js-pond-img-card pond-img-card--front" id="imageUpload">
                                    <span>Back image</span>
                                    <input type="file" name="car_image" id="carImageInput">
                                    <img id="previewImage" style="display: none; width: 100%;" />
                                </div>
                                <div class="pond-img-card js-pond-img-card pond-img-card--front" id="imageUpload">
                                    <span>Main image</span>
                                    <input type="file" name="car_image" id="carImageInput">
                                    <img id="previewImage" style="display: none; width: 100%;" />
                                </div>

                                <label class="pond-new-img-button pond-new-img"><span class="icon"></span><span
                                        class="text text--default">Şəkil əlavə etmək</span>





                            <span class="text text--short">Əlavə et</span></label>
                        </div>
                    </div>
                    <script id="pond_img_template" type="text/html"><div class="pond-img"><div class="pond-img-thumb-container"></div><div class="pond-img-actions"><a class="pond-img-delete" href="#" title="Silmək"></a></div></div></script>
                </div>


                <div class="new-product-i">
                    <div class="left-side seller-information">


                        <button name="button" type="submit" class="submit-button" data-disable-with="save...">Post an
                            add</button>
                    </div>
                    <div class="right-side"></div>
                </div>
                <div class="new-product--confirm-rules">
                    By posting an ad, you confirm that you agree to autobuychina.com's
                    <a target="_blank" href="#">User Agreement</a>
                    and <a target="_blank" href="#">Rules</a>.
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('imageUpload').onclick = function() {
            document.getElementById('carImageInput').click(); // Input'u tıkla
        };

        document.getElementById('carImageInput').onchange = function(event) {
            const file = event.target.files[0]; // Seçilen dosyayı al
            if (file) {
                const reader = new FileReader(); // Dosya okuyucu oluştur
                reader.onload = function(e) {
                    const previewImage = document.getElementById('previewImage');
                    previewImage.src = e.target.result; // Seçilen resmi göster
                    previewImage.style.display = 'block'; // Resmi görünür hale getir
                };
                reader.readAsDataURL(file); // Dosyayı oku
            }
        };


    </script>
@endsection
