<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Login</title>
    <!-- Sexavet Rustem -->
</head>
<body class="bg-theme bg-theme2 pace-done">
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4">
                                <div class="mb-3 text-center">
                                    <img src="{{asset('_assets/images/logo.png')}}" width="260" alt="">
                                </div>
                                <div class="text-center mb-4">
                                    <h5 class=""></h5>
                                    <p class="mb-0">Please log in to your account</p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" data-bitwarden-watching="1" action="{{ route('admin.login') }}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
                                            @error('email')
                                            <div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i></div>
                                                    <div class="ms-3">
                                                        <div>{{$message}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i id="showp" class="bx bx-hide"></i></a>
                                                @error('password')
                                                <div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i></div>
                                                        <div class="ms-3">
                                                            <div>{{$message}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-light">Sign in</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>

<script>
    var showp = document.getElementById("showp");
    var passwordInput = document.getElementById("inputChoosePassword");

    showp.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });


</script>
</body>
</html>
<!-- Sexavet Rustem -->






