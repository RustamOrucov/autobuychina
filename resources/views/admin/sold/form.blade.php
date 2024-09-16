@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.sold' ?>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName.'.update', $model->id) : route($routeName.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Car Images</h5>
                    <div class="row g-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="image">Car Images</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>
                        <div>
                            @isset($model)
                                <img width="200" src="{{ asset('storage/' . $model->image) }}">
                            @endisset
                        </div>
                        <div class="col-12 col-lg-12">
                            <label for="Name" class="form-label">Car Name</label>
                            <input name="name" value="{{ old('name', isset($model) ? $model->name : '') }}" type="text" class="form-control" id="Name" placeholder="Name">
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
