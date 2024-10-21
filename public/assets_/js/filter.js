document.querySelector('.tz-container').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "hidden";
    document.querySelector('.select-category--q_make').classList.add('select-category--open');
});

document.querySelector('.js-close-popup-btn').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "";
    document.querySelector('.select-category--q_make').classList.remove('select-category--open');
});

document.querySelector('.js-tab-content-group').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "hidden";
    document.querySelector('.select-category--q_category').classList.add('select-category--open');
});

document.getElementById('close-ban').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "";
    document.querySelector('.select-category--q_category').classList.remove('select-category--open');
});

document.getElementById('q_color').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "hidden";
    document.querySelector('.select-category--q_color').classList.add('select-category--open');
});

document.getElementById('close-btn').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "";
    document.querySelector('.select-category--q_color').classList.remove('select-category--open');
});

document.getElementById('q_market').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "hidden";
    document.querySelector('.select-category--q_market').classList.add('select-category--open');
});

document.getElementById('close-market').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "";
    document.querySelector('.select-category--q_market').classList.remove('select-category--open');
});


document.getElementById('open-qurrency').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "hidden";
    document.querySelector('.valyuta').classList.add('select-category--open');
});

document.getElementById('close-azn').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "";
    document.querySelector('.valyuta').classList.remove('select-category--open');
});

document.getElementById('q_region').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "hidden";
    document.querySelector('.select-category--q_region').classList.add('select-category--open');
});

document.getElementById('close-region').addEventListener('click', function () {
    document.getElementById('android-filter').style.overflow = "";
    document.querySelector('.select-category--q_region').classList.remove('select-category--open');
});



// //////////////////////////////////////////////////////////////////////////

