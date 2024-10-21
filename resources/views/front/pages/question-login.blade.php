@extends('front.layout.layout')
@section('front_content')
    <div class="question">
        <div class="question-text">
            <h2>How do you want to login?</h2>
        </div>
        <div class="question-button">
            <a href="{{ route('login') }}" class="main-search__btn tz-btn tz-btn--primary">Dealers?</a>
            <a href="{{route('logint')}}" class="main-search__btn tz-btn tz-btn--primary">Trader?</a>
        </div>
    </div>
@endsection
