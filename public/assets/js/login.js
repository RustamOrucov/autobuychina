document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const inputPwDiv = document.querySelector('.inputTx.inputPw');
    const btnReset = inputPwDiv.querySelector('.btnReset');
    const btnPw = inputPwDiv.querySelector('.btnPw');

    passwordInput.addEventListener('click', function () {
        inputPwDiv.classList.add('fcs');
    });

    btnReset.addEventListener('click', function () {
        passwordInput.value = '';
    });

    btnPw.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            btnPw.classList.add('on');
        } else {
            passwordInput.type = 'password';
            btnPw.classList.remove('on');
        }
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    const prefix = '+994';

    phoneInput.addEventListener('input', function() {
        let value = phoneInput.value.replace(prefix, '');
        
        value = value.replace(/\D/g, '');
        
        phoneInput.value = prefix + value;
    });

    phoneInput.addEventListener('focus', function() {
        if (!phoneInput.value.startsWith(prefix)) {
            phoneInput.value = prefix;
        }
    });

    phoneInput.addEventListener('blur', function() {
        if (phoneInput.value === prefix) {
            phoneInput.value = '';
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const inputFile = document.getElementById('front_id');
    const label = document.querySelector('.custom-file-label');

    inputFile.addEventListener('change', function() {
        if (inputFile.files.length > 0) {
            label.textContent = inputFile.files[0].name;
        } else {
            label.textContent = 'Dosya Seç';
        }
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const frontInput = document.getElementById('front_id');
    const backInput = document.getElementById('back_id');
    const frontPreview = document.getElementById('front_preview');
    const backPreview = document.getElementById('back_preview');
    const clearFrontImg = document.getElementById('clear-front-img');
    const clearBackImg = document.getElementById('clear-back-img');
    const rememberMeCheckbox = document.getElementById('remember-me');
    const submitBtn = document.getElementById('submit-btn');

    function previewImage(input, preview, clearButton) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                clearButton.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            clearButton.style.display = 'none';
        }
    }

    function clearImage(input, preview, clearButton) {
        input.value = '';
        preview.src = '';
        clearButton.style.display = 'none';
    }

    frontInput.addEventListener('change', function() {
        previewImage(frontInput, frontPreview, clearFrontImg);
    });

    backInput.addEventListener('change', function() {
        previewImage(backInput, backPreview, clearBackImg);
    });

    clearFrontImg.addEventListener('click', function() {
        clearImage(frontInput, frontPreview, clearFrontImg);
    });

    clearBackImg.addEventListener('click', function() {
        clearImage(backInput, backPreview, clearBackImg);
    });

    rememberMeCheckbox.addEventListener('change', function() {
        if (rememberMeCheckbox.checked) {
            submitBtn.disabled = false;
            submitBtn.classList.remove('disabled');
            submitBtn.classList.add('enabled');
        } else {
            submitBtn.disabled = true;
            submitBtn.classList.remove('enabled');
            submitBtn.classList.add('disabled');
        }
    });

    if (rememberMeCheckbox.checked) {
        submitBtn.disabled = false;
        submitBtn.classList.remove('disabled');
        submitBtn.classList.add('enabled');
    } else {
        submitBtn.disabled = true;
        submitBtn.classList.add('disabled');
    }
});



document.getElementById('prev-policy').addEventListener('click',function(){
    const viewPolicy = document.getElementById('popup-private');
    viewPolicy.classList.add('popup-private-active')
})
document.getElementById('close-policy').addEventListener('click',function(){
    const viewPolicy = document.getElementById('popup-private');
    viewPolicy.classList.remove('popup-private-active')
})


