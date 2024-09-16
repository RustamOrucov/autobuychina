@extends('admin.layouts.admin')

@section('content')

    <div class="col-xl-7 mx-auto">
        <form action="{{ route('admin.top.form.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">

                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @foreach(config('app.languages') as $lang)
                                <li class="nav-item">
                                    <a class="nav-link {{$loop->first ? 'active show' : ''}} @error("$lang.name") text-danger @enderror"
                                       id="custom-tabs-one-{{ $lang }}-tab" data-toggle="pill" href="#tab-{{ $lang }}"
                                       role="tab" aria-controls="custom-tabs-one-{{ $lang }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        {{ strtoupper($lang) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        @foreach(config('app.languages') as $lang)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $lang }}" role="tabpanel" aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                                <div class="row ">
                                    <div class="col-12 col-lg-12">
                                        <label for="Name" class="form-label">Header</label>
                                        <input value="{{ old($lang.'header', isset($model) ? $model->translateOrDefault($lang)->header : '') }}" type="text" class="form-control" id="Name" placeholder="Ad" name="{{ $lang }}[header]">
                                        @error("$lang.header")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 col-lg-12">
                                        <label for="Namet" class="form-label">Text</label>
                                        <textarea  type="text" class="form-control" id="Namet"  name="{{ $lang }}[text]"> {{ old($lang.'text', isset($model) ? $model->translateOrDefault($lang)->text : '') }}</textarea>
                                        @error("$lang.text")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Background image</label>
                        <input class="form-control form-control-sm" id="formFileSm" name="background" type="file" onchange="previewImage(event)">
                        <img id="imagePreview" width="200" src="{{ $model->background ? Storage::url($model->background) : '' }}" style="display: {{ $model->background ? 'block' : 'none' }};">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-light px-5">Save</button>
                    </div>
        </form>
    </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.getElementById('imagePreview');
                img.src = e.target.result;
                img.style.display = 'block';
            }

            reader.readAsDataURL(file);
        }
    </script>

@endsection
