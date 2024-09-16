@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.auctiontime' ?>
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
                    <h5 class="mb-1">Auction Time</h5>
                    <div class="row g-3">
                        <div class="col-12 col-lg-12">
                            <label for="time" class="form-label">Auction Time</label>
                            <input name="time" value="{{ old('time', isset($model) ? $model->time : '') }}" type="number" class="form-control" id="time" placeholder="time">
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
