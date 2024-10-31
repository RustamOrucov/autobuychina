@extends('mobile.layout.layout')
@section('mobile_content')
    <div class="header js-header" style="">
        <div class="header__nav">
            <div class="header__nav-left">
                @include('mobile.inc.back-button')
            </div>
            <div class="header__nav-title ">
                <h1 class="custom-mobil-dealers">{{sitekey('register_car','text')}}</h1>
            </div>
            <div class="header__nav-right"></div>
        </div>
    </div>

    <div class="content">
        <div class="main-container">
            <div class="shops-container">
                <div class="shops--title">{{sitekey('detail_car_four','desc')}}</div>
                <div class="shops">

                    @foreach ($dealers as $dealer)
                    <a class="shops-i featured" href="{{ route('mobile.dealer.detail', ['dealer' => $dealer]) }}">
                        <div class="shops-i--logo"
                            style="background-image: url({{ asset($dealer->logo ? 'storage/' . $dealer->logo : 'images/default-background.jpg') }})">
                        </div>
                        <div class="shops-i--title">{{ $dealer->d_name }}</div>
                        <div class="shops-i--description">{{ $dealer->content }}</div>
                        <div class="shops-i--contact">{{ $dealer->phone }}</div>
                        <div class="shops-i--ads-count">{{ $dealer->cars->count() }} {{sitekey('user_car','name')}}</div>
                    </a>

                    @endforeach



                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.back-button').addEventListener('click', function() {
    window.history.back();
});
    </script>
@endsection
