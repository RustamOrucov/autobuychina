@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.cylinder' ?>

    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName.'.update', $model->id) : route($routeName.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Color</h5>

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
                                        <label for="Name" class="form-label">Ad</label>
                                        <input value="{{ old($lang.'name', isset($model) ? $model->translateOrDefault($lang)->name : '') }}" type="text" class="form-control" id="Name" placeholder="Ad" name="{{ $lang }}[name]">
                                        @error("$lang.name")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="hex" class="form-label">Hex code</label>
                        <input name="hex" class="form-control" type="text" id="hex" value="{{ old('hex', isset($model) ? $model->hex : '#000000') }}">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="status" class="form-label">Aktivlik</label>
                        <input name="status" class="form-check-input" type="checkbox" value="1" id="status" {{ old('status', isset($model) ? $model->status : 1) ? 'checked' : '' }}>
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
