$(document).ready(function() {
    $('.single-item').slick({
      arrows: false, 
      infinite: false 
    });
  
    updateCounter($('.single-item').slick('slickCurrentSlide') + 1, $('.single-item').slick('getSlick').slideCount);
  
    $('.previues').on('click', function() {
      $('.single-item').slick('slickPrev');
    });
  
    $('.next').on('click', function() {
      $('.single-item').slick('slickNext');
    });
  
    $('.single-item').on('afterChange', function(event, slick, currentSlide) {
      updateCounter(currentSlide + 1, slick.slideCount);
    });
  
    function updateCounter(current, total) {
      $('.counter span').text(current + '/' + total);
    }
  });

  $(document).ready(function() {
    var currentIndex = 0; 
    var totalImages = $('.product-photos__slider-nav-i').length; 

    function updateActiveImage(index) {
        var newImgSrc = $('.product-photos__slider-nav-i').eq(index).attr('data-img');
        $('#ma-img').attr('src', newImgSrc);

        $('.product-photos__slider-nav-i').removeClass('active');
        $('.product-photos__slider-nav-i').eq(index).addClass('active');
    }

    $('.next').click(function() {
        currentIndex = (currentIndex + 1) % totalImages; 
        updateActiveImage(currentIndex); 
    });

    $('.previues').click(function() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages; 
        updateActiveImage(currentIndex); 
    });

    $('.product-photos__slider-nav-i').hover(function() {
        var index = $(this).index();
        currentIndex = index; 
        updateActiveImage(currentIndex); 
    });
});

