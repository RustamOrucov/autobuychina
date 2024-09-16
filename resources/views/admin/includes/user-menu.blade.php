<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="topbar-logo-header d-none d-lg-flex">
                <div class="">
                    <img src="{{asset('_assets/images/logo.png')}}" width="160"  alt="logo icon">
                </div>
                <div class="">
                    <h4 class="logo-text"></h4>
                </div>
            </div>
            <div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
            <div class="search-bar flex-grow-1">
                {{-- <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                </div> --}}
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    {{-- <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{asset('_assets/images/Flag_of_Azerbaijan.svg.png')}}" width="22" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('_assets/images/Flag_of_Azerbaijan.svg.png')}}" width="20" alt=""><span class="ms-2">English</span></a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                    </li>

                </ul>
            </div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" id="user-show" href="{{ route('admin.admin.edit',['id'=>Auth::guard('admin')->user()->id]) }}"  >
                    <img src="{{asset('_assets/images/2304226.png')}}" class="user-img" alt="user avatar">
                    <div class="user-info">

                        <p class="user-name mb-0">{{ Auth::guard('admin')->user()->email }}</p>
                    </div>
                </a>

            </div>
        </nav>
    </div>
</header>

