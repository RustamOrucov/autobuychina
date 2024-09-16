@extends('admin.layouts.admin')
@section('content')
    <style>
        .note-editor .note-toolbar,
        .note-popover .popover-content {
            background-color: #43a0f7 !important;
        }

        .note-editable {
            background-color: #fff !important;
            color: #000;
        }
    </style>


    <div class="card-form d-flex">


        <div class="col-xl-5 mx-left ">
            @if (isset($model))
                <h5>Edit</h5>
                <form action="{{ route('admin.notice.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                @else
                    <h5>New</h5>
                    <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-2">

                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @foreach (config('app.languages') as $lang)
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->first ? 'active show' : '' }} @error("$lang.name") text-danger @enderror"
                                        id="custom-tabs-one-{{ $lang }}-tab" data-toggle="pill"
                                        href="#tab-{{ $lang }}" role="tab"
                                        aria-controls="custom-tabs-one-{{ $lang }}"
                                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        {{ strtoupper($lang) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        @foreach (config('app.languages') as $index => $lang)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab-{{ $lang }}"
                                role="tabpanel" aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                                <div class="row ">
                                    <div class="col-12 col-lg-12">
                                        <label for="Name" class="form-label">Title</label>
                                        <input
                                            value="{{ old($lang . 'title', isset($model) ? $model->translateOrDefault($lang)->title : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="title"
                                            name="{{ $lang }}[title]">
                                        @error("$lang.title")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 col-lg-12">
                                        <label for="Name" class="form-label">Header</label>
                                        <input
                                            value="{{ old($lang . 'header', isset($model) ? $model->translateOrDefault($lang)->header : '') }}"
                                            type="text" class="form-control" id="Name" placeholder="Title"
                                            name="{{ $lang }}[header]">
                                        @error("$lang.header")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label>Content</label>
                                    <textarea id="summernote{{ $index }}" name="{{ $lang }}[content]" class="form-control">{{ old("$lang.content", isset($model) ? $model->translateOrDefault($lang)->content ?? '' : '') }}</textarea>
                                    @error("$lang.content")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-light px-5">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-xl-7" style="margin-left:20px">
            <table class="table mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width:40%">Title</th>
                        <th scope="col" class="text-center">Edit</th>
                        <th scope="col" class="text-center">Destroy</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $index => $notice)
                        <tr>
                            <th scope="row">{{ ++$index }}</th>
                            <td>{{ \Illuminate\Support\Str::limit($notice->title, 35, '...') }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.notice.edit', ['id' => $notice->id]) }}" type="button"
                                    class="btn btn-success px-5 radius-30">Edit</a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.notice.destroy', ['id' => $notice->id]) }}"
                                    onclick="return confirm('Are you sure you want to delete this notice?');" type="button"
                                    class="btn btn-danger px-5 radius-30">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>

    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $(document).ready(function() {
                @foreach (config('app.languages') as $index => $lang)
                    $('#summernote{{ $index }}').summernote({
                        height: 100,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'italic', 'underline', 'clear']],
                            ['fontname', ['fontname']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });
                @endforeach
            });
        </script>
    @endpush
@endsection
