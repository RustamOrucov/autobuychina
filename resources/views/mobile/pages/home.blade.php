@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true;
    ?>
    <div class="body-inner" style="padding-top: 59.2px;">
        <div class="header home js-header is-sticky-header">
            <div class="header__tabs"><a class="header__tabs-i header__tabs-i--turbo az" href="/">
                <img src="{{ asset('storage/' . $logoImages->m_logo) }}" width="160">
                </a>
            </div><a class="header__btn header__btn--new" href=""><span></span></a>
        </div>
        <div class="content">
            <div class="short-search short-search--home">
                <form class="simple_form advanced-search short-search-form js-advanced-search" id="new_q"
                    data-advanced-select="true" novalidate="novalidate" action="/autos" accept-charset="UTF-8"
                    method="get">
                    <div class="tz-form__box">
                        <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open"
                            data-open="q_make" data-reset="true"><label
                                class="tz-form__group-label tz-form__group-label--select" for="q_make">Bütün
                                markalar</label><input name="q[make][]" type="hidden" value=""
                                autocomplete="off"><select multiple="multiple" class="select optional form-control"
                                name="q[make][]" id="q_make">
                                <option value="">Bütün markalar</option>
                                <option value="280">Abarth</option>
                                <option value="28">Acura</option>
                                <option value="30">Alfa Romeo</option>
                                <option value="156">Aprilia</option>
                                <option value="134">Asia</option>
                                <option value="86">Aston Martin</option>
                                <option value="268">ATV</option>
                                <option value="9">Audi</option>
                                <option value="419">Avatr</option>
                                <option value="274">Avia</option>
                                <option value="218">Baic</option>
                                <option value="327">Bajaj</option>
                                <option value="19">Bentley</option>
                                <option value="387">Bestune</option>
                                <option value="136">BMC</option>
                                <option value="3">BMW</option>
                                <option value="62">BMW Alpina</option>
                                <option value="92">Brilliance</option>
                                <option value="84">Buick</option>
                                <option value="378">Bull Motors</option>
                                <option value="51">BYD</option>
                                <option value="395">C.Moto</option>
                                <option value="38">Cadillac</option>
                                <option value="220">Can-Am</option>
                                <option value="397">Cevo</option>
                                <option value="259">CFMOTO</option>
                                <option value="163">Changan</option>
                                <option value="52">Chery</option>
                                <option value="41">Chevrolet</option>
                                <option value="10">Chrysler</option>
                                <option value="27">Citroen</option>
                                <option value="76">Dacia</option>
                                <option value="11">Daewoo</option>
                                <option value="91">DAF</option>
                                <option value="66">Daihatsu</option>
                                <option value="516">Daimler</option>
                                <option value="270">Datsun</option>
                                <option value="148">Dayun</option>
                                <option value="471">Denza</option>
                                <option value="405">DFSK</option>
                                <option value="162">Dnepr</option>
                                <option value="60">Dodge</option>
                                <option value="117">DongFeng</option>
                                <option value="147">Ducati</option>
                                <option value="79">FAW</option>
                                <option value="42">Ferrari</option>
                                <option value="37">Fiat</option>
                                <option value="2">Ford</option>
                                <option value="49">Foton</option>
                                <option value="689">Freedom</option>
                                <option value="175">GAC</option>
                                <option value="21">GAZ</option>
                                <option value="72">Geely</option>
                                <option value="376">Genesis</option>
                                <option value="82">GMC</option>
                                <option value="466">Grandmoto</option>
                                <option value="50">GWM</option>
                                <option value="383">Haima</option>
                                <option value="142">Haojue</option>
                                <option value="140">Harley-Davidson</option>
                                <option value="242">Haval</option>
                                <option value="12">Honda</option>
                                <option value="388">Hongqi</option>
                                <option value="110">HOWO</option>
                                <option value="13">Hummer</option>
                                <option value="1">Hyundai</option>
                                <option value="678">iCar</option>
                                <option value="64">IJ</option>
                                <option value="424">IM</option>
                                <option value="411">Indian Motorcycle</option>
                                <option value="15">Infiniti</option>
                                <option value="116">Iran Khodro</option>
                                <option value="74">Isuzu</option>
                                <option value="67">Iveco</option>
                                <option value="124">JAC</option>
                                <option value="35">Jaguar</option>
                                <option value="36">Jeep</option>
                                <option value="384">Jetour</option>
                                <option value="216">Jiajue</option>
                                <option value="462">Jiangmen</option>
                                <option value="109">JMC</option>
                                <option value="235">Jonway</option>
                                <option value="390">KAIYI</option>
                                <option value="90">KamAz</option>
                                <option value="406">Kanuni</option>
                                <option value="420">Karry</option>
                                <option value="139">Kawasaki</option>
                                <option value="374">Kayo</option>
                                <option value="473">KG Mobility</option>
                                <option value="282">Khazar</option>
                                <option value="8">Kia</option>
                                <option value="468">King Long</option>
                                <option value="119">KrAZ</option>
                                <option value="332">Kuba</option>
                                <option value="5">LADA (VAZ)</option>
                                <option value="43">Lamborghini</option>
                                <option value="20">Land Rover</option>
                                <option value="459">Leapmotor</option>
                                <option value="14">Lexus</option>
                                <option value="412">Li Auto</option>
                                <option value="87">Lifan</option>
                                <option value="46">Lincoln</option>
                                <option value="238">Lotus</option>
                                <option value="103">LuAz</option>
                                <option value="414">Lynk &amp; Co</option>
                                <option value="677">M-Hero</option>
                                <option value="329">Mack</option>
                                <option value="112">MAN</option>
                                <option value="423">Maple</option>
                                <option value="44">Maserati</option>
                                <option value="100">MAZ</option>
                                <option value="26">Mazda</option>
                                <option value="172">Megelli</option>
                                <option value="4">Mercedes</option>
                                <option value="252">Mercedes-Maybach</option>
                                <option value="127">MG</option>
                                <option value="31">Mini</option>
                                <option value="146">Minsk</option>
                                <option value="6">Mitsubishi</option>
                                <option value="286">Mondial</option>
                                <option value="81">Moskvich</option>
                                <option value="416">Moto Guzzi</option>
                                <option value="243">Muravey</option>
                                <option value="158">MV Agusta</option>
                                <option value="324">Nama</option>
                                <option value="409">Neta</option>
                                <option value="415">Nio</option>
                                <option value="7">Nissan</option>
                                <option value="29">Opel</option>
                                <option value="181">Otokar</option>
                                <option value="114">PAZ</option>
                                <option value="16">Peugeot</option>
                                <option value="465">Polad</option>
                                <option value="247">Polaris</option>
                                <option value="396">Polestar</option>
                                <option value="48">Pontiac</option>
                                <option value="32">Porsche</option>
                                <option value="681">QJMotor</option>
                                <option value="467">Radar</option>
                                <option value="105">RAF</option>
                                <option value="272">Ravon</option>
                                <option value="17">Renault</option>
                                <option value="595">Renault Samsung</option>
                                <option value="333">RKS</option>
                                <option value="78">Rover</option>
                                <option value="477">ROX (Polar Stone)</option>
                                <option value="422">Royal Enfield</option>
                                <option value="80">Saab</option>
                                <option value="94">Saipa</option>
                                <option value="93">Saturn</option>
                                <option value="108">Scania</option>
                                <option value="59">SEAT</option>
                                <option value="460">Seres Aito</option>
                                <option value="115">Setra</option>
                                <option value="133">Shacman</option>
                                <option value="288">Shuanghuan</option>
                                <option value="22">Skoda</option>
                                <option value="399">Skywell</option>
                                <option value="61">Smart</option>
                                <option value="402">Soueast</option>
                                <option value="45">Ssang Yong</option>
                                <option value="34">Subaru</option>
                                <option value="33">Suzuki</option>
                                <option value="380">SYM</option>
                                <option value="128">Temsa</option>
                                <option value="245">Tesla</option>
                                <option value="39">Tofas</option>
                                <option value="23">Toyota</option>
                                <option value="385">Tufan</option>
                                <option value="464">TVS</option>
                                <option value="53">UAZ</option>
                                <option value="145">Ural</option>
                                <option value="223">Vespa</option>
                                <option value="410">VGV</option>
                                <option value="24">Volkswagen</option>
                                <option value="386">Volta</option>
                                <option value="25">Volvo</option>
                                <option value="417">Voyah</option>
                                <option value="404">Wuling</option>
                                <option value="680">Xiaomi</option>
                                <option value="421">XPeng</option>
                                <option value="381">Yadea</option>
                                <option value="138">Yamaha</option>
                                <option value="632">Yangwang</option>
                                <option value="325">Yuejin</option>
                                <option value="331">Yutong</option>
                                <option value="57">ZAZ</option>
                                <option value="403">ZEEKR</option>
                                <option value="85">ZIL</option>
                                <option value="285">Zongshen</option>
                                <option value="143">Zontes</option>
                                <option value="217">ZX Auto</option>
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--open tz-form__group-btn--shown"></span>
                            <div class="tz-form__group-divider"></div>
                        </div><a class="links-i links-i_full-search" href="/autos/search">Filtrlər</a><input
                            autocomplete="off" type="hidden" name="q[sort]" id="q_sort" style="width: 15px;"><span
                            style="display: none;"></span>
                    </div>
                </form>
            </div>
            <div class="moto-nav"><a class="nav-i moto-nav__title" data-stat="main-page-moto-link"
                    href="/motosiklet">Moto</a></div>
            <div class="autocatalog-nav"><a class="nav-i autocatalog-nav__title" data-stat="header-moto-link"
                    href="/autocatalog">Avtokataloq<span class="label-new">yeni</span></a></div>
            <div class="links links_products">
                <div class="links-i"><span>Bu gün:</span><a href="/autos">2062 yeni elan</a></div>
            </div>
            <div class="lotriver-top-banner" id="js-lotriver-top-banner">
                <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                <div id="ad_ph_1" style="display:none;"></div>
            </div>
            <div class="quick-links"><a class="quick-links-i" href="/autos?q%5Bloan%5D=1">Kreditlə</a><a
                    class="quick-links-i" href="/autos?q%5Bbarter%5D=1">Barter</a><a class="quick-links-i"
                    target="_blank"
                    href="https://tap.az/elanlar/neqliyyat/ehtiyyat-hisseleri-ve-aksesuarlar?p%5B798%5D=4045&amp;utm_source=turboaz&amp;utm_medium=link&amp;utm_content=accessories&amp;utm_campaign=mobile">Aksesuarlar</a><a
                    class="quick-links-i" target="_blank"
                    href="https://tap.az/elanlar/neqliyyat/ehtiyyat-hisseleri-ve-aksesuarlar?p%5B798%5D=4050&amp;utm_source=turboaz&amp;utm_medium=text-link&amp;utm_content=tires-wheels&amp;utm_campaign=frontpage-search">Şinlər</a><a
                    class="quick-links-i" data-stat="rental-main" target="_blank"
                    href="https://tap.az/elanlar/xidmetler/neqliyyat-icaresi?utm_source=turboaz&amp;utm_medium=mobile&amp;utm_campaign=rentacar&amp;utm_id=main">İcarə</a>
            </div>
            <div class="products-container">
                <section data-cursor="1727077204.374989_8184490" data-section="featured" id="section-featured">
                    <div class="section-title">
                        <p class="section-title_name">PREMİUM ELANLAR</p>
                    </div>
                    <div class="products js-import-container">
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8735785-mercedes-c-300"></a><a class="js-bookmark-item-8735785"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8735785-mercedes-c-300/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8735785" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8735785-mercedes-c-300/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Mercedes C 300" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F27%2F15%2F05%2F42%2Fae52cd70-4c12-4206-89b4-d92904f3f319%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">26 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Mercedes C 300</div>
                                <div class="products-i__attributes products-i__bottom-text">2019, 2.0 L, 90 000 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:46</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8729342-bmw-520"></a><a class="js-bookmark-item-8729342" data-remote="true"
                                rel="nofollow" data-method="post" href="/autos/8729342-bmw-520/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8729342" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8729342-bmw-520/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="BMW 520" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F25%2F12%2F42%2F00%2F6e13d005-73ac-41c7-827c-e78af3f832fe%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">21 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">BMW 520</div>
                                <div class="products-i__attributes products-i__bottom-text">2014, 2.0 L, 207 500 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:46</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8783257-porsche-cayenne-turbo"></a><a class="js-bookmark-item-8783257"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8783257-porsche-cayenne-turbo/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8783257" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8783257-porsche-cayenne-turbo/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Porsche Cayenne Turbo" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F21%2F20%2F16%2F51%2F0b716c8f-c42f-4d0b-a8fc-f770706a64a9%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">20 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Porsche Cayenne Turbo</div>
                                <div class="products-i__attributes products-i__bottom-text">2010, 4.8 L, 218 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:45</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8291596-gwm-poer"></a><a class="js-bookmark-item-8291596" data-remote="true"
                                rel="nofollow" data-method="post" href="/autos/8291596-gwm-poer/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8291596" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8291596-gwm-poer/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="GWM Poer" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F03%2F28%2F10%2F47%2F50%2F2b166486-e378-41c6-b7d1-7e8d7e13ab89%2F90393_ODR1trMUn1QUOVEF2iZirw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">43 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">GWM Poer</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 2.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:45</div>
                            </div>
                        </div>
                        <div class="lotriver-top-video-banner" id="js-lotriver-top-video-banner">

                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/7836089-volkswagen-id-6"></a><a class="js-bookmark-item-7836089"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/7836089-volkswagen-id-6/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-7836089" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/7836089-volkswagen-id-6/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Volkswagen ID.6" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2023%2F10%2F21%2F14%2F24%2F25%2F815e895f-ce05-4541-a900-64e13915703e%2F88070_rD1Yx7LJdlwMmBnhltkfag.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">62 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Volkswagen ID.6</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 0.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:45</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8552286-gwm-tank-500"></a><a class="js-bookmark-item-8552286"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8552286-gwm-tank-500/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8552286" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8552286-gwm-tank-500/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="GWM Tank 500" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F06%2F22%2F11%2F30%2F37%2Feec9d204-8379-4bce-9fbd-a54ced1a2865%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">87 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">GWM Tank 500</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 2.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:45</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8071169-volvo-xc90"></a><a class="js-bookmark-item-8071169"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8071169-volvo-xc90/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8071169" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8071169-volvo-xc90/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Volvo XC90" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F01%2F15%2F11%2F14%2F12%2F699cf83e-6fb8-4cf8-9f62-4e2b573bb18d%2F3786_2Y7q9x4UYvFMUfamjl8hDA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">59 900 <span>€</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Volvo XC90</div>
                                <div class="products-i__attributes products-i__bottom-text">2022, 2.0 L, 9 200 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:44</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8793757-opel-astra"></a><a class="js-bookmark-item-8793757"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8793757-opel-astra/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8793757" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8793757-opel-astra/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Opel Astra" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F18%2F09%2F30%2F00%2Ffcbcd314-0739-4498-9a27-a6db62ce7460%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">10 000 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Opel Astra</div>
                                <div class="products-i__attributes products-i__bottom-text">2006, 1.3 L, 227 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:44</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8467496-lada-vaz-niva"></a><a class="js-bookmark-item-8467496"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8467496-lada-vaz-niva/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8467496" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8467496-lada-vaz-niva/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="LADA (VAZ) Niva" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F05%2F22%2F11%2F41%2F56%2F9cb90a02-14fd-4e68-80a8-2277466b170f%2F64677_XEKjwmAveF1J7d42VxCbsw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">17 800 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">LADA (VAZ) Niva</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 1.7 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:44</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8392241-changan-qiyuan-a06"></a><a class="js-bookmark-item-8392241"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8392241-changan-qiyuan-a06/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8392241" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8392241-changan-qiyuan-a06/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Changan Qiyuan A06" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F04%2F27%2F17%2F44%2F40%2Fca9c0aef-8bc7-41da-b888-b1c0fa1b45f6%2F84539__JfXMHDKCtuNHDGJDF_bDA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">21 299 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Changan Qiyuan A06</div>
                                <div class="products-i__attributes products-i__bottom-text">2023, 1.5 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:43</div>
                            </div>
                        </div>
                        <div class="lotriver-bottom-banner" id="js-lotriver-bottom-banner">
                            <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                            <div id="ad_ph_2" style="display:none;"></div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8790204-hyundai-ix35"></a><a class="js-bookmark-item-8790204"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8790204-hyundai-ix35/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8790204" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8790204-hyundai-ix35/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hyundai ix35" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F16%2F19%2F49%2F59%2F904f5124-6a7a-46ab-994f-fa670e72bef6%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">22 700 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hyundai ix35</div>
                                <div class="products-i__attributes products-i__bottom-text">2013, 2.0 L, 130 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:43</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8759482-toyota-sienna"></a><a class="js-bookmark-item-8759482"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8759482-toyota-sienna/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8759482" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8759482-toyota-sienna/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Toyota Sienna" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F05%2F09%2F26%2F48%2F2250d928-c2a3-4987-9e24-d43d1e726757%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">33 000 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Toyota Sienna</div>
                                <div class="products-i__attributes products-i__bottom-text">2013, 3.5 L, 270 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:44</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8303516-toyota-urban-cruiser"></a><a class="js-bookmark-item-8303516"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8303516-toyota-urban-cruiser/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8303516" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8303516-toyota-urban-cruiser/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Toyota Urban Cruiser" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F22%2F13%2F03%2F46%2F843420b2-edff-4809-b207-166d28425347%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">26 400 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Toyota Urban Cruiser</div>
                                <div class="products-i__attributes products-i__bottom-text">2023, 1.5 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:42</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8593107-kia-k5"></a><a class="js-bookmark-item-8593107" data-remote="true"
                                rel="nofollow" data-method="post" href="/autos/8593107-kia-k5/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8593107" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8593107-kia-k5/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Kia K5" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F08%2F17%2F28%2F31%2F11c4d775-9a57-4fdd-99bd-107b68925e23%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">38 200 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Kia K5</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 2.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:42</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8756255-bmw-328"></a><a class="js-bookmark-item-8756255" data-remote="true"
                                rel="nofollow" data-method="post" href="/autos/8756255-bmw-328/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8756255" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8756255-bmw-328/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="BMW 328" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F20%2F15%2F50%2F17%2Fe66e272b-1496-4cbf-a906-a94de5cb0152%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">18 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">BMW 328</div>
                                <div class="products-i__attributes products-i__bottom-text">2016, 2.0 L, 194 200 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:41</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8796556-jeep-grand-cherokee"></a><a class="js-bookmark-item-8796556"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8796556-jeep-grand-cherokee/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8796556" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8796556-jeep-grand-cherokee/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Jeep Grand Cherokee" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F19%2F11%2F33%2F30%2F3b795f98-4a9a-4671-9aa7-7883d1f30f60%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">28 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Jeep Grand Cherokee</div>
                                <div class="products-i__attributes products-i__bottom-text">2014, 3.6 L, 189 692 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:41</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8771346-toyota-rav4"></a><a class="js-bookmark-item-8771346"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8771346-toyota-rav4/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8771346" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8771346-toyota-rav4/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Toyota RAV4" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F09%2F17%2F12%2F02%2Fe2c0260a-abbe-4435-9676-87a2870f3f8f%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">38 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Toyota RAV4</div>
                                <div class="products-i__attributes products-i__bottom-text">2014, 2.0 L, 61 000 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:41</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8682120-maserati-grecale"></a><a class="js-bookmark-item-8682120"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8682120-maserati-grecale/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8682120" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8682120-maserati-grecale/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Maserati Grecale" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F07%2F16%2F51%2F11%2Feccde3b3-2433-43bd-8de9-6c1062eb1470%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--order">Sifarişlə</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">65 500 <span>€</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Maserati Grecale</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 2.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8682103-maserati-grecale"></a><a class="js-bookmark-item-8682103"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8682103-maserati-grecale/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8682103" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8682103-maserati-grecale/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Maserati Grecale" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F07%2F16%2F44%2F23%2F44275928-186b-4cf7-9eed-87f1213a15ce%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--order">Sifarişlə</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">65 500 <span>€</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Maserati Grecale</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 2.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8552305-kaiyi-e5"></a><a class="js-bookmark-item-8552305" data-remote="true"
                                rel="nofollow" data-method="post" href="/autos/8552305-kaiyi-e5/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8552305" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8552305-kaiyi-e5/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="KAIYI E5" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F06%2F22%2F11%2F37%2F08%2Fa0dc335f-66ec-4ed3-9c41-0a308b5e6095%2F12183_ogtQftp0VNM0b8HrfrDIcQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">33 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">KAIYI E5</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 1.5 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8184238-bmw-x5"></a><a class="js-bookmark-item-8184238" data-remote="true"
                                rel="nofollow" data-method="post" href="/autos/8184238-bmw-x5/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8184238" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8184238-bmw-x5/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="BMW X5" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F02%2F21%2F14%2F51%2F02%2F36ce4d4b-9de9-4a18-8549-bc695cc951e8%2F90393_ODR1trMUn1QUOVEF2iZirw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--vin">VIN</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">37 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">BMW X5</div>
                                <div class="products-i__attributes products-i__bottom-text">2015, 3.0 L, 125 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8261589-toyota-camry"></a><a class="js-bookmark-item-8261589"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8261589-toyota-camry/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8261589" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8261589-toyota-camry/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Toyota Camry" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F10%2F10%2F42%2F20%2Fb929ff1d-9c22-4611-9eda-09c32d4a86bc%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">28 900 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Toyota Camry</div>
                                <div class="products-i__attributes products-i__bottom-text">2021, 2.5 L, 65 000 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8184490-hongqi-h5"></a><a class="js-bookmark-item-8184490"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8184490-hongqi-h5/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8184490" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8184490-hongqi-h5/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hongqi H5" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F02%2F21%2F16%2F15%2F48%2F39773418-19c0-45d8-8dbe-6d94eaa85732%2F90393_ODR1trMUn1QUOVEF2iZirw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">32 300 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hongqi H5</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 1.5 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8542434-kaiyi-e5"></a><a class="js-bookmark-item-8542434"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8542434-kaiyi-e5/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8542434" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8542434-kaiyi-e5/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="KAIYI E5" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F06%2F18%2F12%2F14%2F35%2Fc9c0fe3b-0aed-4b42-ac5a-bd83dede9d7b%2F12183_ogtQftp0VNM0b8HrfrDIcQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">33 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">KAIYI E5</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 1.5 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8418394-geely-monjaro"></a><a class="js-bookmark-item-8418394"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8418394-geely-monjaro/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8418394" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8418394-geely-monjaro/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Geely Monjaro" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F05%2F05%2F23%2F03%2F19%2F62ddfbf3-20bb-4273-81a1-272c1010bb3f%2F64677_XEKjwmAveF1J7d42VxCbsw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">65 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Geely Monjaro</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 2.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8319018-toyota-camry"></a><a class="js-bookmark-item-8319018"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8319018-toyota-camry/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8319018" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8319018-toyota-camry/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Toyota Camry" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F06%2F16%2F07%2F12%2F51937205-e2e5-4bd2-a44f-71cd81df41a7%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">26 500 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Toyota Camry</div>
                                <div class="products-i__attributes products-i__bottom-text">2015, 2.5 L, 215 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/7833081-im-ls7"></a><a class="js-bookmark-item-7833081"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/7833081-im-ls7/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-7833081" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/7833081-im-ls7/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="IM LS7" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2023%2F10%2F20%2F03%2F56%2F48%2Fa79d6560-4e81-43d4-8b66-e7afec97b59c%2F3638_4abLFPOd_cNBqkpJbqB5lg.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">64 700 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">IM LS7</div>
                                <div class="products-i__attributes products-i__bottom-text">2023, 0.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:40</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8513201-mercedes-sprinter-315"></a><a class="js-bookmark-item-8513201"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8513201-mercedes-sprinter-315/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8513201" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8513201-mercedes-sprinter-315/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Mercedes Sprinter 315" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F10%2F10%2F59%2F44%2F3b8fdf0e-5cf5-44b6-b8c5-acc0c3bb6afc%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">27 500 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Mercedes Sprinter 315</div>
                                <div class="products-i__attributes products-i__bottom-text">2009, 2.2 L, 120 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8597489-toyota-land-cruiser-prado"></a><a class="js-bookmark-item-8597489"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8597489-toyota-land-cruiser-prado/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8597489" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8597489-toyota-land-cruiser-prado/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Toyota Land Cruiser Prado" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F07%2F08%2F18%2F42%2F49%2F8664a053-e979-49c9-a6dc-89753640cc77%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">42 000 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Toyota Land Cruiser Prado</div>
                                <div class="products-i__attributes products-i__bottom-text">2012, 2.7 L, 140 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8210580-hyundai-tucson"></a><a class="js-bookmark-item-8210580"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8210580-hyundai-tucson/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8210580" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8210580-hyundai-tucson/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hyundai Tucson" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F07%2F12%2F19%2F55%2F2313df5f-d82f-464d-b800-791844d5f338%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">18 800 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hyundai Tucson</div>
                                <div class="products-i__attributes products-i__bottom-text">2008, 2.0 L, 208 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8743818-kia-soul"></a><a class="js-bookmark-item-8743818"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8743818-kia-soul/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8743818" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8743818-kia-soul/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Kia Soul" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F30%2F15%2F47%2F59%2Fcf4a7d74-2dda-45b6-918a-bd5a072beb27%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--vin">VIN</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">30 500 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Kia Soul</div>
                                <div class="products-i__attributes products-i__bottom-text">2022, 2.0 L, 19 800 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8762937-jeep-grand-commander"></a><a class="js-bookmark-item-8762937"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8762937-jeep-grand-commander/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8762937" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8762937-jeep-grand-commander/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Jeep Grand Commander" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F06%2F16%2F13%2F29%2F86c70fcc-0fd9-4dc6-9a1d-a699bc3bb3c8%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">42 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Jeep Grand Commander</div>
                                <div class="products-i__attributes products-i__bottom-text">2021, 2.0 L, 36 886 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8621876-kaiyi-e5"></a><a class="js-bookmark-item-8621876"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8621876-kaiyi-e5/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8621876" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8621876-kaiyi-e5/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="KAIYI E5" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F07%2F17%2F11%2F30%2F38%2F507e881c-813e-4532-a01f-b1cd998ac81d%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">31 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">KAIYI E5</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 1.5 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8597568-land-rover-discovery"></a><a class="js-bookmark-item-8597568"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8597568-land-rover-discovery/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8597568" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8597568-land-rover-discovery/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Land Rover Discovery" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F07%2F08%2F19%2F02%2F32%2Fe1425db7-469b-4b73-bdb6-da78dd299b79%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">32 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Land Rover Discovery</div>
                                <div class="products-i__attributes products-i__bottom-text">2016, 3.0 L, 96 000 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8261703-hyundai-tucson"></a><a class="js-bookmark-item-8261703"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8261703-hyundai-tucson/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8261703" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8261703-hyundai-tucson/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hyundai Tucson" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F07%2F11%2F56%2F27%2F402afd4d-b71e-4fad-8908-0c2ad09bdd7f%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--vin">VIN</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">28 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hyundai Tucson</div>
                                <div class="products-i__attributes products-i__bottom-text">2016, 2.0 L, 113 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8354312-im-ls6"></a><a class="js-bookmark-item-8354312"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8354312-im-ls6/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8354312" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8354312-im-ls6/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="IM LS6" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F04%2F15%2F16%2F26%2F03%2F7430f4a3-fa52-4f09-be97-8f894246db3f%2F90393_ODR1trMUn1QUOVEF2iZirw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">39 700 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">IM LS6</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 0.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8773235-hyundai-elantra"></a><a class="js-bookmark-item-8773235"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8773235-hyundai-elantra/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8773235" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8773235-hyundai-elantra/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hyundai Elantra" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F10%2F12%2F24%2F57%2F224f961f-b12e-48cf-982e-7e082028d848%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--vin">VIN</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">26 500 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hyundai Elantra</div>
                                <div class="products-i__attributes products-i__bottom-text">2018, 2.0 L, 111 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8780987-mercedes-s-350-d-4matic"></a><a class="js-bookmark-item-8780987"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8780987-mercedes-s-350-d-4matic/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8780987" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8780987-mercedes-s-350-d-4matic/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Mercedes S 350 d 4MATIC" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F13%2F11%2F37%2F35%2F2e678a16-3ac8-4264-b430-85f90313707f%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">44 900 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Mercedes S 350 d 4MATIC</div>
                                <div class="products-i__attributes products-i__bottom-text">2015, 3.0 L, 210 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8318861-hyundai-santa-fe"></a><a class="js-bookmark-item-8318861"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8318861-hyundai-santa-fe/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8318861" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8318861-hyundai-santa-fe/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hyundai Santa Fe" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F07%2F12%2F46%2F28%2F583e33db-22d0-497e-9d23-ba941a85eb88%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">33 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hyundai Santa Fe</div>
                                <div class="products-i__attributes products-i__bottom-text">2015, 2.0 L, 156 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8261661-hyundai-santa-fe"></a><a class="js-bookmark-item-8261661"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8261661-hyundai-santa-fe/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8261661" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8261661-hyundai-santa-fe/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Hyundai Santa Fe" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F06%2F13%2F44%2F24%2F2e26efd9-f9a3-48de-ad80-160285ff65ca%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--vin">VIN</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">33 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Hyundai Santa Fe</div>
                                <div class="products-i__attributes products-i__bottom-text">2016, 2.0 L, 151 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8015123-im-ls7"></a><a class="js-bookmark-item-8015123"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8015123-im-ls7/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8015123" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8015123-im-ls7/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="IM LS7" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2023%2F12%2F25%2F11%2F08%2F58%2Fcfde6b57-8604-45c1-a32e-cc8b6fac4858%2F88077_5lv5aLekuPe3FtXy1A4cOA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">64 700 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">IM LS7</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 0.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8488664-opel-astra"></a><a class="js-bookmark-item-8488664"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8488664-opel-astra/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8488664" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8488664-opel-astra/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Opel Astra" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F07%2F11%2F30%2F32%2Ffd834ce9-57a3-43b6-a370-0f1272828b60%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">10 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Opel Astra</div>
                                <div class="products-i__attributes products-i__bottom-text">2004, 1.4 L, 208 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8774045-zeekr-001"></a><a class="js-bookmark-item-8774045"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8774045-zeekr-001/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8774045" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8774045-zeekr-001/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="ZEEKR 001" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F10%2F16%2F44%2F18%2F0802c2b4-fdcd-47be-b977-83e444649ab8%2F26954_DWgEQQqRrb1W5yDQKFgsVA.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">47 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">ZEEKR 001</div>
                                <div class="products-i__attributes products-i__bottom-text">2023, 0.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/7861492-mercedes-e-220-d"></a><a class="js-bookmark-item-7861492"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/7861492-mercedes-e-220-d/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-7861492" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/7861492-mercedes-e-220-d/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Mercedes E 220 d" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F05%2F09%2F18%2F42%2F53%2F7667bce1-98b2-48e3-8324-ab9cc4fd59f3%2F64677_XEKjwmAveF1J7d42VxCbsw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">48 500 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Mercedes E 220 d</div>
                                <div class="products-i__attributes products-i__bottom-text">2020, 2.2 L, 79 000 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured"><a class="products-i__link" target="_self"
                                href="/autos/8772385-kia-sorento"></a><a class="js-bookmark-item-8772385"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8772385-kia-sorento/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8772385" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8772385-kia-sorento/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Kia Sorento" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F09%2F09%2F22%2F23%2F15%2F81dc6442-c62c-4d92-afcd-64a0205e763b%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap"></div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">42 600 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Kia Sorento</div>
                                <div class="products-i__attributes products-i__bottom-text">2018, 2.0 L, 148 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8691866-land-rover-range-rover"></a><a class="js-bookmark-item-8691866"
                                data-remote="true" rel="nofollow" data-method="post"
                                href="/autos/8691866-land-rover-range-rover/bookmarks">
                                <div class="bookmarking"></div>
                            </a><a class="hide js-unbookmark-item-8691866" data-remote="true" rel="nofollow"
                                data-method="delete" href="/autos/8691866-land-rover-range-rover/bookmarks">
                                <div class="bookmarking added"></div>
                            </a>
                            <div class="products-i__top"><img alt="Land Rover Range Rover" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F08%2F11%2F14%2F05%2F16%2F82e3f97f-372f-4f66-9509-8d93ed3f7de8%2F76402_Kt6M8xdUQ8mUvNPSzi54jw.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info">
                                    <div class="products-i__icon products-i__icon--barter">
                                        <div class="products-i__tooltip products-i__tooltip--barter">Barter mümkündür
                                        </div>
                                    </div>
                                    <div class="products-i__icon products-i__icon--loan">
                                        <div class="products-i__tooltip products-i__tooltip--loan">Kreditdədir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">53 000 <span>$</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">Land Rover Range Rover</div>
                                <div class="products-i__attributes products-i__bottom-text">2017, 3.0 L, 101 000 km
                                </div>
                                <div class="products-i__datetime">Bakı, bugün 11:39</div>
                            </div>
                        </div>
                        <div class="products-i vipped featured salon"><a class="products-i__link" target="_self"
                                href="/autos/8464184-gac-aion-s-max"></a><a class="js-unbookmark-item-8464184"
                                data-remote="true" rel="nofollow" data-method="delete"
                                href="/autos/8464184-gac-aion-s-max/bookmarks">
                                <div class="bookmarking added"></div>
                            </a><a class="hide js-bookmark-item-8464184" data-remote="true" rel="nofollow"
                                data-method="post" href="/autos/8464184-gac-aion-s-max/bookmarks">
                                <div class="bookmarking"></div>
                            </a>
                            <div class="products-i__top"><img alt="GAC Aion S Max" loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/f460x343/2024%2F05%2F21%2F11%2F45%2F18%2F54aa4593-c4c5-40fd-838b-33b85cebdd79%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.jpg">
                                <div class="products-i__label-container tz-d-flex tz-gap-5 tz-wrap-wrap">
                                    <div class="products-i__label products-i__label--salon">Salon</div>
                                </div>
                                <div class="products-i__paid"><span class="featured-icon"></span><span
                                        class="vipped-icon"></span></div>
                                <div class="products-i__info"></div>
                            </div>
                            <div class="products-i__bottom">
                                <div class="products-i__price products-i__bottom-text">
                                    <div class="product-price">47 900 <span>AZN</span></div>
                                </div>
                                <div class="products-i__name products-i__bottom-text">GAC Aion S Max</div>
                                <div class="products-i__attributes products-i__bottom-text">2024, 0.0 L, 0 km</div>
                                <div class="products-i__datetime">Bakı, bugün 11:38</div>
                            </div>
                        </div>
                    </div>
                    <div class="section-loader"></div>
                </section>
                <section data-section="embed_tapaz" id="section-embed-tapaz">
                    <div class="js-import-container"></div>
                    <div class="section-loader"></div>
                </section>
                <section data-section="embed_binaaz" id="section-embed-binaaz">
                    <div class="js-import-container"></div>
                    <div class="section-loader"></div>
                </section>
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
                            href="https://play.google.com/store/apps/details?id=org.turboaz.android&amp;hl=az">Turbo.az</a><span>Hər
                            şey bir tətbiqdə!</span></div>
                </div>
            </div>
            <div class="footer__blk"><a target="_blank" class="footer__link footer__link--pages"
                    href="/pages/rules">Qaydalar</a><a target="_blank" class="footer__link footer__link--pages"
                    href="/pages/terms-and-conditions">İstifadəçi razılaşması</a><a target="_blank"
                    class="footer__link footer__link--pages" href="/pages/advert">Reklam yerləşdirin</a><a
                    target="_blank" class="footer__link footer__link--pages"
                    href="/pages/order-recommendations">Sifarişli avtomobil alan alıcı üçün tövsiyələr</a></div>
            <div class="footer__blk">
                <div class="footer__title">Dəstək xidməti</div><a class="footer__link footer__link--contact"
                    href="tel: +994125057755">(012) 505-77-55</a>
                <p class="footer__opening-hours">İş saatları — Həftə içi: 09:00-19:00 | Şənbə: 09:00-13:00</p><a
                    class="footer__link footer__link--social" href="mailto:turbo@turbo.az"><i
                        class="footer__link--social_icon footer__link--social_icon--email"></i></a><a target="_blank"
                    class="footer__link footer__link--social" href="https://www.facebook.com/www.turbo.az"><i
                        class="footer__link--social_icon footer__link--social_icon--facebook"></i></a><a target="_blank"
                    class="footer__link footer__link--social" href="https://www.instagram.com/turbo.az/"><i
                        class="footer__link--social_icon footer__link--social_icon--instagram"></i></a>
            </div>
            <div class="footer__blk"><a class="footer__link footer__link--inline" rel="nofollow"
                    href="/?desktop_site=1">Tam versiya</a><a class="footer__link footer__link--inline js-lang-switch"
                    href="https://ru.turbo.az/">Русский язык</a>
                <div class="footer__info">Saytın Administrasiyası reklam bannerlərinin və yerləşdirilmiş elanların
                    məzmununa görə məsuliyyət daşımır.</div>
                <div class="footer__copyright">© 2006-2024 Digital Classifieds MMC. VÖEN: 1405631661</div>
            </div>
        </footer>
    </div>
    <!-- Daha Cox Popup -->
    <div class="popup popup--drawer js-drawer" id="js-drawer">
        <div class="popup-header"><span class="header__nav-btn--back js-popup-back-btn"></span>
            <div class="popup-header__title">Daha çox</div>
            <div class="popup-header__title popup-header__title--settings">Ayarlar</div>
        </div>
        <div class="popup__content">
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link popup__list-i_link--lang js-lang-switch"
                        href="https://ru.turbo.az/">Русский язык</a></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" href="/help/popular_questions">Yardım</a>
                </div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" data-stat="more-moto-link"
                        href="/autocatalog">Avtokataloq<span
                            class="popup__list-i_label popup__list-i_label--az"></span></a></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" data-stat="more-moto-link"
                        href="/motosiklet">Moto</a></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link"
                        href="/autos">Bütün
                        elanlar</a></div>
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link"
                        href="/avtosalonlar">Salonlar</a></div>
                <div class="popup__list-i popup__list-i--with-border"><a target="_blank" class="popup__list-i_link"
                        href="https://tap.az/elanlar/neqliyyat/ehtiyyat-hisseleri-ve-aksesuarlar?utm_source=turboaz&amp;utm_medium=link&amp;utm_content=accessories&amp;utm_campaign=mobile">Ehtiyat
                        hissələr və aksesuarlar</a></div>
                <div class="popup__list-i popup__list-i--with-border"><a target="_blank" data-stat="rental-burger"
                        class="popup__list-i_link"
                        href="https://tap.az/elanlar/xidmetler/neqliyyat-icaresi?utm_source=turboaz&amp;utm_medium=mobile&amp;utm_campaign=rentacar&amp;utm_id=burger">İcarə</a>
                </div>
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link js-popup-drawer-open"
                        data-open="contacts" href="#">Bizimlə əlaqə</a></div>
                <div class="popup__list-i popup__list-i--with-border popup__list-advertising"><a
                        data-stat="advertising-landing-burger-btn" class="popup__list-i_link"
                        href="/advertising">Reklam
                        yerləşdir</a><span class="label-new status-new">yeni</span></div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i popup__list-i--with-border popup__list-i_link delete-account drawer-link"
                    id="js-delete-account">Şəxsi kabineti sil</div>
            </div>
            <div class="popup__list">
                <div class="popup__list-i"><a class="popup__list-i_link" rel="nofollow" data-method="delete"
                        href="/session">Çıxış</a></div>
            </div>
            <div class="popup__list-i popup__list-i--full-version"><a rel="nofollow" href="/?desktop_site=1">Tam
                    versiya</a></div>
        </div>
    </div>
    <!-- End Popup -->
    <!-- Select Category Popup -->
    <div
    class="select-category select-category--full-height js-select-category select-category--q_make select-category--open"
        data-select="q_make">
        <div class="select-category__header-container">
            <div class="popup-header">
                <div class="popup-header__left">
                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn"></div>
                </div>
                <div class="popup-header__title">Marka</div>
                <div class="popup-header__right"></div>
            </div>
            <div class="select-category__search"><input type="text" name="" id=""
                    class="select-category__search-input js-search-input" placeholder="For Example, BMW"
                    autocomplete="off">
            </div>
        </div>
        <div class="select-category__body select-category__body--type-2">

            <div class="select-category__blk">
                <div class="select-category__blk-content">

                    <a href="/autos?q%5Bmake%5D%5B%5D=280">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                            data-id="280">
                            <div class="select-category__i-logo"><img loading="lazy"
                                    src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F28%2F04%2Fabffa099-dd57-486e-8757-3b88f47124c9%2Fabarth%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Abarth</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>



@endsection
