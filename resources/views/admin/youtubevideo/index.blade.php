@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.youtubevideo' ?>
    <div class="card">
        <div class="card-body">
                    <a href="{{ route($routeName.'.create') }}" style="margin-bottom: 15px" type="button" class="btn btn-light px-5 radius-30"><i class="bx bx-cloud-upload mr-1"></i>Add</a>
                    <a href="{{route('videogenerate.index')}}" style="margin-bottom: 15px" type="button" class="btn btn-light px-5 radius-30"><i class="bx bx-cloud-upload mr-1"></i>How To Add Youtube Video(Video Nece Yuklenir)</a>
            <div class="bs-stepper-content">
                <h5 style="margin-bottom: 15px" class="mb-1">Youtube Video</h5>
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
                                        <th class="sorting_asc">Video</th>
                                        <th class="sorting_asc">Aciqlama</th>
                                        <th class="sorting_asc">Duzelis</th>
                                        <th class="sorting_asc">Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($models  as $model)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$model->id}}</td>
                                            <td>
                                                <iframe width="250" height="150"
                                                                       src="{{$model->url}}"
                                                                       title="YouTube video player" frameborder="0"
                                                                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                       referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </td>
                                            <td>{{$model->title}}</td>

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
                                {{$models->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
