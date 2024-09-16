@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.user' ?>

    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName.'.update', $model->id) : route($routeName.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Istifadeciler</h5>
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <label for="Name" class="form-label">Ad</label>
                            <input value="{{ old('name', isset($model) ? $model->name : '') }}" type="text" class="form-control" id="Name" placeholder="Ad" name="name">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="Surname" class="form-label">Soyad</label>
                            <input name="surname" value="{{ old('surname', isset($model) ? $model->surname : '') }}" type="text" class="form-control" id="Surname" placeholder="Soyad">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="PhoneNumber" class="form-label">Telefon Nömrəsi</label>
                            <input name="phone" value="{{ old('phone', isset($model) ? $model->phone : '') }}" type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="Address" class="form-label">Address</label>
                            <input name="address" value="{{ old('address', isset($model) ? $model->address : '') }}" type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="FinCode" class="form-label">Fin Code</label>
                            <input name="fin_code" value="{{ old('fin_code', isset($model) ? $model->fin_code : '') }}" type="text" class="form-control" id="FinCode" placeholder="Fin Kode">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="Email" class="form-label">Email</label>
                            <input name="email" value="{{ old('email', isset($model) ? $model->email : '') }}" type="email" class="form-control" id="Email" placeholder="email">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="wallet" class="form-label">Wallet</label>
                            <input name="wallet" value="{{ old('wallet', isset($model) ? $model->wallet : '') }}" type="text" class="form-control" id="wallet" placeholder="wallet">
                        </div>
{{--                        <div class="col-12 col-lg-6">--}}
{{--                            <label for="status" class="form-label">Aktivlik</label>--}}
{{--                            <input name="status" class="form-check-input" type="checkbox" value="1" id="status" {{ old('status', isset($model) ? $model->status : 1) ? 'checked' : '' }}>--}}
{{--                        </div>--}}
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="passport_front">Passport Front</label>
                            <input name="passport_front" type="file" class="form-control" id="passport_front">
                        </div>
                        <div>
                            @isset($model)
                                <img width="200" src="{{ asset('storage/' . $model->passport_front) }}">
                            @endisset
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="passport_back">Passport Back</label>
                            <input name="passport_back" type="file" class="form-control" id="passport_back">
                        </div>
                        <div>
                            @isset($model)
                                <img width="200" src="{{ asset('storage/' . $model->passport_back) }}">
                            @endisset
                        </div>
                        <div class="col-12 col-lg-6">
                            <button type="submit" class="btn btn-light px-5 radius-30"><i class="bx bx-bookmark mr-1"></i>Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
{{--        {{$models->links('pagination::bootstrap-4')}}--}}
    </div>
@endsection
