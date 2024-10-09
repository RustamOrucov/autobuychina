@extends('front.layout.layout')
@section('front_content')
    <div class="main-container pages">
        <div class="section-title section-title--top section-title--grey">
            <div class="tz-container tz-align-center tz-d-flex">
                <h1 class="section-title_name">User Agreement</h1>
                <div class="lotriver-text-banner" id="js-lotriver-text-banner">
                    <script type="text/javascript">
                        var normalizeTargetingParameter = function(str) {
                            var letters = {
                                'Ə': 'E',
                                'Ü': 'U',
                                'Ö': 'O',
                                'Ğ': 'Gh',
                                'Ş': 'Sh',
                                'Ç': 'Ch',
                                'İ': 'I',
                                'ə': 'e',
                                'ü': 'u',
                                'ö': 'o',
                                'ğ': 'gh',
                                'ş': 'sh',
                                'ç': 'ch',
                                'ı': 'i'
                            }

                            var categoryNameArr = str.split('');
                            var result = [];

                            for (var i = 0; i < categoryNameArr.length; i += 1) {
                                var letter = categoryNameArr[i];
                                if (Object.keys(letters).indexOf(letter) !== -1) {
                                    result.push(letters[letter]);
                                } else {
                                    result.push(letter);
                                }
                            }

                            result = result.join('').split(' ').join('-').split(',').join('');
                            return result.indexOf('-/-') >= 0 ? result.split('-/-').join('-') : result;
                        };

                        window.adriverExtentionLoad(0, null, "js-lotriver-text-banner")
                    </script>
                </div>
            </div>
        </div>
        <div class="md-content">
          
        </div>
    </div>
@endsection
