<!-- MAIN HEADER START -->
<header class="main-header style-two">
    <div class="header-upper">
        <div class="container-fluid">
            <div class="outer-box clearfix">
                <!-- Logo -->
                <div class="logo-box pull-left">
                    <figure class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ route('imagecache', ['template'=>'original','filename'=>$ws->logo()]) }}"
                                alt="{{ $ws->website_title ?? '' }}" width="210" height="auto">
                        </a>
                    </figure>
                </div>

                <!-- Mobile Header Icons -->
                <div class="mobile-header-icons hide-on-desktop">
                    <!-- Ringing Phone Icon -->
                    <div class="header-icon phone-icon">
                        <a href="tel:{{ $ws->phone_number ?? '' }}"><i class="fi fi-br-phone-call"></i></a>
                    </div>
                    <!-- Mobile Nav Toggler -->
                    <div class="mobile-nav-toggler">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- Globe Icon -->
                    <div class="header-icon globe-icon">
                        <a href="#"><i class="fas fa-globe"></i></a>
                    </div>
                </div>

                <!-- Main Menu -->
                <div class="menu-area pull-right">
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->routeIs('home') ? 'active current' : '' }}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'active current' : '' }}">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('courses') ? 'active current' : '' }}">
                                    <a href="{{ route('courses') }}">Courses</a>

                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">

                                            <div class="megamenu-header">
                                                <p>Explore a wide range of courses to enhance your knowledge.</p>
                                                <a href="#" class="btn btn-primary"
                                                    style="color: #ffffff !important; background: linear-gradient(90deg, #171F67, #D10D2B); border: none; padding: 12px 30px; border-radius: 10px; text-decoration: none;">
                                                    View All <i class="fas fa-external-link-alt"
                                                        style="color: #ffffff !important;"></i>
                                                </a>
                                            </div>

                                            <div class="row clearfix">

                                                @foreach($coursa->chunk(ceil($coursa->count()/3)) as $chunk)
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        @foreach($chunk as $course)
                                                        <li>
                                                            <a class="service-item"
                                                                href="{{ route('courseDetails', $course->slug) }}">
                                                                <img src="{{ asset('frontend/assets/images/study/jan.original.png') }}"
                                                                    alt="{{ $course->title }}">
                                                                <span>{{ $course->title }}</span>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown {{ request()->routeIs('service') ? 'active current' : '' }}">
                                    <a href="{{ route('service') }}">Services</a>

                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">

                                            <div class="megamenu-header">
                                                <p>Explore a wide range of courses to enhance your knowledge.</p>
                                                <a href="#" class="btn btn-primary"
                                                    style="color: #ffffff !important; background: linear-gradient(90deg, #171F67, #D10D2B); border: none; padding: 12px 30px; border-radius: 10px; text-decoration: none;">
                                                    View All <i class="fas fa-external-link-alt"
                                                        style="color: #ffffff !important;"></i>
                                                </a>
                                            </div>

                                            <div class="row clearfix">

                                                @foreach($servica->chunk(ceil($servica->count()/3)) as $chunk)
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        @forelse($chunk as $service)
                                                        <li>
                                                            <a class="service-item"
                                                                href="{{ route('serviceDetails', $course->slug) }}">
                                                                <img src="{{ asset('frontend/assets/images/study/why.original.png') }}"
                                                                    alt="{{ $service->title }}">
                                                                <span>{{ $service->title }}</span>
                                                            </a>
                                                        </li>
                                                        @empty
                                                        <li><a href="#">No Services Available</a></li>
                                                        @endforelse
                                                    </ul>
                                                </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown {{ request()->routeIs('destination') ? 'active current' : '' }}">
                                    <a href="{{ route('destination') }}">Destination</a>

                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">

                                            <div class="megamenu-header">
                                                <p>Explore a wide range of courses to enhance your knowledge.</p>
                                                <a href="#" class="btn btn-primary"
                                                    style="color: #ffffff !important; background: linear-gradient(90deg, #171F67, #D10D2B); border: none; padding: 12px 30px; border-radius: 10px; text-decoration: none;">
                                                    View All <i class="fas fa-external-link-alt"
                                                        style="color: #ffffff !important;"></i>
                                                </a>
                                            </div>

                                            <div class="row clearfix">

                                                @foreach($destinate->chunk(ceil($destinate->count()/3)) as $desa)
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        @forelse($desa as $des)
                                                        <li>
                                                            <a class="service-item"
                                                                href="{{ route('courseDetails', $des->slug) }}">
                                                                <img src="{{ asset('frontend/assets/images/study/why.original.png') }}"
                                                                    alt="{{ $des->title }}">
                                                                <span>{{ $des->title }}</span>
                                                            </a>
                                                        </li>
                                                        @empty
                                                        <li><a href="#">No Destiantion Available</a></li>
                                                        @endforelse
                                                    </ul>
                                                </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </li>
                                {{-- New Location Megamenu --}}
                                <li class="dropdown">
                                    <a href="#">Location</a>
                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">
                                            <div class="row clearfix">
                                                {{-- Column 1 --}}
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/algeria.original.png') }}"
                                                                    alt="Algeria Flag"> <span>Algeria</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/bng-flag.original.png') }}"
                                                                    alt="Bangladesh Flag"> <span>Bangladesh</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/egypt.original.png') }}"
                                                                    alt="Egypt Flag"> <span>Egypt</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/india-flag.original.png') }}"
                                                                    alt="India Flag"> <span>India</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                                {{-- Column 2 --}}
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/kuwait.original.png') }}"
                                                                    alt="KuwaitFlag"> <span>Kuwait</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/morocco.original.png') }}"
                                                                    alt="Morocco Flag"> <span>Morocco</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/nepal.original.png') }}"
                                                                    alt="Nepal Flag"> <span>Nepal</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/ng-flag.original.png') }}"
                                                                    alt="Nigeria Flag"> <span>Nigeria</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                                {{-- Column 3 --}}
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/pak-flag.original.png') }}"
                                                                    alt="Pakistan Flag"> <span>Pakistan</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/qatar-flag.original.png') }}"
                                                                    alt="Qatar Flag"> <span>Qatar</span><i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/singapore.original.png') }}"
                                                                    alt="Singapore Flag"> <span>Singapore</span><i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/uk-flag.original.png') }}"
                                                                    alt="UK Flag"> <span>UK</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                                {{-- Column 4 --}}
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/bng-flag.original.png') }}"
                                                                    alt="Bangladesh Flag"> <span>Bangladesh</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/morocco.original.png') }}"
                                                                    alt="Morocco Flag"> <span>Morocco</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/nepal.original.png') }}"
                                                                    alt="Nepal Flag"> <span>Nepal</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="#"><img
                                                                    src="{{ asset('frontend/assets/images/flag/india-flag.original.png') }}"
                                                                    alt="India Flag"> <span>India</span> <i
                                                                    class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="{{ request()->routeIs('scholarship') ? 'active current' : '' }}">
                                    <a href="{{ route('scholarship') }}">Scholarship</a>
                                </li>
                                <li class="{{ request()->routeIs('event') ? 'active current' : '' }}">
                                    <a href="{{ route('event') }}">Event</a>
                                </li>
                                <li class="{{ request()->routeIs('blog') ? 'active current' : '' }}">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'active current' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Right Side Elements (Globe Icon + Button) -->
                <div class="header-right-elements">
                    <a href="#" class="show-on-desktop"><i class="fas fa-globe"></i></a>
                    <button class="btn btn-danger">Free Consultation</button>
                </div>

                <!-- Sticky Header -->
                <div class="sticky-header">
                    <div class="container-fluid">
                        <div class="outer-box clearfix">
                            <div class="logo-box pull-left">
                                <figure class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ route('imagecache', ['template'=>'original','filename'=>$ws->logo()]) }}"
                                            alt="{{ $ws->website_title ?? '' }}" width="210" height="auto">
                                    </a>
                                </figure>
                            </div>
                            <div class="menu-area pull-right">
                                <nav class="main-menu clearfix">
                                    <!-- menu cloned via JS -->
                                </nav>
                            </div>
                            <!-- Sticky Header Right Elements -->
                            <div class="header-right-elements">
                                <a href="#" class="show-on-desktop"><i class="fas fa-globe"></i></a>
                                <button class="btn btn-danger">Free Consultation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- MAIN HEADER END -->

