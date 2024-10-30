@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true
    ?>

    <div class="question">
        <div class="question-text">
            <h3>{{ sitekey('register_car', 'title') }}</h3>
        </div>
        <div class="question-button">
            <a href="http://localhost:8000/register" class="main-search__btn tz-btn tz-btn--primary">{{ sitekey('register_car', 'text') }}</a>
            <a href="http://localhost:8000/trader" class="main-search__btn tz-btn tz-btn--primary">{{ sitekey('register_car', 'desc') }}</a>
        </div>
    </div>

@endsection
