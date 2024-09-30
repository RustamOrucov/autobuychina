<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        on: {
            slideChange: function () {
                var currentSlide = swiper.realIndex + 1;
                var totalSlides = swiper.slides.length;
                document.querySelector('.product-photos__slider-counter').textContent = currentSlide + '/' + totalSlides;
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        var currentSlide = swiper.realIndex + 1;
        var totalSlides = swiper.slides.length;
        document.querySelector('.product-photos__slider-counter').textContent = currentSlide + '/' + totalSlides;
    });
</script>
<script src="{{ asset('assets_/js/mobile.js') }}"></script>
<script src="{{ asset('assets_/js/filter.js') }}"></script>