<!-- MOBILE FLOATING MENU START -->
<div class="mobile-floating-menu">
    <div class="menu-backdrop"></div>
    <div class="floating-menu-container">
        <div class="menu-header">
            <div class="menu-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ route('imagecache', ['template'=>'original','filename'=>$ws->logo()]) }}" alt="">
                </a>
            </div>
            <div class="close-btn">X</div>
        </div>
        <div class="menu-content">
            <nav class="mobile-navigation">
                <!-- Menu auto-cloned here via JS -->
            </nav>
        </div>
    </div>
</div>
<!-- MOBILE FLOATING MENU END -->

<!-- CSS -->
<!-- CSS -->
<style>
/* Menu links */
.main-header .menu-area .navigation li a,
.sticky-header .main-menu .navigation li a {
    color: #333 !important;
    transition: color 0.3s ease;
}

/* Original header underline */
.main-header .menu-area .navigation>li.current>a::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 3px;
    background: #ff6600;
    border-radius: 2px;
}

.main-header .menu-area .navigation>li.current>a::after {
    content: none;
}

/* Sticky header remove red underline */
.sticky-header .navigation>li.current>a::after {
    content: none !important;
}

.sticky-header .navigation li a,
.sticky-header .navigation li a:hover,
.sticky-header .navigation li.dropdown:hover>a {
    color: #333 !important;
    background: transparent !important;
}

