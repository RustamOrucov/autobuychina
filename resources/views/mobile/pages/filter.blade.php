@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="select-category select-category--full-height js-select-category select-category--q_make"
         data-open-next="q_model" data-select="q_make">
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
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="85">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F45%2F53%2F68f0aac7-4830-4a13-86f5-33aafae6e672%2Fzil%4034x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">ZIL</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="285">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2018%2F12%2F07%2F10%2F14%2F09%2F472b6a87-41e3-4297-980c-54ec3acb3ed3%2FZONGSHEN.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Zongshen</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="143">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F04%2F02%2F15af7190-3e0f-40b6-89e5-ac12e1e899ee%2FLOGO-PNG-0471451%4034x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Zontes</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="217">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F46%2F07%2F07a25546-8428-4476-a55a-87068cd70d99%2FZX_Auto_logo_image_picture%4034x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">ZX Auto</div><span
                            class="select-category__i-radio"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="body-inner" style="padding: 0 15px;">
        <div class="header__nav">
            <div class="header__nav-left"><span class="header__nav-btn--back js-header-filter-back-btn"></span></div>
            <div class="header__nav-title">Filtrlər</div>
            <div class="header__nav-right">
                <div class="popup-header__btn popup-header__btn--reset js-filter-header-reset-form">Sıfırla</div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="search-product">
            <div class="filter" style="padding-top: 0;">
                <form class="simple_form tz-form filter__form js-filter-form" id="new_q" data-advanced-select="true"
                      novalidate="novalidate" action="/autos" accept-charset="UTF-8" method="get">
                    <div class="tz-form__blk">
                        <div class="tz-form__group js-select-category-open" id="q_region" data-open="q_region"><input
                                class="tz-form__group-input" placeholder=" " readonly="" type="text" value=""><label
                                class="tz-form__group-label tz-form__group-label--select"
                                for="q_region">Şəhər</label><input name="q[region][]" type="hidden" value=""
                                                                   autocomplete="off"><select multiple="multiple"
                                                                                              class="select optional form-control is-hidden" name="q[region][]" id="q_region">
                                <option value="7">Ağcabədi</option>
                                <option value="4">Ağdam</option>
                                <option value="6">Ağdaş</option>
                                <option value="8">Ağstafa</option>
                                <option value="10">Ağsu</option>
                                <option value="9">Astara</option>
                                <option value="78">Babək</option>
                                <option value="1">Bakı</option>
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
                            </select><span
                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                class="tz-form__group-btn tz-form__group-btn--open"></span>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border js-popular-makes">
                        <div class="tz-form__blk-title">Marka və model</div>
                        <div class="popular-items-list tz-d-grid js-select-category" data-select="q_make">
                            <div class="popular-items__i js-popular-item" data-id="4">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F52%2Fc0231997-84f3-4e49-8a46-15d634db7502%2Fmercedes-benz-9%4054x.png">
                                </div>
                                <div class="popular-items__i-name">Mercedes</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="5">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F52%2F52%2F3ff4b2cf-b02a-4635-96be-4aa85d7ef6f4%2FBitmap%4054x.png">
                                </div>
                                <div class="popular-items__i-name">LADA (VAZ)</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="1">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F24%2Fc163753b-fe58-4501-9b34-8b26ad3cf092%2Fhyundai-motor-company-2%20copy%4054x.png">
                                </div>
                                <div class="popular-items__i-name">Hyundai</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="8">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F50%2F49%2F936b5858-fc12-4591-b7b0-5ab6185901f1%2F1280px-KIA_logo3.svg%4054x.png">
                                </div>
                                <div class="popular-items__i-name">Kia</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="23">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F44%2F9d109024-d1c6-436c-a735-865be0b23edc%2Ftoyota%20copy%203%4054x.png">
                                </div>
                                <div class="popular-items__i-name">Toyota</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="3">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F49%2F07%2F31cc0b93-8144-4916-8a21-919d963d0525%2F1200px-BMW_logo_%28gray%29.svg%4054x.png">
                                </div>
                                <div class="popular-items__i-name">BMW</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="29">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F26%2F86e211e9-0113-49ae-8785-12a96e1c0acc%2Fopel-2%4054x.png">
                                </div>
                                <div class="popular-items__i-name">Opel</div>
                            </div>
                            <div class="popular-items__i js-popular-item" data-id="2">
                                <div class="popular-items__i-img"><img
                                        src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTQvMjAvNDMvMzMvNDM0L0ZvcmQucG5nIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=9e1ad2ef45808800">
                                </div>
                                <div class="popular-items__i-name">Ford</div>
                            </div>
                        </div>
                        <div class="tz-container">
                            <div class="tz-btn tz-btn--full tz-btn--primary--outline js-select-category-open js-popular-btn"
                                 data-open="q_make">Bütün markaları göstər</div>
                        </div>
                    </div>
                    <div class="filter__box js-short-search is-hidden">
                        <div class="tz-form__box"><input class="js-country-input" name="q[country]" type="hidden">
                            <div class="tz-form__group js-select-category-open" data-open="q_make" data-reset="true">
                                <input class="tz-form__group-input" placeholder=" " readonly="" type="text"><label
                                    class="tz-form__group-label tz-form__group-label--select"
                                    for="q_make">Marka</label><input name="q[make][]" type="hidden" value=""
                                                                     autocomplete="off"><select multiple="multiple"
                                                                                                class="select optional form-control is-hidden" name="q[make][]" id="q_make">
                                    <option value="">Bütün markalar</option>
                                    <option value="280">Abarth</option>
                                    <option value="28">Acura</option>
                                    <option value="30">Alfa Romeo</option>
                                    <option value="156">Aprilia</option>
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
                                </select><span
                                    class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                    class="tz-form__group-btn tz-form__group-btn--open"></span>
                            </div>
                            <div class="toggle-models js-toggle-models">
                                <div class="tz-form__group tz-form__group--bordered--top js-select-category-open"
                                     data-open="q_model"><input class="tz-form__group-input" placeholder=" " readonly=""
                                                                type="text"><label class="tz-form__group-label tz-form__group-label--select"
                                                                                   for="q_model">Model</label><input name="q[model][]" type="hidden" value=""
                                                                                                                     autocomplete="off"><select multiple="multiple"
                                                                                                                                                class="select optional form-control is-hidden js-select-model" name="q[model][]"
                                                                                                                                                id="q_model">
                                        <option value="">Bütün modellər</option>
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__tabs">
                        <div class="filter__tabs-header"><input checked="checked" id="q_used" name="q[used]"
                                                                type="radio" value=""><label class="filter__tab js-filter-tab"
                                                                                             for="q_used">Hamısı</label><input type="radio" value="0" name="q[used]"
                                                                                                                               id="q_used_0"><label class="filter__tab js-filter-tab" for="q_used_0">Yeni</label><input
                                type="radio" value="1" name="q[used]" id="q_used_1"><label
                                class="filter__tab js-filter-tab" for="q_used_1">Sürülmüş</label></div>
                        <div class="filter__tabs-content">
                            <div class="tz-form__blk tz-form__blk--top-border">
                                <div class="tz-form__group tz-form__group--bordered--bottom js-select-category-open js-tab-content-group"
                                     data-open="q_category"><input class="tz-form__group-input" placeholder=" "
                                                                   readonly="" type="text"><label
                                        class="tz-form__group-label tz-form__group-label--select" for="q_category">Ban
                                        növü</label><input name="q[category][]" type="hidden" value=""
                                                           autocomplete="off"><select multiple="multiple"
                                                                                      class="select optional form-control is-hidden" name="q[category][]"
                                                                                      id="q_category">
                                        <option value="9">Avtobus</option>
                                        <option value="16">Dartqı</option>
                                        <option value="61">Fastbek</option>
                                        <option value="62">Fayton</option>
                                        <option value="14">Furqon</option>
                                        <option value="63">Hetçbek, 3 qapı</option>
                                        <option value="64">Hetçbek, 4 qapı</option>
                                        <option value="2">Hetçbek, 5 qapı</option>
                                        <option value="11">Kabriolet</option>
                                    </select><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span><span
                                        class="tz-form__group-btn tz-form__group-btn--open"></span>
                                    <div class="tz-form__group-divider"></div>
                                </div>
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"
                                     data-hidden-id="[&quot;1&quot;]"><label class="tz-form__group-label"
                                                                             for="q_mileage">Yürüş, km</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half"><input
                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                placeholder="min." maxlength="8" pattern="[0-9]*" size="8" type="text"
                                                name="q[mileage_from]" id="q_mileage_from"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half"><input
                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                placeholder="maks." maxlength="8" pattern="[0-9]*" size="8" type="text"
                                                name="q[mileage_to]" id="q_mileage_to"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_reg_year">İl</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                             data-open="q_year_from"><input class="tz-form__group-input"
                                                                            placeholder="min." readonly="" type="number" value=""><select
                                                wrapper="false" label="false"
                                                class="select optional form-control is-hidden" name="q[year_from]"
                                                id="q_year_from">
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
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                             data-open="q_year_to"><input class="tz-form__group-input"
                                                                          placeholder="maks." readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[year_to]" id="q_year_to">
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
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_engine_volume">Mühərrikin həcmi,
                                        sm<sup>3</sup></label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                             data-open="q_engine_volume_from"><input class="tz-form__group-input"
                                                                                     placeholder="min." readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[engine_volume_from]" id="q_engine_volume_from">
                                                <option value="" label=" "></option>
                                                <option value="0">0</option>
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                                <option value="300">300</option>
                                                <option value="400">400</option>
                                                <option value="500">500</option>
                                                <option value="600">600</option>
                                                <option value="700">700</option>
                                                <option value="800">800</option>
                                                <option value="900">900</option>
                                                <option value="1000">1000</option>
                                                <option value="1100">1100</option>
                                                <option value="1200">1200</option>
                                                <option value="1300">1300</option>
                                                <option value="1400">1400</option>
                                                <option value="1500">1500</option>
                                                <option value="1600">1600</option>
                                                <option value="1700">1700</option>
                                                <option value="1800">1800</option>
                                                <option value="1900">1900</option>
                                                <option value="2000">2000</option>
                                                <option value="2100">2100</option>
                                                <option value="2200">2200</option>
                                                <option value="2300">2300</option>
                                                <option value="2400">2400</option>
                                                <option value="2500">2500</option>
                                                <option value="2600">2600</option>
                                                <option value="2700">2700</option>
                                                <option value="2800">2800</option>
                                                <option value="2900">2900</option>
                                                <option value="3000">3000</option>
                                                <option value="3100">3100</option>
                                                <option value="3200">3200</option>
                                                <option value="3300">3300</option>
                                                <option value="3400">3400</option>
                                                <option value="3500">3500</option>
                                                <option value="3600">3600</option>
                                                <option value="3700">3700</option>
                                                <option value="3800">3800</option>
                                                <option value="3900">3900</option>
                                                <option value="4000">4000</option>
                                                <option value="4100">4100</option>
                                                <option value="4200">4200</option>
                                                <option value="4300">4300</option>
                                                <option value="4400">4400</option>
                                                <option value="4500">4500</option>
                                                <option value="4600">4600</option>
                                                <option value="4700">4700</option>
                                                <option value="4800">4800</option>
                                                <option value="4900">4900</option>
                                                <option value="5000">5000</option>
                                                <option value="5100">5100</option>
                                                <option value="5200">5200</option>
                                                <option value="5300">5300</option>
                                                <option value="5400">5400</option>
                                                <option value="5500">5500</option>
                                                <option value="5600">5600</option>
                                                <option value="5700">5700</option>
                                                <option value="5800">5800</option>
                                                <option value="5900">5900</option>
                                                <option value="6000">6000</option>
                                                <option value="6100">6100</option>
                                                <option value="6200">6200</option>
                                                <option value="6300">6300</option>
                                                <option value="6400">6400</option>
                                                <option value="6500">6500</option>
                                                <option value="7000">7000</option>
                                                <option value="7500">7500</option>
                                                <option value="8000">8000</option>
                                                <option value="8500">8500</option>
                                                <option value="9000">9000</option>
                                                <option value="9500">9500</option>
                                                <option value="10000">10000</option>
                                                <option value="11000">11000</option>
                                                <option value="12000">12000</option>
                                                <option value="13000">13000</option>
                                                <option value="14000">14000</option>
                                                <option value="15000">15000</option>
                                                <option value="16000">16000</option>
                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half js-select-category-open js-tab-content-group"
                                             data-open="q_engine_volume_to"><input class="tz-form__group-input"
                                                                                   placeholder="maks." readonly="" type="number" value=""><select
                                                wrapper="false" class="select optional form-control is-hidden"
                                                label="false" name="q[engine_volume_to]" id="q_engine_volume_to">
                                                <option value="" label=" "></option>
                                                <option value="0">0</option>
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                                <option value="300">300</option>
                                                <option value="400">400</option>
                                                <option value="500">500</option>
                                                <option value="600">600</option>
                                                <option value="700">700</option>
                                                <option value="800">800</option>
                                                <option value="900">900</option>
                                                <option value="1000">1000</option>
                                                <option value="1100">1100</option>
                                                <option value="1200">1200</option>
                                                <option value="1300">1300</option>
                                                <option value="1400">1400</option>
                                                <option value="1500">1500</option>
                                                <option value="1600">1600</option>
                                                <option value="1700">1700</option>
                                                <option value="1800">1800</option>
                                                <option value="1900">1900</option>
                                                <option value="2000">2000</option>
                                                <option value="2100">2100</option>
                                                <option value="2200">2200</option>
                                                <option value="2300">2300</option>
                                                <option value="2400">2400</option>
                                                <option value="2500">2500</option>
                                                <option value="2600">2600</option>
                                                <option value="2700">2700</option>
                                                <option value="2800">2800</option>
                                                <option value="2900">2900</option>
                                                <option value="3000">3000</option>
                                                <option value="3100">3100</option>
                                                <option value="3200">3200</option>
                                                <option value="3300">3300</option>
                                                <option value="3400">3400</option>
                                                <option value="3500">3500</option>
                                                <option value="3600">3600</option>
                                                <option value="3700">3700</option>
                                                <option value="3800">3800</option>
                                                <option value="3900">3900</option>
                                                <option value="4000">4000</option>
                                                <option value="4100">4100</option>
                                                <option value="4200">4200</option>
                                                <option value="4300">4300</option>
                                                <option value="4400">4400</option>
                                                <option value="4500">4500</option>
                                                <option value="4600">4600</option>
                                                <option value="4700">4700</option>
                                                <option value="4800">4800</option>
                                                <option value="4900">4900</option>
                                                <option value="5000">5000</option>
                                                <option value="5100">5100</option>
                                                <option value="5200">5200</option>
                                                <option value="5300">5300</option>
                                                <option value="5400">5400</option>
                                                <option value="5500">5500</option>
                                                <option value="5600">5600</option>
                                                <option value="5700">5700</option>
                                                <option value="5800">5800</option>
                                                <option value="5900">5900</option>
                                                <option value="6000">6000</option>
                                                <option value="6100">6100</option>
                                                <option value="6200">6200</option>
                                                <option value="6300">6300</option>
                                                <option value="6400">6400</option>
                                                <option value="6500">6500</option>
                                                <option value="7000">7000</option>
                                                <option value="7500">7500</option>
                                                <option value="8000">8000</option>
                                                <option value="8500">8500</option>
                                                <option value="9000">9000</option>
                                                <option value="9500">9500</option>
                                                <option value="10000">10000</option>
                                                <option value="11000">11000</option>
                                                <option value="12000">12000</option>
                                                <option value="13000">13000</option>
                                                <option value="14000">14000</option>
                                                <option value="15000">15000</option>
                                                <option value="16000">16000</option>
                                            </select><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-form__group tz-form__group--range js-tab-content-group"><label
                                        class="tz-form__group-label" for="q_power">Mühərrikin gücü, a.g.</label>
                                    <div class="tz-form__group-fields tz-form__group-fields--2 tz-d-grid">
                                        <div class="tz-form__group-fields__half q_power"><input
                                                class="numeric integer optional form-control tz-form__group-input"
                                                placeholder="min." maxlength="4" pattern="[0-9]*" type="number" step="1"
                                                size="4" name="q[power_from]" id="q_power_from"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                        <div class="tz-form__group-fields__half q_power"><input
                                                class="numeric integer optional form-control tz-form__group-input"
                                                placeholder="maks." maxlength="4" pattern="[0-9]*" type="number"
                                                step="1" size="4" name="q[power_to]" id="q_power_to"><span
                                                class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-form__group js-select-category-open js-tab-content-group" id="q_color"
                                     data-open="q_color"><input class="tz-form__group-input" placeholder=" " readonly=""
                                                                type="text" value=""><label
                                        class="tz-form__group-label tz-form__group-label--select"
                                        for="q_color">Rəng</label><input name="q[color][]" type="hidden" value=""
                                                                         autocomplete="off"><select multiple="multiple"
                                                                                                    class="select optional form-control is-hidden" name="q[color][]">
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
                                <div class="tz-form__group js-select-category-open js-tab-content-group"
                                     data-open="q_market"><input class="tz-form__group-input" placeholder=" " readonly=""
                                                                 type="text" value=""><label
                                        class="tz-form__group-label tz-form__group-label--select" for="q_market">Hansı
                                        bazar üçün yığılıb</label><input name="q[market][]" type="hidden" value=""
                                                                         autocomplete="off"><select multiple="multiple"
                                                                                                    class="select optional form-control is-hidden" name="q[market][]" id="q_market">
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
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__group tz-form__group--range tz-form__group--price"><label
                                class="tz-form__group-label" for="q_price">Qiymət</label>
                            <div class="tz-form__group-fields tz-form__group-fields--3 tz-d-grid">
                                <div class="tz-form__group-fields__half"><input inputmode="numeric"
                                                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                                                placeholder="min." maxlength="11" pattern="[0-9]*" size="11" type="text"
                                                                                name="q[price_from]" id="q_price_from"><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                </div>
                                <div class="tz-form__group-fields__half"><input inputmode="numeric"
                                                                                class="string optional form-control tz-form__group-input js-val-with-spaces"
                                                                                placeholder="maks." maxlength="11" pattern="[0-9]*" size="11" type="text"
                                                                                name="q[price_to]" id="q_price_to"><span
                                        class="tz-form__group-btn tz-form__group-btn--reset js-reset-input"></span>
                                </div>
                                <div class="filter__short tz-form__short tz-d-grid tz-justify-center tz-align-center js-select-category-open open-qurrency"
                                     data-open="q_currency" id="open-qurrency"><select name="q[currency]"
                                                                                       id="q_currency">

                                        <option value="azn">AZN</option>
                                        <option value="usd">USD</option>
                                        <option value="eur">EUR</option>
                                    </select>
                                    <div class="tz-form__short-btn"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tz-form__group">
                            <div class="tz-form__group-list"><input name="q[loan]" type="hidden" value="0"
                                                                    autocomplete="off"><input class="boolean optional form-control" type="checkbox"
                                                                                              value="1" name="q[loan]" id="q_loan"><label class="boolean optional control-label"
                                                                                                                                          for="q_loan">Kredit</label><input name="q[barter]" type="hidden" value="0"
                                                                                                                                                                            autocomplete="off"><input class="boolean optional form-control" type="checkbox"
                                                                                                                                                                                                      value="1" name="q[barter]" id="q_barter"><label
                                    class="boolean optional control-label" for="q_barter">Barter</label><input
                                    autocomplete="off" type="hidden" name="q[sort]" id="q_sort"
                                    style="width: 15px;"><span style="display: none;"></span></div>
                        </div>
                    </div>
                    <div class="filter__tabs-header"><input checked="checked" id="q_only_shops" name="q[only_shops]"
                                                            type="radio" value=""><label class="filter__tab" for="q_only_shops">Hamısı</label><input
                            type="radio" value="1" name="q[only_shops]" id="q_only_shops_1"><label class="filter__tab"
                                                                                                   for="q_only_shops_1">Salonlar</label><input type="radio" value="0" name="q[only_shops]"
                                                                                                                                               id="q_only_shops_0"><label class="filter__tab" for="q_only_shops_0">Şəxsi</label></div>
                    <div class="availability_statuses">
                        <div class="tz-form__blk tz-form__blk--top-border">
                            <div class="tz-form__blk-title">Status</div><span class="label-new status-new">yeni</span>
                            <div class="tz-form__group tz-form__group--radio"><span><input checked="checked"
                                                                                           id="q_availability_status" name="q[availability_status]" type="radio"
                                                                                           value=""><label class="collection_radio_buttons"
                                                                                                           for="q_availability_status">Vacib deyil</label></span><span><input type="radio"
                                                                                                                                                                              value="available" name="q[availability_status]"
                                                                                                                                                                              id="q_availability_status_available"><label class="collection_radio_buttons"
                                                                                                                                                                                                                          for="q_availability_status_available">Satışdadır</label></span><span><input
                                        type="radio" value="order" name="q[availability_status]"
                                        id="q_availability_status_order"><label class="collection_radio_buttons"
                                                                                for="q_availability_status_order">Sifarişlə</label></span></div>
                        </div>
                        <div class="tz-form__divider"></div>
                    </div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Yanacaq növü</div>
                        <div class="tz-form__group tz-form__group--radio"><span><input checked="checked"
                                                                                       id="q_fuel_type_0" name="q[fuel_type][]" type="radio" value=""><label
                                    class="collection_radio_buttons" for="q_fuel_type_0">Vacib
                                    deyil</label></span><span><input multiple="multiple" type="radio" value="1"
                                                                     name="q[fuel_type][]" id="q_fuel_type_1"><label class="collection_radio_buttons"
                                                                                                                     for="q_fuel_type_1">Benzin</label></span><span><input multiple="multiple"
                                                                                                                                                                           type="radio" value="2" name="q[fuel_type][]" id="q_fuel_type_2"><label
                                    class="collection_radio_buttons"
                                    for="q_fuel_type_2">Dizel</label></span><span><input multiple="multiple"
                                                                                         type="radio" value="3" name="q[fuel_type][]" id="q_fuel_type_3"><label
                                    class="collection_radio_buttons" for="q_fuel_type_3">Qaz</label></span><span><input
                                    multiple="multiple" type="radio" value="4" name="q[fuel_type][]"
                                    id="q_fuel_type_4"><label class="collection_radio_buttons"
                                                              for="q_fuel_type_4">Elektro</label></span><span><input multiple="multiple"
                                                                                                                     type="radio" value="5" name="q[fuel_type][]" id="q_fuel_type_5"><label
                                    class="collection_radio_buttons"
                                    for="q_fuel_type_5">Hibrid</label></span><span><input multiple="multiple"
                                                                                          type="radio" value="6" name="q[fuel_type][]" id="q_fuel_type_6"><label
                                    class="collection_radio_buttons" for="q_fuel_type_6">Plug-in Hibrid</label></span>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Ötürücü</div>
                        <div class="tz-form__group tz-form__group--radio"><span><input checked="checked" id="q_gear_0"
                                                                                       name="q[gear][]" type="radio" value=""><label class="collection_radio_buttons"
                                                                                                                                     for="q_gear_0">Vacib deyil</label></span><span><input multiple="multiple"
                                                                                                                                                                                           type="radio" value="1" name="q[gear][]" id="q_gear_1"><label
                                    class="collection_radio_buttons" for="q_gear_1">Arxa</label></span><span><input
                                    multiple="multiple" type="radio" value="2" name="q[gear][]" id="q_gear_2"><label
                                    class="collection_radio_buttons" for="q_gear_2">Ön</label></span><span><input
                                    multiple="multiple" type="radio" value="3" name="q[gear][]" id="q_gear_3"><label
                                    class="collection_radio_buttons" for="q_gear_3">Tam</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Sürətlər qutusu</div>
                        <div class="tz-form__group tz-form__group--radio">
                            <div class="tz-form__group-list"><span><input checked="checked" id="q_transmission_0"
                                                                          name="q[transmission][]" type="radio" value=""><label
                                        class="collection_radio_buttons" for="q_transmission_0">Vacib
                                        deyil</label></span><span><input multiple="multiple" type="radio" value="2"
                                                                         name="q[transmission][]" id="q_transmission_2"><label
                                        class="collection_radio_buttons"
                                        for="q_transmission_2">Avtomat</label></span><span><input multiple="multiple"
                                                                                                  type="radio" value="4" name="q[transmission][]" id="q_transmission_4"><label
                                        class="collection_radio_buttons"
                                        for="q_transmission_4">Variator</label></span><span><input multiple="multiple"
                                                                                                   type="radio" value="1" name="q[transmission][]" id="q_transmission_1"><label
                                        class="collection_radio_buttons"
                                        for="q_transmission_1">Mexaniki</label></span><span><input multiple="multiple"
                                                                                                   type="radio" value="3" name="q[transmission][]" id="q_transmission_3"><label
                                        class="collection_radio_buttons"
                                        for="q_transmission_3">Robot</label></span><span><input multiple="multiple"
                                                                                                type="radio" value="6" name="q[transmission][]" id="q_transmission_6"><label
                                        class="collection_radio_buttons" for="q_transmission_6">Reduktor</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Yerlərin sayı</div>
                        <div class="tz-form__group"><span><input type="checkbox" value="1" name="q[seats_count][]"
                                                                 id="q_seats_count_1"><label class="collection_check_boxes"
                                                                                             for="q_seats_count_1">1</label></span><span><input type="checkbox" value="2"
                                                                                                                                                name="q[seats_count][]" id="q_seats_count_2"><label class="collection_check_boxes"
                                                                                                                                                                                                    for="q_seats_count_2">2</label></span><span><input type="checkbox" value="3"
                                                                                                                                                                                                                                                       name="q[seats_count][]" id="q_seats_count_3"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                           for="q_seats_count_3">3</label></span><span><input type="checkbox" value="4"
                                                                                                                                                                                                                                                                                                                                                              name="q[seats_count][]" id="q_seats_count_4"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                  for="q_seats_count_4">4</label></span><span><input type="checkbox" value="5"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                     name="q[seats_count][]" id="q_seats_count_5"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         for="q_seats_count_5">5</label></span><span><input type="checkbox" value="6"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            name="q[seats_count][]" id="q_seats_count_6"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                for="q_seats_count_6">6</label></span><span><input type="checkbox" value="7"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   name="q[seats_count][]" id="q_seats_count_7"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       for="q_seats_count_7">7</label></span><span><input type="checkbox" value="8"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          name="q[seats_count][]" id="q_seats_count_8"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              for="q_seats_count_8">8+</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Avtomobilin təchizatı</div>
                        <div class="tz-form__group"><span><input type="checkbox" value="4" name="q[extras][]"
                                                                 id="q_extras_4"><label class="collection_check_boxes" for="q_extras_4">Yüngül
                                    lehimli disklər</label></span><span><input type="checkbox" value="5"
                                                                               name="q[extras][]" id="q_extras_5"><label class="collection_check_boxes"
                                                                                                                         for="q_extras_5">ABS</label></span><span><input type="checkbox" value="7"
                                                                                                                                                                         name="q[extras][]" id="q_extras_7"><label class="collection_check_boxes"
                                                                                                                                                                                                                   for="q_extras_7">Lyuk</label></span><span><input type="checkbox" value="8"
                                                                                                                                                                                                                                                                    name="q[extras][]" id="q_extras_8"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                              for="q_extras_8">Yağış sensoru</label></span><span><input type="checkbox" value="9"
                                                                                                                                                                                                                                                                                                                                                                        name="q[extras][]" id="q_extras_9"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                  for="q_extras_9">Mərkəzi qapanma</label></span><span><input type="checkbox"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              value="10" name="q[extras][]" id="q_extras_10"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    for="q_extras_10">Park radarı</label></span><span><input type="checkbox" value="11"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             name="q[extras][]" id="q_extras_11"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        for="q_extras_11">Kondisioner</label></span><span><input type="checkbox" value="12"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 name="q[extras][]" id="q_extras_12"><label class="collection_check_boxes"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            for="q_extras_12">Oturacaqların isidilməsi</label></span><span><input
                                    type="checkbox" value="13" name="q[extras][]" id="q_extras_13"><label
                                    class="collection_check_boxes" for="q_extras_13">Dəri
                                    salon</label></span><span><input type="checkbox" value="14" name="q[extras][]"
                                                                     id="q_extras_14"><label class="collection_check_boxes" for="q_extras_14">Ksenon
                                    lampalar</label></span><span><input type="checkbox" value="15" name="q[extras][]"
                                                                        id="q_extras_15"><label class="collection_check_boxes" for="q_extras_15">Arxa
                                    görüntü kamerası</label></span><span><input type="checkbox" value="16"
                                                                                name="q[extras][]" id="q_extras_16"><label class="collection_check_boxes"
                                                                                                                           for="q_extras_16">Yan pərdələr</label></span><span><input type="checkbox" value="17"
                                                                                                                                                                                     name="q[extras][]" id="q_extras_17"><label class="collection_check_boxes"
                                                                                                                                                                                                                                for="q_extras_17">Oturacaqların ventilyasiyası</label></span></div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__blk-title">Vəziyyəti</div>
                        <div class="tz-form__group">
                            <div class="tz-form__group-list"><input name="q[crashed]" type="hidden" value="1"
                                                                    autocomplete="off"><input class="boolean optional form-control" type="checkbox"
                                                                                              value="0" name="q[crashed]" id="q_crashed"><label
                                    class="boolean optional control-label" for="q_crashed">Vuruğu yoxdur</label><input
                                    name="q[painted]" type="hidden" value="1" autocomplete="off"><input
                                    class="boolean optional form-control" type="checkbox" value="0" name="q[painted]"
                                    id="q_painted"><label class="boolean optional control-label"
                                                          for="q_painted">Rənglənməyib</label></div>
                        </div>
                    </div>
                    <div class="tz-form__divider"></div>
                    <div class="tz-form__blk tz-form__blk--top-border">
                        <div class="tz-form__checkbox tz-form__group"><label class="" for="q_for_spare_parts">
                                <div class="tz-form__checkbox-top tz-d-flex tz-justify-between tz-align-center"><input
                                        name="q[for_spare_parts]" type="hidden" value="0" autocomplete="off"><input
                                        class="boolean optional form-control" type="checkbox" value="1"
                                        name="q[for_spare_parts]" id="q_for_spare_parts">
                                    <div class="tz-form__checkbox-text">Qəzalı və ya ehtiyat hissələr üçün</div>
                                    <div class="tz-form__checkbox-tickmark"></div>
                                </div>
                                <div class="tz-form__checkbox-description">Təmirə ehtiyacı var və ya ümumiyyətlə
                                    yararsız vəziyyətdədir.</div>
                            </label></div>
                    </div>
                    <div class="tz-form__divider js-tab-content-group" data-hidden-id="[&quot;1&quot;]"></div>
                    <div class="tz-form__blk tz-form__blk--top-border js-tab-content-group"
                         data-hidden-id="[&quot;1&quot;]">
                        <div class="tz-form__blk-title">Sahiblərinin sayı</div>
                        <div class="tz-form__group"><span><input type="checkbox" value="1"
                                                                 name="q[prior_owners_count][]" id="q_prior_owners_count_1"><label
                                    class="collection_check_boxes"
                                    for="q_prior_owners_count_1">1</label></span><span><input type="checkbox" value="2"
                                                                                              name="q[prior_owners_count][]" id="q_prior_owners_count_2"><label
                                    class="collection_check_boxes"
                                    for="q_prior_owners_count_2">2</label></span><span><input type="checkbox" value="3"
                                                                                              name="q[prior_owners_count][]" id="q_prior_owners_count_3"><label
                                    class="collection_check_boxes"
                                    for="q_prior_owners_count_3">3</label></span><span><input type="checkbox" value="4"
                                                                                              name="q[prior_owners_count][]" id="q_prior_owners_count_4"><label
                                    class="collection_check_boxes" for="q_prior_owners_count_4">4 və daha
                                    çox</label></span></div>
                    </div>
                    <div class="tz-container filter__bottom"><button name="button" type="submit" data-disable-with=""
                                                                     class="tz-btn tz-btn--primary tz-btn--full">Axtar</button></div>
                </form>
            </div>
        </div>
    </div>


    <!-- Popup markalar -->
    <div class="select-category select-category--full-height js-select-category select-category--q_make"
         data-open-next="q_model" data-select="q_make">
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
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="4">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F52%2Fc0231997-84f3-4e49-8a46-15d634db7502%2Fmercedes-benz-9%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Mercedes</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="5">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F52%2F52%2F3ff4b2cf-b02a-4635-96be-4aa85d7ef6f4%2FBitmap%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">LADA (VAZ)</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="1">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F53%2F24%2Fc163753b-fe58-4501-9b34-8b26ad3cf092%2Fhyundai-motor-company-2%20copy%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Hyundai</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="8">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F50%2F49%2F936b5858-fc12-4591-b7b0-5ab6185901f1%2F1280px-KIA_logo3.svg%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Kia</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="23">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F44%2F9d109024-d1c6-436c-a735-865be0b23edc%2Ftoyota%20copy%203%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Toyota</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="3">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F49%2F07%2F31cc0b93-8144-4916-8a21-919d963d0525%2F1200px-BMW_logo_%28gray%29.svg%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">BMW</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="29">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F18%2F16%2F54%2F26%2F86e211e9-0113-49ae-8785-12a96e1c0acc%2Fopel-2%4054x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Opel</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="2">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/media/W1siZiIsIjIwMTMvMDYvMTQvMjAvNDMvMzMvNDM0L0ZvcmQucG5nIl0sWyJwIiwidGh1bWIiLCI2MHgiXV0?sha=9e1ad2ef45808800">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Ford</div><span
                            class="select-category__i-radio"></span>
                    </div>
                </div>
            </div>
            <div class="select-category__blk">
                <div class="select-category__blk-title" id="js-all-makes-title">Bütün markalar</div>
                <div class="select-category__blk-content">
                    <div class="select-category__countries-list">
                        <div
                            class="select-category__i select-category__i--sub select-category__i--btn js-countries-button">
                            <div class="select-category__i-name">İstehsalçı ölkə üzrə</div>
                        </div>
                        <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                             data-country-id="2">
                            <div class="select-category__i-name js-category-select-item-name">Almaniya</div><span
                                class="select-category__i-radio"></span>
                        </div>
                        <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                             data-country-id="5">
                            <div class="select-category__i-name js-category-select-item-name">Cənubi Koreya</div><span
                                class="select-category__i-radio"></span>
                        </div>
                        <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                             data-country-id="3">
                            <div class="select-category__i-name js-category-select-item-name">Yaponiya</div><span
                                class="select-category__i-radio"></span>
                        </div>
                        <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                             data-country-id="4">
                            <div class="select-category__i-name js-category-select-item-name">Rusiya</div><span
                                class="select-category__i-radio"></span>
                        </div>
                        <div class="select-category__i select-category__i--sub js-category-select-item-make js-country is-hidden"
                             data-country-id="1">
                            <div class="select-category__i-name js-category-select-item-name">ABŞ</div><span
                                class="select-category__i-radio"></span>
                        </div>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="285">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2018%2F12%2F07%2F10%2F14%2F09%2F472b6a87-41e3-4297-980c-54ec3acb3ed3%2FZONGSHEN.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Zongshen</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="143">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F04%2F02%2F15af7190-3e0f-40b6-89e5-ac12e1e899ee%2FLOGO-PNG-0471451%4034x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">Zontes</div><span
                            class="select-category__i-radio"></span>
                    </div>
                    <div class="select-category__i select-category__i--with-count js-category-select-item-make"
                         data-id="217">
                        <div class="select-category__i-logo"><img loading="lazy"
                                                                  src="https://turbo.azstatic.com/uploads/makelogo/2021%2F05%2F17%2F16%2F46%2F07%2F07a25546-8428-4476-a55a-87068cd70d99%2FZX_Auto_logo_image_picture%4034x.png">
                        </div>
                        <div class="select-category__i-name js-category-select-item-name">ZX Auto</div><span
                            class="select-category__i-radio"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end markalar -->

    <!-- popup ban novu -->
    <div class="select-category select-category--rounded js-select-category select-category--q_category"
         data-select="q_category">
        <div class="select-category__header-container">
            <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                <div class="select-category__header-title">Ban növü</div>
                <div class="select-category__header-cancel js-close-popup-btn" id="close-ban"></div>
            </div>
        </div>
        <div class="select-category__body">
            <div class="select-category__i js-category-select-item" data-id="9">
                <div class="select-category__i-name">Avtobus</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="16">
                <div class="select-category__i-name">Dartqı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="61">
                <div class="select-category__i-name">Fastbek</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="62">
                <div class="select-category__i-name">Fayton</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="14">
                <div class="select-category__i-name">Furqon</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="63">
                <div class="select-category__i-name">Hetçbek, 3 qapı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="64">
                <div class="select-category__i-name">Hetçbek, 4 qapı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="2">
                <div class="select-category__i-name">Hetçbek, 5 qapı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="11">
                <div class="select-category__i-name">Kabriolet</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="26">
                <div class="select-category__i-name">Karvan</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="65">
                <div class="select-category__i-name">Kompakt-Van</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="3">
                <div class="select-category__i-name">Kupe</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="25">
                <div class="select-category__i-name">Kvadrosikl</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="28">
                <div class="select-category__i-name">Liftbek</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="66">
                <div class="select-category__i-name">Limuzin</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="7">
                <div class="select-category__i-name">Mikroavtobus</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="67">
                <div class="select-category__i-name">Mikrovan</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="5">
                <div class="select-category__i-name">Minivan</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="27">
                <div class="select-category__i-name">Moped</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="20">
                <div class="select-category__i-name">Motosiklet</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="68">
                <div class="select-category__i-name">Offroader / SUV, 3 qapı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="21">
                <div class="select-category__i-name">Offroader / SUV, 5 qapı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="69">
                <div class="select-category__i-name">Offroader / SUV, açıq</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="70">
                <div class="select-category__i-name">Pikap, bir yarım kabin</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="6">
                <div class="select-category__i-name">Pikap, ikiqat kabin</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="71">
                <div class="select-category__i-name">Pikap, tək kabin</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="22">
                <div class="select-category__i-name">Qolfkar</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="8">
                <div class="select-category__i-name">Rodster</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="1">
                <div class="select-category__i-name">Sedan</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="73">
                <div class="select-category__i-name">Spidster</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="72">
                <div class="select-category__i-name">SUV Kupe</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="74">
                <div class="select-category__i-name">Tarqa</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="75">
                <div class="select-category__i-name">Universal, 3 qapı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="4">
                <div class="select-category__i-name">Universal, 5 qapı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="19">
                <div class="select-category__i-name">Van</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="13">
                <div class="select-category__i-name">Yük maşını</div><span class="select-category__i-radio"></span>
            </div>
        </div>
    </div>
    <!-- End Ban novu -->

    <!-- color popup -->
    <div class="select-category select-category--rounded js-select-category select-category--q_color"
         data-select="q_color">
        <div class="select-category__header-container">
            <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                <div class="select-category__header-title">Rəng</div>
                <div class="select-category__header-cancel js-close-popup-btn" id="close-btn"></div>
            </div>
        </div>
        <div class="select-category__body">
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="5">
                <div class="select-category__i-color" style="background-color: #000000"></div>
                <div class="select-category__i-name">Qara</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="27">
                <div class="select-category__i-color" style="background-color: #505050"></div>
                <div class="select-category__i-name">Yaş Asfalt</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="7">
                <div class="select-category__i-color" style="background-color: #808080"></div>
                <div class="select-category__i-name">Boz</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="8">
                <div class="select-category__i-color" style="background-color: #c0c0c0"></div>
                <div class="select-category__i-name">Gümüşü</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="2">
                <div class="select-category__i-color" style="background-color: #ffffff"></div>
                <div class="select-category__i-name">Ağ</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="12">
                <div class="select-category__i-color" style="background-color: #f5f5dc"></div>
                <div class="select-category__i-name">Bej</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="35">
                <div class="select-category__i-color" style="background-color: #9b2d30"></div>
                <div class="select-category__i-name">Tünd qırmızı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="1">
                <div class="select-category__i-color" style="background-color: #ff0000"></div>
                <div class="select-category__i-name">Qırmızı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="21">
                <div class="select-category__i-color" style="background-color: #ffc0cb"></div>
                <div class="select-category__i-name">Çəhrayı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="15">
                <div class="select-category__i-color" style="background-color: #ffa500"></div>
                <div class="select-category__i-name">Narıncı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="14">
                <div class="select-category__i-color" style="background-color: #ffd700"></div>
                <div class="select-category__i-name">Qızılı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="6">
                <div class="select-category__i-color" style="background-color: #ffff00"></div>
                <div class="select-category__i-name">Sarı</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="4">
                <div class="select-category__i-color" style="background-color: #00ff00"></div>
                <div class="select-category__i-name">Yaşıl</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="57">
                <div class="select-category__i-color" style="background-color: #AFD3AF"></div>
                <div class="select-category__i-name">Açıq yaşıl</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="9">
                <div class="select-category__i-color" style="background-color: #42aaff"></div>
                <div class="select-category__i-name">Mavi</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="3">
                <div class="select-category__i-color" style="background-color: #0000ff"></div>
                <div class="select-category__i-name">Göy</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="11">
                <div class="select-category__i-color" style="background-color: #8b00ff"></div>
                <div class="select-category__i-name">Bənövşəyi</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item select-category__i--color" data-id="10">
                <div class="select-category__i-color" style="background-color: #964b00"></div>
                <div class="select-category__i-name">Qəhvəyi</div><span class="select-category__i-radio"></span>
            </div>
        </div>
    </div>
    <!-- end color popup -->

    <!-- hansi bazar popup -->
    <div class="select-category select-category--rounded js-select-category select-category--q_market"
         data-select="q_market" id="q_market">
        <div class="select-category__header-container">
            <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
                <div class="select-category__header-title">Hansı bazar üçün yığılıb</div>
                <div class="select-category__header-cancel js-close-popup-btn" id="close-market"></div>
            </div>
        </div>
        <div class="select-category__body">
            <div class="select-category__i js-category-select-item" data-id="1">
                <div class="select-category__i-name">Amerika</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="2">
                <div class="select-category__i-name">Avropa</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="42">
                <div class="select-category__i-name">Çin</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="9">
                <div class="select-category__i-name">Digər</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="6">
                <div class="select-category__i-name">Dubay</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="5">
                <div class="select-category__i-name">Koreya</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="7">
                <div class="select-category__i-name">Rəsmi diler</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="8">
                <div class="select-category__i-name">Rusiya</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="4">
                <div class="select-category__i-name">Yaponiya</div><span class="select-category__i-radio"></span>
            </div>
        </div>
    </div>
    <!-- end bazar -->

    <!-- azn popup -->
    <div class="select-category select-category--rounded select-category--short js-select-category select-category--q_currency valyuta"
         data-select="q_currency">
        <div class="select-category__header tz-d-flex tz-align-flex-end tz-justify-center">
            <div class="select-category__header-title">Valyuta</div>
            <div class="select-category__header-cancel js-close-popup-btn" id="close-azn"></div>
        </div>
        <div class="select-category__body">
            <div class="select-category__i js-category-select-item js-list-i selected" data-id="azn">
                <div class="select-category__i-name">AZN</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item js-list-i" data-id="usd">
                <div class="select-category__i-name">USD</div><span class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item js-list-i" data-id="eur">
                <div class="select-category__i-name">EUR</div><span class="select-category__i-radio"></span>
            </div>
        </div>
    </div>
    <!-- end azn popup -->

    <!-- region popup -->
    <div class="select-category select-category--full-height js-select-category select-category--q_region"
         data-select="q_region">
        <div class="select-category__header-container">
            <div class="popup-header">
                <div class="popup-header__left">
                    <div class="popup-header__btn popup-header__btn--back js-close-popup-btn" id="close-region"></div>
                </div>
                <div class="popup-header__title">Şəhər</div>
                <div class="popup-header__right"></div>
            </div>
            <div class="select-category__search"><input type="text" name="" id=""
                                                        class="select-category__search-input js-search-input" placeholder="Şəhər axtar" autocomplete="off">
            </div>
        </div>
        <div class="select-category__body select-category__body--type-2">
            <div class="select-category__i js-category-select-item" data-id="7">
                <div class="select-category__i-name js-category-select-item-name">Ağcabədi</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="4">
                <div class="select-category__i-name js-category-select-item-name">Ağdam</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="6">
                <div class="select-category__i-name js-category-select-item-name">Ağdaş</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="8">
                <div class="select-category__i-name js-category-select-item-name">Ağstafa</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="10">
                <div class="select-category__i-name js-category-select-item-name">Ağsu</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="9">
                <div class="select-category__i-name js-category-select-item-name">Astara</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="78">
                <div class="select-category__i-name js-category-select-item-name">Babək</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="1">
                <div class="select-category__i-name js-category-select-item-name">Bakı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="14">
                <div class="select-category__i-name js-category-select-item-name">Balakən</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="13">
                <div class="select-category__i-name js-category-select-item-name">Beyləqan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="12">
                <div class="select-category__i-name js-category-select-item-name">Bərdə</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="15">
                <div class="select-category__i-name js-category-select-item-name">Biləsuvar</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="26">
                <div class="select-category__i-name js-category-select-item-name">Cəbrayıl</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="25">
                <div class="select-category__i-name js-category-select-item-name">Cəlilabad</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="27">
                <div class="select-category__i-name js-category-select-item-name">Culfa</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="24">
                <div class="select-category__i-name js-category-select-item-name">Daşkəsən</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="23">
                <div class="select-category__i-name js-category-select-item-name">Dəliməmmədli</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="60">
                <div class="select-category__i-name js-category-select-item-name">Füzuli</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="36">
                <div class="select-category__i-name js-category-select-item-name">Gədəbəy</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="2">
                <div class="select-category__i-name js-category-select-item-name">Gəncə</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="18">
                <div class="select-category__i-name js-category-select-item-name">Goranboy</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="17">
                <div class="select-category__i-name js-category-select-item-name">Göyçay</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="19">
                <div class="select-category__i-name js-category-select-item-name">Göygöl</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="77">
                <div class="select-category__i-name js-category-select-item-name">Hacıqabul</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="22">
                <div class="select-category__i-name js-category-select-item-name">Horadiz</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="32">
                <div class="select-category__i-name js-category-select-item-name">İmişli</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="33">
                <div class="select-category__i-name js-category-select-item-name">İsmayıllı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="37">
                <div class="select-category__i-name js-category-select-item-name">Kəlbəcər</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="41">
                <div class="select-category__i-name js-category-select-item-name">Kürdəmir</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="42">
                <div class="select-category__i-name js-category-select-item-name">Laçın</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="43">
                <div class="select-category__i-name js-category-select-item-name">Lerik</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="11">
                <div class="select-category__i-name js-category-select-item-name">Lənkəran</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="45">
                <div class="select-category__i-name js-category-select-item-name">Masallı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="46">
                <div class="select-category__i-name js-category-select-item-name">Mingəçevir</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="47">
                <div class="select-category__i-name js-category-select-item-name">Naftalan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="48">
                <div class="select-category__i-name js-category-select-item-name">Naxçıvan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="49">
                <div class="select-category__i-name js-category-select-item-name">Neftçala</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="50">
                <div class="select-category__i-name js-category-select-item-name">Oğuz</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="51">
                <div class="select-category__i-name js-category-select-item-name">Ordubad</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="35">
                <div class="select-category__i-name js-category-select-item-name">Qax</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="34">
                <div class="select-category__i-name js-category-select-item-name">Qazax</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="16">
                <div class="select-category__i-name js-category-select-item-name">Qəbələ</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="21">
                <div class="select-category__i-name js-category-select-item-name">Qobustan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="38">
                <div class="select-category__i-name js-category-select-item-name">Quba</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="40">
                <div class="select-category__i-name js-category-select-item-name">Qusar</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="52">
                <div class="select-category__i-name js-category-select-item-name">Saatlı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="53">
                <div class="select-category__i-name js-category-select-item-name">Sabirabad</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="68">
                <div class="select-category__i-name js-category-select-item-name">Şabran</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="54">
                <div class="select-category__i-name js-category-select-item-name">Salyan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="73">
                <div class="select-category__i-name js-category-select-item-name">Şamaxı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="55">
                <div class="select-category__i-name js-category-select-item-name">Samux</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="72">
                <div class="select-category__i-name js-category-select-item-name">Şəki</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="69">
                <div class="select-category__i-name js-category-select-item-name">Şəmkir</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="70">
                <div class="select-category__i-name js-category-select-item-name">Şərur</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="74">
                <div class="select-category__i-name js-category-select-item-name">Şirvan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="56">
                <div class="select-category__i-name js-category-select-item-name">Siyəzən</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="3">
                <div class="select-category__i-name js-category-select-item-name">Sumqayıt</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="58">
                <div class="select-category__i-name js-category-select-item-name">Tərtər</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="57">
                <div class="select-category__i-name js-category-select-item-name">Tovuz</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="59">
                <div class="select-category__i-name js-category-select-item-name">Ucar</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="62">
                <div class="select-category__i-name js-category-select-item-name">Xaçmaz</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="61">
                <div class="select-category__i-name js-category-select-item-name">Xankəndi</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="67">
                <div class="select-category__i-name js-category-select-item-name">Xırdalan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="66">
                <div class="select-category__i-name js-category-select-item-name">Xızı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="65">
                <div class="select-category__i-name js-category-select-item-name">Xudat</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="76">
                <div class="select-category__i-name js-category-select-item-name">Yardımlı</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="28">
                <div class="select-category__i-name js-category-select-item-name">Yevlax</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="29">
                <div class="select-category__i-name js-category-select-item-name">Zaqatala</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="30">
                <div class="select-category__i-name js-category-select-item-name">Zəngilan</div><span
                    class="select-category__i-radio"></span>
            </div>
            <div class="select-category__i js-category-select-item" data-id="31">
                <div class="select-category__i-name js-category-select-item-name">Zərdab</div><span
                    class="select-category__i-radio"></span>
            </div>
        </div>
    </div>
{{--    <script>--}}
{{--        document.querySelector('.tz-container').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "hidden";--}}
{{--            document.querySelector('.select-category--q_make').classList.add('select-category--open');--}}
{{--        });--}}

