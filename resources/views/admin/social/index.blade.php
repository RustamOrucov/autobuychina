@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.social' ?>


    <div class="card">
        <div class="card-body">
            <a href="{{ route($routeName.'.create') }}" style="margin-bottom: 15px" type="button" class="btn btn-light px-5 radius-30"><i class="lni lni-plus"></i>Elave Et</a>
            <div class="bs-stepper-content">
                <h5 style="margin-bottom: 15px" class="mb-1">Social Page</h5>
                <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <div class="row"><div class="col-sm-12 col-md-6">

                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="example_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc">Id</th>
                                        <th class="sorting_asc">Image</th>
                                        <th class="sorting_asc">Url</th>
                                        <th class="sorting_asc">Duzelis</th>
                                        <th class="sorting_asc">Sil</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($models  as $model)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$model->id}}</td>
                                            <td><img width="75" height="75" src="{{asset('storage/'.$model->image)}}" alt=""></td>
                                            <td>{{$model->url}}</td>

                                            <td><a href="{{route($routeName.'.edit',$model->id)}}" class="btn btn-warning">Düzəliş</a></td>


                                            <td>
                                                <form class="delete-form" action="{{ route($routeName.'.destroy',$model->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="background-color: #fff;border: none" class="btn btn-danger"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/jmkrnisz.json"
                                                            trigger="hover"
                                                            colors="primary:#121331"
                                                            style="width:25px;height:25px">
                                                        </lord-icon></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-12 col-md-5">
                            </div>
                            <div class="col-sm-12 col-md-7">
                                {{--                                {{$models->links('pagination::bootstrap-4')}}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
