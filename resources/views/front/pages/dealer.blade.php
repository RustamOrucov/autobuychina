@extends('front.layout.layout')
@section('front_content')
    <div class="contents member" id="contents">
        <div style="max-width: 750px; margin: 20px auto 0 auto;">
            <div class="container custom-register-container">
                <div class="title">
                    <p>Register Dealer</p>
                </div>
                <form action="{{ route('registerStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="user_details">
                        <div class="input_box">
                            <label for="name">Name</label>
                            <input style="padding:0 5px" type="text" id="name" name="name"
                                value="{{ old('name') }}" placeholder="Name" required>
                            @error('name')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="surname">Surname</label>
                            <input style="padding:  0 5px" type="text" id="surname" name="surname"
                                value="{{ old('surname') }}" placeholder="Surname" required>
                            @error('surname')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="d_name">Dealer Name</label>
                            <input style="padding: 0 5px" type="text" id="d_name" name="d_name"
                                placeholder="Dealer Name" value="{{ old('d_name') }}" required>
                            @error('d_name')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="adress">Adress</label>
                            <input style="padding: 0 5px" type="text" name="adress" id="adress"
                                value="{{ old('adress') }}" placeholder="Adress" required>
                            @error('adress')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="email">Email</label>
                            <input style="padding:0 5px" type="email" name="email" value="{{ old('email') }}"
                                id="email" placeholder="Email Address" required>
                            @error('email')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="phone">Phone number</label>
                            <input style="padding: 0 5px" type="text" name="phone" value="{{ old('phone') }}"
                                id="phone" placeholder="+994" required>
                            @error('phone')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="confirmPass">Pssword</label>
                            <div class="inputTx inputPw">
                                <input style="padding: 0 5px" type="password" name="password" id="password"
                                    class="password required" placeholder="Password">

                            </div>

                            @error('password')
                                <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="input_box">
                            <label for="confirmPass">Pssword Confirm</label>
                            <div class="inputTx inputPw">
                                <input style="padding:0 5px" type="password" name="password_confirmation"
                                    id="current_password" class="password required" placeholder="Password">

                            </div>
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_box">
                            <label for="front_id" class="front_id">Front Image of the ID Card *</label>
                            <input type="file" name="passport_front" id="front_id" class="custom-file-input" required>
                            @error('passport_front')
                            <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                            <div class="img-boxs">
                                <button class="clear-img" id="clear-front-img"><i class="fa-solid fa-xmark"></i></button>
                                <img id="front_preview" style="width: 150px; object-fit: cover;" src="" alt="">

                            </div>
                        </div>
                        <div class="input_box">
                            <label for="back_id" class="front_id">Back Image of the ID Card *</label>
                            <input type="file" name="passport_back" id="back_id" class="custom-file-input" required>
                            @error('passport_back')
                            <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                            <div class="img-boxs">
                                <button class="clear-img" id="clear-back-img"><i class="fa-solid fa-xmark"></i></button>
                                <img id="back_preview" style="width: 150px; object-fit: cover;" src="" alt="">
                            </div>
                        </div>
                        <div class="input_box">
                            <label for="business_foto" class="front_id">Business foto *</label>
                            <input type="file" name="business_foto" id="business_foto" class="custom-file-input" required="">
                                                        <div class="img-boxs">
                                <button class="clear-img" id="clear-business-img"><i class="fa-solid fa-xmark"></i></button>
                                <img id="business_preview" style="width: 150px; object-fit: cover;" src="" alt="">
                            </div>
                        </div>
                        <div class="input_box">
                            <label for="license_number" style="margin:5px 0;">License Number</label>
                            <input style="padding: 0 10px;margin:5px 0;" type="text" name="license_number" value="{{ old('license_number') }}" id="license_number" placeholder="123456789" required="">
                        </div>

                        <div class="private-checked">
                            <div class="dbl clearfix" style="list-style-type: none;">
                                <input type="checkbox"  id="remember-me" class=""
                                    value="true">
                                <label for="remember-me">Terms and Conditions</label>
                            </div>
                            <div class="private-btn-box">
                                <a id="prev-policy" href="#" style="color: red;font-weight: bold;">Read</a>
                            </div>
                        </div>

                    </div>

                    <div class="reg_btn">
                        <input type="submit" value="Register" id="submit-btn" class="disabled" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Register Form -->
    </div>


    <div class="popup-private" id="popup-private">
        <div class="full-w" style="height: 330%">
            <button style="position: fixed;" class="close-policy" id="close-policy"><i
                    class="fa-solid fa-xmark"></i></button>
            <div class="content-policie">
                <p>
                    @foreach($policys as $policy)
                        {!! $policy->register_policy !!}
                    @endforeach
                </p>
            </div>
        </div>

    </div>


    <script>
 document.querySelector('#prev-policy').addEventListener('click', function(){
    document.querySelector('#popup-private').style.display = 'block';
    window.scrollTo({ top: 0, behavior: 'smooth' });
    document.body.style.overflow = 'hidden';
   })

   document.querySelector('#close-policy').addEventListener('click', function() {
    document.body.style.overflow = 'auto';
    document.querySelector('#popup-private').style.display = 'none';
});



document.addEventListener('DOMContentLoaded', function () {
    function previewImage(input, previewId, clearButtonId) {
        const file = input.files[0];
        const preview = document.getElementById(previewId);
        const clearButton = document.getElementById(clearButtonId);

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                preview.style.height = '150px';
                clearButton.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
            preview.style.height = '';
            clearButton.style.display = 'none';
        }
    }

    document.getElementById('front_id').addEventListener('change', function () {
        previewImage(this, 'front_preview', 'clear-front-img');
    });
    document.getElementById('back_id').addEventListener('change', function () {
        previewImage(this, 'back_preview', 'clear-back-img');
    });

    document.getElementById('business_foto').addEventListener('change', function () {
        previewImage(this, 'business_preview', 'clear-business-img');
    });
    document.getElementById('back_id').addEventListener('change', function () {
        previewImage(this, 'back_preview', 'clear-back-img');
    });

    function clearImage(button, inputId, previewId) {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);
            input.value = '';
            preview.src = '';
            preview.style.display = 'none';
            button.style.display = 'none';
        });
    }

    clearImage(document.getElementById('clear-front-img'), 'front_id', 'front_preview');
    clearImage(document.getElementById('clear-back-img'), 'back_id', 'back_preview');

    clearImage(document.getElementById('clear-business-img'), 'business_foto', 'business_preview');
    clearImage(document.getElementById('clear-back-img'), 'back_id', 'back_preview');
});




const checkbox = document.getElementById('remember-me');
        const submitBtn = document.getElementById('submit-btn');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                submitBtn.classList.remove('disabled');
                submitBtn.disabled = false;
            } else {
                submitBtn.classList.add('disabled');
                submitBtn.disabled = true;
            }
        });
    </script>

    <script>
        function previewImage(input, previewId) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(previewId).src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function clearImage(previewId, inputId) {
            document.getElementById(previewId).src = "";
            document.getElementById(inputId).value = "";
        }

        document.getElementById('front_id').addEventListener('change', function () {
            previewImage(this, 'front_preview');
        });

        document.getElementById('back_id').addEventListener('change', function () {
            previewImage(this, 'back_preview');
        });



        document.getElementById('clear-front-img').addEventListener('click', function (e) {
            e.preventDefault();
            clearImage('front_preview', 'front_id');
        });

        document.getElementById('clear-back-img').addEventListener('click', function (e) {
            e.preventDefault();
            clearImage('back_preview', 'back_id');
        });


    </script>
@endsection
