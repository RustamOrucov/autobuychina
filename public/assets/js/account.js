document.querySelector('.account').addEventListener('mouseenter', function () {
    this.classList.add('on');
});

document.querySelector('.account').addEventListener('mouseleave', function () {
    this.classList.remove('on');
});


document.querySelector('.mywon').addEventListener('mouseenter', function () {
    this.classList.add('on');
});

document.querySelector('.mywon').addEventListener('mouseleave', function () {
    this.classList.remove('on');
});



//language
    function changeLanguage(lang) {
    document.getElementById('langInput').value = lang;
    document.getElementById('languageForm').submit();
}
