@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.adminsetting' ?>

    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName.'.update', $model->id) : route($routeName.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Fuel Type</h5>

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
                                <div class="row g-3">
                                    <div class="col-12 col-lg-6">
                                        <label for="MobileFooter" class="form-label">Mobile Footer Text</label>
                                        <input value="{{ old($lang.'mobile_footer', isset($model) ? $model->translateOrDefault($lang)->mobile_footer : '') }}" type="text" class="form-control" id="MobileFooter" placeholder="MobileFooter" name="{{ $lang }}[mobile_footer]">
                                        @error("$lang.mobile_footer")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="DesktopFooterText" class="form-label">Desktop Footer Text</label>
                                        <input value="{{ old($lang.'footer_text', isset($model) ? $model->translateOrDefault($lang)->footer_text : '') }}" type="text" class="form-control" id="DesktopFooterText" placeholder="DesktopFooterText" name="{{ $lang }}[footer_text]">
                                        @error("$lang.footer_text")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="MobileCopyright" class="form-label">Mobile Copyright</label>
                                        <input value="{{ old($lang.'mobile_copyright', isset($model) ? $model->translateOrDefault($lang)->mobile_copyright : '') }}" type="text" class="form-control" id="MobileCopyright" placeholder="MobileCopyright" name="{{ $lang }}[mobile_copyright]">
                                        @error("$lang.mobile_copyright")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="WebsiteName" class="form-label">Website Name</label>
                        <input value="{{ old('website_name', isset($model) ? $model->website_name : '') }}" type="text" class="form-control" id="WebsiteName" placeholder="WebsiteName" name="website_name">
                        @error("website_name")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="Phone" class="form-label">Phone</label>
                        <input value="{{ old('phone', isset($model) ? $model->phone : '') }}" type="text" class="form-control" id="Phone" placeholder="Phone" name="phone">
                        @error("phone")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="DesignName" class="form-label">Design Name</label>
                        <input value="{{ old('design_name', isset($model) ? $model->design_name : '') }}" type="text" class="form-control" id="DesignName" placeholder="DesignName" name="design_name">
                        @error("design_name")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6">
                        <button type="submit" class="btn btn-light px-5 radius-30"><i class="bx bx-bookmark mr-1"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- {{$models->links('pagination::bootstrap-4')}} --}}
    </div>
@endsection
