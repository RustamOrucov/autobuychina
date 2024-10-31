

<!DOCTYPE html>
<html lang="en">

@include('front.inc.head')

<body>

@include('front.inc.header')


   @yield('front_content')

@include('front.inc.footer')


@include('front.inc.scripts')

@stack('js')
</body>

</html>
