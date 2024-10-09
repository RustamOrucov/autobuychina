<!DOCTYPE html>
<html lang="en">
@include('mobile.inc.head')

<body class="layout_home layout_home_index is-android" id="android">

@yield('mobile_content')

@include('mobile.inc.footer')
@if(View::hasSection('show_tabbar'))
    @include('mobile.inc.tabbar')
@endif
@include('mobile.inc.scripts')
</body>
</html>