/* Remove ALL underlines from dropdown menus */
.main-header .navigation>li.dropdown>a,
.main-header .navigation>li.dropdown>a:hover,
.main-header .navigation>li.dropdown>a:focus,
.sticky-header .navigation>li.dropdown>a,
.sticky-header .navigation>li.dropdown>a:hover,
.sticky-header .navigation>li.dropdown>a:focus,
.navigation>li.dropdown>ul>li>a,
.navigation>li.dropdown>ul>li>a:hover,
.navigation>li.dropdown>ul>li>a:focus,
.navigation>li.dropdown .megamenu a,
.navigation>li.dropdown .megamenu a:hover,
.navigation>li.dropdown .megamenu a:focus,
.navigation li.dropdown ul li a,
.navigation li.dropdown .megamenu li a {
    text-decoration: none !important;
    text-underline-offset: none !important;
    text-decoration-line: none !important;
    text-decoration-style: none !important;
    border-bottom: none !important;
}

/* Header padding */
.header-upper {
    padding: 5px 100px;
    background: #ffffff;
}

.header-upper .container-fluid {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.sticky-header {
    padding: 5px 100px;
    background: #ffffff;
}

/* Sticky header */
.sticky-header {
    position: fixed;
    top: -100px;
    left: 0;
    width: 100%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    transition: all 0.3s ease-in-out;
}

/* Show sticky */
body.sticky-active .sticky-header {
    top: 0;
}

/* Logo size */
.main-header .logo img,
.sticky-header .logo img {
    max-height: 80px;
    transition: all 0.3s ease;
}

/* User menu */
.user-menu {
    position: relative;
}

.user-menu>a {
    display: flex;
    align-items: center;
    gap: 5px;
}

.user-menu .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background: #fff;
    border: 1px solid #ddd;
    min-width: 200px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    list-style: none;
    padding: 5px 0;
    z-index: 999;
}

.user-menu:hover .dropdown-menu {
    display: block;
}

.user-menu .dropdown-menu li {
    padding: 8px 15px;
}

