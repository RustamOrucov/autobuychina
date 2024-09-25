@extends('front.layout.layout')
@section('front_content')
    <div class="main-container shops">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <p class="section-title_name">RƏSMİ NÜMAYƏNDƏLƏR</p>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                    <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                    <div id="ad_ph_2" style="display:none;"></div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="shops-container">
                <div class="shops" id="shops-featured"><a class="shops-i featured" href="/avtosalonlar/suzuki-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F02%2F28%2F12%2F17%2F13%2F0e6eeaef-aeb1-4ba9-8d97-e7cf25ba52ff%2Fsuzukilogo.jpg)">
                        </div>
                        <div class="shops-i--title">Suzuki Azərbaycan</div>
                        <div class="shops-i--description">"Akhundoff-A" MMC Yaponiyanın məşhur Suzuki brendinin
                            Azərbaycandakı rəsmi dileridir. İnnovasiya və səmərəliliyin sinonimi olan Suzuki
                            avtomobillərini nağd və ya 20% ilkin ödəniş edərək, illik 10% kreditlə əldə etmək olar.
                        </div>
                        <div class="shops-i--contact">(051) 232-32-03, (051) 232-32-04</div>
                        <div class="shops-i--ads-count">7 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/subaru-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F09%2F30%2F11%2F26%2F56%2F785c9862-50b5-4af4-89bb-c9d6473157de%2Fsubaru.png)">
                        </div>
                        <div class="shops-i--title">Subaru Azerbaijan</div>
                        <div class="shops-i--description">“Subaru Azərbaycan” 2006-cı ildən Azərbaycanda Subaru
                            avtomobillərinin rəsmi distribütorudur.</div>
                        <div class="shops-i--contact">(077) 477-77-47, (077) 377-67-56, (055) 740-47-74</div>
                        <div class="shops-i--ads-count">9 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/genesis-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F09%2F29%2F14%2F29%2F07%2F12d82c2c-b5e2-460d-99f8-34b7c7563543%2Flogo%20Genesis.png)">
                        </div>
                        <div class="shops-i--title">Genesis Azerbaijan</div>
                        <div class="shops-i--description">"Auto Azərbaycan" şirkəti Genesis avtomobillərinin ölkəmizdəki
                            rəsmi nümayəndəsidir.</div>
                        <div class="shops-i--contact">(050) 210-65-18</div>
                        <div class="shops-i--ads-count">2 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/toyota-gence-merkezi">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F07%2F12%2F16%2F32%2F04%2F8934e61a-c175-4d3c-a601-6d184029c444%2Ftoyotalgoo.png)">
                        </div>
                        <div class="shops-i--title">Toyota Gəncə Mərkəzi</div>
                        <div class="shops-i--description">"Toyota Gəncə Mərkəzi" 2014-cü ildən etibarən "Toyota"
                            korporasiyasının Azərbaycanda ikinci rəsmi dileridir. "Toyota" avtomobillərinin rəsmi
                            satıcısı olmaqla yanaşı, həm də rəsmi olaraq servis xidməti göstərir.</div>
                        <div class="shops-i--contact">(050) 805-20-20, (010) 350-20-20, (050) 756-80-70</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/alfaromeo-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2019%2F04%2F18%2F16%2F36%2F39%2Fc1f19f4f-5e4a-4f8d-907f-399aff9b6d5e%2FAlfa%20Romeo%20logo.jpg)">
                        </div>
                        <div class="shops-i--title">Autolux Azerbaijan - Alfa Romeo</div>
                        <div class="shops-i--description">ALFA ROMEO avtomobillərinin Azərbaycanda rəsmi distribütoru
                            Avtolüks Azərbaycan MMC-dir. 20% ilkin ödəniş, 10% illik bank faizi, 5 illik kredit,
                            yürüşdən asılı olmayaraq 2 il zəmanət. </div>
                        <div class="shops-i--contact">(012) 983, (012) 404-83-95, (055) 444-47-00, (055) 444-61-00</div>
                        <div class="shops-i--ads-count">7 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/seres-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F04%2F25%2F15%2F45%2F14%2F1f41ce8f-67ff-4913-8df9-3fc265dffcc3%2FF-AVTO%20%281%29.jpg)">
                        </div>
                        <div class="shops-i--title">Seres Azərbaycan</div>
                        <div class="shops-i--description">"Volt Group" MMC "Seres" avtomobillərin Azərbaycanda rəsmi
                            idxalçısıdır. "Seres" sizə gələcək nəsil EV-dən gözlədiyiniz zəka, güc, sürətlənmə və
                            etibarlılıq təklif edir.</div>
                        <div class="shops-i--contact">*0078</div>
                        <div class="shops-i--ads-count">6 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/haval-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F10%2F16%2F15%2F03%2F00%2F1ee241fb-1f82-4b55-99f5-4368fc73df72%2Fhavallogo.jpg)">
                        </div>
                        <div class="shops-i--title">Haval Azerbaijan</div>
                        <div class="shops-i--description">"Azərbaycan Automobiles" QSC ölkəmizdə Haval markasının rəsmi
                            nümayəndəsidir. </div>
                        <div class="shops-i--contact">*7999, (055) 679-23-23, (055) 678-24-24</div>
                        <div class="shops-i--ads-count">20 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/mini-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F11%2F11%2F49%2F36%2F94e6b537-4ff7-4645-b1d8-7bb4fc942802%2Fminilogo.jpg)">
                        </div>
                        <div class="shops-i--title">MINI Azərbaycan</div>
                        <div class="shops-i--description">MINI avtomobillərinin Azərbaycanda rəsmi idxalçısı "Improtex
                            Motors".</div>
                        <div class="shops-i--contact">(051) 215-17-14, (051) 230-19-99, (051) 230-19-19, (050)
                            207-17-80, (050) 207-17-90</div>
                        <div class="shops-i--ads-count">1 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/honda-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2020%2F09%2F23%2F11%2F08%2F35%2Fdd832ce7-2cfa-488d-bf08-73498c410489%2FHONDA%20AZERBAIJAN%20-%20LOGO.png)">
                        </div>
                        <div class="shops-i--title">Honda Azerbaijan</div>
                        <div class="shops-i--description">Honda avtomobillərinin Azərbaycanda rəsmi distribütoru.</div>
                        <div class="shops-i--contact">(077) 477-77-47, (055) 740-47-74</div>
                        <div class="shops-i--ads-count">5 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/gac-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F11%2F11%2F22%2F42%2F4c487df5-16d7-4ff8-81fe-833ddd08cd8f%2FCAGLOGO.jpg)">
                        </div>
                        <div class="shops-i--title">GAC Azərbaycan</div>
                        <div class="shops-i--description">"Auto Azərbaycan" şirkəti GAC və Aion avtomobillərinin
                            ölkəmizdəki rəsmi distribütorudur. Avtomobillərə 5 il və ya 150 000 km (hansı daha tez
                            bitərsə) zəmanət verilir.</div>
                        <div class="shops-i--contact">(050) 400-09-89, (051) 244-41-18, (010) 253-43-84</div>
                        <div class="shops-i--ads-count">26 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/geely-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F01%2F17%2F11%2F06%2F44%2Fe6f88b54-a5b2-4f33-a112-7d1524d647dc%2FProfile%20picture%20for%20official%20media.jpg)">
                        </div>
                        <div class="shops-i--title">Geely Azərbaycan</div>
                        <div class="shops-i--description">Geely avtomobillərinin Azərbaycanda rəsmi distribütoru "Rich
                            Motors" MMC.</div>
                        <div class="shops-i--contact">(050) 838-58-58</div>
                        <div class="shops-i--ads-count">28 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/kiamotorsazerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F02%2F23%2F11%2F52%2F36%2F299bb20d-9986-4a34-9267-047a20439b92%2Fkialogo.png)">
                        </div>
                        <div class="shops-i--title">Kia Azərbaycan</div>
                        <div class="shops-i--description">"Kia Azərbaycan" 2005-ci ildən "Kia" avtomobillərin
                            Azərbaycanda rəsmi distribütorudur.
                        </div>
                        <div class="shops-i--contact">(070) 303-60-60, (050) 303-60-60, (055) 303-60-60, (051)
                            303-60-60, (012) 570-01-01</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/kia-motors-genclik">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F02%2F23%2F11%2F41%2F59%2F9e55b824-bdc4-4337-ba15-aec054b09b0a%2Fkialogo.png)">
                        </div>
                        <div class="shops-i--title">Kia Motors Gənclik</div>
                        <div class="shops-i--description">"Kia Motors Azərbaycan" 2005-ci ildən bəri Koreya istehsalçısı
                            "Kia Motors" korporasiyasının Azərbaycanda rəsmi distribütorudur.
                        </div>
                        <div class="shops-i--contact">(012) 465-05-01, (055) 465-05-01, (099) 526-99-99</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/landrover-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2019%2F04%2F23%2F16%2F34%2F21%2Fed146d40-25cc-49b1-aa53-3fe947e64ae6%2FLand%20Rover%20logo.jpg)">
                        </div>
                        <div class="shops-i--title">Autolux Azerbaijan - Land Rover</div>
                        <div class="shops-i--description">"Avtolüks Azərbaycan" MMC - Land Rover avtomobillərinin
                            Azərbaycanda rəsmi düstribüteri. 20% ilkin ödəniş, 10% illik bank faizi, 5 illik kredit, 5
                            il və ya 150.000 km zəmanət.</div>
                        <div class="shops-i--contact">(055) 983-09-83</div>
                        <div class="shops-i--ads-count">44 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/group-motors-ford">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F02%2F16%2F15%2F57%2F36%2F083d0718-283a-4436-adcf-7f98e3e23377%2Flogogo.png)">
                        </div>
                        <div class="shops-i--title">Ford Abşeron Mərkəzi</div>
                        <div class="shops-i--description">Ford avtomobillərinin Azərbaycanda rəsmi dileri.</div>
                        <div class="shops-i--contact">(077) 377-67-56, (055) 235-10-53, (077) 377-67-56</div>
                        <div class="shops-i--ads-count">16 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/fiat-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F07%2F15%2F16%2F25%2F23%2Fceee62e8-0f4a-4112-9208-08250db9eeec%2Ffiatlogo.png)">
                        </div>
                        <div class="shops-i--title">Autolux Azerbaijan - Fiat </div>
                        <div class="shops-i--description">"Avtolüks Azərbaycan" MMC - Fiat avtomobillərinin Azərbaycanda
                            rəsmi düstribüteri. 20% ilkin ödəniş, 10% illik bank faizi, 5 illik kredit, yürüşdən asılı
                            olmayaraq 2 il zəmanət.
                        </div>
                        <div class="shops-i--contact">(012) 983, (055) 444-47-00, (055) 444-61-00</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/karry-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F05%2F10%2F16%2F56%2F01%2F83c11d4d-99ea-4432-8873-9e289ae0b250%2Fkarrylogo.jpg)">
                        </div>
                        <div class="shops-i--title">Karry Azərbaycan</div>
                        <div class="shops-i--description">Tam elektriklə işləyən "Karry EV" modelləri şəhər logistikası
                            üçün nəzərdə tutulub. Sadə konstruksiya, orijinal dizayn və aşağı qiymət bu maşının əsas
                            xüsusiyyətlərinə çevrilmişdir.</div>
                        <div class="shops-i--contact">*0078</div>
                        <div class="shops-i--ads-count">4 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/lada-auto">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F09%2F30%2F11%2F11%2F58%2F20c1d748-0362-481a-9e00-0af4f562a621%2Fladalogo.png)">
                        </div>
                        <div class="shops-i--title">Lada Auto</div>
                        <div class="shops-i--description">«Xazar Auto MMC» korporativ və fiziki müştərilər üçün hər növ
                            kommersiya, xüsusi təyinatlı və minik "LADA "avtomobillərinin sifarişi və satışını təşkil
                            edir. Nəğd, kredit və köçürmə yolu ilə. </div>
                        <div class="shops-i--contact">(012) 513-09-49, (050) 582-48-48</div>
                        <div class="shops-i--ads-count">8 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/xezer-lada">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F09%2F30%2F11%2F11%2F55%2Fe9072f70-24de-40c7-8e24-22e55f326f47%2Fladalogo.png)">
                        </div>
                        <div class="shops-i--title">Xəzər Lada</div>
                        <div class="shops-i--description">“Xəzər-Lada" ASC RF-nın Tolyatti ş. yerləşən “AvtoVaz” SC-nin
                            zavod istehsalı “Lada” avtomobillərinin Azərbaycandakı rəsmi distribütorudur və satışını
                            təşkil edir.</div>
                        <div class="shops-i--contact">(070) 349-09-79, (055) 585-26-05, (012) 412-67-88, (070)
                            530-30-93, (012) 510-96-63</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/hyundai-absheron-diler">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F10%2F12%2F14%2F08%2F52%2F6538c5c2-19de-48e0-8ffe-33a6f48e6a7f%2FLogo-Hyundai.png)">
                        </div>
                        <div class="shops-i--title">Hyundai Abşeron Diler</div>
                        <div class="shops-i--description">"Hyundai Abşeron" Hyundai avtomobillərinin satışı ilə yanaşı
                            servis xidmətini və original ehtiyat hissələrinin satışını da təşkil edir.</div>
                        <div class="shops-i--contact">(077) 390-26-26, (050) 520-26-26</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/faw-professional">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F26%2F14%2F14%2F54%2F2b3e39d4-35f5-478d-b446-e5f742261dfa%2Ffav%201000x1000.jpg)">
                        </div>
                        <div class="shops-i--title">FAW Professional</div>
                        <div class="shops-i--description">“Azərmaş Group” FAW markalı kommersiya avtomobillərinin
                            Azərbaycanda rəsmi distribütorudur. Ödəniş nəğd və köçürmə yolu ilə mümkündür.</div>
                        <div class="shops-i--contact">(055) 208-98-72</div>
                        <div class="shops-i--ads-count">9 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/skoda-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F01%2F31%2F15%2F31%2F12%2F3ae7837c-0c4e-4896-be0a-6c295bf51390%2Fskoda.jpg)">
                        </div>
                        <div class="shops-i--title">Skoda Azerbaijan</div>
                        <div class="shops-i--description">Skaz Autohouse MMC Skoda Avtomobillərinin Azərbaycanda rəsmi
                            distribütorudur. Avtomobillərə 3 il və ya 100000 km-ə qədər zəmanət verilir.</div>
                        <div class="shops-i--contact">(051) 207-53-13, (050) 235-84-84, *5544</div>
                        <div class="shops-i--ads-count">9 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/bestune-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F03%2F08%2F13%2F55%2F16%2F0d430504-6f4c-4861-9c94-33cf0660cb68%2Flogogo.png)">
                        </div>
                        <div class="shops-i--title">Bestune Azərbaycan</div>
                        <div class="shops-i--description">"Bestune" brendinin Azərbaycanda rəsmi distribütoru "Cahan
                            Motors" şirkətidir.</div>
                        <div class="shops-i--contact">(055) 260-55-45, (055) 296-55-45</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/avtosalon-leapmotor">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F08%2F04%2F16%2F14%2F10%2Fe1651ec4-c6e4-4a59-b3cb-8f7cfe7cdc6d%2FLeapmotor%20500x500.png)">
                        </div>
                        <div class="shops-i--title">Leapmotor Azərbaycan</div>
                        <div class="shops-i--description">LeapMotor Azərbaycanda rəsmi distribütoru "Electro Motors
                            Baku" MMC-dir. Avtomobil və batareyaya şirkət tərəfindən rəsmi 6 il və ya 120 000 km zəmanət
                            verilir.</div>
                        <div class="shops-i--contact">(010) 260-99-27, (010) 260-99-28, *5544</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/mitsubishi-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F11%2F22%2F14%2F03%2F49%2F219c8a20-34c7-4b44-8dd3-4006c4b5d6c3%2Fmitsulogo.png)">
                        </div>
                        <div class="shops-i--title">Mitsubishi Azerbaijan</div>
                        <div class="shops-i--description">Mitsubishi avtomobillərinin Azərbaycanda rəsmi distribütoru.
                        </div>
                        <div class="shops-i--contact">(077) 477-77-47, (055) 740-47-74</div>
                        <div class="shops-i--ads-count">17 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/peugeot-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F11%2F22%2F13%2F51%2F36%2F4e72a4c2-9e41-4128-8443-5b536fad46b2%2Fpeejoloogo.png)">
                        </div>
                        <div class="shops-i--title">Peugeot Azərbaycan</div>
                        <div class="shops-i--description">"Peugeot" brendinin Azərbaycanda rəsmi dileri.</div>
                        <div class="shops-i--contact">(012) 526-40-40, (055) 288-48-40</div>
                        <div class="shops-i--ads-count">4 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/gaz-distribyutor">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F26%2F14%2F14%2F22%2F1e450de6-1f90-4470-84fa-7602e1896aad%2Fgazlogo%2B%201000x1000.jpg)">
                        </div>
                        <div class="shops-i--title">GAZ Distribütor</div>
                        <div class="shops-i--description">GAZ Rəsmi distribütordan alınan hər avtomobilə 12 ayda cəmi
                            17% və 30% ilkin ödənişlə lizinq təklif edir. Kasko və nömrə daxildir!</div>
                        <div class="shops-i--contact">(055) 213-89-50</div>
                        <div class="shops-i--ads-count">26 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/chery-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F05%2F14%2F11%2F54%2F38%2Ff497d414-7da8-42e3-80d2-508135b14eba%2FCHERY%20Instagram%20Logo.jpg)">
                        </div>
                        <div class="shops-i--title">Chery Azərbaycan</div>
                        <div class="shops-i--description">Chery avtomobillərinin Azərbaycanda rəsmi distribütoru
                            "Efendiler Motors" MMC.</div>
                        <div class="shops-i--contact">(050) 808-70-70</div>
                        <div class="shops-i--ads-count">25 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/volvo-cars">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F03%2F07%2F16%2F24%2F45%2Fbc185e23-ebe3-42a1-948d-b7f584b273ab%2FVolvo%20logo-02%20%281%29.jpg)">
                        </div>
                        <div class="shops-i--title">Volvo Cars</div>
                        <div class="shops-i--description">"Aral Auto" MMC "Volvo Cars" şirkətinin Azərbaycanda rəsmi
                            dileridir. "Volvo" avtomobillərini həm nağd, həm də 20% ilkin ödəniş edilməklə illik 10%-lik
                            kredit şərtləri ilə əldə etmək olar. </div>
                        <div class="shops-i--contact">(012) 570-11-77, (051) 280-29-04, (051) 280-29-05</div>
                        <div class="shops-i--ads-count">15 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/hongqi-azerbaycan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F03%2F08%2F12%2F43%2F44%2F7c707de6-1211-4464-9be8-95fc4ff8bc68%2FIMG_20220308_124204_621.png)">
                        </div>
                        <div class="shops-i--title">Hongqi Azərbaycan</div>
                        <div class="shops-i--description">"Hongqi" brendinin Azərbaycanda rəsmi distribütoru "Cahan
                            Motors" şirkətidir.</div>
                        <div class="shops-i--contact">(055) 260-55-45, (055) 296-55-45</div>
                        <div class="shops-i--ads-count">8 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/hyundai-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F10%2F11%2F11%2F20%2F08%2Fe37d2975-26cc-46b1-b39c-ea858cd4f48a%2Flogoo.png)">
                        </div>
                        <div class="shops-i--title">Hyundai Azerbaijan</div>
                        <div class="shops-i--description">"Hyundai Azerbaijan" avtosalonu "Hyundai" avtomobillərinin
                            distribütoru olan "Auto Azərbaycan" şirkətinin Ziya Bünyadov prospekti 118 ünvanında
                            yerləşən rəsmi dileridir.</div>
                        <div class="shops-i--contact">(012) 989, (055) 414-76-96</div>
                        <div class="shops-i--ads-count">16 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/cfmoto-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F08%2F25%2F10%2F59%2F45%2Ff9481104-3fde-4f50-a3a6-eef5a2c1af40%2F1.png)">
                        </div>
                        <div class="shops-i--title">CFMoto Azərbaycan</div>
                        <div class="shops-i--description">"Sazmoto" MMC şirkəti "CFMoto" brendinin Azərbaycanda rəsmi
                            nümayəndəsidir. Ödəniş nağd, BirKart və ya daxili kreditlə mümkündür.
                        </div>
                        <div class="shops-i--contact">(051) 233-24-84</div>
                        <div class="shops-i--ads-count">20 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/baic-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F06%2F28%2F10%2F27%2F00%2Fcf3a412c-f0f3-42b0-86bf-35342ded5f58%2Fbaic.jpg)">
                        </div>
                        <div class="shops-i--title">BAIC Azərbaycan</div>
                        <div class="shops-i--description">BAIC markasının Azərbaycandakı rəsmi distribütoru “Performance
                            Center” şirkətidir.</div>
                        <div class="shops-i--contact">(050) 228-06-88, (050) 291-30-40, (050) 251-41-54, (051)
                            250-95-95, (050) 270-41-20</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/changan-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F02%2F15%2F10%2F13%2F21%2F508c3558-3d3f-4622-9361-6ac0f556e740%2Flogo.png)">
                        </div>
                        <div class="shops-i--title">Changan Azerbaijan</div>
                        <div class="shops-i--description">Changan Azərbaycan Avtomobil Evi tam yenilənmiş model sırası
                            və ən sərfəli şərtləri ilə artıq xidmətinizdədir. </div>
                        <div class="shops-i--contact">(010) 260-90-29, (051) 277-07-05, (051) 201-49-29, (051)
                            201-99-00, (010) 260-90-31</div>
                        <div class="shops-i--ads-count">33 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/mazda-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F11%2F22%2F13%2F51%2F24%2Fad1204ca-75a4-47dc-be77-f40998962eb4%2Fmazdalog.png)">
                        </div>
                        <div class="shops-i--title">Mazda Azerbaijan</div>
                        <div class="shops-i--description">Mazda avtomobillərinin Azərbaycandakı rəsmi distribütoru.
                        </div>
                        <div class="shops-i--contact">(055) 235-10-53, (077) 377-67-56</div>
                        <div class="shops-i--ads-count">6 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/autouniversal-fiat-professional">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F08%2F29%2F10%2F19%2F34%2F2b5560fd-4187-4a23-a55f-4f6a9edc39a7%2Ffiatlogo.png)">
                        </div>
                        <div class="shops-i--title">Autouniversal - Fiat Professional</div>
                        <div class="shops-i--description">"Autouniversal" MMC artıq 20 ildir ki "Fiat" və "Fiat
                            Professional" brendin Azərbaycanda rəsmi distribütorudur. Şirkətimiz Sizə bütün fəaliyyət
                            sahələri üçün geniş çeşiddə müxtəlif modifikasiyalı modellər təklif edir. </div>
                        <div class="shops-i--contact">(012) 424-66-90, (050) 363-83-78</div>
                        <div class="shops-i--ads-count">6 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/yamaha-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F07%2F05%2F09%2F54%2F43%2F3e3f9a69-acea-4ff9-a7d3-8d633f98ff51%2Fyamahalogo.png)">
                        </div>
                        <div class="shops-i--title">Yamaha Azərbaycan</div>
                        <div class="shops-i--description">Yamaha Azərbaycan - brendin yeganə rəsmi və səlahiyyətli
                            idxalçısıdır. Motosiklet və su idmanı həvəskarları üçün geniş çeşiddə Yamaha məhsullarını
                            təklif edir. </div>
                        <div class="shops-i--contact">(050) 291-89-47, (055) 350-00-52</div>
                        <div class="shops-i--ads-count">5 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/volkswagen-azerbaycan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2020%2F09%2F21%2F09%2F58%2F48%2Fd231eb51-080c-48f8-9535-3a024f241905%2FVolkswagen%20LOGO.jpg)">
                        </div>
                        <div class="shops-i--title">Volkswagen Azərbaycan</div>
                        <div class="shops-i--description">Volkswagen avtomobillərin Azərbaycanda rəsmi və yeganə dileri
                            "Azərbaycan Automobiles" LTD.</div>
                        <div class="shops-i--contact">*0999, (050) 255-61-08, (050) 255-61-07</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/m-hero-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F24%2F15%2F29%2F53%2F3c43020a-9f72-4e08-bd13-ac59d3663dff%2FLogo%20Turbo1.jpg)">
                        </div>
                        <div class="shops-i--title">M-Hero Azerbaijan</div>
                        <div class="shops-i--description">"SCM Motors" MMC şirkəti bir çox Avropa ölkələrində yüksək
                            satış rəqəmlərinə nail olmağı bacaran “M-HERO” brendinin Azərbaycandakı rəsmi
                            distribütorudur.</div>
                        <div class="shops-i--contact">(055) 535-77-77</div>
                        <div class="shops-i--ads-count">2 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/maserati-baku">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F10%2F19%2F12%2F30%2F28%2F7a353c28-1d68-429b-bd9e-4ca26a1d0c6f%2Flogo.png)">
                        </div>
                        <div class="shops-i--title">Maserati Baku</div>
                        <div class="shops-i--description">"Grand Automotive" Maserati markasının Azərbaycanda rəsmi
                            distribütorudur.</div>
                        <div class="shops-i--contact">(010) 222-92-23, (010) 222-62-23</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/chevrolet-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F03%2F02%2F15%2F29%2F50%2Fe9f90c78-aa6f-470c-adcd-404bb7dda9b0%2FChevrolet%20Logo.png)">
                        </div>
                        <div class="shops-i--title">Chevrolet Azərbaycan</div>
                        <div class="shops-i--description">"Azərmaş CP" – Chevrolet brendinin Azərbaycanda rəsmi
                            distribütorudur. Sərfəli kredit və lizinq şərtləri təklif olunur.
                        </div>
                        <div class="shops-i--contact">(051) 230-60-35, (012) 424-81-81, *8181</div>
                        <div class="shops-i--ads-count">6 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/mg-motor-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F08%2F01%2F16%2F10%2F03%2F22421db3-344f-45fb-915d-ac6de0df3b38%2FWhatsApp%20Image%202024-08-01%20at%2013.51.46.jpeg)">
                        </div>
                        <div class="shops-i--title">MG Motor Azerbaijan</div>
                        <div class="shops-i--description">Əfsanəvi Britaniya Əsilli MG (Morris Garages) markasının
                            Azərbaycanda yeganə və rəsmi idxalçısı "ASIA Motors" şirkətidir. </div>
                        <div class="shops-i--contact">(050) 400-19-24, (050) 444-19-24, (012) 525-51-51</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/gwm-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F10%2F31%2F16%2F41%2F50%2F9d79b4ad-93e4-47d9-8867-eb59e6abfbf9%2Fgwmlogo.png)">
                        </div>
                        <div class="shops-i--title">GWM Azerbaijan</div>
                        <div class="shops-i--description">"Azərbaycan Automobiles" QSC ölkəmizdə Great Wall Motor (GWM)
                            brendinin və Tank, Ora, Poer marka sırasının rəsmi nümayəndəsidir.
                        </div>
                        <div class="shops-i--contact">*7999, (055) 679-23-23, (055) 678-24-24</div>
                        <div class="shops-i--ads-count">14 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/infiniti-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F19%2F12%2F24%2F46%2F17f177df-4716-42ba-9a13-7699ba91d59e%2Finfiniti%201000x1000.png)">
                        </div>
                        <div class="shops-i--title">Infınıtı Azərbaycan</div>
                        <div class="shops-i--description">"Nurgün Motors" şirkəti INFINITI brendinin Azərbaycanda rəsmi
                            distribütorudur. "Nurgün Motors"-un salonlarından alınan hər bir avtomobilə 5 il və ya
                            155000 km zəmanət verilir.</div>
                        <div class="shops-i--contact">(012) 934, (077) 555-09-34, (077) 444-09-34</div>
                        <div class="shops-i--ads-count">6 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/porshe-baki-merkezi">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F09%2F01%2F12%2F52%2F37%2Faf66a968-843f-46c9-86fa-6dca8d2da00a%2FIMG_1687.JPG)">
                        </div>
                        <div class="shops-i--title">Porsche Bakı Mərkəzi</div>
                        <div class="shops-i--description">Sizi Porsche dünyasına və əfsanəvi Porsche avtomobillərini
                            müxtəlif vəziyyətlərdə sınaqdan keçirməyə dəvət edirik.</div>
                        <div class="shops-i--contact">(012) 511-33-44, (050) 511-33-44</div>
                        <div class="shops-i--ads-count">5 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/improtex-motors">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F10%2F06%2F16%2F13%2F03%2F60724f02-e17a-4bf3-9202-95cbad91d0b8%2FImprotex%20Motors%20logos.jpg)">
                        </div>
                        <div class="shops-i--title">BMW Azerbaijan</div>
                        <div class="shops-i--description">BMW, Rolls-Royce və MINI avtomobillərin Azərbaycanda rəsmi
                            idxalçısı.</div>
                        <div class="shops-i--contact">(051) 230-19-19, (051) 230-19-99, (051) 215-17-14, (050)
                            207-17-80, (050) 207-17-90</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/rox-motor-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F05%2F16%2F15%2F54%2F39%2F29916607-12d6-4731-a76f-8f9d58dba25d%2Froxlogo.jpg)">
                        </div>
                        <div class="shops-i--title">Rox Motor Azərbaycan</div>
                        <div class="shops-i--description">“Rox Motor” avtomobil sektorunda innovasiyalara yönəlmiş
                            texnologiya şirkətidir. “Rox Motor” innovativ avtomobil yolsuzluq qabiliyyətini, MPV
                            rahatlığını və RV universallığını mükəmməl birləşdirərək macəra və dəbdəbəni simvollaşdırır.
                        </div>
                        <div class="shops-i--contact">*0078</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/zeekr-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F11%2F02%2F10%2F56%2F39%2F83834778-c054-4f95-9a54-b79431e3aba7%2FLogo.png)">
                        </div>
                        <div class="shops-i--title">ZEEKR Azərbaycan</div>
                        <div class="shops-i--description">ZEEKR avtomobillərinin Azərbaycanda rəsmi distribütoru
                            "Efendiler Auto" MMC.
                        </div>
                        <div class="shops-i--contact">(050) 558-00-01</div>
                        <div class="shops-i--ads-count">14 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/nissan-salamzade">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F09%2F07%2F14%2F18%2F42%2F3cdd855c-adbf-4d5a-b043-d6a0057e2e4b%2FNissanNext_Logo_Social.jpg)">
                        </div>
                        <div class="shops-i--title">Nissan Azərbaycan - Salamzadə küç. </div>
                        <div class="shops-i--description">"Nurgün Motors" şirkəti Nissan brendinin Azərbaycanda rəsmi
                            distribütorudur. "Nurgün Motors"-un salonlarından alınan hər bir avtomobilə 5 il və ya
                            155000 km zəmanət verilir.</div>
                        <div class="shops-i--contact">(077) 477-09-34, (077) 434-09-34</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/avatr-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F17%2F15%2F44%2F01%2F630329c8-7190-470b-8621-cba7c599528a%2Favtr%201000x1000.jpg)">
                        </div>
                        <div class="shops-i--title">AVATR Azerbaijan</div>
                        <div class="shops-i--description">AVATR brendinin Azərbaycanda rəsmi distribütoru "Alfa
                            Autohouse" MMC-dir. Avtomobil və batareyaya şirkət tərəfindən 8 il və ya 160 000 km rəsmi
                            zəmanət verilir
                        </div>
                        <div class="shops-i--contact">*5544, (010) 230-23-61, (051) 290-00-71</div>
                        <div class="shops-i--ads-count">5 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jmc-trucks-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F31%2F14%2F48%2F58%2F5c576b41-7f21-41f6-b2cb-9db05f397642%2Fjmclogo.jpg)">
                        </div>
                        <div class="shops-i--title">JMC Trucks Azərbaycan</div>
                        <div class="shops-i--description">"JMC" kommersiya avtomobillərinin Azərbaycandakı rəsmi
                            distribütoru "Hayat Group" MMC şirkətidir.</div>
                        <div class="shops-i--contact">(050) 235-36-11, (050) 235-53-04</div>
                        <div class="shops-i--ads-count">5 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/xpeng-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F12%2F14%2F15%2F56%2F41%2F3984bb26-de74-45ec-9407-ebc20ae11b9f%2Fturbo.az-logo%201000x1000.jpg)">
                        </div>
                        <div class="shops-i--title">XPENG Azerbaijan</div>
                        <div class="shops-i--description">XPENG brendinin Azərbaycanda rəsmi distribütoru "SR Electro
                            Motors Baku" MMC-dir. </div>
                        <div class="shops-i--contact">(010) 230-23-63, (051) 201-54-40, *5544</div>
                        <div class="shops-i--ads-count">21 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jetour-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F01%2F17%2F16%2F08%2F05%2F947863c7-b399-482f-bc29-e79833e7e00e%2Flogogo.png)">
                        </div>
                        <div class="shops-i--title">Jetour Azerbaijan</div>
                        <div class="shops-i--description">"Jetour" brendinin Azərbaycanda rəsmi distribütoru.
                            Avtomobillərə 6 il və ya 150.000 km zəmanət verilir.</div>
                        <div class="shops-i--contact">(050) 275-00-78, (050) 285-00-78, (012) 526-00-78</div>
                        <div class="shops-i--ads-count">13 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/dfsk-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F12%2F13%2F09%2F48%2F11%2F1c316abe-efec-4c00-bcd3-87d8fb958d85%2Fdfsklogo.png)">
                        </div>
                        <div class="shops-i--title">DFSK Azərbaycan</div>
                        <div class="shops-i--description">"Xəzər Auto" MMC – "DFSK" markalı kommersiya və minik
                            avtomobillərinin Azərbaycanda rəsmi distribütorudur. Satış köçürmə yolu, nağd, kredit və
                            lizing ilə mümkündür.</div>
                        <div class="shops-i--contact">(012) 436-21-79, (050) 358-86-86, (050) 582-48-48</div>
                        <div class="shops-i--ads-count">9 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/dongfeng-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F02%2F02%2F18%2F18%2F50%2Fa7f25a63-1a97-4c02-8208-79964a447d6e%2F%D0%94%D0%B8%D0%B7%D0%B0%D0%B8%CC%86%D0%BD%20%D0%B1%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.jpg)">
                        </div>
                        <div class="shops-i--title">Dongfeng Azərbaycan</div>
                        <div class="shops-i--description">Dongfeng avtomobillərin Azərbaycanda rəsmi və yeganə dileri
                            "Global Automobiles" MMC. </div>
                        <div class="shops-i--contact">(050) 444-61-07, (050) 444-61-08, *8999</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jeep-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2019%2F04%2F18%2F16%2F17%2F28%2F7601c4f2-563a-49c5-9812-a16d4f397504%2FJeep%20logo.jpg)">
                        </div>
                        <div class="shops-i--title">Autolux Azerbaijan - Jeep</div>
                        <div class="shops-i--description">JEEP avtomobillərinin Azərbaycanda rəsmi distribütoru Avtolüks
                            Azərbaycan MMC-dir. 20% ilkin ödəniş, 10% illik bank faizi, 5 illik kredit, 3 il və ya
                            100.000 km zəmanət</div>
                        <div class="shops-i--contact">(012) 983, (012) 404-83-95, (055) 444-47-00, (055) 444-61-00</div>
                        <div class="shops-i--ads-count">9 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/hyundai-babek">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F08%2F25%2F12%2F18%2F26%2F36fd847d-ad2c-4c20-bc05-7e9e8c6a1f1d%2Flogoo.png)">
                        </div>
                        <div class="shops-i--title">Hyundai Babək Diler</div>
                        <div class="shops-i--description">"Hyundai Babək Diler" avtosalonu Hyundai avtomobillərinin
                            distribütoru olan "Auto Azərbaycan" şirkətinin "Otoplaza Mall" avtomobil şəhərciyində
                            yerləşən rəsmi dileridir.</div>
                        <div class="shops-i--contact">(012) 989, (050) 800-09-89</div>
                        <div class="shops-i--ads-count">15 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/wuling-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F07%2F11%2F10%2F50%2F21%2F3de08d81-f174-4cc3-a3b4-b1bc85f32449%2Fwlogo.jpg)">
                        </div>
                        <div class="shops-i--title">Wuling Azərbaycan</div>
                        <div class="shops-i--description">“Wuling” brendi, 115 illik avtomobil istehsalı təcrübəsinə
                            malik “General Motors” və Çinin ən böyük avtomobil istehsalçısı “SAIC Group” şirkətlərinin
                            birgə işbirliyi nəticəsində yaradılan avtomobil brendidir.</div>
                        <div class="shops-i--contact">(051) 290-01-91, (010) 232-77-25, (010) 232-77-13</div>
                        <div class="shops-i--ads-count">8 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/azermash-lada-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F04%2F19%2F15%2F24%2F26%2F1db7871d-f536-4e55-9a2f-541e0cdc6a70%2Flogog.png)">
                        </div>
                        <div class="shops-i--title">Lada Azərbaycan</div>
                        <div class="shops-i--description">"Azermash Group" MMC "Lada" brendinin Azərbaycanda rəsmi
                            distribütorudur. Avtomobillərə 2 il və ya 35 000 km rəsmi zəmanət təqdim olunur. </div>
                        <div class="shops-i--contact">(055) 409-24-45, (055) 206-54-09</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jmc-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F04%2F26%2F11%2F13%2F01%2F68c8c7b0-1a36-49a4-a836-f933c42cd09b%2Fjmpp1.jpg)">
                        </div>
                        <div class="shops-i--title">JMC Azərbaycan</div>
                        <div class="shops-i--description">Çin avtomobil sənayesinin nəhənglərindən olan “JMC” avtomobil
                            brendinin ölkəmizdəki rəsmi distribütoru “iMOTORS” şirkətidir.</div>
                        <div class="shops-i--contact">(010) 232-77-13, (051) 290-01-91, (010) 232-77-25</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/autostar-kaukasus">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2020%2F06%2F11%2F15%2F13%2F55%2Feac32f75-e5a6-453e-a36d-cd59aace7d7a%2FMB55.jpg)">
                        </div>
                        <div class="shops-i--title">Mercedes-Benz AutoStar Kaukasus GmbH</div>
                        <div class="shops-i--description">Ən yaxşı və ya heç bir şey! AutoStar Kaukasus Mərkəzi 28 ildir
                            ki, Mercedes-Benz markasının Azərbaycandakı rəsmi dileridir.</div>
                        <div class="shops-i--contact">(050) 255-18-04, (050) 285-95-91, (050) 280-35-25, (050) 221-55-95
                        </div>
                        <div class="shops-i--ads-count">28 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/xezer-lada-xirdalan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F05%2F03%2F10%2F12%2F02%2Fc3907b9b-de89-4ec6-b2a3-5f1939b0b312%2Flogog.png)">
                        </div>
                        <div class="shops-i--title">Xəzər Lada Xırdalan</div>
                        <div class="shops-i--description">Biz illərdir ki, bütün VAZ (Lada) avtomobil modelləri üzrə
                            satış edirik. Bütün avtomobillərimiz tam yeni şəkildə, müştərilərə kredit və nağd satışla
                            təqdim olunur.</div>
                        <div class="shops-i--contact">(055) 213-52-55</div>
                        <div class="shops-i--ads-count">28 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/onvolt-skywell">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F09%2F08%2F11%2F09%2F38%2Fc59f454d-9f10-4bb4-a8f2-391b1322a1ea%2Flogogog.png)">
                        </div>
                        <div class="shops-i--title">ONVOLT - Skywell</div>
                        <div class="shops-i--description">"ONVOLT" MMC Skywell elektrik avtomobillərin Azərbaycanda
                            rəsmi idxalçısıdır. Avtomobilə 5 il və ya 150 000 km zəmanət, Batareyaya 8 il və ya 200 000
                            km zəmanət.</div>
                        <div class="shops-i--contact">(012) 440-00-07, (099) 440-00-07</div>
                        <div class="shops-i--ads-count">8 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/kaiyi-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F02%2F29%2F16%2F14%2F17%2F2724c21b-311a-4029-9f66-35e4436cf73d%2Fka.jpg)">
                        </div>
                        <div class="shops-i--title">KAIYI Azərbaycan</div>
                        <div class="shops-i--description">KAIYI markasının Azərbaycanda rəsmi distribütoru "FNC Motors"
                            şirkətidir.</div>
                        <div class="shops-i--contact">(055) 350-33-79</div>
                        <div class="shops-i--ads-count">4 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/dodge-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2019%2F04%2F18%2F16%2F44%2F08%2F7ba8412b-3f5a-4f59-811e-4a709289148e%2FDodge%20logo.jpg)">
                        </div>
                        <div class="shops-i--title">Autolux Azerbaijan - Dodge</div>
                        <div class="shops-i--description">DODGE avtomobillərinin Azərbaycanda rəsmi düstribüteri
                            Avtolüks Azərbaycan MMC-dir. 20% ilkin ödəniş, 10% illik bank faizi, 5 illik kredit, 3 il və
                            ya 100.000 km zəmanət. </div>
                        <div class="shops-i--contact">(012) 983, (012) 404-83-95, (055) 444-47-00, (055) 444-61-00</div>
                        <div class="shops-i--ads-count">13 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/hyundai_truck_and_bus">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F09%2F30%2F11%2F47%2F53%2Fd7f59516-53d6-4c2b-a066-ceff9bffdd2c%2Flogo%20Truck%20and%20Bus.png)">
                        </div>
                        <div class="shops-i--title">Hyundai Truck and Bus</div>
                        <div class="shops-i--description">"Auto Azərbaycan" şirkəti Hyundai kommersiya avtomobillərinin
                            ölkəmizdəki rəsmi distribütorudur və satılan avtomobillərə 3 il və ya 300 000 km (hansı daha
                            tez bitərsə) zəmanət verilir.</div>
                        <div class="shops-i--contact">(051) 205-20-39, (050) 513-17-10</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/uaz-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F01%2F22%2F15%2F21%2F56%2Fbceb60a7-181b-4d7b-82ff-29b10c0b9653%2F%D0%94%D0%B8%D0%B7%D0%B0%D0%B8%CC%86%D0%BD%20%D0%B1%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.jpg)">
                        </div>
                        <div class="shops-i--title">UAZ Azərbaycan</div>
                        <div class="shops-i--description">"Azermash Group" MMC UAZ brendinin Azərbaycanda rəsmi
                            distribütorudur. Avtomobilləri 1 ildən 3 ilədək zəmanətlə əldə edin. </div>
                        <div class="shops-i--contact">(055) 409-91-21</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jacmotors-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F11%2F23%2F10%2F01%2F40%2F8d6291c2-806c-4bfc-a4ab-73d70b29a5a5%2FLOGOGO.png)">
                        </div>
                        <div class="shops-i--title">JAC Motors Azərbaycan</div>
                        <div class="shops-i--description">JAC Motors markasının Azərbaycandakı rəsmi distributoru
                            "Performance Center" şirkətidir.
                        </div>
                        <div class="shops-i--contact">(050) 228-06-88, (050) 291-30-40, (050) 251-41-54, (051)
                            250-95-95, (050) 270-41-20</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/toyota-absheron">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F07%2F12%2F16%2F39%2F22%2Fccf0806b-3498-4306-a323-dfb77d7205f5%2Ftoyotalgoo.png)">
                        </div>
                        <div class="shops-i--title">Toyota Abşeron Mərkəzi</div>
                        <div class="shops-i--description">Toyota avtomobillərin Azərbaycanda rəsmi dileri</div>
                        <div class="shops-i--contact">(077) 477-77-40, (050) 607-88-87</div>
                        <div class="shops-i--ads-count">15 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/lynkco-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F02%2F21%2F18%2F24%2F05%2F207ba0d6-0819-41b0-8cd3-eb7701e7a0c7%2F222.jpg)">
                        </div>
                        <div class="shops-i--title">Lynk &amp; Co Azərbaycan</div>
                        <div class="shops-i--description">Sizi innovativ xüsusiyyətlərlə zəngin "Lynk &amp; Co"
                            avtomobillərini yaxından tanımağa dəvət edirik. "Lynk &amp; Co" brendinin Azərbaycandakı
                            rəsmi distribütoru "Aztech Autohouse" MMC-dir. </div>
                        <div class="shops-i--contact">*5544, (010) 252-27-79</div>
                        <div class="shops-i--ads-count">11 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jaguar-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F11%2F03%2F17%2F41%2F53%2F56e55cc0-213a-48a6-8ef8-832904985f38%2Flogogogo.png)">
                        </div>
                        <div class="shops-i--title">Autolux Azerbaijan - Jaguar</div>
                        <div class="shops-i--description">"Avtolüks Azərbaycan" MMC - Jaguar avtomobillərinin
                            Azərbaycanda rəsmi düstribüteri. 20% ilkin ödəniş, 10% illik bank faizi, 5 illik kredit, 5
                            il və ya 150.000 km zəmanət. </div>
                        <div class="shops-i--contact">(055) 983-09-83</div>
                        <div class="shops-i--ads-count">6 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/jac-trucks-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F03%2F18%2F17%2F31%2F23%2Fe8d5275e-9245-4123-a373-2e69252bc3ad%2Fjac%20logo.jpg)">
                        </div>
                        <div class="shops-i--title">JAC Trucks Azərbaycan</div>
                        <div class="shops-i--description">"Auto Azərbaycan" şirkəti JAC kommersiya avtomobillərinin
                            ölkəmizdəki rəsmi distribütorudur. </div>
                        <div class="shops-i--contact">(051) 280-50-73, (010) 260-88-01</div>
                        <div class="shops-i--ads-count">7 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/bentley">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2018%2F11%2F22%2F09%2F42%2F40%2F6393d4aa-170a-4a7e-b2b2-9cb198c94e98%2FLogo%20small%20161x161.jpg)">
                        </div>
                        <div class="shops-i--title">Bentley Baku</div>
                        <div class="shops-i--description">Bentley Motors-un Azərbaycanda rəsmi nümayəndəsi.</div>
                        <div class="shops-i--contact">(012) 404-82-82, (050) 216-35-38</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/kia-motors-sumqayit">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F02%2F23%2F11%2F53%2F06%2Fb7532f04-f83c-4e0c-bfc1-d8430524a6d6%2Fkialogo.png)">
                        </div>
                        <div class="shops-i--title">Kia Sumqayıt</div>
                        <div class="shops-i--description">Rəsmi dillerdən yeni KIA avtomobilləri 5-il zəmanət ilə!</div>
                        <div class="shops-i--contact">(018) 655-88-11, (012) 585-11-88, (050) 505-11-88, (055) 442-44-94
                        </div>
                        <div class="shops-i--ads-count">18 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/audi-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2020%2F12%2F14%2F15%2F08%2F55%2F8d367cbf-ca39-4dbc-a78f-002df6eb2372%2Faudi%20logo.jpg)">
                        </div>
                        <div class="shops-i--title">Audi Azərbaycan</div>
                        <div class="shops-i--description">Dream Auto MMC şirkəti Audi brendinin Azərbaycanda rəsmi
                            distribütorudur.</div>
                        <div class="shops-i--contact">(050) 570-00-77, (012) 570-00-77</div>
                        <div class="shops-i--ads-count">16 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/voyah-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F01%2F29%2F14%2F48%2F41%2Fea8aee3c-ffa2-423f-b16c-6bc294d8d225%2F%D0%94%D0%B8%D0%B7%D0%B0%D0%B8%CC%86%D0%BD%20%D0%B1%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.jpg)">
                        </div>
                        <div class="shops-i--title">VOYAH Azərbaycan</div>
                        <div class="shops-i--description">"SCM Motors" MMC şirkəti bir çox Avropa ölkələrində yüksək
                            satış rəqəmlərinə nail olmağı bacaran VOYAH brendinin Azərbaycanda rəsmi distribütorudur.
                        </div>
                        <div class="shops-i--contact">(050) 535-77-77</div>
                        <div class="shops-i--ads-count">16 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/vgv-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F07%2F22%2F21%2F13%2F31%2F75fed982-bbe1-4003-a840-02791fac4913%2FIMG_20230722_211117_920.png)">
                        </div>
                        <div class="shops-i--title">VGV Azərbaycan </div>
                        <div class="shops-i--description">"VGV" brendinin Azərbaycandakı rəsmi distribütoru "Azərmaş"
                            MMC şirkətidir.</div>
                        <div class="shops-i--contact">(055) 213-92-31, (055) 409-39-30</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/hyundai-genclik">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2022%2F06%2F21%2F12%2F31%2F47%2F9e3e9122-c27c-4836-aac5-18faca4d987a%2Flogoo.png)">
                        </div>
                        <div class="shops-i--title">Hyundai Gənclik</div>
                        <div class="shops-i--description">"Hyundai Gənclik" – Hyundai avtomobillərinin satışını, servis
                            xidmətlərini və orijinal ehtiyat hissələrini təqdim edən rəsmi dillerdi.</div>
                        <div class="shops-i--contact">(050) 490-26-26, (012) 564-08-22</div>
                        <div class="shops-i--ads-count">10 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/onvolt-im-motors">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F08%2F10%2F10%2F17%2F32%2F15f01e62-d141-4f5e-a87b-a2ae80624beb%2FIM%20icon%20.png)">
                        </div>
                        <div class="shops-i--title">ONVOLT - IM Motors</div>
                        <div class="shops-i--description">"IM Motors" – "SAIC Motor", "Zhangjiang Hi-Tech Group" və
                            "Alibaba Group" tərəfindən təsis edilmiş premium elektrikli avtomobil markasıdır.
                            Azərbaycanda rəsmi idxalçı "Onvolt" şirkətidir.</div>
                        <div class="shops-i--contact">(099) 440-00-07, (012) 440-00-07</div>
                        <div class="shops-i--ads-count">16 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/neta-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2024%2F03%2F29%2F15%2F44%2F30%2F83c5d98a-6106-43f8-b0b8-a28892a35763%2Fneta%20logo%20pdf.jpg)">
                        </div>
                        <div class="shops-i--title">Neta Azerbaijan</div>
                        <div class="shops-i--description">"Neta" avtomobillərinin Azərbaycandakı rəsmi distribütoru
                            "Yeni Motor" şirkətidir. Yenilikçi elektrikli avtomobillər üçün mükəmməl seçimi bu gün et!
                        </div>
                        <div class="shops-i--contact">*5665, (050) 263-05-15, (010) 515-05-03</div>
                        <div class="shops-i--ads-count">3 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/isuzu-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F10%2F22%2F15%2F12%2F37%2Fa5b1f22e-e460-49be-81cf-e36b5215ec8e%2Flogogo.png)">
                        </div>
                        <div class="shops-i--title">Isuzu Azerbaijan</div>
                        <div class="shops-i--description">"Azermash Group" MMC ISUZU brendinin Azərbaycanda rəsmi
                            distribütorudur.</div>
                        <div class="shops-i--contact">(055) 409-91-21</div>
                        <div class="shops-i--ads-count">15 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/maple-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2023%2F07%2F05%2F13%2F12%2F35%2F54d93697-2f58-4697-a5e6-2fc19bae585d%2FUntitled%20design.png)">
                        </div>
                        <div class="shops-i--title">Maple Azərbaycan</div>
                        <div class="shops-i--description">"Maple" brendinin Azərbaycanda rəsmi distribütoru "Cahan
                            Motors" şirkətidir.</div>
                        <div class="shops-i--contact">(055) 260-55-45, (055) 296-55-45</div>
                        <div class="shops-i--ads-count">5 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/mercedes-benz-absheron">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2020%2F06%2F08%2F10%2F59%2F42%2Fe8503c3d-a5c8-4345-b4cd-3af8d27153f2%2Flogogo.png)">
                        </div>
                        <div class="shops-i--title">Abşeron Mercedes-Benz</div>
                        <div class="shops-i--description">Abşeron Avtomobil Mərkəzi Mercedes-Benz markasının
                            Azərbaycandakı rəsmi dileridir.</div>
                        <div class="shops-i--contact">(050) 289-09-85, (050) 289-09-80, (051) 232-87-70</div>
                        <div class="shops-i--ads-count">45 elan</div>
                    </a><a class="shops-i featured" href="/avtosalonlar/nissan-azerbaijan">
                        <div class="shops-i--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2021%2F09%2F07%2F14%2F19%2F59%2F034d1944-7f2c-4589-bfa1-b731c8322cea%2FNissanNext_Logo_Social.jpg)">
                        </div>
                        <div class="shops-i--title">Nissan Azərbaycan</div>
                        <div class="shops-i--description">"Nurgün Motors" şirkəti Nissan brendinin Azərbaycanda rəsmi
                            distribütorudur. "Nurgün Motors"-un salonlarından alınan hər bir avtomobilə 5 il və ya
                            155000 km zəmanət verilir.</div>
                        <div class="shops-i--contact">(050) 555-09-34, (070) 555-09-34</div>
                        <div class="shops-i--ads-count">26 elan</div>
                    </a></div>
            </div>
        </div>
    </div>
@endsection
