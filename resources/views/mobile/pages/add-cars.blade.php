@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="body-inner" style="padding-top: 61px;">
        <div class="header js-header is-sticky-header" style="top: -61px;">
            <div class="header__nav">
                <div class="header__nav-left"><span class="header__nav-btn--back js-header-back-btn"
                                                    data-back-to-url="https://turbo.az/profile"></span></div>
                <div class="header__nav-title"><h1>Yeni elan</h1></div>
                <div class="header__nav-right"></div>
            </div>
        </div>
        <div class="content">
            <div class="new-auto">
                <div class="limits-container tz-form__blk">
                    <div class="limits limits--current-step limits--limit">
                        <div class="limits--description">
                            <div class="text-success">Siz <span class="phone-num">(050) 660-34-04</span> nömrəsindən
                                elan yerləşdirirsiniz
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tz-form__divider"></div>
                <form class="simple_form new-product-form product-form js-product-form js-filter-form tz-form"
                      id="new_auto"
                      data-auth-url="https://hello.turbo.az/?return_to=aHR0cHM6Ly90dXJiby5hei9hdXRvcy9uZXc="
                      data-advanced-select="true" novalidate="novalidate" enctype="multipart/form-data" action="/autos"
                      accept-charset="UTF-8" data-remote="true" method="post">
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--img js-select-category-open" data-open="auto_make_id"
                             data-reset="true">
                            <div class="tz-form__group-img js-make-logo-container"><img
                                    src="https://turbo.azstatic.com/assets/mobile/icon-make--grey-e8ba093a9424dd0c7f93b5104c401938cb6e3ec4839a463fe35fac41018438f2.svg">
                            </div>
                            <input class="tz-form__group-input" placeholder=" " readonly="" type="text" value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_make_id">Marka <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden js_make_id"
                                data-models-url="https://turbo.az/api/v2/makes/:id/models" name="auto[make_id]"
                                id="auto_make_id">
                                <option value="" label=" "></option>
                                <option value="280">Abarth</option>
                                <option value="232">ABM</option>
                                <option value="479">AC Cars</option>
                                <option value="250">ACG Cars</option>
                                <option value="28">Acura</option>
                                <option value="480">Adler</option>
                                <option value="481">Aiways</option>
                                <option value="641">Aixam</option>
                                <option value="30">Alfa Romeo</option>
                                <option value="254">Alke</option>
                                <option value="482">Alpine</option>
                                <option value="639">AM General</option>
                                <option value="687">Ambertruck</option>
                                <option value="267">AMC</option>
                                <option value="483">Apal</option>

                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                        <div
                            class="toggle-models js-toggle-models tz-form__group tz-form__group--bordered--top js-select-category-open"
                            data-open="auto_model_id"><input class="tz-form__group-input" placeholder=" " readonly=""
                                                             type="text"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_model">Model <abbr title="required">*</abbr></label><select
                                class="is-hidden js-select-model js_model_id" name="auto[model_id]" id="auto_model_id">
                                <option value="">Seçin</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk">
                        <div class="input pond pond-grid" data-endpoint="https://photos.turbo.az/pond?lang=az"
                             data-name="gallery[photo_ids][]" data-target-format="">
                            <div class="pond-inner">
                                <div class="pond-notice-container">
                                    <div class="pond-notice pond-notice--grey pond-notice--first">
                                        <div class="pond-notice__title pond-notice__title--red">Qadağandır!</div>
                                        <div class="pond-notice__text">Skrinşotlar, çərçivəli şəkillər və ekran
                                            şəkilləri.
                                        </div>
                                    </div>
                                    <div class="pond-notice pond-notice--yellow pond-notice--second">
                                        <div class="pond-notice__title">Şəkillərinizdə bu hissələrin tam göründüyündən
                                            əmin olun:
                                        </div>
                                        <div class="pond-notice__text">sükan, ön panel, faralar və arxa işıqlar.</div>
                                    </div>
                                </div>
                                <input accept="image/*" class="pond-new-img-field" multiple="true" name="images[]"
                                       type="file">
                                <div class="pond-message"></div>
                                <div class="pond-img-list ui-sortable ui-sortable-disabled">
                                    <div class="pond-img-card js-pond-img-card pond-img-card--front">
                                        <span>Ön görünüşü</span></div>
                                    <div class="pond-img-card js-pond-img-card pond-img-card--back">
                                        <span>Arxa görünüşü</span></div>
                                    <div class="pond-img-card js-pond-img-card pond-img-card--dashboard">
                                        <span>Ön paneli</span></div>
                                    <label class="pond-new-img-button pond-new-img"><span class="icon"></span><span
                                            class="text text--default">Şəkil əlavə etmək</span><span
                                            class="text text--short">Əlavə et</span></label></div>
                            </div>
                            <script id="pond_img_template" type="text/html">
                                <div class="pond-img">
                                    <div class="pond-img-thumb-container"></div>
                                    <div class="pond-img-actions"><a class="pond-img-delete" href="#"
                                                                     title="Silmək"></a></div>
                                </div></script>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                             data-open="auto_category_id"><input class="tz-form__group-input" placeholder=" "
                                                                 readonly="" type="text"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_category">Ban növü <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="auto[category_id]"
                                id="auto_category_id">
                                <option value="" label=" "></option>
                                <option value="9">Avtobus</option>
                                <option value="16">Dartqı</option>
                                <option value="61">Fastbek</option>
                                <option value="62">Fayton</option>
                                <option value="14">Furqon</option>
                                <option value="63">Hetçbek, 3 qapı</option>
                                <option value="64">Hetçbek, 4 qapı</option>
                                <option value="2">Hetçbek, 5 qapı</option>
                                <option value="11">Kabriolet</option>
                                <option value="26">Karvan</option>
                                <option value="65">Kompakt-Van</option>
                                <option value="3">Kupe</option>
                                <option value="25">Kvadrosikl</option>
                                <option value="28">Liftbek</option>
                                <option value="66">Limuzin</option>
                                <option value="7">Mikroavtobus</option>
                                <option value="67">Mikrovan</option>
                                <option value="5">Minivan</option>
                                <option value="27">Moped</option>
                                <option value="20">Motosiklet</option>

                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group-container">
                            <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                    class="string required form-control tz-form__group-input" data-number="true"
                                    placeholder=" " type="text" name="auto[mileage]" id="auto_mileage"><label
                                    class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                    for="auto_mileage">Yürüş <abbr title="required">*</abbr></label><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                <div class="tz-form__group-divider"></div>
                            </div>
                            <div
                                class="tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                data-open="auto_mileage_unit"><select name="auto[mileage_unit]" id="auto_mileage_unit">
                                    <option selected="selected" value="km">km</option>
                                    <option value="mile">mi</option>
                                </select>
                                <div class="tz-form__short-btn"></div>
                            </div>
                            <span class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span></div>
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                             data-open="auto_reg_year"><input class="tz-form__group-input" placeholder=" " readonly=""
                                                              type="text" value=""><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_reg_year">İl <abbr title="required">*</abbr></label><select wrapper="false"
                                                                                                      label="false"
                                                                                                      class="select required form-control is-hidden"
                                                                                                      name="auto[reg_year]"
                                                                                                      id="auto_reg_year">
                                <option value="" label=" "></option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                             data-open="auto_engine_volume"><input class="tz-form__group-input" placeholder=" "
                                                                   readonly="" type="number" value=""><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_engine_volume">Mühərrikin həcmi, sm<sup>3</sup> <abbr
                                    title="required">*</abbr></label><select wrapper="false"
                                                                             class="select required form-control is-hidden"
                                                                             label="false" name="auto[engine_volume]"
                                                                             id="auto_engine_volume">
                                <option value="" label=" "></option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="250">250</option>
                                <option value="300">300</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string required form-control tz-form__group-input" data-number="true"
                                placeholder=" " maxlength="4" size="4" type="text" name="auto[power]"
                                id="auto_power"><label
                                class="integer required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_power">Mühərrikin gücü, a.g. <abbr title="required">*</abbr></label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group js-select-category-open" data-open="auto_color_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text" value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_color">Rəng <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="auto[color_id]" id="auto_color_id">
                                <option value="" label=" "></option>
                                <option value="5">Qara</option>
                                <option value="27">Yaş Asfalt</option>
                                <option value="7">Boz</option>
                                <option value="8">Gümüşü</option>
                                <option value="2">Ağ</option>
                                <option value="12">Bej</option>
                                <option value="35">Tünd qırmızı</option>
                                <option value="1">Qırmızı</option>
                                <option value="21">Çəhrayı</option>
                                <option value="15">Narıncı</option>
                                <option value="14">Qızılı</option>
                                <option value="6">Sarı</option>
                                <option value="4">Yaşıl</option>
                                <option value="57">Açıq yaşıl</option>
                                <option value="9">Mavi</option>
                                <option value="3">Göy</option>
                                <option value="11">Bənövşəyi</option>
                                <option value="10">Qəhvəyi</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group js-select-category-open" data-open="auto_market_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text" value=""><label
                                class="string optional control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_market">Hansı bazar üçün yığılıb</label><select
                                class="select optional form-control is-hidden" name="auto[market_id]"
                                id="auto_market_id">
                                <option value="" label=" "></option>
                                <option value="1">Amerika</option>
                                <option value="2">Avropa</option>
                                <option value="42">Çin</option>
                                <option value="9">Digər</option>
                                <option value="6">Dubay</option>
                                <option value="5">Koreya</option>
                                <option value="7">Rəsmi diler</option>
                                <option value="8">Rusiya</option>
                                <option value="4">Yaponiya</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Yanacaq növü<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[fuel_type_id]" id="auto_fuel_type_id_1"><label
                                    class="collection_radio_buttons"
                                    for="auto_fuel_type_id_1">Benzin</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="2"
                                    name="auto[fuel_type_id]" id="auto_fuel_type_id_2"><label
                                    class="collection_radio_buttons" for="auto_fuel_type_id_2">Dizel</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="3"
                                                     name="auto[fuel_type_id]" id="auto_fuel_type_id_3"><label
                                    class="collection_radio_buttons" for="auto_fuel_type_id_3">Qaz</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="4"
                                                     name="auto[fuel_type_id]" id="auto_fuel_type_id_4"><label
                                    class="collection_radio_buttons"
                                    for="auto_fuel_type_id_4">Elektro</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="5"
                                    name="auto[fuel_type_id]" id="auto_fuel_type_id_5"><label
                                    class="collection_radio_buttons"
                                    for="auto_fuel_type_id_5">Hibrid</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="6"
                                    name="auto[fuel_type_id]" id="auto_fuel_type_id_6"><label
                                    class="collection_radio_buttons"
                                    for="auto_fuel_type_id_6">Plug-in Hibrid</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Ötürücü<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[gear_id]" id="auto_gear_id_1"><label class="collection_radio_buttons"
                                                                                    for="auto_gear_id_1">Arxa</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="2"
                                                     name="auto[gear_id]" id="auto_gear_id_2"><label
                                    class="collection_radio_buttons" for="auto_gear_id_2">Ön</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="3"
                                                     name="auto[gear_id]" id="auto_gear_id_3"><label
                                    class="collection_radio_buttons" for="auto_gear_id_3">Tam</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Sürətlər qutusu<abbr> *</abbr></div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="2"
                                    name="auto[transmission_id]" id="auto_transmission_id_2"><label
                                    class="collection_radio_buttons" for="auto_transmission_id_2">Avtomat</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="4"
                                                     name="auto[transmission_id]" id="auto_transmission_id_4"><label
                                    class="collection_radio_buttons"
                                    for="auto_transmission_id_4">Variator</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[transmission_id]" id="auto_transmission_id_1"><label
                                    class="collection_radio_buttons"
                                    for="auto_transmission_id_1">Mexaniki</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="3"
                                    name="auto[transmission_id]" id="auto_transmission_id_3"><label
                                    class="collection_radio_buttons"
                                    for="auto_transmission_id_3">Robot</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="6"
                                    name="auto[transmission_id]" id="auto_transmission_id_6"><label
                                    class="collection_radio_buttons"
                                    for="auto_transmission_id_6">Reduktor</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Yerlərin sayı</div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[seats_count]" id="auto_seats_count_1"><label
                                    class="collection_radio_buttons" for="auto_seats_count_1">1</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="2"
                                                     name="auto[seats_count]" id="auto_seats_count_2"><label
                                    class="collection_radio_buttons" for="auto_seats_count_2">2</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="3"
                                                     name="auto[seats_count]" id="auto_seats_count_3"><label
                                    class="collection_radio_buttons" for="auto_seats_count_3">3</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="4"
                                                     name="auto[seats_count]" id="auto_seats_count_4"><label
                                    class="collection_radio_buttons" for="auto_seats_count_4">4</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="5"
                                                     name="auto[seats_count]" id="auto_seats_count_5"><label
                                    class="collection_radio_buttons" for="auto_seats_count_5">5</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="6"
                                                     name="auto[seats_count]" id="auto_seats_count_6"><label
                                    class="collection_radio_buttons" for="auto_seats_count_6">6</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="7"
                                                     name="auto[seats_count]" id="auto_seats_count_7"><label
                                    class="collection_radio_buttons" for="auto_seats_count_7">7</label></span><span
                                class="radio"><input class="radio_buttons optional form-control" type="radio" value="8"
                                                     name="auto[seats_count]" id="auto_seats_count_8"><label
                                    class="collection_radio_buttons" for="auto_seats_count_8">8+</label></span>
                            <div><span class="radio"><input checked="" class="radio_buttons" id="auto_seats_count_0"
                                                            name="auto[seats_count]" type="radio" value=""><label
                                        class="collection_radio_buttons" for="auto_seats_count_0">Qeyd olunmasın</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Avtomobilin təchizatı</div>
                        <div class="tz-form__group"><span><input class="tz-form__check-input" type="checkbox" value="4"
                                                                 name="auto[extra_ids][]" id="auto_extra_ids_4"><label
                                    class="tz-form__check-label tz-text tz-text--primary" for="auto_extra_ids_4">Yüngül lehimli disklər</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="5" name="auto[extra_ids][]"
                                    id="auto_extra_ids_5"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                 for="auto_extra_ids_5">ABS</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="7" name="auto[extra_ids][]"
                                    id="auto_extra_ids_7"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                 for="auto_extra_ids_7">Lyuk</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="8" name="auto[extra_ids][]"
                                    id="auto_extra_ids_8"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                 for="auto_extra_ids_8">Yağış sensoru</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="9" name="auto[extra_ids][]"
                                    id="auto_extra_ids_9"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                 for="auto_extra_ids_9">Mərkəzi qapanma</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="10" name="auto[extra_ids][]"
                                    id="auto_extra_ids_10"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_10">Park radarı</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="11" name="auto[extra_ids][]"
                                    id="auto_extra_ids_11"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_11">Kondisioner</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="12" name="auto[extra_ids][]"
                                    id="auto_extra_ids_12"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_12">Oturacaqların isidilməsi</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="13" name="auto[extra_ids][]"
                                    id="auto_extra_ids_13"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_13">Dəri salon</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="14" name="auto[extra_ids][]"
                                    id="auto_extra_ids_14"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_14">Ksenon lampalar</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="15" name="auto[extra_ids][]"
                                    id="auto_extra_ids_15"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_15">Arxa görüntü kamerası</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="16" name="auto[extra_ids][]"
                                    id="auto_extra_ids_16"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_16">Yan pərdələr</label></span><span><input
                                    class="tz-form__check-input" type="checkbox" value="17" name="auto[extra_ids][]"
                                    id="auto_extra_ids_17"><label class="tz-form__check-label tz-text tz-text--primary"
                                                                  for="auto_extra_ids_17">Oturacaqların ventilyasiyası</label></span>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Neçənci sahibisiniz?</div>
                        <div class="tz-form__group tz-form__group--radio"><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="1"
                                    name="auto[prior_owners_count]" id="auto_prior_owners_count_1"><label
                                    class="collection_radio_buttons"
                                    for="auto_prior_owners_count_1">Birinci</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="2"
                                    name="auto[prior_owners_count]" id="auto_prior_owners_count_2"><label
                                    class="collection_radio_buttons"
                                    for="auto_prior_owners_count_2">İkinci</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="3"
                                    name="auto[prior_owners_count]" id="auto_prior_owners_count_3"><label
                                    class="collection_radio_buttons"
                                    for="auto_prior_owners_count_3">Üçüncü</label></span><span class="radio"><input
                                    class="radio_buttons optional form-control" type="radio" value="4"
                                    name="auto[prior_owners_count]" id="auto_prior_owners_count_4"><label
                                    class="collection_radio_buttons" for="auto_prior_owners_count_4">Dördüncü və ya daha çox</label></span><span
                                class="radio"><input checked="" class="radio_buttons" id="auto_prior_owners_count_0"
                                                     name="auto[prior_owners_count]" type="radio" value=""><label
                                    class="collection_radio_buttons"
                                    for="auto_prior_owners_count_0">Qeyd olunmasın</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__switch tz-form__group"><label for="auto_crashed">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="auto[crashed]" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="auto[crashed]" id="auto_crashed">
                                    <div class="tz-form__switch-text">Vuruğu var</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">Bir və ya bir neçə detalı dəyişdirilib və ya
                                    təmir olunub.
                                </div>
                            </label>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__switch tz-form__group"><label for="auto_painted">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="auto[painted]" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="auto[painted]" id="auto_painted">
                                    <div class="tz-form__switch-text">Rənglənib</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">Bir və ya bir neçə detalı rənglənib və ya
                                    kosmetik işlər görülüb.
                                </div>
                            </label>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__switch tz-form__group"><label for="auto_for_spare_parts">
                                <div class="tz-form__switch-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="auto[for_spare_parts]" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="auto[for_spare_parts]" id="auto_for_spare_parts">
                                    <div class="tz-form__switch-text">Qəzalı və ya ehtiyat hissələr üçün</div>
                                    <div class="tz-form__switch-slider"></div>
                                </div>
                                <div class="tz-form__switch-description">Təmirə ehtiyacı var və ya ümumiyyətlə yararsız
                                    vəziyyətdədir.
                                </div>
                            </label></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--textarea"><label
                                class="text optional control-label tz-form__group-label tz-form__group-label--textarea"
                                for="auto_description">Əlavə məlumat</label><textarea
                                class="text optional form-control tz-form__group-textarea"
                                placeholder="Üstünlüklərini və vacib məqamları qeyd edin" name="auto[description]"
                                id="auto_description"></textarea></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string optional form-control tz-form__group-input tz-form__group-input--uppercase"
                                placeholder=" " maxlength="17" size="17" type="text" name="auto[vin]"
                                id="auto_vin"><label class="tz-form__group-label tz-form__group-label--select"
                                                     for="auto_vin">VIN-kod</label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group-hint js-select-category-open" data-open="hint">VIN-kodu haradan
                            tapmaq olar?
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group-container">
                            <div class="tz-form__group tz-form__group--bordered--bottom tz-form__group--price"><input
                                    class="string required form-control tz-form__group-input" data-number="true"
                                    placeholder=" " type="text" name="auto[price]" id="auto_price"><label
                                    class="string required control-label tz-form__group-label tz-form__group-label--select"
                                    for="auto_price">Qiymət <abbr title="required">*</abbr></label><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                <div class="tz-form__group-divider"></div>
                            </div>
                            <div
                                class="tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open"
                                data-open="auto_currency"><select name="auto[currency]" id="auto_currency">
                                    <option value="azn">AZN</option>
                                    <option value="usd">USD</option>
                                    <option value="eur">EUR</option>
                                </select>
                                <div class="tz-form__short-btn"></div>
                            </div>
                        </div>
                        <div class="tz-form__group">
                            <div class="tz-form__group-list"><input name="auto[loan]" type="hidden" value="0"
                                                                    autocomplete="off"><input
                                    class="boolean optional form-control" type="checkbox" value="1" name="auto[loan]"
                                    id="auto_loan"><label class="boolean optional control-label" for="auto_loan">Kreditlə</label><input
                                    name="auto[barter]" type="hidden" value="0" autocomplete="off"><input
                                    class="boolean optional form-control" type="checkbox" value="1" name="auto[barter]"
                                    id="auto_barter"><label class="boolean optional control-label" for="auto_barter">Barter
                                    mümkündür</label></div>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group js-select-category-open" data-open="auto_region_id"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text" value=""><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_region">Şəhər <abbr title="required">*</abbr></label><select
                                class="select required form-control is-hidden" name="auto[region_id]"
                                id="auto_region_id">
                                <option value="62">Xaçmaz</option>
                                <option value="61">Xankəndi</option>
                                <option value="67">Xırdalan</option>
                                <option value="66">Xızı</option>
                                <option value="64">Xocalı</option>
                                <option value="63">Xocavənd</option>
                                <option value="65">Xudat</option>
                                <option value="76">Yardımlı</option>
                                <option value="28">Yevlax</option>
                                <option value="29">Zaqatala</option>
                                <option value="30">Zəngilan</option>
                                <option value="31">Zərdab</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string required form-control tz-form__group-input" placeholder=" " type="text"
                                name="auto[seller_name]" id="auto_seller_name"><label
                                class="string required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_seller_name">Adınız <abbr title="required">*</abbr></label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                            <div class="tz-form__group-divider"></div>
                        </div>
                        <div class="tz-form__group tz-form__group--bordered--bottom"><input
                                class="string email required form-control tz-form__group-input" placeholder=" "
                                type="email" name="auto[seller_email]" id="auto_seller_email"><label
                                class="email required control-label tz-form__group-label tz-form__group-label--select"
                                for="auto_seller_email">E-mail <abbr title="required">*</abbr></label><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span></div>
                        <input name="auto[phones][]" autocomplete="off" type="hidden" value="(050) 660-34-04"
                               id="auto_phones"></div>
                    <div class="tz-container tz-form__bottom">
                        <button name="button" type="submit" data-disable-with=""
                                class="tz-btn tz-btn--primary tz-btn--full">Elan yerləşdir
                        </button>
                        <div class="new-product--confirm-rules">Elan yerləşdirərək, siz Turbo.az-ın <a target="_blank"
                                                                                                       href="/pages/terms-and-conditions">İstifadəçi
                                razılaşması</a> və <a target="_blank" href="/pages/rules">Qaydaları</a> ilə razı
                            olduğunuzu təsdiq edirsiniz
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__blk">
                <div class="footer__app-promotion"><a class="footer__app-store-btn js-footer-app-link"
                                                      data-stat="turboaz-app-footer-btn"
                                                      href="https://play.google.com/store/apps/details?id=org.turboaz.android&amp;hl=az"><img
                            alt=""
                            src="https://turbo.azstatic.com/assets/application/footer/turbo-mini-logo-f17279c2912d4cfe3a8996f9c9da67295192e8b0a941db4445d331c919b4a458.svg"></a>
                    <div class="footer__app-promotion-info"><a data-stat="turboaz-app-footer-btn"
                                                               class="footer__app-promotion-link js-footer-app-link"
                                                               href="https://play.google.com/store/apps/details?id=org.turboaz.android&amp;hl=az">Turbo.az</a><span>Hər şey bir tətbiqdə!</span>
                    </div>
                </div>
            </div>
            <div class="footer__blk"><a target="_blank" class="footer__link footer__link--pages" href="/pages/rules">Qaydalar</a><a
                    target="_blank" class="footer__link footer__link--pages" href="/pages/terms-and-conditions">İstifadəçi
                    razılaşması</a><a target="_blank" class="footer__link footer__link--pages"
                                      data-stat="advertising-landing-footer-btn"
                                      href="https://ads.digit.az/advertising?utm_source=turboaz&amp;utm_medium=referral&amp;utm_campaign=turboaz_referral&amp;utm_content=footer">Reklam
                    yerləşdirin</a><a target="_blank" class="footer__link footer__link--pages"
                                      href="/pages/order-recommendations">Sifarişli avtomobil alan alıcı üçün
                    tövsiyələr</a></div>
            <div class="footer__blk">
                <div class="footer__title">Dəstək xidməti</div>
                <a class="footer__link footer__link--contact" href="tel: +994125057755">(012) 505-77-55</a>
                <p class="footer__opening-hours">İş saatları — Həftə içi: 09:00-19:00 | Şənbə: 09:00-13:00</p><a
                    class="footer__link footer__link--social" href="mailto:turbo@turbo.az"><i
                        class="footer__link--social_icon footer__link--social_icon--email"></i></a><a target="_blank"
                                                                                                      class="footer__link footer__link--social"
                                                                                                      href="https://www.facebook.com/www.turbo.az"><i
                        class="footer__link--social_icon footer__link--social_icon--facebook"></i></a><a target="_blank"
                                                                                                         class="footer__link footer__link--social"
                                                                                                         href="https://www.instagram.com/turbo.az/"><i
                        class="footer__link--social_icon footer__link--social_icon--instagram"></i></a></div>
            <div class="footer__blk"><a class="footer__link footer__link--inline" rel="nofollow"
                                        href="/autos/new?desktop_site=1">Tam versiya</a><a
                    class="footer__link footer__link--inline js-lang-switch" href="https://ru.turbo.az/autos/new">Русский
                    язык</a>
                <div class="footer__info">Saytın Administrasiyası reklam bannerlərinin və yerləşdirilmiş elanların
                    məzmununa görə məsuliyyət daşımır.
                </div>
                <div class="footer__copyright">© 2006-2024 Digital Classifieds MMC. VÖEN: 1405631661</div>
            </div>
        </footer>
    </div>
@endsection
