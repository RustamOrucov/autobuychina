@extends('admin.layouts.admin')
@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="row">
    <div class="col-xl-7 mx-auto">

        <div class="card border-top border-0 border-4 border-white">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                    </div>
                    <h5 class="mb-0 text-white">Profile edit</h5>
                </div>
                <hr>

                <form class="row g-3" action="{{ route('admin.admin.update', ['id' => $model->id]) }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="inputFirstName" value="{{ old('first_name', $model->first_name) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="inputLastName" value="{{ old('last_name', $model->last_name) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" value="{{ old('email', $model->email) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="number" id="inputPhone" value="{{ old('number', $model->number) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="inputCity" value="{{ old('city', $model->city) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{ old('address', $model->address) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPasswordConfirmation" class="form-label">Password Confirm</label>
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirmation">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-light px-5">Save</button>
                    </div>
                </form>

            </div>


    </div>
</div>


@endsection
