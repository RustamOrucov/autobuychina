var swiper = new Swiper(".mySwiper5", {
    loop: true,
    sliderPreview:1,
});


document.querySelector('.slick-prev').addEventListener('click', function() {
    swiper.slidePrev();
    updateSlideCounter(); 
  });

  document.querySelector('.slick-next').addEventListener('click', function() {
    swiper.slideNext(); 
    updateSlideCounter(); 
  });

  function updateSlideCounter() {
    var currentIndex = swiper.realIndex + 1;
    var totalSlides = swiper.slides.length; 
    document.querySelector('.page_ea').textContent = currentIndex;
    document.querySelector('.page_total').textContent = totalSlides;
  }
  

  updateSlideCounter();


  document.getElementById('btnCalculator').addEventListener('click',function() {
    document.getElementById('calculatorPop').classList.add('open')
  })

document.getElementById('modalClose').addEventListener('click',function(){
  document.getElementById('calculatorPop').classList.remove('open')
})