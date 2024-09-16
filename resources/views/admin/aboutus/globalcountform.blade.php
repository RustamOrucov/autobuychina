@extends('admin.layouts.admin')

@section('content')
    {{-- Slider form  --}}
    <form action="{{ route('admin.slider.form.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Galery image</label>
                            <input class="form-control form-control-sm" name="image" id="formFileSm" type="file">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-light px-5">Save</button>
                </div>
            </div>
        </div>
    </form>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid mt-4">
        @foreach ($sliderimages as $image)
            <div class="col">
                <div class="card">
                    <img width="100" src="{{ Storage::url($image->image) }}" class="card-img-top" alt="...">
                    <div class="">
                        <a href="{{ route('admin.slider.form.destroy', ['id' => $image->id]) }}"
                            class="position-absolute top-0 end-0 m-3 product-discount "
                            style="background:red;cursor:pointer"
                            onclick="return confirm('Silmək istədiyinizə əminsiniz?');"><span class="">X</span></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- slider form end --}}

    <div class="mx-auto">
        <form action="{{ route('admin.globalcount.form.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">

                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @foreach (config('app.languages') as $lang)
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
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        @foreach (config('app.languages') as $lang)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                id="tab-{{ $lang }}" role="tabpanel"
                                aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                                <div class="row ">
                                    <div class="col-6 col-lg-6">
                                        <label for="Name" class="form-label">Header</label>
                                        <input
                                            value="{{ old($lang . 'header', isset($model) ? $model->translateOrDefault($lang)->header : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[header]" value="{{ old($lang.'header', isset($model) ? $model->translateOrDefault($lang)->header : '') }}">
                                        @error("$lang.header")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <label for="Name" class="form-label">Title</label>
                                        <input
                                            value="{{ old($lang . 'title', isset($model) ? $model->translateOrDefault($lang)->title : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="title"
                                            name="{{ $lang }}[title]" value="{{ old($lang.'title', isset($model) ? $model->translateOrDefault($lang)->title : '') }}">
                                        @error("$lang.title")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <p>Global Count</p>
                                    <div class="col-4 col-lg-4">
                                        <label for="Name" class="form-label">Text one</label>
                                        <input
                                            value="{{ old($lang . 'textone', isset($model) ? $model->translateOrDefault($lang)->textone : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[textone]">
                                        @error("$lang.textone")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-lg-4">
                                        <label for="Name" class="form-label">Text two</label>
                                        <input
                                            value="{{ old($lang . 'texttwo', isset($model) ? $model->translateOrDefault($lang)->texttwo : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[texttwo]">
                                        @error("$lang.texttwo")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-lg-4">
                                        <label for="Name" class="form-label">Text three</label>
                                        <input
                                            value="{{ old($lang . 'textthree', isset($model) ? $model->translateOrDefault($lang)->textthree : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[textthree]">
                                        @error("$lang.textthree")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4 col-lg-4">
                                        <label for="Name" class="form-label">Count one</label>
                                        <input
                                            value="{{ old($lang . 'countone', isset($model) ? $model->translateOrDefault($lang)->countone : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[countone]">
                                            <img id="imagePreviewBgOne" width="200" src="{{ $model->bgone ? Storage::url($model->bgone) : '' }}" style="display: {{ $model->bgone ? 'block' : 'none' }};">

                                        @error("$lang.countone")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-lg-4">
                                        <label for="Name" class="form-label">Count two</label>
                                        <input
                                            value="{{ old($lang . 'counttwo', isset($model) ? $model->translateOrDefault($lang)->counttwo : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[counttwo]">
                                            <img id="imagePreviewBgTwo" width="200" src="{{ $model->bgtwo ? Storage::url($model->bgtwo) : '' }}" style="display: {{ $model->bgtwo ? 'block' : 'none' }};">

                                        @error("$lang.counttwo")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-lg-4">
                                        <label for="Name" class="form-label">Count three</label>
                                        <input
                                            value="{{ old($lang . 'countthree', isset($model) ? $model->translateOrDefault($lang)->countthree : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Ad"
                                            name="{{ $lang }}[countthree]">
                                            <img id="imagePreviewBgThree" width="200" src="{{ $model->bgthree ? Storage::url($model->bgthree) : '' }}" style="display: {{ $model->bgthree ? 'block' : 'none' }};">

                                        @error("$lang.countthree")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        @endforeach
                        <div class="row mt-4">
                            <div class="col-4 col-lg-4">
                                <label for="Name" class="form-label">Background one</label>
                                <input class="form-control form-control-sm" id="formFileSmBgOne" type="file" name="bgone" onchange="previewImage(event, 'imagePreviewBgOne')">
                                <img id="imagePreviewBgOne" width="200" style="display: none;">
                                @error("$lang.bgone")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4 col-lg-4">
                                <label for="Name" class="form-label">Background two</label>
                                <input class="form-control form-control-sm" id="formFileSmBgTwo" type="file" name="bgtwo" onchange="previewImage(event, 'imagePreviewBgTwo')">
                                <img id="imagePreviewBgTwo" width="200" style="display: none;">
                                @error("$lang.bgtwo")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4 col-lg-4">
                                <label for="Name" class="form-label">Background three</label>
                                <input class="form-control form-control-sm" id="formFileSmBgThree" type="file" name="bgthree" onchange="previewImage(event, 'imagePreviewBgThree')">
                                <img id="imagePreviewBgThree" width="200" style="display: none;">
                                @error("$lang.bgthree")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-light px-5">Save</button>
                    </div>
        </form>
    </div>
    </div>


    <script>
        function previewImage(event, imageId) {
            const input = event.target;
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.getElementById(imageId);
                img.src = e.target.result;
                img.style.display = 'block';
            }

            reader.readAsDataURL(file);
        }
    </script>
@endsection
