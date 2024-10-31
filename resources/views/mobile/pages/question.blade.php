@extends('mobile.layout.layout')
@section('mobile_content')
    <?php
    $showTabBar = true
    ?>

    <div class="question">
        <div class="question-text">
            <h3>How do you want to register?</h3>
        </div>
        <div class="question-button">
            <a href="http://localhost:8000/register" class="main-search__btn tz-btn tz-btn--primary">Dealers</a>
            <a href="http://localhost:8000/trader" class="main-search__btn tz-btn tz-btn--primary">Trader</a>
        </div>
    </div>

@endsection
