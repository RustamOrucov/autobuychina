$(document).ready(function(){
    var $slider = $('.single-item');
    var $currentNum = $('.currenNum');
    var $total = $('.total');
    var $pausePlayButton = $('.pause');

    $slider.on('init', function(event, slick){
        $total.text(' / ' + slick.slideCount);
        updateCurrentSlide(slick.currentSlide);
    });

    $slider.on('afterChange', function(event, slick, currentSlide){
        updateCurrentSlide(currentSlide);
    });

    function updateCurrentSlide(currentSlide) {
        $currentNum.text(currentSlide + 1);
    }

    $slider.slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false
    });

    $('.prev').on('click', function(){
        $slider.slick('slickPrev');
    });

    $('.next').on('click', function(){
        $slider.slick('slickNext');
    });

    $pausePlayButton.on('click', function(){
        if ($pausePlayButton.hasClass('pause')) {
            $slider.slick('slickPause');
            $pausePlayButton.removeClass('pause').addClass('play').text('Oynat');
        } else {
            $slider.slick('slickPlay');
            $pausePlayButton.removeClass('play').addClass('pause').text('Durdur');
        }
    });
});





var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
  });



var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 7,
    spaceBetween: 30,
    loop:true,
});


// Youtube Video

document.addEventListener('DOMContentLoaded', (event) => {
    const videoListItems = document.querySelectorAll('.videoList li');
    const iframe = document.getElementById('mainVideoIframe');
    const titleElement = document.getElementById('maxScreenTxt');

    videoListItems.forEach(item => {
        item.addEventListener('click', () => {
            videoListItems.forEach(i => i.classList.remove('on'));
            item.classList.add('on');

            const videoUrl = item.getAttribute('data-url');
            const videoTitle = item.getAttribute('data-title');

            iframe.src = `${videoUrl}`;
            titleElement.textContent = videoTitle;
        });
    });
});


