@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.policy' ?>
    <style>
        .note-editor .note-toolbar,
        .note-popover .popover-content {
            background-color: #fff !important;
        }

        .note-editable {
            background-color: #fff !important;
            color: #000;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName.'.update', $model->id) : route($routeName.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Policy</h5>

                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @foreach(config('app.languages') as $lang)
                                <li class="nav-item">
                                    <a class="nav-link {{$loop->first ? 'active show' : ''}} @error("$lang.name") text-danger @enderror"
                                       id="custom-tabs-one-{{ $lang }}-tab" data-toggle="pill" href="#tab-{{ $lang }}"
                                       role="tab" aria-controls="custom-tabs-one-{{ $lang }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        {{ strtoupper($lang) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        @foreach(config('app.languages') as $index => $lang)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $lang }}" role="tabpanel" aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                                <div class="row g-3">
                                    <div class="form-group col-12 mt-3">
                                        <label>Agreement</label>
                                        <textarea id="summernotes{{ $index }}" placeholder="agreement{{ $lang }}"
                                                  name="{{ $lang }}[agreement]" class="form-control">
                                    {{ old("$lang.agreement", isset($model) ? $model->translateOrDefault($lang)->agreement ?? '' : '') }}
                                </textarea>
                                        @error("$lang.agreement")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 mt-3">
                                        <label>rules</label>
                                        <textarea id="summernotess{{ $index }}" placeholder="rules{{ $lang }}"
                                                  name="{{ $lang }}[rules]" class="form-control">
                                    {{ old("$lang.rules", isset($model) ? $model->translateOrDefault($lang)->rules ?? '' : '') }}
                                </textarea>
                                        @error("$lang.rules")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 mt-3">
                                        <label>Register Policy(qeydiyyat sertleri)</label>
                                        <textarea id="summernotesss{{ $index }}" placeholder="rules{{ $lang }}"
                                                  name="{{ $lang }}[register_policy]" class="form-control">
                                    {{ old("$lang.register_policy", isset($model) ? $model->translateOrDefault($lang)->register_policy ?? '' : '') }}
                                </textarea>
                                        @error("$lang.register_policy")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-lg-6">
                        <button type="submit" class="btn btn-light px-5 radius-30"><i class="bx bx-bookmark mr-1"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
{{--         {{$models->links('pagination::bootstrap-4')}}--}}
    </div>
    @push('js')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function() {
                function initializeSummernote() {
                    @foreach (config('app.languages') as $index => $lang)
                    $('#summernotes{{ $index }}').summernote({
                        height: 100
                    });
                    @endforeach
                }

                initializeSummernote();

                $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                    initializeSummernote();
                });
            });

            $(document).ready(function() {
                function initializeSummernote() {
                    @foreach (config('app.languages') as $index => $lang)
                    $('#summernotess{{ $index }}').summernote({
                        height: 100
                    });
                    @endforeach
                }

                initializeSummernote();

                $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                    initializeSummernote();
                });
            });


            $(document).ready(function() {
                function initializeSummernote() {
                    @foreach (config('app.languages') as $index => $lang)
                    $('#summernotesss{{ $index }}').summernote({
                        height: 100
                    });
                    @endforeach
                }

                initializeSummernote();

                $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                    initializeSummernote();
                });
            });
        </script>
    @endpush
@endsection
