<!-- main header -->
<header class="main-header style-two">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="top-left pull-left">
                    @php 
                        $mobile_number = explode(',', $ws->contact_mobile);
                        $mobile_number_without_str = str_replace(['+', '-', ' '], '', trim($mobile_number[0]));
                        $contact_email = explode(',', $ws->contact_email);
                    @endphp

                    <ul class="info clearfix">
                        <li><i class="flaticon-call"></i>Call us: <a href="tel:{{$mobile_number_without_str}}">{{$mobile_number[0]}}</a></li>
                        <li><i class="flaticon-open-email-message"></i><a
                                href="mailto:{{$contact_email[0]}}">{{$contact_email[0]}}</a></li>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    <div class="search-box-outer">
                        <div class="search-btn">
                            <button type="button" class="search-toggler"><i class="flaticon-search-1"></i></button>
                        </div>
                    </div>
                    <ul class="social-links clearfix">

                        <li><a href="{{ $ws->youtube_url ? $ws->youtube_url : '#'}}"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="{{ $ws->fb_url ? $ws->fb_url : '#'}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $ws->instagram_url ? $ws->instagram_url : '#'}}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $ws->linkedin_url ? $ws->linkedin_url : '#'}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $ws->youtube_url ? $ws->youtube_url : '#'}}"><i class="fab fa-twitter"></i></a></li>
                        <li class="user-menu">
                            @auth
                            <a href="javascript:void(0)"><i class="fas fa-user-alt">&nbsp; {{ auth()->user()->name }}</i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                <li><a href="{{ route('user.dashboard') }}">Member Dashboard</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            style="background:none;border:none;padding:0;cursor:pointer;">Logout</button>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <a href="{{ route('login') }}"><i class="fas fa-user-alt"></i>&nbsp; Login</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo">
                        <a href="{{ route('home') }}">  
                            <img alt="{{$ws->website_title ?? ''}}" width="210" height="auto" src="{{ route('imagecache', [ 'template'=>'original','filename' => $ws->logo() ]) }}">
                        </a>    
                    </figure>
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
                                <li class="dropdown {{ request()->routeIs('home') ? 'active current'  : ''  }} "><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="dropdown {{ request()->routeIs('about') ? 'active current' : ''  }} "><a
                                        href="{{ route('about') }}">About</a></li>
                                <li class="dropdown {{ request()->routeIs('courses') ? 'active current' : '' }}">
                                    <a href="{{ route('courses') }}">Courses</a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            @foreach($coursa->chunk(ceil($coursa->count() / 3)) as $chunk)
                                                <div class="col-lg-4 column">
                                                    <ul>
                                                        @foreach($chunk as $course)
                                                            <li>
                                                                <a href="{{ route('courseDetails',  $course->slug) }}">
                                                                    {{ $course->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown {{ request()->routeIs('service') ? 'active current' : '' }}">
                                    <a href="{{ route('service') }}">Services</a>
                                    <ul>
                                        @forelse($servica as $service)
                                            <li>
                                                <a href="{{ route('serviceDetails', $service->slug) }}">
                                                    {{ $service->title }}
                                                </a>
                                            </li>
                                        @empty
                                            <li><a href="#">No Services Available</a></li>
                                        @endforelse
                                    </ul>
                                </li>

                                <li class="dropdown {{ request()->routeIs('destination') ? 'active current' : ''  }}"><a
                                        href="{{ route('destination') }}">Destination</a>
                                    <ul>
                                        @foreach($destinate as $des)
                                        <li><a href="{{ route('destinationDetails', $des->slug)}}">{{$des->category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="dropdown {{ request()->routeIs('scholarship') ? 'active current' : ''  }}"><a
                                        href="{{ route('scholarship') }}">Scholarship</a> </li>
                                <li class="dropdown {{ request()->routeIs('event') ? 'active current' : ''  }}"><a
                                        href="{{ route('event') }}">Event</a> </li>
                                <li class="dropdown {{ request()->routeIs('blog') ? 'active current' : ''  }}"><a
                                        href="{{ route('blog') }}">Blog</a> </li>
                                <li class="dropdown {{ request()->routeIs('contact') ? 'active current' : ''  }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
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
                    <figure class="logo">
                        <a href="{{ route('home') }}"><img
                                src="{{ route('imagecache', [ 'template'=>'original','filename' => $ws->logo_alt() ]) }}" alt="{{$ws->website_title ?? ''}}"></a>
                        </a>   
                    </figure>
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
        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}"
                    alt="" title=""></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
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
.main-header .menu-area .navigation>li.current>a {
    display: inline-block;
    /* ensures pseudo-element positions correctly */
    position: relative;
    /* required for ::after positioning */
    padding-bottom: 5px;
    /* optional, space for underline */
}

/* underline strictly at bottom */
.main-header .menu-area .navigation>li.current>a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    /* start from bottom of <a> */
    width: 100%;
    height: 3px;
    /* thickness of underline */
    background: #ff6600;
    /* your highlight color */
    border-radius: 2px;
    /* optional, rounded edges */
    display: block;
}


/* user icon login  */

.user-menu {
    position: relative;
}

.user-menu>a {
    display: flex;
    align-items: center;
    gap: 5px;
    /* space between icon and text */
}

.user-menu .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    /* just below the icon */
    right: 0;
    background: #fff;
    border: 1px solid #ddd;
    min-width: 200px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    z-index: 999;
    list-style: none;
    padding: 5px 0;
}

.user-menu:hover .dropdown-menu {
    display: block;
}

.user-menu .dropdown-menu li {
    padding: 8px 15px;
}

.user-menu .dropdown-menu li a,
.user-menu .dropdown-menu li button {
    color: #333 !important; /* dark text */
    background: #fff; /* ensure background is white */
    text-decoration: none;
    display: block;
    width: 100%;
    text-align: left;
    font-weight: 500;
}

.user-menu .dropdown-menu li a:hover,
.user-menu .dropdown-menu li button:hover {
    background-color: #f0f0f0;
    color: #000 !important;
}
</style>