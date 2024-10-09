@extends('front.layout.layout')
@section('front_content')
    <div class="main-container pages">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">User Agreement</h1>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">

                </div>
            </div>
        </div>
        <div class="md-content">
            <p>
                @foreach($policys as $policy)
                    {!! $policy->agreement !!}
                @endforeach
            </p>
        </div>
    </div>
@endsection