{{--        document.querySelector('.js-close-popup-btn').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "";--}}
{{--            document.querySelector('.select-category--q_make').classList.remove('select-category--open');--}}
{{--        });--}}

{{--        document.querySelector('.js-tab-content-group').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "hidden";--}}
{{--            document.querySelector('.select-category--q_category').classList.add('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('close-ban').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "";--}}
{{--            document.querySelector('.select-category--q_category').classList.remove('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('q_color').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "hidden";--}}
{{--            document.querySelector('.select-category--q_color').classList.add('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('close-btn').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "";--}}
{{--            document.querySelector('.select-category--q_color').classList.remove('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('q_market').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "hidden";--}}
{{--            document.querySelector('.select-category--q_market').classList.add('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('close-market').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "";--}}
{{--            document.querySelector('.select-category--q_market').classList.remove('select-category--open');--}}
{{--        });--}}


{{--        document.getElementById('open-qurrency').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "hidden";--}}
{{--            document.querySelector('.valyuta').classList.add('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('close-azn').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "";--}}
{{--            document.querySelector('.valyuta').classList.remove('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('q_region').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "hidden";--}}
{{--            document.querySelector('.select-category--q_region').classList.add('select-category--open');--}}
{{--        });--}}

{{--        document.getElementById('close-region').addEventListener('click', function () {--}}
{{--            document.getElementById('android-filter').style.overflow = "";--}}
{{--            document.querySelector('.select-category--q_region').classList.remove('select-category--open');--}}
{{--        });--}}
{{--    </script>--}}
@endsection
