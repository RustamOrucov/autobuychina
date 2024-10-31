@extends('front.layout.layout')
@section('front_content')
    <link href="{{asset('_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        .note-editor .note-toolbar,
        .note-popover .popover-content {
            background-color: #777777 !important;
        }

        .note-editable {
            background-color: #ffffff !important;
            color: #000;
        }
    </style>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="main-container ads">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">{{sitekey('list_car','title')}}</h1>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                </div>
            </div>
        </div>
        <div class="new-product">
            <div class="limits-container">
                <div class="limits limits--current-step limits--limit">
                    <div class="limits--description">
                        <div class="text-success">{{sitekey('list_car','text')}} <span
                                class="phone-num">{{ Auth::guard('trader')->user()->t_name }}</span>.
                        </div>
                    </div>
                </div>
            </div>


            <form class="simple_form product-form js-product-form" enctype="multipart/form-data"
                  action="{{ route('spare-store') }}" method="post">
                @csrf
                <input type="hidden" name="trader_id" value="{{ Auth::guard('trader')->user()->id }}">
                <div class="new-product-i">
                    <div class="left-side">
                        <div class="input string required auto_make_id"><label class="string required control-label"
                                                                               for="auto_make_id">{{sitekey('new_car','title')}} <abbr
                                    title="required">*</abbr></label><select
                                class="js_make_id required-element" name="category_id" id="auto_make_id" required>
                                <option value="" disabled selected>{{sitekey('list_car','name')}}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->status}}
                                    </option>
                                @endforeach
                                <option value="1">{{sitekey('new_car','text')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input"><label class="string required control-label"
                                                                 for="auto_price">{{sitekey('list_car_two','desc')}} <abbr title="required">*</abbr></label>
                        <div class="tz-d-inline">
                            <input data-number="true" required class="string required form-control required-element"
                                   type="text" value="{{ old('price', isset($model) ? $model->price : '') }}"
                                   name="price" id="auto_price">
                            <div class="tooltips">
                                <div class="tooltips-body">{{sitekey('list_car_two','name')}}</div>
                            </div>
                            <div class="input radio_buttons optional auto_currency">
                                <input type="hidden" name="ro_id" value="" autocomplete="off"><span
                                    class="radio">
                                    <input class="radio_buttons optional form-control" type="radio" value="1"
                                           checked name="ro_id" id="auto_currency_azn"><label
                                        class="collection_radio_buttons" for="auto_currency_azn">{{sitekey('list_car_three','title')}}</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-product-i">
                    <div class="left-side tooltips-input">
                        <div class="tz-d-inline">
                            <div class="input select optional auto_market"><label class="select optional control-label"
                                                                                  for="auto_market_id">{{sitekey('filter_key_two','desc')}}</label><select
                                    class="select optional form-control"
                                    name="region_id" id="auto_market_id">
                                    <option>{{sitekey('list_car','name')}}</option>
                                    @foreach ($regions as $city)
                                        <option
                                            value="{{ $city->id }}"{{ old('region_id', isset($model) ? $model->region_id : '') == $city->id ? 'selected' : '' }}>
                                            {{ $city->translateOrDefault(app()->getLocale())->name }}</option>
                                    @endforeach

                                </select></div>
                        </div>
                    </div>
                </div>
                <div class="spared-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        @foreach (config('app.languages') as $index => $lang)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active show' : '' }} @error("$lang.name") text-danger @enderror"
                                   id="custom-tabs-one-{{ $lang }}-tab" data-toggle="pill"
                                   href="#tab-{{ $lang }}" role="tab"
                                   aria-controls="custom-tabs-one-{{ $lang }}"
                                   aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                    {{ strtoupper($lang) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content" style="margin:10px 0 20px 0;" id="custom-tabs-one-tabContent">
                    @foreach (config('app.languages') as $index => $lang)
                        <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $lang }}"
                             role="tabpanel" aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                            <div class="form-group col-12 mt-3">
                                <label>{{sitekey('car_detail_4','name')}}</label>
                                <textarea id="summernote{{ $index }}" placeholder="desc{{ $lang }}"
                                          name="{{ $lang }}[item_comment]" class="form-control">
                            {{ old("$lang.item_comment", isset($model) ? $model->translateOrDefault($lang)->item_comment ?? '' : '') }}
                        </textarea>
                                @error("$lang.item_comment")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    @endforeach
                </div>
        <div class="input pond pond-grid" data-endpoint="" data-name="gallery[photo_ids][]"
             data-target-format=""><label for="" class="string optional control-label">{{sitekey('list_car_six','text')}}</label>
            <div class="pond-inner">
                <div class="pond-notice-container">
                    <div class="pond-notice pond-notice--grey pond-notice--first">
                        <div class="pond-notice__title pond-notice__title--red">{{sitekey('list_car_six','desc')}}</div>
                        <div class="pond-notice__text">{{sitekey('list_car_six','name')}}</div>
                    </div>
                </div>


                <div class="pond-img-list ui-sortable" id="imageContainer">
                    <div class="custom-hidden" style="display: flex; gap: 10px">
                        <input type="file" name="spareimages[]" id="spareImageInput" multiple
                               style="display: none;">
                        <label class="pond-img-spared js-pond-img-spared pond-img-spared--front"
                               id="backImageUpload">
                            <span>{{sitekey('list_car_seven','title')}}</span>
                            <input type="file" name="spareimages[]" class="spareImageInput">
                        </label>
                        <label class="pond-img-spared js-pond-img-spared pond-img-spared--front"
                               id="mainImageUpload">
                            <span>{{sitekey('list_car_seven','text')}}</span>
                            <input type="file" name="spareimages[]" class="spareImageInput">
                        </label>
                        <div class="pond-img-spared js-pond-img-spared pond-img-spared--dashboard"
                             id="frontPanelUpload">
                            <span>{{sitekey('list_car_seven','desc')}}</span>
                        </div>
                    </div>
                    <label class="pond-new-img-button pond-new-img" id="addImageBtn">
                        <span class="icon"></span>
                        <span class="text text--default">{{sitekey('list_car_seven','name')}}</span>
                    </label>
                </div>
        <div class="new-product-i">
            <div class="left-side seller-information">
                <button type="submit" class="submit-button" data-disable-with="save...">{{sitekey('list_car_eight','title')}}</button>
            </div>
            <div class="right-side"></div>
        </div>
        <div class="new-product--confirm-rules">{{sitekey('list_car_eight','text')}}
            <a target="_blank" href="{{ route('useragrement') }}">{{sitekey('list_car_eight','desc')}}</a>
            and <a target="_blank" href="{{ route('rule') }}">{{sitekey('list_car_eight','name')}}</a>.
        </div>
        </form>
    </div>

    </div>

    @push('js')
        <script>
            $(document).ready(function () {
                function initializeSummernote() {
                    @foreach (config('app.languages') as $index => $lang)
                    $('#summernote{{ $index }}').summernote({
                        height: 100
                    });
                    @endforeach
                }

                initializeSummernote();

                $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                    initializeSummernote();
                });
            });


            document.getElementById('addImageBtn').addEventListener('click', function () {
                document.getElementById('spareImageInput').click();
            });

            const uploadedFiles = [];

            document.getElementById('spareImageInput').addEventListener('change', function (event) {
                const files = Array.from(event.target.files);
                uploadedFiles.push(...files);

                const element = document.querySelector('.custom-hidden');
                element.style.display = 'none';

                files.forEach((file) => {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const newImagespared = document.createElement('div');
                        newImagespared.classList.add('pond-img-spared', 'js-pond-img-spared');
                        newImagespared.style.position = 'relative';

                        const imageElement = document.createElement('img');
                        imageElement.src = e.target.result;
                        imageElement.style.width = '100%';
                        imageElement.style.height = '100%';
                        imageElement.style.borderRadius = '5px';
                        imageElement.style.objectFit = 'cover';
                        imageElement.style.transition = 'transform 0.3s';


                        const deleteBtn = document.createElement('button');
                        deleteBtn.innerHTML = 'X';
                        deleteBtn.style.position = 'absolute';
                        deleteBtn.style.top = '10px';
                        deleteBtn.style.right = '10px';
                        deleteBtn.style.fontWeight = 'bold';
                        deleteBtn.style.color = 'red';
                        deleteBtn.style.backgroundColor = 'transparent';
                        deleteBtn.style.border = 'none';
                        deleteBtn.style.padding = '5px';
                        deleteBtn.style.cursor = 'pointer';


                        const rotateRightBtn = document.createElement('button');
                        rotateRightBtn.innerHTML = '⟳';
                        rotateRightBtn.style.position = 'absolute';
                        rotateRightBtn.style.bottom = '10px';
                        rotateRightBtn.style.right = '10px';
                        rotateRightBtn.style.fontWeight = 'bold';
                        rotateRightBtn.style.backgroundColor = 'transparent';
                        rotateRightBtn.style.color = 'blue';
                        rotateRightBtn.style.border = 'none';
                        rotateRightBtn.style.padding = '5px';
                        rotateRightBtn.style.cursor = 'pointer';


                        const rotateLeftBtn = document.createElement('button');
                        rotateLeftBtn.innerHTML = '⟲';
                        rotateLeftBtn.style.position = 'absolute';
                        rotateLeftBtn.style.bottom = '10px';
                        rotateLeftBtn.style.left = '10px';
                        rotateLeftBtn.style.fontWeight = 'bold';
                        rotateLeftBtn.style.backgroundColor = 'transparent';
                        rotateLeftBtn.style.color = 'blue';
                        rotateLeftBtn.style.border = 'none';
                        rotateLeftBtn.style.padding = '5px';
                        rotateLeftBtn.style.cursor = 'pointer';

                        let rotation = 0;


                        deleteBtn.addEventListener('click', function () {
                            newImagespared.remove();
                            const index = uploadedFiles.indexOf(file);
                            if (index > -1) {
                                uploadedFiles.splice(index, 1);
                            }
                        });


                        rotateRightBtn.addEventListener('click', function (event) {
                            event.preventDefault();
                            rotation += 90;
                            imageElement.style.transform = `rotate(${rotation}deg)`;
                        });

                        rotateLeftBtn.addEventListener('click', function (event) {
                            event.preventDefault();
                            rotation -= 90;
                            imageElement.style.transform = `rotate(${rotation}deg)`;
                        });


                        newImagespared.appendChild(imageElement);
                        newImagespared.appendChild(deleteBtn);
                        newImagespared.appendChild(rotateRightBtn);
                        newImagespared.appendChild(rotateLeftBtn);


                        document.getElementById('imageContainer').appendChild(newImagespared);
                    };

                    reader.readAsDataURL(file);
                });

                const dataTransfer = new DataTransfer();
                uploadedFiles.forEach(file => {
                    dataTransfer.items.add(file);
                });
                document.getElementById('spareImageInput').files = dataTransfer.files;
            });
        </script>
    @endpush
@endsection