.user-menu .dropdown-menu li a,
.user-menu .dropdown-menu li button {
    color: #333 !important;
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

/* Mobile Header Icons container */
.mobile-header-icons {
    display: none;
    align-items: center;
    gap: 15px;
}

/* Individual icons inside the container */
.mobile-header-icons .header-icon a {
    font-size: 18px;
    color: #333;
    padding: 5px;
}

.mobile-header-icons .header-icon a:hover {
    color: #ff6600;
}

/* Hamburger specific adjustments */
.mobile-header-icons .mobile-nav-toggler {
    position: static;
    transform: none;
    width: 25px;
    height: 18px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
}

.mobile-header-icons .mobile-nav-toggler .icon-bar {
    height: 2px;
    background: #333 !important;
    border-radius: 2px;
    transition: all 0.3s ease;
}

/* Dropdown ULs for Services, Destination, etc. */
.navigation>li.dropdown>ul {
    position: absolute;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 100vw !important;
    padding: 40px 0 !important;
    background-color: #182436 !important;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    display: none;
    border-radius: 0 0 5px 5px;
    z-index: 9999;
    list-style: none;
    text-align: center;
    margin: 0 !important;
    max-width: none !important;
}

.navigation>li.dropdown:hover>ul {
    display: block;
}

.navigation>li.dropdown>ul>li {
    padding: 0;
    margin: 0;
}

.navigation>li.dropdown>ul>li>a {
    color: #ffffff;
    padding: 10px 50px;
    display: inline-block;
    transition: background-color 0.3s ease;
    min-width: 200px;
}

.navigation>li.dropdown>ul>li>a:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

/* Mega Menu Styling */
.megamenu-inner-wrapper {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 50px;
    width: 100%;
    box-sizing: border-box;
}

.navigation>li.dropdown .megamenu .row .column {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.navigation>li.dropdown .megamenu {
    position: absolute;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 100vw !important;
    background-color: #182436;
    padding: 40px 0 !important;
    box-sizing: border-box;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    display: none;
    border-radius: 0 0 5px 5px;
    z-index: 9999;
    margin: 0 !important;
    max-width: none !important;
}

.navigation>li.dropdown:hover .megamenu {
    display: block;
}

.megamenu-header {
    display: flex;
    align-items: center;
    color: #ffffff;
    margin-bottom: 30px;
}

.megamenu-header p {
    font-size: 16px;
    color: #ffffff;
    margin: 0;
    margin-right: 20px;
}

.megamenu-header .btn {
    flex-shrink: 0;
    background: linear-gradient(90deg, #171F67, #D10D2B);
    border: none;
    color: #ffffff !important;
    padding: 10px 20px;
    border-radius: 5px;
}

.megamenu-header .btn .fas {
    margin-left: 10px;
    font-size: 14px;
    color: #ffffff !important;
}

.navigation .dropdown .megamenu .column ul {
    list-style: none;
    padding: 0;
}

.navigation .dropdown .megamenu .column ul li a {
    color: #ffffff;
    padding: 8px 0;
    display: block;
    transition: color 0.3s ease;
    font-weight: normal;
}

.navigation .dropdown .megamenu .column ul li a:hover {
    color: #ff6600;
}

.navigation .dropdown .megamenu .column ul li a .fas {
    margin-right: 10px;
    width: 25px;
    text-align: center;
    font-size: 20px;
    color: #74C7F4;
}

/* Styling for Location Megamenu with .location-item class */
.navigation>li.dropdown .megamenu .col-lg-3.column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

a.location-item {
    display: flex !important;
    align-items: center !important;
    padding: 12px 15px !important;
    color: #ffffff !important;
    text-decoration: none !important;
    transition: background-color 0.3s ease;
    justify-content: flex-start !important;
    white-space: nowrap !important;
}

a.service-item:hover {
    background-color: rgba(255, 255, 255, 0.1) !important;
}

a.service-item img {
    width: 40px !important;
    height: 40px !important;

    margin-right: 15px !important;
    border: none !important;
    /* remove border */
    flex-shrink: 0 !important;

    border-radius: 0 !important;
    /* <-- IMPORTANT: rectangle */
    object-fit: contain !important;
    /* keep original shape without cutting */
    background: transparent !important;
    /* optional */
}

a.service-item {
    display: flex !important;
    align-items: center !important;
    padding: 12px 15px !important;
    color: #ffffff !important;
    text-decoration: none !important;
    transition: background-color 0.3s ease;
    justify-content: flex-start !important;
    white-space: nowrap !important;
}

a.service-item span {
    flex-grow: 0 !important;
    flex-shrink: 0 !important;
    color: #ffffff !important;
    font-size: 16px !important;
    font-weight: 500 !important;
}

a.location-item:hover {
    background-color: rgba(255, 255, 255, 0.1) !important;
}

a.location-item img {
    width: 48px !important;
    height: 48px !important;
    margin-right: 15px !important;
    border: 2px solid rgba(255, 255, 255, 0.3) !important;
    flex-shrink: 0 !important;
    border-radius: 50% !important;
    object-fit: cover !important;
}

a.location-item span {
    flex-grow: 0 !important;
    flex-shrink: 0 !important;
    color: #ffffff !important;
    font-size: 16px !important;
    font-weight: 500 !important;
}

a.location-item i {
    color: #74C7F4 !important;
    font-size: 18px !important;
    margin-left: 10px !important;
    flex-shrink: 0 !important;
}

/* ==================== DESKTOP DROPDOWN ICONS (FORCED) ==================== */
.main-header .navigation>li.dropdown>a,
.sticky-header .navigation>li.dropdown>a {
    position: relative;
    padding-right: 20px;
}

.main-header .navigation>li.dropdown>a::after,
.sticky-header .navigation>li.dropdown>a::after {
    font-family: 'Font Awesome 5 Free' !important;
    font-weight: 900 !important;
    content: '\f107' !important;
    position: absolute !important;
    right: 0 !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    transition: transform 0.3s ease !important;
    font-size: 14px !important;
    display: inline-block !important;
}

.main-header .navigation>li.dropdown:hover>a::after,
.sticky-header .navigation>li.dropdown:hover>a::after {
    transform: translateY(-50%) rotate(180deg) !important;
}

/* ==================== MOBILE DROPDOWN ICONS (FORCED) ==================== */
.mobile-navigation .navigation li.dropdown>a {
    position: relative;
    padding-right: 45px;
}

.mobile-navigation .navigation li.dropdown>a::after {
    content: '+' !important;
    position: absolute !important;
    right: 20px !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    transition: all 0.3s ease !important;
    color: #333 !important;
    font-size: 18px !important;
    font-weight: bold !important;
    font-family: monospace !important;
    display: inline-block !important;
}

.mobile-navigation .navigation li.dropdown.open>a::after {
    content: '−' !important;
    transform: translateY(-50%) !important;
    color: #ff6600 !important;
}

/* ==================== MOBILE FLOATING MENU ==================== */
.mobile-floating-menu {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99998;
    pointer-events: none;
}

.mobile-floating-menu.active {
    pointer-events: auto;
}

/* Hide Backdrop */
.mobile-floating-menu .menu-backdrop {
    display: none;
}

/* Floating Container - Full Width Dropdown Style */
.floating-menu-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    max-height: 0;
    background: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: max-height 0.3s ease, opacity 0.3s ease;
    opacity: 0;
    border-bottom: 2px solid #f0f0f0;
}

.mobile-floating-menu.active .floating-menu-container {
    max-height: calc(100vh - 80px);
    opacity: 1;
}

/* Menu Header - Hidden in dropdown style */
.menu-header {
    display: none;
}

/* Menu Content */
.menu-content {
    max-height: calc(100vh - 80px);
    overflow-y: auto;
    padding: 15px 0;
}

/* Mobile Navigation */
.mobile-navigation {
    list-style: none;
    padding: 0 15px;
    margin: 0;
}

.mobile-navigation .navigation {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-navigation .navigation>li {
    border: 1px solid #E5E7EB;
    border-radius: 5px;
    margin-bottom: 5px;
    overflow: hidden;
}

.mobile-navigation .navigation>li:last-child {
    margin-bottom: 0;
}

.mobile-navigation .navigation li a {
    display: block;
    padding: 12px 15px;
    color: #333;
    text-decoration: none;
    font-weight: normal;
    font-size: 14px;
    transition: background 0.2s ease, color 0.2s ease;
}

.mobile-navigation .navigation li a:hover {
    background: #f8f9fa;
    color: black;
}

.mobile-navigation .navigation li.current>a {
    color: black;
    background: #E5E7EB;
}

/* Submenu */
.mobile-navigation .navigation li ul,
.mobile-navigation .navigation li .megamenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-navigation .navigation li.dropdown.open>ul,
.mobile-navigation .navigation li.dropdown.open>.megamenu {
    display: block;
}

.mobile-navigation .navigation li ul li a,
.mobile-navigation .navigation li .megamenu li a {
    padding: 12px 15px;
    font-size: 14px;
    font-weight: normal;
    color: #333;
    background-color: #FFFFFF;
}

.mobile-navigation .navigation li ul li a:hover,
.mobile-navigation .navigation li .megamenu li a:hover {
    background: #f8f9fa;
    color: black;
    padding: 12px 15px;
}

.mobile-navigation .megamenu .row {
    margin: 0;
}

.mobile-navigation .megamenu .col-lg-4,
.mobile-navigation .megamenu .col-lg-3 {
    width: 100%;
    padding: 0;
}

.mobile-navigation .megamenu ul {
    padding: 0;
}

.mobile-navigation .megamenu .megamenu-header {
    display: none;
}

.mobile-navigation .navigation li ul li,
.mobile-navigation .navigation li .megamenu .column ul li {
    border: 1px solid #E5E7EB;
    border-radius: 5px;
    margin-bottom: 5px;
    overflow: hidden;
}

.mobile-navigation .navigation li ul li:last-child,
.mobile-navigation .navigation li .megamenu .column ul li:last-child {
    margin-bottom: 0;
}

/* Hide location item styles in mobile */
.mobile-navigation a.location-item img {
    display: none !important;
}

.mobile-navigation a.location-item i {
    display: none !important;
}

/* Contact Info */
.contact-info {
    padding: 25px;
    background: #f8f9fa;
    margin: 15px 15px 0;
    border-radius: 8px;
}

.contact-info h4 {
    margin: 0 0 15px 0;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    border-bottom: 2px solid #ff6600;
    padding-bottom: 10px;
    display: inline-block;
}

.contact-info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-info ul li {
    padding: 8px 0;
    font-size: 14px;
    color: #666;
    display: flex;
    align-items: center;
}

.contact-info ul li:before {
    content: '▸';
    color: #ff6600;
    margin-right: 10px;
    font-weight: bold;
}

.contact-info ul li a {
    color: #ff6600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-info ul li a:hover {
    color: #ff4400;
}

/* Social Links */
.social-links {
    padding: 20px 15px 25px;
}

.social-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 12px;
    justify-content: center;
}

.social-links ul li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    background: #333;
    color: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
    font-size: 16px;
}

.social-links ul li a:hover {
    background: #ff6600;
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(255, 102, 0, 0.3);
}

/* Scrollbar styling */
.menu-content::-webkit-scrollbar {
    width: 8px;
}

.menu-content::-webkit-scrollbar-track {
    background: #f8f9fa;
}

.menu-content::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 4px;
}

