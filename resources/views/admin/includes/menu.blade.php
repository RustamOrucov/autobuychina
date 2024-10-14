<div class="primary-menu">
    <nav class="navbar navbar-expand-lg align-items-center">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header border-bottom">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img src="" class="logo-icon" alt="logo icon">
                    </div>
                    <div class="">
                        <h4 class="logo-text"></h4>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="display: flex;justify-content:center">
                <ul class="navbar-nav align-items-center flex-grow-1 " >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class='bx bx-home-alt'></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">Admin Higlights</div>
                            <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.user.index')}}"><i class="lni lni-users"></i>Istifadəçilər</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="lni lni-empty-file"></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">Category & Pages</div>
                            <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.category.index')}}"><i class="fadeIn animated bx bx-blanket"></i>Kateqoriya</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.mainslider.index')}}"><i class="fadeIn animated bx bx-blanket"></i>Home Main Slider</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.work.index')}}"><i class="fadeIn animated bx bx-blanket"></i>Home Work Page</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.youtubevideo.index')}}"><i class="fadeIn animated bx bx-blanket"></i>Youtube Video</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.sold.index')}}"><i class="fadeIn animated bx bx-blanket"></i>Sold Car</a></li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="lni lni-car-alt"></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">Cars & Model</div>
                            <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.carmodel.index')}}"><i class="lni lni-car-alt"></i></i>Maşın Modelləri</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.modeltype.index')}}"><i class="lni lni-car-alt"></i></i>Maşın Model Type</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.fueltype.index')}}"><i class="lni lni-car-alt"></i></i>Maşın Fuel Type</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.cylinder.index')}}"><i class="lni lni-car-alt"></i></i>Color</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.drive.index')}}"><i class="lni lni-car-alt"></i></i>Drive </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.ban.index')}}"><i class="lni lni-car-alt"></i></i>Ban</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.region.index')}}"><i class="lni lni-car-alt"></i></i>Region</a></li>

                            <li><a class="dropdown-item" href="{{route('admin.market.index')}}"><i class="lni lni-car-alt"></i></i>Markets</a></li>

                            <li><a class="dropdown-item" href="{{route('admin.higlit.index')}}"><i class="lni lni-car-alt"></i></i>Car Equipment </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.odometer.index')}}"><i class="lni lni-car-alt"></i></i>Odometer </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.enginework.index')}}"><i class="lni lni-car-alt"></i></i>Engine Work </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.ros.index')}}"><i class="lni lni-car-alt"></i></i>Currency </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.enginevolume.index')}}"><i class="lni lni-car-alt"></i></i>Engine Volume </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.damage.index')}}"><i class="lni lni-car-alt"></i></i>Transmission</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.transmission.index')}}"><i class="lni lni-car-alt"></i></i> Gear Shift</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.enginetype.index')}}"><i class="lni lni-car-alt"></i></i>Engine Type </a></li>
                            <li><a class="dropdown-item" href="{{route('admin.car.index')}}"><i class="lni lni-car-alt"></i></i>Masinlar </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-support"></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">Support</div>
                            <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.logo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>How to start</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>How to buy</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Terms and Guides</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Fees & Costs</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Rules & Policies</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Shipping</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Cutting Services</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Rental and Local A...</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="fadeIn animated bx bx-purchase-tag"></i>Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-news"></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">Reviews</div>
                            <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.logo.form')}}"><i class="fadeIn animated bx bx-collection"></i>Buyer's review</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="bx bx-briefcase-alt"></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">About Us</div>
                            <div class="ms-auto dropy-icon"><i class="bx bx-chevron-down"></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropend">
                                <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class="lni lni-alarm"></i>About area</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="dropdown-item" href="{{ route('admin.top.form') }}"><i class="bx bx-radio-circle"></i>Top</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.platform.form') }}"><i class="bx bx-radio-circle"></i>Platform</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.globalcount.form') }}"><i class="bx bx-radio-circle"></i>Global count</a></li>


                                </ul>
                            </li>
                            <li class="nav-item ">
                                    <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="{{ route('admin.notice.index') }}"><i class="bx bx-ghost"></i>Notice</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class='bx bx-cog'></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">SiteSettings & Policy</div>
                            <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.logo.form')}}"><i class="lni lni-slack"></i>Logo</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.adminsetting.index')}}"><i class="lni lni-slack"></i>Website Setting</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.seo.form')}}"><i class="lni lni-cogs"></i>Seo</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.social.index')}}"><i class="lni lni-cogs"></i>Social</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.staticModel.index')}}"><i class="lni lni-cogs"></i>Static Tr.</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.policy.index')}}"><i class="lni lni-cogs"></i>Policy</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
