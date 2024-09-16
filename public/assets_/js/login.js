document.getElementById('pwd_visible_btn').addEventListener('click',function () {
    if(document.getElementById('password').type === 'password'){
        document.getElementById('password').type = 'text';
        document.getElementById('pwd_visible_btn').classList.add('on')
    } else{
        document.getElementById('password').type = 'password';
        document.getElementById('pwd_visible_btn').classList.remove('on')
    }
})








