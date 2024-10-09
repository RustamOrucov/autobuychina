@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="body-inner" style="padding-top: 59.2px;">
        <div class="header home js-header is-sticky-header" style="top: -59.2px;">
            <div class="header__tabs"><a class="header__tabs-i header__tabs-i--turbo az" href="/">
                    <h1 class="header__logo header__logo--red">TURBO.AZ</h1>
                </a><a target="_blank" class="header__tabs-i header-tabs__i--bina header__logo"
                       href="https://bina.az/?utm_source=turboaz&amp;utm_medium=mobile-nav&amp;utm_campaign=only-logo">BİNA.AZ</a><a
                    target="_blank" class="header__tabs-i header-tabs__i--tap header__logo"
                    href="https://tap.az/?utm_source=turboaz&amp;utm_medium=mobile-nav&amp;utm_campaign=only-logo">TAP.AZ</a>
            </div><a class="header__btn header__btn--new" href="/autos/new"><span>Elan yerləşdir</span></a>
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
                                                                         href="/autos/8291596-gwm-poer"></a><a class="js-bookmark-item-8291596"
                                                                                                               data-remote="true" rel="nofollow" data-method="post"
                                                                                                               href="/autos/8291596-gwm-poer/bookmarks">
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
                                                                         href="/autos/8552305-kaiyi-e5"></a><a class="js-bookmark-item-8552305"
                                                                                                               data-remote="true" rel="nofollow" data-method="post"
                                                                                                               href="/autos/8552305-kaiyi-e5/bookmarks">
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
                                                                         href="/autos/7833081-im-ls7"></a><a class="js-bookmark-item-7833081" data-remote="true"
                                                                                                             rel="nofollow" data-method="post" href="/autos/7833081-im-ls7/bookmarks">
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
                                                                         href="/autos/8354312-im-ls6"></a><a class="js-bookmark-item-8354312" data-remote="true"
                                                                                                             rel="nofollow" data-method="post" href="/autos/8354312-im-ls6/bookmarks">
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
                                                                         href="/autos/8015123-im-ls7"></a><a class="js-bookmark-item-8015123" data-remote="true"
                                                                                                             rel="nofollow" data-method="post" href="/autos/8015123-im-ls7/bookmarks">
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
                                                      href="https://play.google.com/store/apps/details?id=org.turboaz.android&amp;hl=az"><img alt=""
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
                <div class="popup__list-i"><a class="popup__list-i_link" href="/help/popular_questions">Yardım</a></div>
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
                <div class="popup__list-i popup__list-i--with-border"><a class="popup__list-i_link" href="/autos">Bütün
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
                        data-stat="advertising-landing-burger-btn" class="popup__list-i_link" href="/advertising">Reklam
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
    <div class="select-category select-category--full-height js-select-category select-category--q_make"
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
                                                        class="select-category__search-input js-search-input" placeholder="Məsələn, BMW" autocomplete="off">
            </div>
        </div>
        <div class="select-category__body select-category__body--type-2">
            <div class="select-category__blk" id="js-popular-makes-container">
                <div class="select-category__blk-title">Populyar</div>
                <div class="select-category__blk-content">
                    <a href="/autos?q%5Bmake%5D%5B%5D=4">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="4">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F52%2Fc0231997-84f3-4e49-8a46-15d634db7502%2Fmercedes-benz-9%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mercedes</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=5">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="5">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F52%2F52%2F3ff4b2cf-b02a-4635-96be-4aa85d7ef6f4%2FBitmap%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">LADA (VAZ)</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=1">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="1">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F24%2Fc163753b-fe58-4501-9b34-8b26ad3cf092%2Fhyundai-motor-company-2%20copy%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Hyundai</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=23">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="23">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F44%2F9d109024-d1c6-436c-a735-865be0b23edc%2Ftoyota%20copy%203%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Toyota</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=8">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="8">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F50%2F49%2F936b5858-fc12-4591-b7b0-5ab6185901f1%2F1280px-KIA_logo3.svg%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Kia</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=3">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="3">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F49%2F07%2F31cc0b93-8144-4916-8a21-919d963d0525%2F1200px-BMW_logo_%28gray%29.svg%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">BMW</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=29">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="29">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F26%2F86e211e9-0113-49ae-8785-12a96e1c0acc%2Fopel-2%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Opel</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=2">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="2">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTQvMjAvNDMvMzMvNDM0L0ZvcmQucG5nIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=9e1ad2ef45808800">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ford</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="select-category__blk">
                <div class="select-category__blk-title" id="js-all-makes-title">Bütün markalar</div>
                <div class="select-category__blk-content">
                    <div class="select-category__countries-list">
                        <div
                            class="select-category__i select-category__i--sub select-category__i--btn js-countries-button">
                            <div class="select-category__i-name">İstehsalçı ölkə üzrə</div>
                        </div><a href="/autos?q%5Bcountry%5D=2">
                            <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                                 data-country-id="2">
                                <div class="select-category__i-name js-category-select-item-name">Almaniya</div><span
                                    class="select-category__i-radio"></span>
                            </div>
                        </a><a href="/autos?q%5Bcountry%5D=5">
                            <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                                 data-country-id="5">
                                <div class="select-category__i-name js-category-select-item-name">Cənubi Koreya</div>
                                <span class="select-category__i-radio"></span>
                            </div>
                        </a><a href="/autos?q%5Bcountry%5D=3">
                            <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                                 data-country-id="3">
                                <div class="select-category__i-name js-category-select-item-name">Yaponiya</div><span
                                    class="select-category__i-radio"></span>
                            </div>
                        </a><a href="/autos?q%5Bcountry%5D=4">
                            <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                                 data-country-id="4">
                                <div class="select-category__i-name js-category-select-item-name">Rusiya</div><span
                                    class="select-category__i-radio"></span>
                            </div>
                        </a><a href="/autos?q%5Bcountry%5D=1">
                            <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                                 data-country-id="1">
                                <div class="select-category__i-name js-category-select-item-name">ABŞ</div><span
                                    class="select-category__i-radio"></span>
                            </div>
                        </a>
                    </div><a href="/autos?q%5Bmake%5D%5B%5D=280">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="280">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F28%2F04%2Fabffa099-dd57-486e-8757-3b88f47124c9%2Fabarth%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Abarth</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=28">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="28">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F28%2F29%2F5a6e2d2a-2232-4f33-9ab8-cd716dbb6986%2Facura%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Acura</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=30">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="30">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F28%2F49%2F7910541b-3fd3-4466-9208-884f241719e6%2Falfa%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Alfa Romeo</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=156">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="156">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDgvMDIvMTAvMTAvMTcvNTIyL2FwcmlsaWFfbG9nby5qcGciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=16dfbf02e42a3f0b">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Aprilia</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=134">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="134">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTAvNTkvNDIvNzI2L2FzaWFfbW90b3JzXzA0LnBuZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=f39aa7fc7ed8a164">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Asia</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=86">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="86">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F29%2F50%2Fe21aada7-3975-4fb7-a307-cb2afee01f59%2Faston_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Aston Martin</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=268">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="268">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2016%2F09%2F20%2F14%2F02%2F32%2F506%2Fchina-national-ice-hockey-team-logo-2C0623EEAA-seeklogo.com.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">ATV</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=9">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="9">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F31%2F01%2F39a381ca-8820-4b18-ae84-32664c4d9e22%2Faudi_-%20logo-100x62%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Audi</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=419">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="419">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F05%2F15%2F17%2F55%2F32%2F5f5dad50-d9bf-4fe5-83c9-15eaa72f50ec%2Fblack.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Avatr</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=274">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="274">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F25%2F05%2F52ee3a65-b2a4-4f56-8494-088f85325962%2F94a3d727e3d54957be21094aad193f5c%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Avia</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=218">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="218">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F31%2F27%2Fd61e7162-c02b-4406-b2ae-596009917052%2Fbaic-seeklogo.com%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Baic</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=327">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="327">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F31%2F40%2F56150e78-cd3b-4007-b995-bce01635f444%2Fbajaj-seeklogo.com%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Bajaj</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=19">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="19">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F32%2F02%2F939d83ef-ea41-4c4f-b57e-50e2e7cfb414%2Fbentley_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Bentley</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=387">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="387">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F02%2F08%2F14%2F43%2F59%2F5bc81407-77dd-4445-9252-8fcee0de4ac7%2Fbestune-logo-600x1100-show.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Bestune</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=136">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="136">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F15%2F52%2F43%2Fc6f72d5c-40bb-4cc2-b5cf-c6221b82465e%2Fpng-transparent-car-bmc-scania-ab-temsa-mercedes-benz-car-blue-label-text.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">BMC</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=3">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="3">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F49%2F07%2F31cc0b93-8144-4916-8a21-919d963d0525%2F1200px-BMW_logo_%28gray%29.svg%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">BMW</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=62">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="62">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F29%2F37%2Fa7834d0c-f3d5-40c0-a683-938d325f6bff%2Falpina_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">BMW Alpina</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=92">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="92">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F35%2F40%2F150ed26e-00b9-412e-9e6b-8f73d3df4ef7%2Fbrilliance_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Brilliance</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=84">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="84">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F36%2F14%2F0c5696f1-e7e4-4695-84be-74ccc557d304%2FBuick-logo-2002-2560x1440%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Buick</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=378">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="378">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F10%2F13%2F12%2F41%2F07%2Fabcaec0c-7927-4349-809c-2302e8d01442%2Flogo-clientes-utidasideias-bull-motors.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Bull Motors</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=51">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="51">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F36%2F29%2Fa1184698-83b3-4dbb-9d00-f70b95474c24%2Fbyd_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">BYD</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=395">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="395">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F07%2F07%2F15%2F18%2F11%2F73ce83ae-d4ad-4600-9fc9-6d2ab316b65c%2Fc.moto.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">C.Moto</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=38">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="38">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F36%2F47%2Faa2e9fef-1758-4d93-9180-5c1bf8e4ec75%2Fcadillac_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Cadillac</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=220">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="220">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTQvMDkvMjQvMTUvNTkvNTkvNzMwLzM4OGQzMGQyMjRkYjRjY2RjNzI0ODZhNjVlYjBkOWFmLmpwZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=248670a8c819327f">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Can-Am</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=397">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="397">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F08%2F12%2F17%2F34%2F47%2F14986e70-bdbb-45c6-8654-1380953242b4%2FCEVO_by_CAMMSYS.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Cevo</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=259">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="259">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F41%2F22%2Fcf1be1b8-253e-4a49-bb93-ef4622bbf7db%2Fcfmoto_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">CFMOTO</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=163">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="163">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F41%2F55%2F8c80ff6d-8cdb-4883-8dd4-8ada8892fcc1%2Fchangan_automobile-logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Changan</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=52">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="52">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F58%2F54%2F53a28e16-7183-4625-a54c-54b32a0669ff%2Fchery-logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Chery</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=41">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="41">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F06%2F2e705e42-c1df-42d2-bcdb-9abebbf92241%2FGroup%2015%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Chevrolet</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=10">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="10">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F26%2F34%2F97e82110-5a78-4379-9956-cb3ec5f5680e%2F68856711448e725dfafefe2b78cb3549%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Chrysler</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=27">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="27">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F59%2F12%2F026e9208-6ec2-4cce-8a16-00641f0f8aee%2Fcitr_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Citroen</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=76">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="76">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F00%2F35%2Fe99062b9-6066-440b-b90a-a8ae7b9f86ac%2FDacia-Logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Dacia</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=11">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="11">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F56%2F17%2Fa0aefd74-6dbc-4c0a-8829-6439525ad368%2Fdae_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Daewoo</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=91">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="91">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F56%2F39%2F381aaf78-6575-42b6-a921-45c87fd14bad%2Fdaf_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%201%20%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">DAF</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=66">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="66">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F56%2F58%2Fe3a24337-761a-4a20-87af-f3cc8bc795e2%2Fdaihatsu%20%281%29%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Daihatsu</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=516">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="516">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F04%2F22%2F15%2F30%2F14%2F74de57b2-a617-408b-bbbb-584a2f330879%2F90393_ODR1trMUn1QUOVEF2iZirw.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Daimler</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=270">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="270">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2016%2F10%2F20%2F13%2F49%2F34%2F420%2FDatsun_brand_logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Datsun</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=148">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="148">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTEvMDQvMTcvNTgyL2xvZ29sLmpwZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=b731d00f2f4bb159">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Dayun</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=471">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="471">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F12%2F22%2F10%2F38%2F18%2F04093bf4-91cc-4102-b587-1857204aa6f6%2FDenza-Logo-2010.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Denza</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=405">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="405">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F12%2F12%2F17%2F15%2F48%2Fe4d2c553-2846-4de7-b438-e212fa640aba%2Fpng-transparent-dongfeng-motor-corporation-logo-car-glory-company-text-trademark.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">DFSK</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=162">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="162">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDkvMjcvMDUvNDMvMTQvMjIvXy5wbmciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=6682fcce2115f056">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Dnepr</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=60">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="60">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTUvMDQvMDIvMTkvNTQ4L0RvZGdlMTcucG5nIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=9c294d74445343e3">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Dodge</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=117">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="117">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTEvMTEvMzQvNTIwL2RvbmdmZW5nLnBuZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=737587634faa5004">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">DongFeng</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=147">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="147">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTEvMTEvNDYvOTMyL0R1a2Vsb2dvLnBuZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=2616f371c5906cfc">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ducati</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=79">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="79">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTEvMTIvMDAvMjI2L0ZBV19DYXJfbG9nby5wbmciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=21354849e97e634a">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">FAW</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=42">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="42">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTQvMjAvNDIvNTQvMTMzL0ZlcnJhcmlfMi5wbmciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=61a859628643e840">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ferrari</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=37">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="37">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTQvMjAvNDMvMTgvMzg5L0ZpYXRfMS5wbmciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=bd1afafbd75554c2">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Fiat</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=2">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="2">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTQvMjAvNDMvMzMvNDM0L0ZvcmQucG5nIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=9e1ad2ef45808800">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ford</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=49">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="49">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTEvMTQvMjAvNDA3L2ZvdG9uLnBuZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=e7eff3ca1b2fa8f7">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Foton</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=689">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="689">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F09%2F11%2F15%2F48%2F18%2Fe0844dc0-9408-4e92-a26e-be10ca003a8a%2F11375_qXr7-N1ppBcS2a5TEaxWRQ.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Freedom</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=175">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="175">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTQvMDMvMjcvMTQvMzUvMTAvNjQ2L18uanBnIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=8f596ff0c7a5b2d4">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">GAC</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=21">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="21">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F57%2F45%2F9f1ccc12-30e4-4d8c-9898-5083f179e587%2FGAZ%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">GAZ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=72">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="72">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F42%2F38%2Fad5e43c6-c29e-4806-a9f0-97a1058a123c%2Funnamed%20%281%29%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Geely</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=376">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="376">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F06%2F03%2F12%2F49%2F06%2Fba596860-f4e4-4617-81ba-ad63178cf60c%2FGenesis-Logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Genesis</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=82">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="82">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F58%2F24%2F8d459349-4170-4dca-b62a-e5cc02ef605a%2Fgmc-logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">GMC</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=466">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="466">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F09%2F22%2F17%2F15%2F52%2Fc958ffab-14e4-4d1f-9680-ce30a95154b0%2Fgrandlogo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Grandmoto</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=50">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="50">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F11%2F01%2F18%2F01%2F46%2F8d53b29b-0d13-49bc-9e39-eb9be10f9723%2Fd9ca38f4a3574d403a3f7f8b1ce8cb60.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">GWM</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=383">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="383">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F12%2F06%2F16%2F07%2F07%2Fefc3d45a-778e-4cb2-8adf-8f7ce10529af%2Fhaima-logo-clear-bg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Haima</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=142">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="142">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F34%2F01%2F11dc9e2c-7481-4f3b-84a5-66c3fd890025%2Fhaojue-seeklogo.com%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Haojue</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=140">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="140">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F34%2F19%2F335e3caa-fd08-4e89-a9a3-3dc2d1755565%2Fharley%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Harley-Davidson</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=242">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="242">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F34%2F42%2F94de5c8f-2145-4f55-812f-843b937065b6%2Fhaval%20%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Haval</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=12">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="12">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F35%2F20%2F4df68639-3846-4406-930b-fa1bfe6aa6cc%2Fhonda%20%281%29%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Honda</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=388">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="388">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F02%2F08%2F14%2F45%2F21%2F189c8a7c-2376-4ae5-87af-879e105efe62%2Fhongqi-logo-2018-800x600.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Hongqi</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=110">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="110">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F37%2F04%2F1f9dd8d7-2e91-4e00-a5c8-dc1442836097%2Fhowo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">HOWO</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=13">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="13">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F37%2F45%2Fb33e2913-bf67-44e3-8fde-f08ba15959bf%2Fhummer%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Hummer</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=1">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="1">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F24%2Fc163753b-fe58-4501-9b34-8b26ad3cf092%2Fhyundai-motor-company-2%20copy%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Hyundai</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=678">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="678">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F07%2F08%2F16%2F42%2F22%2Fe0eb1e5e-ef3f-46f1-b661-437e8be5855d%2F12183_ogtQftp0VNM0b8HrfrDIcQ.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">iCar</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=64">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="64">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F15%2F53%2F58%2F94fad6c4-7b6a-4bca-bfb5-9242c5415db9%2Fizh.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">IJ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=424">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="424">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F07%2F05%2F22%2F27%2F35%2F238dab93-7d2d-48d2-b004-201ee6404fe3%2FIM_Motors_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">IM</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=411">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="411">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F03%2F29%2F11%2F47%2F02%2Ff50aacdf-877f-4c99-b257-7d4f4cd5c44c%2F1200px-Indian_Motorcycle_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Indian Motorcycle</div>
                            <span class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=15">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="15">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F54%2F21%2F14930d6c-bb2b-4475-99c5-b9b3280a4296%2Finfiniti%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Infiniti</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=116">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="116">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F54%2F52%2F27305997-6eb7-4124-aeeb-7cd5d260438d%2Firan%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Iran Khodro</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=74">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="74">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F56%2F48%2F5395b31b-4ae2-4549-be71-6e728163dd20%2Fisuzu%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Isuzu</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=67">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="67">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F57%2F06%2F5d1e3450-de69-443e-8c74-f8fcd170ebed%2Fiveco%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Iveco</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=124">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="124">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F27%2F56%2Fb0770ce7-5b78-4b57-81a4-07dc03dae29f%2FNew_Jac_motors_logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">JAC</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=35">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="35">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F57%2F27%2F2658dcab-e47b-49b8-bfd7-da790add4b2e%2Fjaguar%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Jaguar</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=36">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="36">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F57%2F51%2F42b57558-78e6-4154-b5a7-ecd7ab4ef0e1%2Fjeep%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Jeep</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=384">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="384">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F01%2F18%2F11%2F53%2F21%2F2930e0df-1f3d-479a-a2a8-0db55af96369%2F12-1024x209.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Jetour</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=216">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="216">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTQvMDgvMjcvMTAvMDQvMTQvNDM3LzUwMDM5MDczLmdpZiJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=ac1526f6211f30ae">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Jiajue</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=462">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="462">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F08%2F14%2F18%2F35%2F06%2F1af4206f-4955-495a-9844-449ee41c4668%2Ftg_image_2017226158.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Jiangmen</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=109">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="109">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F58%2F23%2Fbc24147c-f871-4295-b07c-1f7883446725%2FJiangling-logo-1280x1024%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">JMC</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=235">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="235">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTUvMDMvMjcvMTkvMTQvMjYvMjUwL2xvZ28uanBnIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=5caa84a362a46de9">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Jonway</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=390">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="390">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F06%2F30%2F15%2F26%2F30%2Fd18c5d18-4467-45a1-aaf4-226f89504a5f%2F%D0%91%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">KAIYI</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=90">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="90">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F58%2F42%2Fc302bd38-6035-425e-9169-f2cd93b657d3%2Fkamaz%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">KamAz</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=406">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="406">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F12%2F22%2F16%2F31%2F55%2F37432ded-2c47-400e-abd7-fb0e6bb4f87d%2Fkanuni-vector-logo-free-download-11574089207vmgh0luc0o.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Kanuni</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=420">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="420">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F05%2F28%2F02%2F27%2F48%2F33a3de2c-4d91-475d-8e52-e736969c18ce%2FKarry_Logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Karry</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=139">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="139">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F15%2F02%2F18%2F97e0f53b-54e5-4d78-b623-5b742f17f368%2Fkawasa%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Kawasaki</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=374">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="374">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F04%2F02%2F16%2F22%2F49%2Fe331238f-c3ca-4882-8c55-84759129fcdc%2F6d28a0b784c8e4d29646c161feaf2b4d.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Kayo</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=473">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="473">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F12%2F27%2F11%2F00%2F19%2F104497d6-ad49-4e9b-ade7-1ca6f90140c7%2F%D0%94%D0%B8%D0%B7%D0%B0%D0%B8%CC%86%D0%BD%20%D0%B1%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">KG Mobility</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=282">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="282">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F15%2F41%2F16%2F2f564f29-40ad-4f2c-b337-3172755bd5c2%2Fkhazar_logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Khazar</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=8">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="8">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F50%2F49%2F936b5858-fc12-4591-b7b0-5ab6185901f1%2F1280px-KIA_logo3.svg%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Kia</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=468">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="468">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F11%2F04%2F13%2F10%2F51%2Fce90bd2b-85ac-4699-b998-27d622eaa93f%2Fking-long-logo-900x700.webp">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">King Long</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=119">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="119">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F00%2F39%2Fe2a179b3-b47a-4400-82fd-af2d6d0d1f09%2Fkraz%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">KrAZ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=332">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="332">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F43%2F35%2F1546852a-b10d-4263-896e-990d5ea31410%2Funnamed%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Kuba</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=5">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="5">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F52%2F52%2F3ff4b2cf-b02a-4635-96be-4aa85d7ef6f4%2FBitmap%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">LADA (VAZ)</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=43">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="43">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F12%2F26%2F08%2F1b16aebe-823c-431a-8f6f-a98726e367f5%2F1200px-Lamborghini_Logo.svg%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Lamborghini</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=20">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="20">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F01%2F00%2F7b57925a-946a-4a91-ac70-c330a0e643c2%2Fland-rover%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Land Rover</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=459">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="459">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F08%2F07%2F11%2F59%2F43%2F6f436db2-60b8-4681-8ce2-2b97280c5d79%2FLeapmotor_logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Leapmotor</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=14">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="14">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F01%2F56%2F48798fcf-60de-4917-b3ca-4742c216cab1%2Flexus%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Lexus</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=412">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="412">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F04%2F04%2F18%2F02%2F15%2F09c5fdf5-240a-4335-be6b-5dd91532e77f%2FLi_Auto_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Li Auto</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=87">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="87">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F03%2F01%2F6ed20bae-4e46-4ae3-b47c-6383fbdf1eb2%2Flifan%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Lifan</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=46">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="46">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F03%2F20%2Ff5925ebe-4b11-4042-a65e-fc642d987714%2Flincoln%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Lincoln</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=238">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="238">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2015%2F06%2F05%2F09%2F51%2F19%2F638%2FLotus_logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Lotus</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=103">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="103">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F04%2F19%2F735d0d73-cbf0-41a8-b925-616d71691589%2Fluaz%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">LuAz</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=414">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="414">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F04%2F14%2F12%2F47%2F35%2F374c12c0-d614-4ce9-9004-cfec295cb772%2FLynk_%26_Co_2016_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Lynk &amp; Co</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=677">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="677">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F07%2F08%2F14%2F14%2F50%2Fa9b4bb08-7267-4298-bf2a-790099877958%2F73879_Llsf7HE7T9ZVmMOurKtMGQ.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">M-Hero</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=329">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="329">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2019%2F11%2F29%2F11%2F37%2F46%2Ffc9a14f2-a0a3-4050-bbd0-ac0c74fdb643%2Fba5d3364df8aebac2260add73c7bd24c.jpg">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mack</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=112">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="112">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F04%2F39%2Fe52f80aa-c15e-4076-b0cb-a5e25cd1b6d1%2FMAN-logo-1920x1080%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">MAN</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=423">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="423">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F07%2F04%2F15%2F31%2F06%2F9d845ae9-8fc4-4b96-a9ef-ad14f48164ff%2FAuto-sales-statistics-China-Maple-logo.jpg">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Maple</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=44">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="44">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F05%2F52%2Fc584b47e-44af-47bd-b03a-e9e65e74c719%2Fmaserati%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Maserati</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=100">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="100">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F07%2F24%2F900065b2-6540-4cda-9857-25e3d71caa2b%2Fmaz%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">MAZ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=26">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="26">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F23%2F14%2Fcf54695d-c410-4921-a30f-7fd1964c345d%2FMazda-Logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mazda</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=172">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="172">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F10%2F21%2F7c255fc2-61ce-4630-8738-94919126e4c7%2FMegelli-Motorcycles-Logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Megelli</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=4">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="4">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F52%2Fc0231997-84f3-4e49-8a46-15d634db7502%2Fmercedes-benz-9%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mercedes</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=252">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="252">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F10%2F48%2F11%2F036ceaac-780a-4468-8e4e-774e39bfe0f3%2Fe088e0a85d0ae1ed1ee2a1d03a676b41.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mercedes-Maybach</div>
                            <span class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=127">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="127">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F24%2F25%2Fa2e1928a-8a0a-4334-95b8-8cc8b1b60e46%2FMG%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">MG</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=31">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="31">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F25%2F35%2Fde414ae2-ee6e-4105-a2a1-6cf93130f06e%2Fmini%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mini</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=146">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="146">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F14%2F53%2F28%2F3baa9e4f-cc58-49e0-a93c-ae20d816aac6%2Fimages%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Minsk</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=6">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="6">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F25%2F54%2F195de55c-89a6-474c-b72d-8dfeeb259e89%2Fmitsu%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mitsubishi</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=286">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="286">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F13%2F00%2F10%2F3257e465-a820-4729-b0d1-57133d1b6a53%2Fcsm_Logo_FB_Mondial_2017_48a4be751d%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Mondial</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=81">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="81">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F26%2F21%2F8f37fc6f-5bda-428f-99ef-06d0f11a0ce7%2Fmoskvich%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Moskvich</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=416">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="416">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F04%2F25%2F16%2F35%2F50%2F79f3c962-9670-4fa3-8254-08945115fee6%2FMoto-Guzzi-Logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Moto Guzzi</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=243">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="243">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F26%2F42%2F847e08cd-aaec-484d-ba38-59736440fc20%2Fmuravey%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Muravey</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=158">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="158">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F27%2F08%2F0462cbf0-8c4e-4e70-bbef-8608be0b3b55%2FMV_Agusta%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">MV Agusta</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=324">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="324">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F27%2F32%2F61781678-5ba8-49af-96bf-7a9b1bf56f67%2FNAMA%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Nama</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=409">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="409">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F04%2F02%2F15%2F06%2F31%2F96df4c19-59a9-428d-9b8d-eaf702639082%2Fg8QvDHP7_400x400.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Neta</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=415">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="415">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F04%2F14%2F12%2F57%2F37%2Ff6660f70-6216-455f-b23e-78a3dbb86f83%2FNIO_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Nio</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=7">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="7">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F28%2F19%2Ff46049f3-6243-4379-82e3-dffe8224c26f%2Fnissan-logo-2013-700x700%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Nissan</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=29">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="29">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F26%2F86e211e9-0113-49ae-8785-12a96e1c0acc%2Fopel-2%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Opel</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=181">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="181">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F12%2F21%2F16%2F45%2F44%2F2d34acc2-055c-4604-aa4e-3b221a962909%2FOtokar_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Otokar</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=114">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="114">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F29%2F57%2F4ef4451e-a476-46e7-b9c6-551e012f24f5%2FPAZ%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">PAZ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=16">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="16">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F30%2F18%2F026915fd-6fd9-4efe-9705-d000a8b2e8f6%2FPeugeot_newlogo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Peugeot</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=465">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="465">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F09%2F04%2F11%2F58%2F46%2F3df83409-80e4-4817-8d1f-521b5771460a%2Flogogo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Polad</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=247">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="247">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F48%2F38%2Ff8b507d2-59e2-4e0c-9df0-55f56005e323%2FPolaris-Logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Polaris</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=396">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="396">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F08%2F08%2F11%2F16%2F49%2F5294c059-e0ed-4d88-b18e-96c3e5d55fe9%2Fpng-transparent-polestar-hd-logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Polestar</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=48">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="48">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTUvMDQvMDcvNTEvODE2L3BvbnRpYWMucG5nIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=bbf8e2f1070e68b4">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Pontiac</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=32">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="32">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F56%2F23%2F0df96f44-68e6-425b-9eff-a877b62fb6b1%2FPorsche_logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Porsche</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=681">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="681">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F07%2F17%2F14%2F57%2F46%2F84a5fe09-8cd1-412a-871a-68a6ab981002%2F64677_XEKjwmAveF1J7d42VxCbsw.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">QJMotor</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=467">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="467">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F10%2F09%2F15%2F54%2F08%2F2fd9881b-3509-488f-a0cd-4f153e654e2a%2Flogo_radar.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Radar</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=105">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="105">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTUvMDQvMDgvNTQvOTQ5L3JhZi5wbmciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=81a7d8d77aa23940">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">RAF</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=272">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="272">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F31%2F36%2Ff66bd529-7b61-4f0d-88ea-056e29c4c63c%2Fravon%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ravon</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=17">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="17">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F43%2F18%2F7f63f2da-c1ca-4952-8bc2-cad02f17d26a%2Funnamed%20%282%29%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Renault</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=595">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="595">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F04%2F22%2F15%2F30%2F34%2F0c51b127-e65f-4321-adc4-e79fdaf8cff4%2F32444_OikwS_ZIYofkU92pw8zouQ.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Renault Samsung</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=333">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="333">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2020%2F01%2F28%2F12%2F10%2F22%2Fade32b7d-37db-4327-a153-279eabf560e5%2Fimages.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">RKS</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=78">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="78">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F32%2F28%2F9e83675b-e77a-4656-8f10-1f41a7d1f3e5%2FRover-Logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Rover</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=477">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="477">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F03%2F14%2F11%2F46%2F45%2Faecee2ab-c402-4ca0-9532-28dddbf44804%2Flogog.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">ROX (Polar Stone)</div>
                            <span class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=422">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="422">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F06%2F22%2F10%2F36%2F51%2Fe8e4a43e-917f-4edb-b9be-21c4a10c7fa0%2FRoyal_Enfield_logo_new.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Royal Enfield</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=80">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="80">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F32%2F50%2F9fcf4d14-b3d1-476e-adf8-fed464c3d1d1%2Fsaab%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Saab</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=94">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="94">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F33%2F38%2F3015f5cb-386a-44ce-ac27-bf573a2425a4%2Fsaipa%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Saipa</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=93">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="93">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTAvMzEvNDIvNDEwL1NhdHVybi5qcGciXSxbInAiLCJ0aHVtYiIsIjYweCJdXQ?sha=8065872a217c41d9">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Saturn</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=108">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="108">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F33%2F58%2Fcd6de6fc-9dec-4ff1-a63c-80a33fb49ef9%2Fscania%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Scania</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=59">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="59">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F34%2F21%2F85518cff-026e-4024-ab03-bd856bc5fb48%2Fseat%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">SEAT</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=460">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="460">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F08%2F08%2F00%2F34%2F20%2F1eb135a7-2bf6-4893-95e4-32e73375e2f4%2FAITO_brand_logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Seres Aito</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=115">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="115">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F35%2F17%2F70b6b438-f179-4532-af26-b2ba77f61d62%2Fsetra%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Setra</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=133">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="133">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F35%2F45%2F47fb38c7-83de-4a4b-8a27-7b95e67693ae%2Fshacman%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Shacman</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=288">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="288">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2019%2F05%2F30%2F12%2F39%2F17%2Fcce27c18-291c-45cd-8124-7588eed417a7%2Fautowp.ru_shuanghuan_logo_1.jpg">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Shuanghuan</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=22">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="22">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F36%2F27%2F4d132e76-3392-4973-8e26-71ca3edc1272%2Fshkoda%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Skoda</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=399">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="399">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F09%2F06%2F11%2F56%2F11%2F72bddbd6-e060-4418-8e69-cc522669f82d%2Fchannels4_profile.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Skywell</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=61">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="61">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F37%2F03%2F42ecc23d-40ff-4178-b905-1018669e2afa%2Fsmart%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Smart</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=402">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="402">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F10%2F04%2F16%2F05%2F26%2F7773a89d-d239-4900-a991-7e667066c980%2FSoueast-logo-1995-800x600%20%281%29.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Soueast</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=45">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="45">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F38%2F08%2Fe1018f27-a3c7-47c3-9ba1-710b8a743bbc%2Fssang%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ssang Yong</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=34">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="34">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F39%2F26%2F39874bfd-d84b-45c3-aeaa-cfb106341e6b%2Fsubaru%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Subaru</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=33">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="33">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F40%2F36%2F24cf98eb-05de-4102-89fb-fe60f43db44c%2Fsuzuki%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Suzuki</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=380">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="380">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F10%2F21%2F17%2F03%2F49%2F3188fc2c-9d96-4788-9437-694ad4717f1f%2FSYM_logo_of_Sanyang_Motor_20180408.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">SYM</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=128">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="128">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDUvMjIvMTEvMzYvNTQvMjcyLzEuanBnIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=b9472c279f508a4a">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Temsa</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=245">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="245">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F40%2F56%2Fa9d7c447-7482-4358-b0e4-368b6c310b76%2Ftesla%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Tesla</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=39">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="39">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F41%2F13%2Fdef079cf-d227-4f91-a44a-ee8df729e3a0%2Ftofas%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Tofas</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=23">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="23">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F44%2F9d109024-d1c6-436c-a735-865be0b23edc%2Ftoyota%20copy%203%4054x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Toyota</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=385">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="385">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F01%2F27%2F14%2F50%2F04%2F764d6f6c-44e1-4eff-bcef-6d705a909dec%2F96aa4591145003.Y3JvcCw5ODAsNzY2LDAsMTY3.jpg">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Tufan</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=464">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="464">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F09%2F01%2F15%2F47%2F40%2Ff435494b-cd91-48f5-8956-a5189b89b88b%2FTVS_Motor_logo.svg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">TVS</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=53">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="53">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F42%2F23%2F73a82eeb-b059-46d3-acc4-7e7a8263e368%2Fuaz%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">UAZ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=145">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="145">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F43%2F59%2F2f31544e-86f2-481a-8f46-0ee8926160b8%2Fural%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Ural</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=223">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="223">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTQvMTEvMDIvMTMvMzkvNDAvMjIwL1Zlc3BhMTY4LnBuZyJdLFsicCIsInRodW1iIiwiNjB4Il1d?sha=c0ec2ed20138f1cf">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Vespa</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=410">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="410">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F03%2F15%2F12%2F42%2F18%2F0b30e300-8dee-4301-b209-8d7b4c58d225%2Fimages%20%281%29%20%281%29.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">VGV</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=24">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="24">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F44%2F12%2F40358e7e-aa9b-4ba4-8f72-89fb072904b9%2Fvolks%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Volkswagen</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=386">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="386">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F01%2F31%2F12%2F19%2F54%2F29f7e7a7-1ecb-418f-82b6-ae4e0de9f136%2FLogo_VOLTA_White.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Volta</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=25">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="25">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F44%2F30%2F13e6c6dc-4c21-4340-a3e8-5007bd93c5bf%2FVolvo_Logo%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Volvo</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=417">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="417">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F05%2F08%2F13%2F15%2F03%2F276260fd-e687-4460-a782-b7fe0aef383c%2FVoyah-Logo-2.webp">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Voyah</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=404">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="404">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F10%2F31%2F16%2F08%2F47%2Fe5d62fab-75d8-4d59-9d67-04f262dd326a%2Fwuling-logo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Wuling</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=680">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="680">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F07%2F15%2F11%2F24%2F20%2F6b17ac06-0ba4-408f-86e3-b3436ed20fd2%2F12183_ogtQftp0VNM0b8HrfrDIcQ.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Xiaomi</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=421">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="421">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2023%2F06%2F12%2F16%2F21%2F56%2Fa396f37b-a2d2-461f-90b3-c58a82d34902%2Fxpeng-logo-2021-2700x1100.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">XPeng</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=381">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="381">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F10%2F21%2F17%2F08%2F50%2F76039e51-e264-4721-8546-7b8770edd3be%2Flogo-yadea-franshising.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Yadea</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=138">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="138">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F45%2F18%2Fe9c2bddc-ce30-4f2d-bfeb-20569cf0c70f%2Fyamaha%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Yamaha</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=632">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="632">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2024%2F04%2F22%2F15%2F30%2F44%2F437667c4-520e-414b-8c58-9190211eead7%2F14231_J-_dQLKSND7AOyYEFIDxaw.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Yangwang</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=325">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="325">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2019%2F10%2F12%2F10%2F40%2F29%2F01cfd01c-e4c5-44f2-86dd-7c8363abbe77%2Fpreview-YUEJIN_vhghg.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Yuejin</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=331">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="331">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2020%2F01%2F13%2F17%2F31%2F10%2Fdccd307e-1c6b-4bef-93fd-3e5d6edf61f0%2Fimages.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Yutong</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=57">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="57">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F45%2F36%2Fead913fb-bab0-4b29-a481-4a3ae9154def%2Fzaz%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">ZAZ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=403">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="403">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2022%2F10%2F27%2F16%2F39%2F36%2Fe1824ecc-6ae8-4a2f-837d-a7ae4c86ebba%2Flogogo.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">ZEEKR</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=85">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="85">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F45%2F53%2F68f0aac7-4830-4a13-86f5-33aafae6e672%2Fzil%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">ZIL</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=285">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="285">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2018%2F12%2F07%2F10%2F14%2F09%2F472b6a87-41e3-4297-980c-54ec3acb3ed3%2FZONGSHEN.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Zongshen</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=143">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="143">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F04%2F02%2F15af7190-3e0f-40b6-89e5-ac12e1e899ee%2FLOGO-PNG-0471451%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">Zontes</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a><a href="/autos?q%5Bmake%5D%5B%5D=217">
                        <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                             data-id="217">
                            <div class="select-category__i-logo"><img loading="lazy"
                                                                      src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F46%2F07%2F07a25546-8428-4476-a55a-87068cd70d99%2FZX_Auto_logo_image_picture%4034x.png">
                            </div>
                            <div class="select-category__i-name js-category-select-item-name">ZX Auto</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
