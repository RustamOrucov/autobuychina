@extends('front.layout.layout')
@section('front_content')
    <div class="main-container shops">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <p class="section-title_name">All Dealers</p>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                    <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"></div>
                    <div id="ad_ph_2" style="display:none;"></div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="shops-container">
                <div class="shops" id="shops-featured">

                    @foreach ($dealers as $dealer)
                        <a class="shops-i featured" href="{{ route('avtosalon-detail', ['id' => $dealer->id]) }}">
                            <div class="shops-i--logo" style="background-image: url({{ asset('storage/' . $dealer->logo) }})">
                            </div>
                            <div class="shops-i--title">{{ $dealer->d_name }}</div>
                            <div class="shops-i--description">{{ $dealer->content }}
                            </div>
                            <div class="shops-i--contact">(051) 232-32-03, (051) 232-32-04</div>
                            <div class="shops-i--ads-count">{{ $dealer->cars->where('status', 1)->count() }} Advertisement</div>

                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
