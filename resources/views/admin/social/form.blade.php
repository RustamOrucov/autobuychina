@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.social' ?>
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
                    <h5 class="mb-1">Social</h5>
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
                            <label for="url" class="form-label">Url</label>
                            <input name="url" value="{{ old('url', isset($model) ? $model->url : '') }}" type="text" class="form-control" id="url" placeholder="url">
                        </div>
                        <div class="col-12 col-lg-12">
                            <label for="class" class="form-label">Class Name</label>
                            <input name="class" value="{{ old('class', isset($model) ? $model->class : '') }}" type="text" class="form-control" id="class" placeholder="class" @if(isset($model)) readonly @endif>
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
