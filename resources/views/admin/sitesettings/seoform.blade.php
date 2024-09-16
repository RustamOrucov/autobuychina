@extends('admin.layouts.admin')
@section('content')

    <form action="{{route('admin.seo.update')}}" method="POST" enctype="multipart/form-data">
     @csrf
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            @foreach(config('app.languages') as $index => $lang)
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
        @foreach(config('app.languages') as $index => $lang)
            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $lang }}" role="tabpanel" aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                <div class="row g-3">
                    <div class="col-12 col-lg-6">
                        <label for="Name" class="form-label">Seo Title</label>
                        <input value="{{ old($lang.'seo_title', isset($model) ? $model->translateOrDefault($lang)->seo_title : '') }}" type="text" class="form-control" id="Name" placeholder="Seo title" name="{{ $lang }}[seo_title]">
                        @error("$lang.seo_title")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12 col-lg-6">
                        <label for="seodesc" class="form-label">Seo Description</label>
                        <input value="{{ old($lang.'seo_description', isset($model) ? $model->translateOrDefault($lang)->seo_description : '') }}" type="text" class="form-control" id="seodesc" placeholder="Seo description" name="{{ $lang }}[seo_description]">
                        @error("$lang.seo_description")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12 col-lg-6">
                        <label for="seokey" class="form-label">Seo Keywords</label>
                        <input value="{{ old($lang.'seo_key', isset($model) ? $model->translateOrDefault($lang)->seo_key : '') }}" type="text" class="form-control" id="seokey" placeholder="Seo keywords" name="{{ $lang }}[seo_key]">
                        @error("$lang.seo_key")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>

        @endforeach
    </div>
        <button class="btn btn-light mt-4" type="submit">Save</button>
    </form>
@endsection
