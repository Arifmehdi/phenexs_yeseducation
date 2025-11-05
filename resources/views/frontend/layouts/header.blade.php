<header class="header-two">
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 d-none d-lg-block d-md-block">
                <span>Have any question? 0123456789</span>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
                <div class="header-top-right">
                    <span>Phone: 0123456789</span>
                    <span>Email: info@example.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-logo-menu sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend/img/logo/logo.webp') }}"
                            alt="YES Education"></a>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="mainmenu-area pull-right">
                    <div class="mainmenu d-none d-lg-block">
                        <nav>
                            <ul id="nav">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('courses') }}">Courses</a>
                                    <!-- Mega Menu -->
                                    <div class="mega-menu mm-5-column">
                                        <div class="col-4 pull-left pl-20">
                                            <a href="{{ route('courseDetails') }}">MSC Advanced Computing</a>
                                            <a href="{{ route('courseDetails') }}">MSC Digital Marketing</a>
                                            <a href="{{ route('courseDetails') }}">MSC In Nursing</a>
                                            <a href="{{ route('courseDetails') }}">Broadcast Journalism</a>
                                            <a href="{{ route('courseDetails') }}">Master Of Public Health</a>
                                        </div>
                                        <div class="col-4 pull-left">
                                            <a href="{{ route('courseDetails') }}">Master Of Business Administration</a>
                                            <a href="{{ route('courseDetails') }}">MSC Information Technology</a>
                                            <a href="{{ route('courseDetails') }}">MSC Information Management</a>
                                            <a href="{{ route('courseDetails') }}">MSC Logistics Supply Chain Management</a>
                                        </div>
                                        <div class="col-4 pull-left">
                                            <a href="{{ route('courseDetails') }}">MSC Advance Computing</a>
                                            <a href="{{ route('courseDetails') }}">MSC International Event Management</a>
                                            <a href="{{ route('courseDetails') }}">MSC Computer Science</a>
                                            <a href="{{ route('courseDetails') }}">MSC Project Management</a>
                                            <a href="{{ route('courseDetails') }}">MSC Criminal Justice</a>
                                        </div>
                                        {{--<div class="col-4 pull-left">
                                            <a href='shortcode-progressbar.html'>Progressbar</a>
                                            <a href='text-animation-1.html'>Text Animation 1</a>
                                            <a href='text-animation-2.html'>Text Animation 2</a>
                                            <a href='text-animation-3.html'>Text Animation 3</a>
                                        </div>--}}
                                    </div>
                                </li>
                                <li><a href="{{ route('service') }}">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href='#'>Student Counselling</a></li>
                                        <li><a href='#'>Student Application Support</a></li>
                                        <li><a href='#'>Scholarship Assistance</a></li>
                                        <li><a href='#'>Pre Departure Guidance</a></li>
                                        <li><a href='#'>Career Guidance</a></li>
                                        <li><a href='#'>Course Selection</a></li>
                                        <li><a href='#'>College/University Selection</a></li>
                                        <li><a href='#'>Visa Application Advice</a></li>
                                        <li><a href='#'>Traveling Assistance</a></li>
                                        <li><a href='#'>Free Guideline About Life-in-abroad</a></li>
                                        <li><a href='#'>Visa File Processing</a></li>
                                    </ul>
                                </li>
                                <li><a href='#'>Destination</a>
                                    <ul class="sub-menu">
                                        <li><a href='#'>Study In AUSTRALIA</a></li>
                                        <li><a href='#'>Study In Canada</a></li>
                                        <li><a href='#'>Study In Ireland</a></li>
                                        <li><a href='#'>Study In NEW ZEALAND</a></li>
                                        <li><a href='#'>Study In UK</a></li>
                                        <li><a href='#'>Study In USA</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('scholarship')}}">Scholarship</a></li>
                                <li><a href="{{route('event')}}">Event</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact') }}">Contact US</a></li>
                            </ul>
                        </nav>
                    </div>
                    <ul class="header-search">
                        <li class="search-menu">
                            <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                        </li>
                    </ul>
                    <!--Search Form-->
                    <div class="search">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="Search here..." name="search" />
                                <button type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--End of Search Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area start -->
<div class="mobile-menu-area">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('courses') }}">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('courseDetails') }}">MSC Advanced Computing</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Digital Marketing</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC In Nursing</a></li>
                                    <li><a href="{{ route('courseDetails') }}">Broadcast Journalism</a></li>
                                    <li><a href="{{ route('courseDetails') }}">Master Of Public Health </a></li>
                                    <li><a href="{{ route('courseDetails') }}">Master Of Business Administration </a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Information Technology</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Information Management</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Logistics Supply Chain Management</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Advance Computing</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC International Event Management</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Computer Science</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Project Management</a></li>
                                    <li><a href="{{ route('courseDetails') }}">MSC Criminal Justice</a></li>
                                </ul>
                            </li>

                            <li><a href='#'>Services</a>
                                <ul class="sub-menu">
                                        <li><a href='#'>Student Counselling</a></li>
                                        <li><a href='#'>Student Application Support</a></li>
                                        <li><a href='#'>Scholarship Assistance</a></li>
                                        <li><a href='#'>Pre Departure Guidance</a></li>
                                        <li><a href='#'>Career Guidance</a></li>
                                        <li><a href='#'>Course Selection</a></li>
                                        <li><a href='#'>College/University Selection</a></li>
                                        <li><a href='#'>Visa Application Advice</a></li>
                                        <li><a href='#'>Traveling Assistance</a></li>
                                        <li><a href='#'>Free Guideline About Life-in-abroad</a></li>
                                        <li><a href='#'>Visa File Processing</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Destination</a>
                                <ul class="sub-menu">
                                        <li><a href='#'>Study In AUSTRALIA</a></li>
                                        <li><a href='#'>Study In Canada</a></li>
                                        <li><a href='#'>Study In Ireland</a></li>
                                        <li><a href='#'>Study In NEW ZEALAND</a></li>
                                        <li><a href='#'>Study In UK</a></li>
                                        <li><a href='#'>Study In USA</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('scholarship') }}">Scholarship</a></li>
                            <li><a href="{{ route('event') }}">Event</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end -->
</header>