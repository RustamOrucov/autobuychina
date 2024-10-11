document.querySelector('.js-drawer-open').addEventListener('click', function() {
    if (this.classList.contains('active')) {
        document.documentElement.style.width = '';
        document.documentElement.style.position = '';
        document.documentElement.style.top = '';
        document.documentElement.style.overflow = '';

        document.getElementById('js-drawer').classList.remove('open');

        this.classList.remove('active');
    } else {
        document.documentElement.style.width = 'calc(100% + 0px)';
        document.documentElement.style.position = 'fixed';
        document.documentElement.style.top = '0px';
        document.documentElement.style.overflow = 'hidden';
fautos
        document.getElementById('js-drawer').classList.add('open');

        this.classList.add('active');
    }
});
// select-category--open


document.querySelector('.js-select-category-open').addEventListener('click', function () {
    document.getElementById('android').style.overflow = "hidden";
    document.querySelector('.select-category--q_make').classList.add('select-category--open');
});

document.querySelector('.js-close-popup-btn').addEventListener('click', function () {
    document.getElementById('android').style.overflow = "";
    document.querySelector('.select-category--q_make').classList.remove('select-category--open');
});

