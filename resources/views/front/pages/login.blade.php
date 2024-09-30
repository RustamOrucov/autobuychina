
@extends('front.layout.layout')

@section('front_content')
<style>
.custom-login-btn {
    margin-top:-50px;
    margin-left:-30px;
    position: absolute;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    transition: transform 0.3s;
    cursor: pointer; 
}

</style>
    <div class="main-container sessions" style="margin-bottom: 9%">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                    <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                    <div id="ad_ph_2" style="display:none;"></div>
                </div>
            </div>
        </div>
        <div class="session-login-form">
            <form action="https://turbo.az/auth/password/callback" accept-charset="UTF-8" method="post"><input
                    type="hidden" name="authenticity_token"
                    value="WhsGsIie1rMYIkMJJ_1qIWtEkUIkn3Aev8d6WHOZ1dP7ej6Aq1ADTba3jXi3T-eZiwh1rFXUMwEczq1Fwe9ktg"
                    autocomplete="off"><input type="hidden" name="origin" id="origin"
                    value="/autos?q%5Bavailability_status%5D=&amp;q%5Bbarter%5D=0&amp;q%5Bcrashed%5D=1&amp;q%5Bcurrency%5D=azn&amp;q%5Bengine_volume_from%5D=&amp;q%5Bengine_volume_to%5D=&amp;q%5Bfor_spare_parts%5D=0&amp;q%5Bloan%5D=0&amp;q%5Bmake%5D%5B%5D=9&amp;q%5Bmileage_from%5D=&amp;q%5Bmileage_to%5D=&amp;q%5Bonly_shops%5D=&amp;q%5Bpainted%5D=1&amp;q%5Bpower_from%5D=&amp;q%5Bpower_to%5D=&amp;q%5Bprice_from%5D=&amp;q%5Bprice_to%5D=&amp;q%5Bsort%5D=price_asc&amp;q%5Bused%5D=&amp;q%5Byear_from%5D=&amp;q%5Byear_to%5D="
                    autocomplete="off"><input type="hidden" name="source_format" id="source_format" value="html"
                    autocomplete="off">
                <div class="input"><label for="sessions_email">E-Mail</label><input type="text" name="sessions[email]"
                        id="sessions_email"></div>
                <div class="input"><label for="sessions_password">Password</label><input type="password"
                        name="sessions[password]" id="sessions_password"></div>
                <div class="links-row">
                   <a class="custom-login-btn" href="">Login</a>

                    <a class="custom-register-btn">Register Dealership</a>

                </div>
            </form>
        </div>
        <a class="link-forgot-password" href="">I forgot my password.</a>

    </div>


    <script>
const button = document.querySelector('.custom-login-btn');

function moveButton() {
    const maxWidth = window.innerWidth - button.offsetWidth; // Ekran genişliği
    const maxHeight = window.innerHeight - button.offsetHeight; // Ekran yüksekliği

    // Rastgele bir x ve y konumu oluştur
    const randomX = Math.random() * maxWidth;
    const randomY = Math.random() * maxHeight;

    // Butonu rastgele konuma yerleştir
    button.style.transform = `translate(${randomX}px, ${randomY}px)`;
}

// Başlangıçta butonu belirli bir konuma yerleştir
function setInitialPosition() {
    button.style.transform = 'translate(50px, 50px)'; // İstenilen başlangıç konumu
}

// Sayfa yüklendiğinde başlangıç konumunu ayarla
window.addEventListener('load', setInitialPosition);

// Buton üzerine mouse gelirse başka bir yere hareket ettir
button.addEventListener('mouseenter', moveButton);

    </script>

@endsection
