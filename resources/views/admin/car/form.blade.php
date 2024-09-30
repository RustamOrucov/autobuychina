@extends('admin.layouts.admin')


@section('content')
    <?php $routeName = 'admin.car'; ?>
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
        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="{{ isset($model) ? route($routeName . '.update', $model->id) : route($routeName . '.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($model)
                        @method('PUT')
                    @endisset
                    <h5 class="mb-1">Car advertisement</h5>
                    <div class="row">

                        <div class="form-group col-lg-3">
                            <label class="form-label">Car Model *</label>
                            <select class="form-select" id="categorySelect" name="car_models_id" required>
                                <option value="">Select CarModel</option>
                                @foreach ($carmodels as $carmodel)
                                    <option value="{{ $carmodel->id }}"
                                        {{ old('car_models_id', isset($model) ? $model->car_models_id : '') == $carmodel->id ? 'selected' : '' }}>
                                        {{ $carmodel->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="form-label">Model Type *</label>
                            <select class="form-select" id="categorySelect" name="model_type_id" required>
                                <option value="">Select Model Type</option>
                                @foreach ($modeltypes as $modeltype)
                                    <option value="{{ $modeltype->id }}"
                                        {{ old('model_type_id', isset($model) ? $model->model_type_id : '') == $modeltype->id ? 'selected' : '' }}>
                                        {{ $modeltype->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{--                        engine volume start --}}
                        <div class="form-group col-lg-3">
                            <label class="form-label">Muherrik hecmi *</label>
                            <select class="form-select" id="categorySelect" name="engine_volume_id" required>
                                <option value="">Select Engine Volume</option>
                                @foreach ($enginevolumes as $enginevolume)
                                    <option value="{{ $enginevolume->id }}"
                                        {{ old('engine_volume_id', isset($model) ? $model->engine_volume_id : '') == $enginevolume->id ? 'selected' : '' }}>
                                        {{ $enginevolume->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        {{--                        engine volume start  --}}

                        <div class="form-group col-lg-3">
                            <label class="form-label">Power (A.g) *</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" name="engine_v" required
                                value="{{ old('engine_v', isset($model) ? $model->engine_v : '') }}">
                        </div>

                        {{--                    engine volume end       --}}


                        <div class="form-group col-lg-3">
                            <label class="form-label">Fuel Type *</label>
                            <select class="form-select" id="categorySelect" name="fuel_type_id" required>
                                <option value="">Select Fuel Type</option>
                                @foreach ($fueltypes as $fueltype)
                                    <option value="{{ $fueltype->id }}"
                                        {{ old('fuel_type_id', isset($model) ? $model->fuel_type_id : '') == $fueltype->id ? 'selected' : '' }}>
                                        {{ $fueltype->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{--                        fuel type end        --}}

                        {{--                        transmission start   --}}

                        <div class="form-group col-lg-3">
                            <label class="form-label">Gear *</label>
                            <select class="form-select" id="categorySelect" name="transmission_id" required>
                                <option value="">Select Gear</option>
                                @foreach ($transmissions as $transmission)
                                    <option value="{{ $transmission->id }}"
                                        {{ old('transmission_id', isset($model) ? $model->transmission_id : '') == $transmission->id ? 'selected' : '' }}>
                                        {{ $transmission->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{--                        transmision  end       --}}


                        <div class="form-group col-lg-3">
                            <label class="form-label">Year *</label>
                            <input type="number" placeholder="Year" name="year"
                                value="{{ old('year', isset($model) ? $model->year : '') }}" class="form-control" required>
                            @error('year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{--                        of pasenger start      --}}

                        <div class="form-group col-lg-3">
                            <label class="form-label">Of Passenger *</label>
                            <select class="form-select" id="categorySelect" name="of_passenger" required>
                                <option value="">passenger count</option>
                                <option value="1" {{ isset($model) && $model->of_passenger == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ isset($model) && $model->of_passenger == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ isset($model) && $model->of_passenger == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ isset($model) && $model->of_passenger == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ isset($model) && $model->of_passenger == '5' ? 'selected' : '' }}>5</option>
                                <option value="6" {{ isset($model) && $model->of_passenger == '6' ? 'selected' : '' }}>6</option>
                                <option value="7" {{ isset($model) && $model->of_passenger == '7' ? 'selected' : '' }}>7</option>
                                <option value="8" {{ isset($model) && $model->of_passenger == '8' ? 'selected' : '' }}>8+</option>
                            </select>
                        </div>

                        {{--      of passenger end     --}}
                        <div class="form-group col-lg-3" style="display: flex;justify-content: space-between">
                            <div>
                                <label class="form-label">Qiymet *</label>
                                <input type="text" placeholder="Qiymet" name="price"
                                    value="{{ old('price', isset($model) ? $model->price : '') }}" class="form-control" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label class="form-label">Currency *</label>
                                <select class="form-select" id="categorySelect" name="ro_id" required>
                                 <option></option>
                                    @foreach ($ros as $ro)
                                        <option value="{{ $ro->id }}"
                                            {{ old('ro_id', isset($model) ? $model->ro_id : '') == $ro->id ? 'selected' : '' }}>
                                            {{ $ro->translateOrDefault(app()->getLocale())->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="form-group col-lg-3">
                            <label class="form-label">Vezyeti *</label>
                            <select class="form-select" id="categorySelect" name="drive_id" required>
                                <option></option>
                                @foreach ($drives as $drive)
                                    <option value="{{ $drive->id }}"
                                        {{ old('drive_id', isset($model) ? $model->drive_id : '') == $drive->id ? 'selected' : '' }}>
                                        {{ $drive->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-3">
                            <label class="form-label">Transmission *</label>
                            <select class="form-select" id="categorySelect" name="damage_id" required>
                                <option>Select Transmission</option>
                                @foreach ($damages as $damage)
                                    <option value="{{ $damage->id }}"
                                        {{ old('damage_id', isset($model) ? $model->damage_id : '') == $damage->id ? 'selected' : '' }}>
                                        {{ $damage->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-3">
                            <label class="form-label">Color *</label>
                            <select class="form-select" id="categorySelect" name="cylinder_id" required>
                                <option></option>
                                @foreach($cylinders as $cylinder)
                                    <option value="{{ $cylinder->id }}" {{ old('cylinder_id', isset($model) ? $model->cylinder_id : '') == $cylinder->id ? 'selected' : '' }}>
                                        {{ $cylinder->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-lg-3">
                            <label class="form-label">Youtube Video Link</label>
                            <input type="text" placeholder="Youtube Video Link" name="youtube_video"
                                value="{{ old('youtube_video', isset($model) ? $model->youtube_video : '') }}"
                                class="form-control">
                            @error('youtube_video')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group col-lg-3">
                            <label class="form-label">Ban növü *</label>
                            <select class="form-select" id="categorySelect" name="ban_id" required>
                                <option value=""></option>
                                @foreach($bans as $ban)
                                    <option value="{{ $ban->id }}" {{ old('ban_id', isset($model) ? $model->ban_id : '') == $ban->id ? 'selected' : '' }}>
                                        {{ $ban->translateOrDefault(app()->getLocale())->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-3">
                            <label class="form-label">Vin Code</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" name="vincode"
                                value="{{ old('vincode', isset($model) ? $model->vincode : '') }}">
                        </div>

                        <div class="form-group col-lg-3 ">

                            <label class="form-label">Yurus (km) *</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" name="odometer_km"
                                value="{{ old('odometer_km', isset($model) ? $model->odometer_km : '') }}" required>
                        </div>

{{-- region and markets --}}

<div class="form-group col-lg-3">
    <label class="form-label">City</label>
    <select class="form-select" id="categorySelect" name="region_id" >
        <option value='' disabled selected>Select a City</option>
        @foreach($cities as $city)
            <option value="{{ $city->id }}" {{ old('region_id', isset($model) ? $model->region_id : '') == $city->id ? 'selected' : '' }}>
                {{ $city->translateOrDefault(app()->getLocale())->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group col-lg-3">
    <label class="form-label">Markets</label>
    <select class="form-select" id="categorySelect" name="market_id" >
        <option value="" disabled selected>Select a market</option>
        @foreach($markets as $market)
            <option value="{{ $market->id }}" {{ old('market_id', isset($model) ? $model->market_id : '') == $market->id ? 'selected' : '' }}>
                {{ $market->translateOrDefault(app()->getLocale())->name }}
            </option>
        @endforeach
    </select>
</div>


{{-- region and markets --}}



                        <div class="form-group col-lg-3 d-flex justify-content-center align-items-center gap-3" style="margin-top:35px">
                            <label class="form-label">Steering wheel *</label>
                            <div style="display: flex; gap:5px">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="steering_wheel" id="flexRadioDefault2" value="0"
                                           @if (isset($model)) {{ $model->steering_wheel == 0 ? 'checked' : '' }} @endif required>
                                    <label class="form-check-label" for="flexRadioDefault2">LHD</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="steering_wheel" id="flexRadioDefault1" value="1"
                                           @if (isset($model)) {{ $model->steering_wheel == 1 ? 'checked' : '' }} @endif required>
                                    <label class="form-check-label" for="flexRadioDefault1">RHD</label>
                                </div>
                            </div>
                        </div>




                        <div class="col-3 col-lg-3 d-flex justify-content-center" style="margin-top:35px">
                            <label for="status" class="form-label">Aktivlik</label>
                            <input name="status" class="form-check-input" type="checkbox" value="1"
                                id="status" {{ old('status', isset($model) ? $model->status : 1) ? 'checked' : '' }}>
                        </div>

                        <h6 class="mt-2">Car Equipment</h6>
                        <hr>
                        <div style="display: flex; gap:20px;">
                            @foreach($higlits as $highlight)
                                <div class="fs-5" style="margin-top:15px">
                                    <label for="status{{$highlight->id}}" class="form-label">{{$highlight->name}}</label>
                                    <input name="car_equipment[]" class="form-check-input" type="checkbox" value="{{$highlight->id}}" id="status{{$highlight->id}}"
                                        {{ isset($model) && is_array(json_decode($model->car_equipment, true)) && in_array($highlight->id, json_decode($model->car_equipment, true)) ? 'checked' : '' }}>
                                </div>
                            @endforeach
                        </div>


                        <h6 class="mt-4">Car image</h6>
                        <hr>
                        <div class="form-group col-lg-12 mt-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="car_image">Car Image</label>
                                <input name="car_image" type="file" class="form-control" id="car_image">
                            </div>
                            <div>
                                @isset($model)
                                    <img width="200" src="{{ asset('storage/' . $model->car_image) }}">
                                @endisset
                            </div>
                        </div>

                        @error('event_time')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        {{--              car comment start               --}}

                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                @foreach (config('app.languages') as $index => $lang)
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
                                <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                    id="tab-{{ $lang }}" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-{{ $lang }}-tab">
                                    <div class="form-group col-12 mt-3">
                                        <label>Item Comment</label>
                                        <textarea id="summernote{{ $index }}" placeholder="desc{{ $lang }}"
                                            name="{{ $lang }}[item_comment]" class="form-control">
                                    {{ old("$lang.item_comment", isset($model) ? $model->translateOrDefault($lang)->item_comment ?? '' : '') }}
                                </textarea>
                                        @error("$lang.item_comment")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--                        car comment end       --}}
                    </div>

                    <div class="col-12 col-lg-6">
                        <button type="submit" class="btn btn-light px-5 radius-30"><i
                                class="bx bx-bookmark mr-1"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- {{$models->links('pagination::bootstrap-4')}} --}}
    </div>

    @push('js')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function() {
                function initializeSummernote() {
                    @foreach (config('app.languages') as $index => $lang)
                        $('#summernote{{ $index }}').summernote({
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
