@extends('front.layout.layout')
@section('front_content')
    <div class="main-container ads">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">ELAN YERLƏŞDİRMƏK</h1>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                </div>
            </div>
        </div>
        <div class="new-product">
            <div class="limits-container">
                <div class="limits limits--current-step limits--limit">
                    <div class="limits--description">
                        <div class="text-success">Siz <span class="phone-num">(050) 660-34-04</span> nömrəsindən elan
                            yerləşdirirsiniz</div>
                    </div>
                </div>
            </div>
            <div class="form-header">
                <div class="new-product--notice">
                    <ul>
                        <li>Üç ay ərzində bir nəqliyyat vasitəsi yalnız bir dəfə pulsuz dərc oluna bilər.</li>
                        <li>Üç ay ərzində təkrar və ya oxşar elanlar (marka/model, rəng) ödənişlidir.</li>
                        <li>Elanınızı saytın ön sıralarında görmək üçün "İrəli çək" xidmətindən istifadə edin.</li>
                    </ul>
                </div>
            </div>
            <form class="simple_form product-form js-product-form" id="new_auto" data-auth-url="https://hello.turbo.az/?return_to=aHR0cHM6Ly90dXJiby5hei9hdXRvcy9uZXc=" novalidate="novalidate" enctype="multipart/form-data" action="/autos" accept-charset="UTF-8" data-remote="true" method="post">
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_make_id"><label class="string required control-label" for="auto_make_id">Marka <abbr title="required">*</abbr></label><select class="js_make_id" data-models-url="https://turbo.az/api/v2/makes/:id/models" name="auto[make_id]" id="auto_make_id">
                                <option value="">Seçin</option>
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
                                <option value="156">Aprilia</option>
                                <option value="484">Arcfox</option>
                                <option value="249">Arctic Cat</option>
                                <option value="273">Argo</option>
                                <option value="485">Ariel</option>
                                <option value="262">ARO</option>
                                <option value="178">Arora</option>
                                <option value="221">Ashok Leyland</option>
                                <option value="134">Asia</option>
                                <option value="86">Aston Martin</option>
                                <option value="268">ATV</option>
                                <option value="486">Auburn</option>
                                <option value="9">Audi</option>
                                <option value="487">Aurus</option>
                                <option value="488">Austin</option>
                                <option value="489">Austin Healey</option>
                                <option value="490">Autobianchi</option>
                                <option value="419">Avatr</option>
                                <option value="274">Avia</option>
                                <option value="491">Avtokam</option>
                                <option value="218">Baic</option>
                                <option value="327">Bajaj</option>
                                <option value="492">Baltijas Dzips</option>
                                <option value="679">Baojun</option>
                                <option value="174">Baotian</option>
                                <option value="493">Barkas</option>
                                <option value="226">BAW</option>
                                <option value="330">BAZ</option>
                                <option value="494">Bedford</option>
                                <option value="215">Belka</option>
                                <option value="642">Benda</option>
                                <option value="375">Benelli</option>
                                <option value="19">Bentley</option>
                                <option value="495">Bertone</option>
                                <option value="387">Bestune</option>
                                <option value="496">Bilenkin</option>
                                <option value="497">Bitter</option>
                                <option value="136">BMC</option>
                                <option value="3">BMW</option>
                                <option value="62">BMW Alpina</option>
                                <option value="498">Borgward</option>
                                <option value="499">Bremach</option>
                                <option value="92">Brilliance</option>

                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_fuel_type"><label class="select required control-label" for="auto_fuel_type_id">Yanacaq növü <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[fuel_type_id]" id="auto_fuel_type_id">
                                <option value="" label=" "></option>
                                <option value="1">Benzin</option>
                                <option value="2">Dizel</option>
                                <option value="3">Qaz</option>
                                <option value="4">Elektro</option>
                                <option value="5">Hibrid</option>
                                <option value="6">Plug-in Hibrid</option>
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_model"><label class="string required control-label" for="auto_model">Model <abbr title="required">*</abbr></label><select class="js_model_id" name="auto[model_id]" id="auto_model_id">
                                <option value="">Seçin</option>
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_gear"><label class="select required control-label" for="auto_gear_id">Ötürücü <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[gear_id]" id="auto_gear_id">
                                <option value="" label=" "></option>
                                <option value="1">Arxa</option>
                                <option value="2">Ön</option>
                                <option value="3">Tam</option>
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_category"><label class="select required control-label" for="auto_category_id">Ban növü <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[category_id]" id="auto_category_id">
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
                                <option value="68">Offroader / SUV, 3 qapı</option>
                                <option value="21">Offroader / SUV, 5 qapı</option>
                                <option value="69">Offroader / SUV, açıq</option>
                                <option value="70">Pikap, bir yarım kabin</option>
                                <option value="6">Pikap, ikiqat kabin</option>
                                <option value="71">Pikap, tək kabin</option>
                                <option value="22">Qolfkar</option>
                                <option value="8">Rodster</option>
                                <option value="1">Sedan</option>
                                <option value="73">Spidster</option>
                                <option value="72">SUV Kupe</option>
                                <option value="74">Tarqa</option>
                                <option value="75">Universal, 3 qapı</option>
                                <option value="4">Universal, 5 qapı</option>
                                <option value="19">Van</option>
                                <option value="13">Yük maşını</option>
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_transmission"><label class="select required control-label" for="auto_transmission_id">Sürətlər qutusu <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[transmission_id]" id="auto_transmission_id">
                                <option value="" label=" "></option>
                                <option value="2">Avtomat</option>
                                <option value="4">Variator</option>
                                <option value="1">Mexaniki</option>
                                <option value="3">Robot</option>
                                <option value="6">Reduktor</option>
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="integer required control-label" for="auto_mileage">Yürüş <abbr title="required">*</abbr></label>
                        <div class="tz-d-inline"><input data-number="true" class="string required form-control" type="text" name="auto[mileage]" id="auto_mileage">
                            <div class="input radio_buttons optional auto_mileage_unit"><input type="hidden" name="auto[mileage_unit]" value="" autocomplete="off"><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="km" checked="checked" name="auto[mileage_unit]" id="auto_mileage_unit_km"><label class="collection_radio_buttons" for="auto_mileage_unit_km">km</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="mile" name="auto[mileage_unit]" id="auto_mileage_unit_mile"><label class="collection_radio_buttons" for="auto_mileage_unit_mile">mi</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_reg_year"><label class="select required control-label" for="auto_reg_year">İl <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[reg_year]" id="auto_reg_year">
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
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>


                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_color"><label class="select required control-label" for="auto_color_id">Rəng <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[color_id]" id="auto_color_id">
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
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_engine_volume"><label class="select required control-label" for="auto_engine_volume">Mühərrikin həcmi,
                                sm<sup>3</sup> <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[engine_volume]" id="auto_engine_volume">
                                <option value="" label=" "></option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="250">250</option>
                                <option value="300">300</option>
                                <option value="350">350</option>
                                <option value="400">400</option>
                                <option value="450">450</option>
                                <option value="500">500</option>
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="string required control-label" for="auto_price">Qiymət <abbr title="required">*</abbr></label>
                        <div class="tz-d-inline"><input data-number="true" class="string required form-control" type="text" name="auto[price]" id="auto_price">
                            <div class="tooltips">
                                <div class="tooltips-body">Qiymət bölməsində maşının tam qiyməti yazılmalıdır. Kreditin
                                    ilkin ödəniş məbləği yalnız "Əlavə məlumat" bölməsində qeyd edilməlidir</div>
                            </div>
                            <div class="input radio_buttons optional auto_currency"><input type="hidden" name="auto[currency]" value="" autocomplete="off"><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="azn" name="auto[currency]" id="auto_currency_azn"><label class="collection_radio_buttons" for="auto_currency_azn">AZN</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="usd" name="auto[currency]" id="auto_currency_usd"><label class="collection_radio_buttons" for="auto_currency_usd">USD</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="eur" name="auto[currency]" id="auto_currency_eur"><label class="collection_radio_buttons" for="auto_currency_eur">EUR</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input string required auto_power"><label class="string required control-label" for="auto_power">Mühərrikin gücü, a.g. <abbr title="required">*</abbr></label><input data-number="true" class="string required form-control" type="text" name="auto[power]" id="auto_power"></div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent">
                    <div class="left-side">
                        <div class="input select optional auto_prior_owners_count"><label class="select optional control-label" for="auto_prior_owners_count">Neçənci
                                sahibisiniz?</label><select class="select optional form-control" name="auto[prior_owners_count]" id="auto_prior_owners_count">
                                <option value="" label=" "></option>
                                <option value="1">Birinci</option>
                                <option value="2">İkinci</option>
                                <option value="3">Üçüncü</option>
                                <option value="4">Dördüncü və ya daha çox</option>
                            </select></div>
                    </div>
                    <div class="right-side">
                        <div class="input select optional auto_market"><label class="select optional control-label" for="auto_market_id">Hansı bazar üçün yığılıb</label><select class="select optional form-control" name="auto[market_id]" id="auto_market_id">
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
                            </select></div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent new-product-i--inline"><label>Vəziyyəti</label>
                    <div class="boolean boolean--top">
                        <div class="new-product-i__blk-container tz-d-flex tz-align-center">
                            <div class="new-product-i__blk"><input name="auto[crashed]" type="hidden" value="0" autocomplete="off"><input type="checkbox" value="1" name="auto[crashed]" id="auto_crashed"><label for="auto_crashed"><span class="title">Vuruğu
                                        var</span><span class="description">Bir və ya bir neçə detalı dəyişdirilib və ya
                                        təmir olunub.</span></label></div>
                            <div class="new-product-i__blk"><input name="auto[painted]" type="hidden" value="0" autocomplete="off"><input type="checkbox" value="1" name="auto[painted]" id="auto_painted"><label for="auto_painted"><span class="title">Rənglənib</span><span class="description">Bir və ya bir neçə
                                        detalı rənglənib və ya kosmetik işlər görülüb.</span></label></div>
                            <div class="new-product-i__blk"><input name="auto[for_spare_parts]" type="hidden" value="0" autocomplete="off"><input type="checkbox" value="1" name="auto[for_spare_parts]" id="auto_for_spare_parts"><label for="auto_for_spare_parts"><span class="title">Qəzalı və ya ehtiyat hissələr üçün</span><span class="description">Təmirə ehtiyacı var və ya ümumiyyətlə yararsız
                                        vəziyyətdədir.</span></label></div>
                        </div>
                    </div>
                </div>
                <div class="new-product-i new-product-i--large--indent new-product-i--inline"><label class="integer optional control-label" for="auto_seats_count">Yerlərin sayı</label>
                    <div class="boolean"><input type="hidden" name="auto[seats_count]" value="" autocomplete="off"><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="1" name="auto[seats_count]" id="auto_seats_count_1"><label class="collection_radio_buttons" for="auto_seats_count_1">1</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="2" name="auto[seats_count]" id="auto_seats_count_2"><label class="collection_radio_buttons" for="auto_seats_count_2">2</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="3" name="auto[seats_count]" id="auto_seats_count_3"><label class="collection_radio_buttons" for="auto_seats_count_3">3</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="4" name="auto[seats_count]" id="auto_seats_count_4"><label class="collection_radio_buttons" for="auto_seats_count_4">4</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="5" name="auto[seats_count]" id="auto_seats_count_5"><label class="collection_radio_buttons" for="auto_seats_count_5">5</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="6" name="auto[seats_count]" id="auto_seats_count_6"><label class="collection_radio_buttons" for="auto_seats_count_6">6</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="7" name="auto[seats_count]" id="auto_seats_count_7"><label class="collection_radio_buttons" for="auto_seats_count_7">7</label></span><span class="radio"><input class="radio_buttons optional form-control" type="radio" value="8" name="auto[seats_count]" id="auto_seats_count_8"><label class="collection_radio_buttons" for="auto_seats_count_8">8+</label></span><span class="radio"><input checked="" class="radio_buttons" id="auto_seats_count_0" name="auto[seats_count]" type="radio" value=""><label class="collection_radio_buttons" for="auto_seats_count_0">Qeyd
                                olunmasın</label></span></div>
                </div>
                <div class="input boolean optional auto_loan"><input name="auto[loan]" type="hidden" value="0" autocomplete="off"><input class="boolean optional form-control" type="checkbox" value="1" name="auto[loan]" id="auto_loan"><label class="boolean optional control-label" for="auto_loan">Kreditlə</label></div>
                <div class="input boolean optional auto_barter"><input name="auto[barter]" type="hidden" value="0" autocomplete="off"><input class="boolean optional form-control" type="checkbox" value="1" name="auto[barter]" id="auto_barter"><label class="boolean optional control-label" for="auto_barter">Barter mümkündür</label></div>
                <div class="new-product-i new-product-i--large--indent new-product-i--uppercase">
                    <div class="input string optional auto_vin"><label for="auto_vin">VIN-kod</label><input class="string optional form-control" maxlength="17" size="17" type="text" name="auto[vin]" id="auto_vin">
                        <div class="new-product-i__hint-container">
                            <div class="tz-hint-btn">VIN-kodu haradan tapmaq olar?</div>
                            <div class="tz-hint">
                                <div class="tz-hint__title">VIN-kodu haradan tapmaq olar?</div><img alt="" src="https://turbo.azstatic.com/assets/shared/vin/vin-card-front-81bf4b5bfecab412f7cfc3a7cf367dc0bad10df6af6e60958f70f5ce6918a9ff.jpg">
                                <div class="tz-hint__info">Nəqliyyat vasitəsinin qeydiyyat şəhadətnaməsinin (texniki
                                    pasport) ön tərəfində.</div><img alt="" src="https://turbo.azstatic.com/assets/shared/vin/vin-card-back-754ab88d5349c867ddeaaaea23bf653ce4c0f8d2788c066c0ffa3bd6ca16b405.jpg">
                                <div class="tz-hint__info">Yeni nəsil qeydiyyat şəhadətnaməsinin arxa tərəfində.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input text optional auto_description field_with_hint"><label class="text optional control-label" for="auto_description">Əlavə məlumat</label><textarea class="text optional form-control" name="auto[description]" id="auto_description"></textarea><span class="hint">telefon nömrələri qeyd etmək
                        qadağandır</span></div>
                <div class="input check_boxes optional auto_extras"><label class="check_boxes optional control-label">Avtomobilin təchizatı</label><input type="hidden" name="auto[extra_ids][]" value="" autocomplete="off"><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="4" name="auto[extra_ids][]" id="auto_extra_ids_4"><label class="collection_check_boxes" for="auto_extra_ids_4">Yüngül
                            lehimli disklər</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="5" name="auto[extra_ids][]" id="auto_extra_ids_5"><label class="collection_check_boxes" for="auto_extra_ids_5">ABS</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="7" name="auto[extra_ids][]" id="auto_extra_ids_7"><label class="collection_check_boxes" for="auto_extra_ids_7">Lyuk</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="8" name="auto[extra_ids][]" id="auto_extra_ids_8"><label class="collection_check_boxes" for="auto_extra_ids_8">Yağış
                            sensoru</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="9" name="auto[extra_ids][]" id="auto_extra_ids_9"><label class="collection_check_boxes" for="auto_extra_ids_9">Mərkəzi
                            qapanma</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="10" name="auto[extra_ids][]" id="auto_extra_ids_10"><label class="collection_check_boxes" for="auto_extra_ids_10">Park radarı</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="11" name="auto[extra_ids][]" id="auto_extra_ids_11"><label class="collection_check_boxes" for="auto_extra_ids_11">Kondisioner</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="12" name="auto[extra_ids][]" id="auto_extra_ids_12"><label class="collection_check_boxes" for="auto_extra_ids_12">Oturacaqların isidilməsi</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="13" name="auto[extra_ids][]" id="auto_extra_ids_13"><label class="collection_check_boxes" for="auto_extra_ids_13">Dəri salon</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="14" name="auto[extra_ids][]" id="auto_extra_ids_14"><label class="collection_check_boxes" for="auto_extra_ids_14">Ksenon lampalar</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="15" name="auto[extra_ids][]" id="auto_extra_ids_15"><label class="collection_check_boxes" for="auto_extra_ids_15">Arxa görüntü kamerası</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="16" name="auto[extra_ids][]" id="auto_extra_ids_16"><label class="collection_check_boxes" for="auto_extra_ids_16">Yan pərdələr</label></span><span class="checkbox"><input class="check_boxes optional form-control" type="checkbox" value="17" name="auto[extra_ids][]" id="auto_extra_ids_17"><label class="collection_check_boxes" for="auto_extra_ids_17">Oturacaqların ventilyasiyası</label></span></div>
                <div class="input pond pond-grid" data-endpoint="https://photos.turbo.az/pond?lang=az" data-name="gallery[photo_ids][]" data-target-format=""><label for="" class="string optional control-label">Şəkillər</label>
                    <div class="pond-inner">
                        <div class="pond-notice-container">
                            <div class="pond-notice pond-notice--grey pond-notice--first">
                                <div class="pond-notice__title pond-notice__title--red">Qadağandır!</div>
                                <div class="pond-notice__text">Skrinşotlar, çərçivəli şəkillər və ekran şəkilləri.</div>
                            </div>
                            <div class="pond-notice pond-notice--yellow pond-notice--second">
                                <div class="pond-notice__title">Şəkillərinizdə bu hissələrin tam göründüyündən əmin
                                    olun:</div>
                                <div class="pond-notice__text">sükan, ön panel, faralar və arxa işıqlar.</div>
                            </div>
                        </div>
                        <input accept="image/*" class="pond-new-img-field" multiple="true" name="images[]" type="file">
                        <div class="pond-message"></div>
                        <div class="pond-img-list ui-sortable ui-sortable-disabled">
                            <div class="pond-img-card js-pond-img-card pond-img-card--front"><span>Ön görünüşü</span>
                            </div>
                            <div class="pond-img-card js-pond-img-card pond-img-card--back"><span>Arxa görünüşü</span>
                            </div>
                            <div class="pond-img-card js-pond-img-card pond-img-card--dashboard"><span>Ön paneli</span>
                            </div><label class="pond-new-img-button pond-new-img"><span class="icon"></span><span class="text text--default">Şəkil əlavə etmək</span><span class="text text--short">Əlavə et</span></label>
                        </div>
                    </div>
                    <script id="pond_img_template" type="text/html"><div class="pond-img"><div class="pond-img-thumb-container"></div><div class="pond-img-actions"><a class="pond-img-delete" href="#" title="Silmək"></a></div></div></script>
                </div>
                <div class="new-product--title">Əlaqə</div>
                <div class="new-product-alert">Elan dərc olunduqdan sonra əlaqə məlumatları ilə bağlı heç bir dəyişiklik
                    həyata keçirilmir.</div>
                <div class="new-product-i">
                    <div class="left-side seller-information">
                        <div class="input string required auto_seller_name"><label class="string required control-label" for="auto_seller_name">Adınız <abbr title="required">*</abbr></label><input class="string required form-control" type="text" name="auto[seller_name]" id="auto_seller_name"></div>
                        <div class="input select required auto_region"><label class="select required control-label" for="auto_region_id">Şəhər <abbr title="required">*</abbr></label><select class="select required form-control" name="auto[region_id]" id="auto_region_id">
                                <option value="7">Ağcabədi</option>
                                <option value="4">Ağdam</option>
                                <option value="6">Ağdaş</option>
                                <option value="5">Ağdərə</option>
                                <option value="8">Ağstafa</option>
                                <option value="10">Ağsu</option>
                                <option value="9">Astara</option>
                                <option value="78">Babək</option>
                                <option selected="selected" value="1">Bakı</option>
                                <option value="14">Balakən</option>
                                <option value="13">Beyləqan</option>
                                <option value="12">Bərdə</option>
                                <option value="15">Biləsuvar</option>
                                <option value="26">Cəbrayıl</option>
                                <option value="25">Cəlilabad</option>
                                <option value="27">Culfa</option>
                                <option value="24">Daşkəsən</option>
                                <option value="23">Dəliməmmədli</option>
                                <option value="60">Füzuli</option>
                                <option value="36">Gədəbəy</option>
                                <option value="2">Gəncə</option>
                                <option value="18">Goranboy</option>
                                <option value="17">Göyçay</option>
                                <option value="19">Göygöl</option>
                                <option value="20">Göytəpə</option>
                                <option value="77">Hacıqabul</option>
                                <option value="22">Horadiz</option>
                                <option value="32">İmişli</option>
                                <option value="33">İsmayıllı</option>
                                <option value="37">Kəlbəcər</option>
                                <option value="41">Kürdəmir</option>
                                <option value="42">Laçın</option>
                                <option value="43">Lerik</option>
                                <option value="11">Lənkəran</option>
                                <option value="44">Liman</option>
                                <option value="45">Masallı</option>
                                <option value="46">Mingəçevir</option>
                                <option value="47">Naftalan</option>
                                <option value="48">Naxçıvan</option>
                                <option value="49">Neftçala</option>
                                <option value="50">Oğuz</option>
                                <option value="51">Ordubad</option>
                                <option value="35">Qax</option>
                                <option value="34">Qazax</option>
                                <option value="16">Qəbələ</option>
                                <option value="21">Qobustan</option>
                                <option value="38">Quba</option>
                                <option value="39">Qubadlı</option>
                                <option value="40">Qusar</option>
                                <option value="52">Saatlı</option>
                                <option value="53">Sabirabad</option>
                                <option value="68">Şabran</option>
                                <option value="71">Şahbuz</option>
                                <option value="54">Salyan</option>
                                <option value="73">Şamaxı</option>
                                <option value="55">Samux</option>
                                <option value="72">Şəki</option>
                                <option value="69">Şəmkir</option>
                                <option value="70">Şərur</option>
                                <option value="74">Şirvan</option>
                                <option value="56">Siyəzən</option>
                                <option value="3">Sumqayıt</option>
                                <option value="75">Şuşa</option>
                                <option value="58">Tərtər</option>
                                <option value="57">Tovuz</option>
                                <option value="59">Ucar</option>
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
                            </select></div>
                        <div class="input email required auto_seller_email field_with_hint"><label class="email required control-label" for="auto_seller_email">E-mail <abbr title="required">*</abbr></label><input class="string email required form-control" type="email" name="auto[seller_email]" id="auto_seller_email"><span class="hint">saytda
                                göstərilmir</span></div><input name="auto[phones][]" autocomplete="off" type="hidden" value="(050) 660-34-04" id="auto_phones"><button name="button" type="submit" class="submit-button" data-disable-with="Göndərilir...">Elan yerləşdir</button>
                    </div>
                    <div class="right-side"></div>
                </div>
                <div class="new-product--confirm-rules">Elan yerləşdirərək, siz Turbo.az-ın <a target="_blank" href="/pages/terms-and-conditions">İstifadəçi razılaşması</a> və <a target="_blank" href="/pages/rules">Qaydaları</a> ilə razı olduğunuzu təsdiq edirsiniz</div>
            </form>
        </div>
    </div>
@endsection
