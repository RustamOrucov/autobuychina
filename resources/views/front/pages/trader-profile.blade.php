@extends('front.layout.layout')
@section('front_content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>

    <div class="main-container ads">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">Trader Profile</h1>
                <a href="{{ route('trader-detail') }}" class="custom-trader-page">Detail Page</a>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                </div>
            </div>
        </div>
        <div class="new-product">
            <div class="limits-container">
                <div class="limits limits--current-step limits--limit">
                    <div class="limits--description">
                        <div class="text-success">Welcome <span class="phone-num">{{ $trader->name }}</span></div>
                    </div>
                </div>
            </div>

            <div class="form-header">
            </div>
            <form class="simple_form product-form js-product-form" id="profileForm" enctype="multipart/form-data"
                  action="{{ route('trader-update', ['trader' => $trader->id]) }}" accept-charset="UTF-8" method="post">
                @csrf
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_make_id">
                            <label class="string required control-label" for="auto_make_id">Name<abbr
                                        title="required">*</abbr></label>
                            <input class="js_make_id" name="name" type="text"
                                   value="{{ old('name', $trader->name) }}" placeholder="Name" required>
                            @if ($errors->has('name'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_fuel_type"><label class="select required control-label"
                                                                                 for="auto_fuel_type_id">Surname <abbr
                                        title="required">*</abbr></label>
                            <input type="text" name="surname" required class="select required form-control"
                                   value="{{ old('surname', $trader->surname) }}">
                            @if ($errors->has('surname'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('surname') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_model"><label class="string required control-label"
                                                                             for="auto_model">Address <abbr
                                        title="required">*</abbr></label>
                            <input type="text" class="js_model_id" name="adress" required
                                   value="{{ old('adress', $trader->adress) }}">
                            @if ($errors->has('adress'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('adress') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_gear"><label class="select required control-label"
                                                                            for="auto_gear_id">Phone <abbr
                                        title="required">*</abbr></label>
                            <input type="text" class="select required form-control" name="phone" required
                                   value="{{ old('phone', $trader->phone) }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_category"><label class="select required control-label"
                                                                                for="auto_category_id">Trader Name <abbr
                                        title="required">*</abbr></label>
                            <input type="text" class="select required form-control" required name="t_name"
                                   value="{{ old('t_name', $trader->t_name) }}">
                            @if ($errors->has('t_name'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('t_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_transmission"><label
                                    class="select required control-label"
                                    for="auto_transmission_id">Email <abbr title="required">*</abbr></label>
                            <input type="email" class="select required form-control" required name="email"
                                   value="{{ old('email', $trader->email) }}">
                            @if ($errors->has('email'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="integer  control-label" for="auto_mileage">Open
                            time
                        </label>
                        <div class="tz-d-inline" style="border:1px solid gray;border-radius:5px;padding:5px 10px">
                            <input type="time" id="time" name="opening_time"
                                   value="{{ old('opening_time', $trader->opening_time) }}">
                            @if ($errors->has('opening_time'))
                                <span class="text-danger"
                                      style="color:red;font-size:13px">{{ $errors->first('opening_time') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_reg_year"><label class="select  control-label"
                                                                                for="auto_reg_year">Close time </label>
                            <input type="time" id="time" name="closing_time"
                                   value="{{ old('closing_time', $trader->closing_time) }}"
                                   style="border:1px solid gray;border-radius:5px;padding:5px 10px">
                            @error('closing_time')
                            <div class="text-danger" style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- <div class="new-product-i">
                    <div class="left-side">

                        <div class="input select required auto_color">
                            <label class="select  control-label"
                                for="auto_color_id">Latitude

                        </label>
                            <input class="select required form-control" type="text" name="latitude" id=""
                                value="{{ old('latitude', $trader->latitude) }}">
                                @if ($errors->has('latitude'))
                                <div class="text-danger" style="color:red;font-size:13px">{{ $errors->first('latitude') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_engine_volume"><label class="select  control-label"
                                for="auto_engine_volume">Longtidue</label>
                            <input class="select required form-control" type="text" name="longitude" id=""
                                value="{{ old('longtidue', $trader->longtidue) }}">
                            @if ($errors->has('longitude'))
                                <span class="text-danger" style="color:red;font-size:13px">{{ $errors->first('longitude') }}</span>
                            @endif
                        </div>
                    </div>
                </div> --}}

                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input select required auto_color">
                            <label class="select control-label" for="auto_color_id">Logo</label>
                            <input class="select required form-control" type="file" name="logo" id="logo"
                                   accept="image/*"
                                   onchange="previewImage(event, 'logoPreview', '{{ $trader->logo }}')">
                            <div id="logoPreview" class="image-preview" style="display: flex;justify-content:center">
                                @if ($trader->logo)
                                    <img src="{{ asset('storage/'.$trader->logo) }}" alt="Current Logo"
                                         style="width: 100px; height: auto; margin-top: 10px;">
                                @endif
                                @if ($errors->has('logo'))
                                    <span class="text-danger"
                                          style="color:red;font-size:13px">{{ $errors->first('logo') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select required auto_engine_volume">
                            <label class="select control-label" for="auto_engine_volume">Background</label>
                            <input class="select required form-control" type="file" name="background" id="background"
                                   accept="image/*"
                                   onchange="previewImage(event, 'backgroundPreview', '{{ $trader->background }}')">
                            <div id="backgroundPreview" class="image-preview"
                                 style="display: flex;justify-content:center">
                                @if ($trader->background)
                                    <img src="{{ asset('storage/'.$trader->background) }}" alt="Current Background"
                                         style="width: 100px; height: auto; margin-top: 10px;">
                                @endif
                                @if ($errors->has('background'))
                                    <span class="text-danger"
                                          style="color:red;font-size:13px">{{ $errors->first('background') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <div class="new-product-i">
                    <div class="left-side tooltips-input">
                        <label class="string control-label" for="password">Password</label>
                        <div class="tz-d-inline">
                            <input type="password" name="password" id="password">
                            @if ($errors->has('password'))
                                <span class="text-danger mt-3"
                                      style="color:red;font-size:13px">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input string required auto_power">
                            <label class="string control-label" for="password_confirmation">Password Confirm</label>
                            <input class="string required form-control" type="password" name="password_confirmation"
                                   id="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger mt-3"
                                      style="color:red;font-size:13px">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="new-product-i new-product-i--large--indent new-product-i--uppercase">
                    <div class="input string optional auto_vin"><label for="auto_vin">Title</label><input
                                class="string optional form-control" type="text" name="title" id="auto_vin"
                                value="{{ old('title', $trader->title) }}">
                        @if ($errors->has('title'))
                            <span class="text-danger"
                                  style="color:red;font-size:13px">{{ $errors->first('title') }}</span>
                        @endif

                    </div>
                </div>
                @php
                    $content = old('content', optional($trader->translations[0])->content);
                @endphp
                <div class="input text optional auto_description field_with_hint">
                    <label class="text optional control-label" for="auto_description">Additional information</label>
                    <textarea class="text optional form-control" name="content" id="auto_description">{{ $content }}</textarea>
                    @if ($errors->has('content'))
                        <span class="text-danger" style="color:red;font-size:13px">{{ $errors->first('content') }}</span>
                    @endif
                </div>
                <div class="custom-map-point" style="margin-bottom:10px">
                    <div id="map"></div>
                    <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude',$trader->latitude) }}">
                    <input type="hidden" id="longitude" name="longitude"
                           value="{{ old('longitude',$trader->longitude) }}">
                </div>

                <div class="new-product-i">
                    <div class="left-side seller-information">
                        <input autocomplete="off" type="hidden" id="auto_phones"><button type="submit"
                                                                                         class="submit-button">Save</button>
                    </div>
                    <div class="right-side"></div>
                </div>

            </form>
        </div>
    </div>

    <script>
        function previewImage(event, previewElementId, currentImageUrl) {
            const file = event.target.files[0];
            const preview = document.getElementById(previewElementId);
            preview.innerHTML = ''; // Clear previous images

            // Show current image if it exists
            if (currentImageUrl) {
                const currentImg = document.createElement('img');
                currentImg.src = currentImageUrl;
                currentImg.style.width = '100px'; // Set width as needed
                currentImg.style.height = 'auto'; // Maintain aspect ratio
                currentImg.style.marginTop = '10px'; // Add some space above the image
                preview.appendChild(currentImg);
            }

            // Show new selected image if file is chosen
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const newImg = document.createElement('img');
                    newImg.src = e.target.result;
                    newImg.style.width = '100px'; // Set width as needed
                    newImg.style.height = 'auto'; // Maintain aspect ratio
                    newImg.style.marginTop = '10px'; // Add some space above the image
                    preview.appendChild(newImg);
                }
                reader.readAsDataURL(file);
            }
        }

        // password confirm eror
        document.getElementById('profileForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var passwordConfirmation = document.getElementById('password_confirmation').value;

            var errorMessage = '';

            if (passwordConfirmation && !password) {
                errorMessage = 'Please do not leave the password field empty.';
            }

            if (errorMessage) {
                event.preventDefault();
                alert(errorMessage);
            }
        });
    </script>
    <script>
        var lat = document.getElementById('latitude').value || 40.4093;
        var lng = document.getElementById('longitude').value || 49.8671;

        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([lat, lng], {
            draggable: true
        }).addTo(map);

        marker.on('dragend', function (e) {
            var newLat = marker.getLatLng().lat;
            var newLng = marker.getLatLng().lng;
            document.getElementById('latitude').value = newLat;
            document.getElementById('longitude').value = newLng;
        });
    </script>
@endsection