.menu-content::-webkit-scrollbar-thumb:hover {
    background: #ff6600;
}

/* ==================== CENTERED MENU LAYOUT ==================== */
.header-upper .outer-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.header-upper .logo-box {
    flex-shrink: 0;
}

.header-upper .menu-area {
    flex: 1;
    display: flex;
    justify-content: center;
}

.header-upper .menu-area .main-menu {
    width: 100%;
}

.header-upper .menu-area .main-menu .navbar-collapse {
    display: flex;
    justify-content: center;
}

.header-upper .menu-area .navigation {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    flex-wrap: wrap;
}

.header-upper .menu-area .navigation li:last-child {
    display: none; /* Hide the duplicate globe icon and button in the menu */
}

/* Right side elements container */
.header-right-elements {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-shrink: 0;
}

.header-right-elements .show-on-desktop {
    font-size: 18px;
    color: #333;
    transition: color 0.3s ease;
}

.header-right-elements .show-on-desktop:hover {
    color: #ff6600;
}

.header-right-elements .btn {
    font-weight: bold;
    background: linear-gradient(90deg, #171F67, #D10D2B);
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.header-right-elements .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Responsive */
@media (max-width: 991px) {
    .header-upper .outer-box {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-upper {
        padding: 5px 0px !important;
        background: #ffffff;
    }

    .header-upper .logo-box {
        float: none;
        position: static;
        transform: none;
        width: auto;
        text-align: left;
    }

    .main-header .logo img,
    .sticky-header .logo img {
        max-height: 50px;
    }

    .main-header .menu-area {
        display: none !important;
    }

    .mobile-header-icons {
        display: flex !important;
        position: static;
        transform: none;
    }

    .mobile-nav-toggler {
        display: flex !important;
    }

    .header-right-elements {
        display: none !important;
    }

    /* Position mobile menu below header */
    .mobile-floating-menu {
        top: auto;
    }

    .hide-on-mobile {
        display: none !important;
    }
}

@media (max-width: 480px) {
    .mobile-navigation .navigation li a {
        padding: 4px 20px;
    }

    .mobile-navigation .navigation li.dropdown>a {
        padding-right: 45px;
    }

    .contact-info {
        margin: 15px 10px 0;
        padding: 20px;
    }
}

@media (max-width: 991px) {
    .mobile-navigation .navigation .dropdown-btn span.fas.fa-angle-down {
        display: none !important;
    }
}

/* Responsive Visibility */
.show-on-desktop {
    display: none;
}

@media (min-width: 992px) {
    .hide-on-desktop {
        display: none !important;
    }

    .show-on-desktop {
        display: inline-block;
        margin-right: 15px;
        font-size: 18px !important;
        transition: color 0.3s ease;
    }

    .show-on-desktop:hover {
        color: #ff6600;
    }

    .header-right-elements {
        display: flex !important;
    }

    /* Flexbox for menu alignment */
    .main-header .menu-area .navigation {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .main-header .menu-area .navigation li a {
        font-size: 14px;
    }
}
</style>

<!-- JS -->
<script>
const mobileDropdownIcons = document.querySelectorAll(
    '.mobile-navigation .navigation li.dropdown > a > span.fas.fa-angle-down');
mobileDropdownIcons.forEach(icon => icon.remove());
document.addEventListener("DOMContentLoaded", function() {

    // --- Menu Cloning ---
    const mainMenu = document.querySelector('.main-header .navigation');
    const stickyMenuContainer = document.querySelector('.sticky-header .main-menu');
    const mobileMenuContainer = document.querySelector('.mobile-floating-menu .mobile-navigation');

    if (mainMenu) {
        if (stickyMenuContainer) {
            stickyMenuContainer.innerHTML = mainMenu.outerHTML;
        }
        if (mobileMenuContainer) {
            mobileMenuContainer.innerHTML = mainMenu.outerHTML;

            // --- Device-based Icon Hiding Logic ---
            const hideMobileAngleIcon = () => {
                const mobileDropdownLinks = mobileMenuContainer.querySelectorAll('li.dropdown > a');
                mobileDropdownLinks.forEach(link => {
                    const faIconElement = link.querySelector(
                        'i[class*="fa-angle"], span[class*="fa-angle"]');
                    if (faIconElement) {
                        if (window.innerWidth <= 991) {
                            faIconElement.style.display = 'none';
                        } else {
                            faIconElement.style.display = '';
                        }
                    }
                });
            };

            // Run on initial load
            hideMobileAngleIcon();

            // Run on window resize
            window.addEventListener('resize', hideMobileAngleIcon);
        }
    }

    // --- Sticky Header ---
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            document.body.classList.add('sticky-active');
        } else {
            document.body.classList.remove('sticky-active');
        }
    });

    // --- Mobile Floating Menu Activation ---
    const mobileMenu = document.querySelector('.mobile-floating-menu');
    const openBtn = document.querySelector('.mobile-nav-toggler');
    const headerUpper = document.querySelector('.header-upper');

    const toggleMenu = () => {
        if (mobileMenu) {
            mobileMenu.classList.toggle('active');
        }
    };

    // Close menu when clicking outside
    const closeMenuOnClickOutside = (e) => {
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            const menuContainer = document.querySelector('.floating-menu-container');
            const isClickInside = menuContainer.contains(e.target) || openBtn.contains(e.target);
            if (!isClickInside) {
                mobileMenu.classList.remove('active');
            }
        }
    };

    if (openBtn) openBtn.addEventListener('click', toggleMenu);
    document.addEventListener('click', closeMenuOnClickOutside);

    // Close menu on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) {
            toggleMenu();
        }
    });

    // --- Mobile Menu Dropdowns ---
    const mobileNav = document.querySelector('.mobile-floating-menu .mobile-navigation');
    if (mobileNav) {
        const dropdowns = mobileNav.querySelectorAll('li.dropdown');

        dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('a');
            if (link) {
                link.addEventListener('click', function(e) {
                    // Check if this dropdown has submenu
                    const nextEl = this.nextElementSibling;
                    if (nextEl && (nextEl.tagName === 'UL' || nextEl.classList.contains(
                            'megamenu'))) {
                        e.preventDefault();
                        dropdown.classList.toggle('open');
                    }
                    // If no submenu, allow normal navigation
                });
            }
        });
    }
});
</script>