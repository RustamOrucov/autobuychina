@extends('front.layout.layout')
@section('front_content')
    <div class="question">
        <div class="question-text">
            <h2>{{sitekey('home_car_three','desc')}}</h2>
        </div>
        <div class="question-button">
            <a href="{{ route('login') }}" class="main-search__btn tz-btn tz-btn--primary">{{sitekey('register_car','text')}}</a>
            <a href="{{route('logint')}}" class="main-search__btn tz-btn tz-btn--primary">{{sitekey('register_car','desc')}}</a>
        </div>
    </div>
@endsection
