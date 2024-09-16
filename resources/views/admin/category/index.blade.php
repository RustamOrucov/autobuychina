@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.category' ?>


    <div class="card">
        <div class="card-body">
            <a href="{{ route($routeName.'.create') }}" style="margin-bottom: 15px" type="button" class="btn btn-light px-5 radius-30"><i class="lni lni-plus"></i>Elave Et</a>
            <div class="bs-stepper-content">
                <h5 style="margin-bottom: 15px" class="mb-1">Fuel Type</h5>
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
                                        <th class="sorting_asc">Category Name</th>
                                        <th class="sorting_asc">Aktiv</th>
                                        @if($models->count() > 1)
                                            <th class="sorting_asc">Position</th>
                                        @endif
                                        <th class="sorting_asc">Duzelis</th>
                                        <th class="sorting_asc">Sil</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($models  as $model)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$model->id}}</td>
                                            <td>{{$model->name}}</td>
                                            <td>
                                                @if($model->status == 1)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-white"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash text-white"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                                @endif
                                            </td>
                                            @if($models->count() > 1)
                                                <td>
                                                    @if($model->position == 1)



                                                        <a href="#" class='position-change' data-id="{{$model->id}}" data-direction="down"><i style="font-size: 20px" class="lni lni-sort-amount-dsc"></i></a>

                                                    @elseif($model->position > 1)
                                                        @if($models->where('position', '<', $model->position)->isNotEmpty() && $models->where('position', '>', $model->position)->isNotEmpty())
                                                            <a href="#" class='position-change' data-id="{{$model->id}}" data-direction="down"><i style="font-size: 20px" class="lni lni-sort-amount-dsc"></i></a>
                                                            <a href="#" class='position-change' data-id="{{$model->id}}" data-direction="up"><i style="font-size: 20px" class="fadeIn animated bx bx-sort-up"></i></a>
                                                        @else
                                                            <a href="#" class='position-change' data-id="{{$model->id}}" data-direction="up"><i style="font-size: 20px" class="fadeIn animated bx bx-sort-up"></i></a>
                                                        @endif
                                                    @endif
                                                </td>
                                            @endif
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.position-change').forEach(function(button) {
                button.addEventListener('click', function() {
                    const categoryId = this.dataset.id;
                    const direction = this.dataset.direction;

                    fetch(`/admin/category/change-position/${categoryId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ direction: direction })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if(data.success) {
                                location.reload();
                            } else {
                                alert('Position change failed');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });

            const searchInput = document.querySelector('input[type="search"]');
            const table = document.querySelector('#example');
            const rows = table.querySelectorAll('tbody tr');

            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase();
                rows.forEach(row => {
                    const cells = row.querySelectorAll('td');
                    let match = false;
                    cells.forEach(cell => {
                        if (cell.textContent.toLowerCase().includes(query)) {
                            match = true;
                        }
                    });
                    row.style.display = match ? '' : 'none';
                });
            });
        });
    </script>


@endsection
