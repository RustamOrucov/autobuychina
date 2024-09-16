@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.youtubevideo' ?>

    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName.'.update', $model->id) : route($routeName.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Youtube Video</h5>
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <label for="Url" class="form-label">Url</label>
                            <input value="{{ old('url', isset($model) ? $model->url : '') }}" type="text" class="form-control" id="Url" placeholder="Url" name="url">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="Title" class="form-label">Video Aciqlama</label>
                            <input value="{{ old('title', isset($model) ? $model->title : '') }}" type="text" class="form-control" id="title" placeholder="title" name="title">
                        </div>
                        <div class="form-group col-lg-12">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="image">Video Front Image</label>
                                <input name="image" type="file" class="form-control" id="image">
                            </div>
                            <div>
                                @isset($model)
                                    <img width="200" src="{{ asset('storage/' . $model->image) }}">
                                @endisset
                            </div>
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
