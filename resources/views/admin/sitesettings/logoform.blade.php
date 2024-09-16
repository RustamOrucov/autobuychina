@extends('admin.layouts.admin')
@section('content')

    <form action="{{route('admin.logo.update')}}"  method="POST" enctype="multipart/form-data">
@csrf
        <div style="display: flex;justify-content:space-around">
    <span style="width: 40%">
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input class="form-control" type="file" name="icon" id="icon">
               @if ($errors->has('icon'))
                <span class="text-danger">{{ $errors->first('icon') }}</span>
            @endif
        <img id="iconPreview" src="{{ asset('storage/' . $logoimages->icon) }}" style="width: 100px; margin-top: 10px;" />
        </div>
        <div class="mb-3">
            <label for="d_logo" class="form-label">Desktop logo</label>
            <input class="form-control" type="file" name="d_logo" id="d_logo">
               @if ($errors->has('d_logo'))
                <span class="text-danger">{{ $errors->first('d_logo') }}</span>
            @endif
            <img id="dLogoPreview" src="{{ asset('storage/' . $logoimages->d_logo) }}" style="width: 100px; margin-top: 10px;" />
        </div>
    </span>
            <span style="width: 40%">
        <div class="mb-3">
            <label for="m_logo" class="form-label">Mobile logo</label>
            <input class="form-control" type="file" name="m_logo" id="m_logo">
               @if ($errors->has('m_logo'))
                <span class="text-danger">{{ $errors->first('m_logo') }}</span>
            @endif
            <img id="mLogoPreview" src="{{ asset('storage/' . $logoimages->m_logo) }}" style="width: 100px; margin-top: 10px;" />
        </div>
        <div class="mb-3">
            <label for="f_logo" class="form-label">Footer logo</label>
            <input class="form-control" type="file" name="f_logo" id="f_logo">
               @if ($errors->has('f_logo'))
                <span class="text-danger">{{ $errors->first('f_logo') }}</span>
            @endif
            <img id="fLogoPreview" src="{{ asset('storage/' . $logoimages->f_logo) }}" style="width: 100px; margin-top: 10px;" />
        </div>
    </span>
        </div>


        <button class="btn btn-light custom-btn-save" type="submit">Save</button>
    </form>

    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
            }
        }

        document.getElementById('icon').addEventListener('change', function () {
            previewImage(this, 'iconPreview');
        });

        document.getElementById('d_logo').addEventListener('change', function () {
            previewImage(this, 'dLogoPreview');
        });

        document.getElementById('m_logo').addEventListener('change', function () {
            previewImage(this, 'mLogoPreview');
        });

        document.getElementById('f_logo').addEventListener('change', function () {
            previewImage(this, 'fLogoPreview');
        });
    </script>

@endsection
