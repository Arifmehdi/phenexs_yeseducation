<!-- main header -->
<header class="main-header style-two">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="top-left pull-left">
                    <ul class="info clearfix">
                        <li><i class="flaticon-call"></i>Call us: <a href="tel:1246333079">+1 (246) 333 079</a></li>
                        <li><i class="flaticon-open-email-message"></i><a href="mailto:inquiry@example.com">inquiry@example.com</a></li>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    <div class="search-box-outer">
                        <div class="search-btn">
                            <button type="button" class="search-toggler"><i class="flaticon-search-1"></i></button>
                        </div>
                    </div>
                    <ul class="social-links clearfix">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="{{ route('login') }}"><i class="fas fa-user-alt"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo-2.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown {{ request()->routeIs('home') ? 'active current'  : ''  }} "><a href="{{ route('home') }}">Home</a></li> 
                                <li class="dropdown {{ request()->routeIs('about') ? 'active current' : ''  }} "><a href="{{ route('about') }}">About</a></li>
                                <li class="dropdown {{ request()->routeIs('courses') ? 'active current' : ''  }} "><a href="{{ route('courses') }}">Courses</a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 column">
                                                <ul>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Advanced Computing</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Digital Marketing</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC In Nursing</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">Broadcast Journalism</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">Master Of Public Health</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 column">
                                                <ul>
                                                    <li><a href="{{ route('courseDetails') }}">Master Of Business Administration</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Information Technology</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Information Management</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Logistics Supply Chain Management</a></li>
                                                </ul>
                                            </div> 
                                            <div class="col-lg-4 column">
                                                <ul>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Advance Computing</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC International Event Management</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Computer Science</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Project Management</a></li>
                                                    <li><a href="{{ route('courseDetails') }}">MSC Criminal Justice</a></li>
                                                </ul>
                                            </div>                                        
                                        </div>                                           
                                    </div>
                                </li>  
                                <li class="dropdown {{ request()->routeIs('service') ? 'active current' : ''  }}"><a href="{{ route('service') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ route('serviceDetails') }}">Student Counselling</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Student Application Support</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Scholarship Assistance</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Pre Departure Guidance</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Career Guidance</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Course Selection</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">College/University Selection</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Visa Application Advice</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Traveling Assistance</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Free Guideline About Life-in-abroad</a></li>
                                        <li><a href="{{ route('serviceDetails') }}">Visa File Processing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown {{ request()->routeIs('destination') ? 'active current' : ''  }}"><a href="{{ route('destination') }}">Destination</a>
                                    <ul>
                                        <li><a href="{{ route('destinationDetails') }}">Study In AUSTRALIA</a></li>
                                        <li><a href="{{ route('destinationDetails') }}"> Study In Canada</a></li>
                                        <li><a href="{{ route('destinationDetails') }}">Study In Ireland</a></li>
                                        <li><a href="{{ route('destinationDetails') }}">Study In NEW ZEALAND</a></li>
                                        <li><a href="{{ route('destinationDetails') }}">Study In UK</a></li>
                                        <li><a href="{{ route('destinationDetails') }}">Study In USA</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown {{ request()->routeIs('scholarship') ? 'active current' : ''  }}"><a href="{{ route('scholarship') }}">Scholarship</a> </li> 
                                <li class="dropdown {{ request()->routeIs('event') ? 'active current' : ''  }}"><a href="{{ route('event') }}">Event</a> </li> 
                                <li class="dropdown {{ request()->routeIs('blog') ? 'active current' : ''  }}"><a href="{{ route('blog') }}">Blog</a> </li> 
                                <li class="dropdown {{ request()->routeIs('contact') ? 'active current' : ''  }}"><a href="{{ route('contact') }}">Contact</a></li>               
                            </ul>
                        </div>
                    </nav>
                    {{--<div class="menu-right-content clearfix pull-left">
                        <div class="btn-box">
                            <a href="index-2.html" class="theme-btn-two">Appointment<i class="flaticon-send"></i></a>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->

<style>
/* Ensure <a> behaves as inline-block so ::after works properly */
.main-header .menu-area .navigation > li.current > a {
    display: inline-block; /* ensures pseudo-element positions correctly */
    position: relative;    /* required for ::after positioning */
    padding-bottom: 5px;   /* optional, space for underline */
}

/* underline strictly at bottom */
.main-header .menu-area .navigation > li.current > a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;          /* start from bottom of <a> */
    width: 100%;
    height: 3px;        /* thickness of underline */
    background: #ff6600; /* your highlight color */
    border-radius: 2px;  /* optional, rounded edges */
    display: block;
}

</style>