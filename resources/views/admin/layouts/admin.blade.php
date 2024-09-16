<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Sexavet Rustem -->
    <!-- Sexavet Rustem -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('_assets/images/favicon-32x32.png')}}" type="image/png" />
    <link href="{{asset('_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('_assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('_assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('_assets/js/pace.min.js')}}"></script>
    <link href="{{asset('_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('_assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('_assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('_assets/css/icons.css')}}" rel="stylesheet">
{{--    csrf--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>S.R Premium Admin Panel</title>
    
    @stack('css')
</head>
<body class="bg-theme bg-theme2 pace-done">
<div class="wrapper">
    <div class="header-wrapper">
        @include('admin.includes.user-menu')
        @include('admin.includes.menu')
    </div>
    @include('admin.includes.theme')
    <div class="page-content">
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
            <div class="sidebar-content" style="box-shadow: 3px -1px 10px 0px rgba(0,0,0,0.75);">
                @include('admin.includes.user-menu')
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        @include('admin.includes.menu')
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('admin.includes.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/deleteform.js')}}"></script>
<script src="{{asset('js/checkbox.js')}}"></script>
<script src="{{asset('_assets/auction/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('_assets/auction/js/jquery.min.js')}}"></script>
<script src="{{asset('_assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('_assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('_assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('_assets/auction/js/index.js')}}"></script>
<script src="{{asset('_assets/auction/js/app.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stack('js')
</body>
</html>
