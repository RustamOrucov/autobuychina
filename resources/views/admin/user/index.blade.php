@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.user' ?>
<div class="card">
    <div class="card-body">
{{--        <a href="{{ route($routeName.'.create') }}" style="margin-bottom: 15px" type="button" class="btn btn-light px-5 radius-30"><i class="bx bx-cloud-upload mr-1"></i>Add</a>--}}
        <div class="bs-stepper-content">
                <h5 style="margin-bottom: 15px" class="mb-1">Istifadeci Melumatlari</h5>
            <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">
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
                                     <th class="sorting_asc">Ad</th>
                                     <th class="sorting_asc">Soyad</th>
                                     <th class="sorting_asc">Telefon</th>
                                     <th class="sorting_asc">Fin Kod</th>
                                     <th class="sorting_asc">Bid Kaşlok</th>
                                     <th class="sorting_asc">Email</th>
                                      <th class="sorting_asc"> <p class="text-center">Active</p> </th>
                                     <th class="sorting_asc">Duzelis</th>
                                     <th class="sorting_asc">Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($models  as $model)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$model->id}}</td>
                                    <td>{{$model->name}}</td>
                                    <td>{{$model->surname}}</td>
                                    <td>{{$model->phone}}</td>
                                    <td>{{$model->fin_code}}</td>
                                    <td>{{$model->wallet}}</td>
                                    <td>{{$model->email}}</td>
                                    <th>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input text-center" type="checkbox"
                                                   id="flexSwitchCheckChecked{{ $model->id }}"
                                                   data-model-id="{{ $model->id }}"
                                                {{ $model->status == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked{{ $model->id }}"></label>
                                        </div>
                                    </th>
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
    <script>
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

    //     change status function

        $(document).ready(function() {
            $('.form-check-input').on('change', function() {
                const modelId = $(this).data('model-id');
                const status = $(this).is(':checked') ? 1 : 0;

                $.ajax({
                    url: '{{ route("change.status") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: modelId,
                        status: status
                    },
                    success: function(response) {
                        console.log('Status başarıyla güncellendi:', response);
                    },
                    error: function(xhr) {
                        console.log('Bir hata oluştu:', xhr);
                    }
                });
            });
        });

    </script>
@endsection
