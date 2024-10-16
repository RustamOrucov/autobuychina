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

                    @foreach ($traders as $trader)
                        <a class="shops-i featured" href="{{ route('trader-detail') }}">
                            <div class="shops-i--logo"
                                 style="background-image: url({{ asset('storage/' . $trader->logo ?? '') }})">
                            </div>
                            <div class="shops-i--title">{{ $trader->t_name }}</div>
                            <div class="shops-i--description">{{ $trader->content }}
                            </div>
                            <div class="shops-i--contact">(051) 232-32-03, (051) 232-32-04</div>
                            <div class="shops-i--ads-count">{{ $trader->where('status', 1)->count() }}
                                Advertisement
                            </div>

                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection
