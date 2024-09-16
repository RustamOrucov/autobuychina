
var swiper = new Swiper(".mySwiper", {
    loop: true,
});


var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1.2,
    spaceBetween: 15,
    loop: true,
});

var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 15,
    loop: true,
});

var swiper = new Swiper(".mySwiper5", {

});



var swiper = new Swiper(".mySwiper7", {
    slidesPerView: 2,
    spaceBetween: 5,
    loop: true,
  });

opnmenu = document.getElementById('open-menu');
console.log(opnmenu)
document.getElementById('open-menu').addEventListener('click', function(event) {
    event.preventDefault();

    document.getElementById('my-html').classList.add('mm-wrapper_opened',
            'mm-wrapper_blocking',
            'mm-wrapper_background',
            'mm-wrapper_opening');
    document.getElementById('ft_nav').classList.add('nones')
});


document.getElementById('close-menu').addEventListener('click',function () {
    document.getElementById('my-html').classList.remove('mm-wrapper_opened',
        'mm-wrapper_blocking',
        'mm-wrapper_background',
        'mm-wrapper_opening');
        document.getElementById('ft_nav').classList.remove('nones')
})


