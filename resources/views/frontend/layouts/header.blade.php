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

                <!-- Mobile Header Icons - Changed class to show-on-mobile -->
                <div class="mobile-header-icons show-on-mobile">
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
                        <a href="{{ route('globalOfficeOnly') }}"><i class="fas fa-globe"></i></a>
                    </div>
                </div>

                <!-- Main Menu -->
                <div class="menu-area pull-right">
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown has-submenu">
                                    <a href="{{ route('studyIn') }}">Study In UK</a>
                                    <ul class="mobile-submenu d-block d-lg-none d-md-none">
                                        <li><a href="{{ route('studyInUk', 'Why Choose UK') }}">Why Choose UK</a></li>
                                        <li><a href="{{ route('eventDetails', 'What Can I Study?') }}">What Can I Study?</a></li>
                                        <li><a href="{{ route('studyInUk', 'January Intake') }}">January Intake</a></li>
                                        <li><a href="{{ route('studyInUk', 'May Intake') }}">May Intake</a></li>
                                        <li><a href="{{ route('studyInUk', 'September Intake') }}">September Intake</a></li>
                                        <li><a href="{{ route('eventDetails', 'Cost of Study') }}">Cost of Study</a></li>
                                        <li><a href="{{ route('eventDetails', 'UCAS') }}">UCAS</a></li>
                                        <li><a href="{{ route('eventDetails', 'Students Essential') }}">Students Essential</a></li>
                                    </ul>
                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">
                                            <div class="megamenu-header">
                                                <p>Discover a world-class education in the UK.</p>
                                                <a href="#" class="btn btn-primary">View All <i class="fas fa-external-link-alt"></i></a>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('studyInUk', 'Why Choose UK') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/why.original.png') }}" alt="Title">
                                                                <span>Why Choose UK</span>
                                                                <p style="text-white">Discover why the UK is great for both education and culture.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'What Can I Study?') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/whanCanIStudy.png') }}" alt="Title">
                                                                <span>What Can I Study?</span> <br>
                                                                <p style="text-white">Art, science, philosophy... Explore your options to find your passion.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('studyInUk', 'January Intake') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/jan.original.png') }}" alt="Title">
                                                                <span>January Intake</span> <br>
                                                                <p style="text-white">Find out all you need to know about courses starting in January.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('studyInUk', 'May Intake') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/may.original.png') }}" alt="Title">
                                                                <span>May Intake</span> <br>
                                                                <p style="text-white">Find out all you need to know about courses starting in May.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('studyInUk', 'September Intake') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/sep.original.png') }}" alt="Title">
                                                                <span>September Intake</span>
                                                                <p style="text-white">Discover why the UK is great for both education and culture.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Cost of Study') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/cost-of-study.original.png') }}" alt="Title">
                                                                <span>Cost of Study</span> <br>
                                                                <p style="text-white">Art, science, philosophy... Explore your options to find your passion.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'UCAS') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/ucas.original.png') }}" alt="Title">
                                                                <span>UCAS</span> <br>
                                                                <p style="text-white">Find out all you need to know about courses starting in January.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Students Essential') }}">
                                                                <img src="{{ asset('frontend/assets/images/study/student-essentials.original.png') }}" alt="Title">
                                                                <span>Students Essential</span> <br>
                                                                <p style="text-white">Find out all you need to know about courses starting in May.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="dropdown {{ request()->routeIs('search') ? 'active current' : '' }} has-submenu">
                                    <a href="{{ route('search', ['action' => 'location-data', 'location' => 'London']) }}">Universities</a>
                                    <ul class="mobile-submenu d-block d-lg-none d-md-none">
                                        <li><a href="{{ route('search', ['action' => 'location-data', 'location' => 'London']) }}">Find a University</a></li>
                                        <li><a href="{{ route('eventDetails', 'Rankings') }}">Rankings</a></li>
                                        <li><a href="{{ route('eventDetails', 'Russell Group Industries') }}">Russell Group Industries</a></li>
                                        <li><a href="{{ route('eventDetails', 'Top Universities In the UK') }}">Top Universities In the UK</a></li>
                                        <li><a href="{{ route('eventDetails', 'University Of Scotland') }}">University Of Scotland</a></li>
                                    </ul>
                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">
                                            <div class="megamenu-header">
                                                <p>Tools and more to help you pick your university.</p>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('search', ['action' => 'location-data', 'location' => 'London']) }}">
                                                                <img src="{{ asset('frontend/assets/images/university/find-uni.original.png') }}" alt="Title">
                                                                <span>Find a University</span>
                                                                <p style="text-white">Browse over 150 top universities to find the perfect place to study.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Rankings') }}">
                                                                <img src="{{ asset('frontend/assets/images/university/universityRanking.png') }}" alt="Title">
                                                                <span>Rankings</span> <br>
                                                                <p style="text-white">Choose from the best UK universities using our comprehensive rankings guide.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'University Of Scotland') }}">
                                                                <img src="{{ asset('frontend/assets/images/university/russelGroupUniversity.png') }}" alt="Title">
                                                                <span>University Of Scotland</span> <br>
                                                                <p style="text-white">Choose from the best UK universities using our comprehensive rankings guide.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Discover Russell Group universities known for their research excellence and prestige.') }}">
                                                                <img src="{{ asset('frontend/assets/images/university/russelGroupUniversity.png') }}" alt="Title">
                                                                <span>Russell Group Industries</span> <br>
                                                                <p style="text-white">Discover Russell Group universities known for their research excellence and prestige.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Top Universities In the UK') }}">
                                                                <img src="{{ asset('frontend/assets/images/university/student-essentials.original.png') }}" alt="Title">
                                                                <span>Top Universities In the UK</span> <br>
                                                                <p style="text-white">Choose from the best UK universities using our comprehensive rankings guide.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="dropdown has-submenu">
                                    <a href="{{ route('courseIn') }}">Courses</a>
                                    <ul class="mobile-submenu d-block d-lg-none d-md-none">
                                        <li><a href="{{ route('eventDetails', 'Foundation') }}">Foundation</a></li>
                                        <li><a href="{{ route('eventDetails', 'Undergraduate Degree') }}">Undergraduate Degree</a></li>
                                        <li><a href="{{ route('eventDetails', 'Top-Up Degrees') }}">Top-Up Degrees</a></li>
                                        <li><a href="{{ route('eventDetails', 'Pre-Masters') }}">Pre-Masters</a></li>
                                        <li><a href="{{ route('eventDetails', 'Masters Degree') }}">Masters Degree</a></li>
                                        <li><a href="{{ route('eventDetails', 'PhD-Degree') }}">PhD Degree</a></li>
                                    </ul>
                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">
                                            <div class="megamenu-header">
                                                <p>All your options for your Higher Education journey</p>
                                                <a href="#" class="btn btn-primary">View All <i class="fas fa-external-link-alt"></i></a>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Foundation') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/found.original.png') }}" alt="Title">
                                                                <span>Foundation</span>
                                                                <p style="text-white">Foundation courses help international students get ready for university.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Undergraduate Degree') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/Icon.original.png') }}" alt="Title">
                                                                <span>Undergraduate Degree</span> <br>
                                                                <p style="text-white">Explore undergraduate degrees in the UK for almost any career path.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Top-Up Degrees') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/advanced-entry.original.png') }}" alt="Title">
                                                                <span>Top-Up Degrees</span> <br>
                                                                <p style="text-white">Learn about Top-Up degrees to complete your degree.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Pre-Masters') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/pre-master.original.png') }}" alt="Title">
                                                                <span>Pre-Masters</span>
                                                                <p style="text-white">Find Pre-Masters programs in the UK to prepare you for postgraduate study.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'Masters Degree') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/master.original.png') }}" alt="Title">
                                                                <span>Masters Degree</span> <br>
                                                                <p style="text-white">Explore Master's degrees in the UK for further academic and career growth.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('eventDetails', 'PhD-Degree') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/phd.original.png') }}" alt="Title">
                                                                <span>PhD Degree</span> <br>
                                                                <p style="text-white">Discover PhD opportunities in the UK for advanced research and expertise.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="dropdown has-submenu">
                                    <a href="{{ route('globalOfficeOnly') }}">Global</a>
                                    <ul class="mobile-submenu d-block d-lg-none d-md-none">
                                        <li><a href="globalOffice">Algeria</a></li>
                                        <li><a href="globalOffice">Kuwait</a></li>
                                        <li><a href="globalOffice">Pakistan</a></li>
                                        <li><a href="globalOffice">Bangladesh</a></li>
                                        <li><a href="globalOffice">Morocco</a></li>
                                        <li><a href="globalOffice">Qatar</a></li>
                                        <li><a href="globalOffice">Nepal</a></li>
                                        <li><a href="globalOffice">UK</a></li>
                                    </ul>
                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">
                                            <div class="megamenu-header">
                                                <p>Discover our global footprint.</p>
                                                <a href="#" class="btn btn-primary">View All <i class="fas fa-external-link-alt"></i></a>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/algeria.original.png') }}" alt="Algeria Flag"> <span>Algeria</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/bng-flag.original.png') }}" alt="Bangladesh Flag"> <span>Bangladesh</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/egypt.original.png') }}" alt="Egypt Flag"> <span>Egypt</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/india-flag.original.png') }}" alt="India Flag"> <span>India</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/kuwait.original.png') }}" alt="KuwaitFlag"> <span>Kuwait</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/morocco.original.png') }}" alt="Morocco Flag"> <span>Morocco</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/nepal.original.png') }}" alt="Nepal Flag"> <span>Nepal</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/ng-flag.original.png') }}" alt="Nigeria Flag"> <span>Nigeria</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/pak-flag.original.png') }}" alt="Pakistan Flag"> <span>Pakistan</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/qatar-flag.original.png') }}" alt="Qatar Flag"> <span>Qatar</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/singapore.original.png') }}" alt="Singapore Flag"> <span>Singapore</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/uk-flag.original.png') }}" alt="UK Flag"> <span>UK</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/bng-flag.original.png') }}" alt="Bangladesh Flag"> <span>Bangladesh</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/morocco.original.png') }}" alt="Morocco Flag"> <span>Morocco</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/nepal.original.png') }}" alt="Nepal Flag"> <span>Nepal</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                        <li><a class="location-item" href="{{ route('globalOffice') }}"><img src="{{ asset('frontend/assets/images/flag/india-flag.original.png') }}" alt="India Flag"> <span>India</span> <i class="fi fi-br-phone-call"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="dropdown {{ request()->routeIs('event') || request()->routeIs('blog') ? 'active current' : '' }} has-submenu">
                                    <a href="#">Miscellaneous</a>
                                    <ul class="mobile-submenu d-block d-lg-none d-md-none">
                                        <li><a href="{{ route('event') }}">Event</a></li>
                                        <li><a href="{{ route('blog') }}">Our Blogs</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                    </ul>
                                    <div class="megamenu">
                                        <div class="megamenu-inner-wrapper">
                                            <div class="megamenu-header">
                                                <p>Explore pathways to help you achieve your academic goals.</p>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('event') }}">
                                                                <img src="{{ asset('frontend/assets/images/pathway/phd.original.png') }}" alt="Title">
                                                                <span>Event</span>
                                                                <p style="text-white">Discover top institutes offering pathway programs to prepare for university.</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="service-item" href="{{ route('about') }}">
                                                                <img src="{{ asset('frontend/assets/images/course/found.original.png') }}" alt="About us menu icon">
                                                                <span>About Us</span>
                                                                <p style="text-white">Foundation courses help international students get ready for university.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 column">
                                                    <ul>
                                                        <li>
                                                            <a class="service-item" href="{{ route('blog') }}">
                                                                <img src="{{ asset('frontend/assets/images/pathway/russelGroupUniversity.png') }}" alt="Title">
                                                                <span>Our Blogs</span> <br>
                                                                <p style="text-white">Explore about us and explore your academic journey.</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="{{ request()->routeIs('application') ? 'active current' : '' }}">
                                    <a href="{{ route('application') }}"><span style="color: #3B308B">Apply Now ></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Right Side Elements (Globe Icon + Button) -->
                <div class="header-right-elements">
                    <a href="{{ route('globalOfficeOnly') }}" class="show-on-desktop"><i class="fas fa-globe"></i></a>
                    <a href="{{ route('login') }}" class="show-on-desktop"><i class="fas fa-user"></i></a>
                    <a href="tel:+8801898828980">
                        <button class="btn" style="background:#3B308B;color:#fff;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="white" class="phone-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                </path>
                            </svg>
                            +8801898-828980
                        </button>
                    </a>
                </div>
            </div>
        </div>
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
                
                <!-- Mobile Header Icons for Sticky Header -->
                <div class="mobile-header-icons show-on-mobile">
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
                        <a href="{{ route('globalOfficeOnly') }}"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!-- menu cloned via JS -->
                    </nav>
                </div>
                
                <!-- Right Side Elements for Sticky Header -->
                <div class="header-right-elements">
                    <a href="{{ route('globalOfficeOnly') }}" class="show-on-desktop"><i class="fas fa-globe"></i></a>
                    <a href="{{ route('login') }}" class="show-on-desktop"><i class="fas fa-user"></i></a>
                    <a href="tel:+8801898828980">
                        <button class="btn" style="background:#3B308B;color:#fff;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="white" class="phone-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                </path>
                            </svg>
                            +8801898-828980
                        </button>
                    </a>
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

