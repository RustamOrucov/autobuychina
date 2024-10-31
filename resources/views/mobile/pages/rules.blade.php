@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="body-inner">
        <div class="header js-header">
            <div class="header__nav header__nav--no-back-btn">
                <div class="header__nav-left no-flex"></div>
                <div class="header__nav-title">
                    <h1 class="section-title_name">{{ sitekey('list_car_eight', 'name') }}</h1>
                </div>
                <div class="header__nav-right"><a class="header__logo header__logo--red" href="/">{{ sitekey('detail_car', 'title') }}</a></div>
            </div>
        </div>
        <div class="content">
            <div class="md-content">
                <h4>{{ sitekey('register_mobile', 'text') }}</h4>
                <p>
                    @foreach($policys as $policy)
                    {!! $policy->agreement !!}
                   @endforeach
                </p>

            </div>
        </div>

    </div>
@endsection
