@extends('front.layout.layout')
@section('front_content')
    <div class="question">
            <div class="question-text">
                <h2>{{sitekey('register_car','title')}}</h2>
            </div>
            <div class="question-button">

                <a href="{{ route('dealer') }}" class="main-search__btn tz-btn tz-btn--primary">{{sitekey('register_car','text')}}</a>
                <a href="{{route('home.trader')}}" class="main-search__btn tz-btn tz-btn--primary">{{sitekey('register_car','desc')}}</a>
                
            </div>
    </div>
@endsection