<style>
/* ==================== BASE STYLES ==================== */
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
    position: relative;
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

/* Mobile Header Icons container - FIXED */
.mobile-header-icons {
    display: none; /* Hidden by default, shown on mobile */
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
    /* max-width: 1300px; */
    margin: 0 auto;
    padding: 0 50px;
    width: 100%;
    box-sizing: border-box;
}

.navigation>li.dropdown .megamenu .row .column {
    padding-left: 0 !important;
    padding-right: 0 !important;
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

a.service-item p {
    flex-grow: 0 !important;
    flex-shrink: 0 !important;
    color: #ffffff !important;
    font-size: 12px !important;
    font-weight: 400 !important;
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

@media (min-width: 992px) {
    .navigation>li.dropdown .megamenu,
    .navigation>li.dropdown>ul {
        /* Override existing styles for desktop */
        position: absolute !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        width: 100vw !important;
        max-width: 100vw !important;
        top: 100% !important;
        padding: 40px 0 !important;
        background-color: #182436 !important;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2) !important;
        display: none;
        border-radius: 0 !important;
        z-index: 9999 !important;
        margin: 0 !important;
        box-sizing: border-box !important;
    }

    .navigation>li.dropdown:hover .megamenu,
    .navigation>li.dropdown:hover>ul {
        display: block !important;
    }
}

/* ==================== RESPONSIVE FIXES ==================== */
/* Mobile Styles (Below 991px) */
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

    /* FIXED: Show mobile header icons on mobile */
    .mobile-header-icons {
        display: flex !important;
        position: static;
        transform: none;
    }

    .mobile-nav-toggler {
        display: flex !important;
    }

    /* FIXED: Hide desktop right elements on mobile */
    .header-right-elements {
        display: none !important;
    }

    /* FIXED: Position mobile menu below header */
    .mobile-floating-menu {
        top: auto;
    }

    /* FIXED: Hide elements that should only show on desktop */
    .show-on-desktop {
        display: none !important;
    }
    
    /* FIXED: Show elements that should only show on mobile */
    .show-on-mobile {
        display: flex !important;
    }

    /* Hide submenu by default */
    .mobile-navigation .navigation li.has-submenu .mobile-submenu {
        display: none !important;
        padding-left: 10px;
        margin-left: 5px;
        border-left: 2px solid #eee;
        /* optional, remove if not needed */
    }

    /* Show only when clicked */
    .mobile-navigation .navigation li.has-submenu.open .mobile-submenu {
        display: block !important;
    }

    /* Submenu link style */
    .mobile-navigation .navigation li.has-submenu .mobile-submenu li a {
        font-size: 13px;
        color: #555;
        padding: 8px 15px;
        background: transparent;
    }

    /* Hide the entire dropdown-btn div in all menus */
    .navigation li.dropdown .dropdown-btn,
    .mobile-navigation li.dropdown .dropdown-btn,
    .mobile-floating-menu .navigation li.dropdown .dropdown-btn,
    .sticky-header .navigation li.dropdown .dropdown-btn {
        display: none !important;
        visibility: hidden !important;
        width: 0 !important;
        height: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        font-size: 0 !important;
        opacity: 0 !important;
    }
    
    /* Also hide the span inside */
    .navigation li.dropdown .dropdown-btn span,
    .mobile-navigation li.dropdown .dropdown-btn span,
    .mobile-floating-menu .navigation li.dropdown .dropdown-btn span,
    .sticky-header .navigation li.dropdown .dropdown-btn span {
        display: none !important;
    }

}

/* Desktop Styles (992px and above) */
@media (min-width: 992px) {
    /* FIXED: Hide mobile header icons on desktop */
    .mobile-header-icons {
        display: none !important;
    }
    
    /* FIXED: Show desktop right elements on desktop */
    .header-right-elements {
        display: flex !important;
    }
    
    /* FIXED: Show desktop-only elements */
    .show-on-desktop {
        display: inline-block !important;
        margin-right: 15px;
        font-size: 18px !important;
        transition: color 0.3s ease;
    }
    
    /* FIXED: Hide mobile-only elements */
    .show-on-mobile {
        display: none !important;
    }
    
    .hide-on-desktop {
        display: none !important;
    }

    .show-on-desktop:hover {
        color: #ff6600;
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

/* ==================== RESPONSIVE FIXES FOR 991px - 1415px ==================== */
@media (min-width: 992px) and (max-width: 1415px) {
    /* Header container fixes */
    .header-upper {
        padding: 5px 30px !important;
    }
    
    .sticky-header {
        padding: 5px 30px !important;
    }
    
    /* Logo optimization */
    .logo img {
        max-height: 50px !important;
        max-width: 160px !important;
    }
    
    /* Menu area optimization */
    .header-upper .menu-area {
        flex: 1;
        min-width: 0;
        margin: 0 15px;
    }
    
    .menu-area .navigation {
        display: flex !important;
        flex-wrap: nowrap !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        gap: 5px;
    }
    
    /* Individual menu items */
    .navigation > li {
        flex-shrink: 1;
        min-width: auto !important;
        max-width: 130px !important;
    }
    
    .navigation > li > a {
        font-size: 13px !important;
        padding: 10px 6px !important;
        white-space: nowrap !important;
        text-align: center !important;
        display: block;
    }
    
    /* Apply Now button special treatment */
    .navigation > li:last-child > a {
        padding: 8px 10px !important;
        font-size: 12px !important;
        /* background: #3B308B; */
        color: white !important;
        border-radius: 5px;
        margin-left: 5px;
    }
    
    /* Right side elements optimization */
    .header-right-elements {
        gap: 8px;
        flex-shrink: 0;
    }
    
    .header-right-elements .show-on-desktop {
        margin-right: 10px;
        font-size: 16px !important;
    }
    
    .header-right-elements .btn {
        padding: 8px 12px !important;
        font-size: 11px !important;
        white-space: nowrap;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .phone-icon {
        width: 14px !important;
        height: 14px !important;
    }
    
    /* Mega menu positioning fix */
    .navigation > li.dropdown .megamenu,
    .navigation > li.dropdown > ul {
        left: 50% !important;
        transform: translateX(-50%) !important;
        min-width: 100vw !important;
    }
    
    /* Reduce mega menu padding */
    .megamenu-inner-wrapper {
        padding: 0 20px !important;
    }
    
    /* Compact mega menu layout */
    .megamenu .row.clearfix {
        margin: 0 -10px !important;
    }
    
    .megamenu .col-lg-6.column,
    .megamenu .col-lg-3.column {
        padding: 0 10px !important;
    }
    
    /* Compact service items */
    a.service-item {
        padding: 8px 10px !important;
    }
    
    a.service-item img {
        width: 32px !important;
        height: 32px !important;
        margin-right: 10px !important;
    }
    
    a.service-item span {
        font-size: 14px !important;
    }
    
    a.service-item p {
        font-size: 11px !important;
        line-height: 1.3 !important;
    }
    
    /* Compact location items */
    a.location-item {
        padding: 8px 10px !important;
    }
    
    a.location-item img {
        width: 36px !important;
        height: 36px !important;
        margin-right: 10px !important;
    }
    
    a.location-item span {
        font-size: 14px !important;
    }
    
    /* Mega menu header */
    .megamenu-header {
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 20px;
    }
    
    .megamenu-header p {
        font-size: 14px !important;
    }
    
    .megamenu-header .btn {
        padding: 8px 16px !important;
        font-size: 13px !important;
    }
    
    /* Dropdown arrow position fix */
    .navigation > li.dropdown > a {
        padding-right: 15px !important;
    }
    
    .navigation > li.dropdown > a::after {
        right: 3px !important;
        font-size: 12px !important;
    }
}

/* ==================== ADDITIONAL RESPONSIVE FIXES ==================== */
@media (max-width: 1199px) and (min-width: 992px) {
    /* Further optimization for medium desktop */
    .navigation > li {
        max-width: 110px !important;
    }
    
    .navigation > li > a {
        font-size: 12px !important;
        padding: 10px 4px !important;
    }
    
    .navigation > li:last-child > a {
        padding: 8px 8px !important;
        font-size: 11px !important;
    }
    
    .header-right-elements .btn {
        padding: 6px 10px !important;
        font-size: 10px !important;
    }
    
    .phone-icon {
        width: 12px !important;
        height: 12px !important;
    }
}

/* Very small screens */
@media (max-width: 480px) {
    .mobile-navigation .navigation li a {
        padding: 4px 20px;
    }

    .mobile-navigation .navigation li.dropdown > a {
        padding-right: 45px;
    }

    .contact-info {
        margin: 15px 10px 0;
        padding: 20px;
    }
}

/* Hide mega menus on mobile */
@media (max-width: 991px) {
    .navigation li.has-submenu .megamenu {
        display: none !important;
    }

    .mobile-navigation .navigation li.has-submenu .mobile-submenu {
        display: none;
        list-style: none;
        padding-left: 12px;
        margin-left: 8px;
        border-left: 2px solid #eee;
    }

    .mobile-navigation .navigation li.has-submenu.open .mobile-submenu {
        display: block;
    }

    .mobile-navigation .navigation li.has-submenu .mobile-submenu li a {
        padding: 12px 15px;
        font-size: 14px;
        font-weight: normal;
        color: #333;
        background-color: #FFFFFF;
    }

    .mobile-navigation .navigation li.has-submenu .mobile-submenu li a:hover {
        background: #f8f9fa;
        color: black;
        padding: 12px 15px;
    }
}

@media (min-width: 992px) {
    .navigation li.has-submenu .mobile-submenu {
        display: none !important;
    }
}

/* ICON left, text stacked right */
.navigation .megamenu a.service-item {
    display: grid !important;
    grid-template-columns: 48px auto !important;
    grid-template-rows: auto auto !important;
    column-gap: 15px !important;
    align-items: start !important;
}

/* Icon stays left spanning both lines */
.navigation .megamenu a.service-item img {
    grid-column: 1 !important;
    grid-row: 1 / span 2 !important;
}

/* Title */
.navigation .megamenu a.service-item span {
    grid-column: 2 !important;
    grid-row: 1 !important;
}

/* Description under title */
.navigation .megamenu a.service-item p {
    grid-column: 2 !important;
    grid-row: 2 !important;
    margin-top: 4px !important;
}

/* Sticky header outer box fix */
.sticky-header .outer-box {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    width: 100% !important;
}

/* Make sure sticky header has same structure as main header */
.sticky-header .logo-box {
    flex-shrink: 0 !important;
}

.sticky-header .menu-area {
    flex: 1 !important;
    display: flex !important;
    justify-content: center !important;
    min-width: 0 !important;
}

.sticky-header .header-right-elements {
    display: flex !important;
    align-items: center !important;
    gap: 15px !important;
    flex-shrink: 0 !important;
}
</style>

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
            
            // Remove HTML angle icons from mobile menu
            const mobileDropdownLinks = mobileMenuContainer.querySelectorAll('li.dropdown > a');
            mobileDropdownLinks.forEach(link => {
                // Find and remove any <i> or <span> elements with angle classes
                const angleIcons = link.querySelectorAll('i.fas.fa-angle-down, i[class*="angle"], span.fas.fa-angle-down');
                angleIcons.forEach(icon => {
                    icon.remove();
                });
            });
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
                    if (nextEl && (nextEl.tagName === 'UL' || nextEl.classList.contains('megamenu'))) {
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