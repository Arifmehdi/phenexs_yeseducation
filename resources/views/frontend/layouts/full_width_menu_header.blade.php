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
                                        <div class="megamenu-header">
                                            <p>Explore a wide range of courses to enhance your knowledge.</p>
                                            <a href="#" class="btn btn-primary" style="color: #ffffff !important; background: linear-gradient(90deg, #171F67, #D10D2B); border: none; padding: 12px 30px; border-radius: 10px; text-decoration: none;">
                                                View All <i class="fas fa-external-link-alt" style="color: #ffffff !important;"></i>
                                            </a>
                                        </div>
                                        <div class="row clearfix">
                                            @foreach($coursa->chunk(ceil($coursa->count()/3)) as $chunk)
                                                <div class="col-lg-4 column">
                                                    <ul>
                                                        @foreach($chunk as $course)
                                                            <li>
                                                                <a href="{{ route('courseDetails', $course->slug) }}">
                                                                    <i class="fas fa-book"></i> {{ $course->title }}
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
                                            <li><a href="{{ route('serviceDetails', $service->slug) }}">{{ $service->title }}</a></li>
                                        @empty
                                            <li><a href="#">No Services Available</a></li>
                                        @endforelse
                                    </ul>
                                </li>
                                <li class="dropdown {{ request()->routeIs('destination') ? 'active current' : '' }}">
                                    <a href="{{ route('destination') }}">Destination</a>
                                    <ul>
                                        @foreach($destinate as $des)
                                            <li><a href="{{ route('destinationDetails', $des->slug) }}">{{ $des->category->name }}</a></li>
                                        @endforeach
                                    </ul>
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

                                <li class="hide-on-mobile">
                                    <a href="#" class="text-dark show-on-desktop"><i class="fas fa-globe"></i></a>
                                    <button class="btn btn-danger">Free Consultation</button>
                                </li>
                            </ul>
                        </div>
                    </nav>
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
<style>
    /* Menu links */
    .main-header .menu-area .navigation li a,
    .sticky-header .main-menu .navigation li a {
        color: #333 !important;
        transition: color 0.3s ease;
    }

    /* Original header underline */
    .main-header .menu-area .navigation>li.current>a::before { /* Use ::before to avoid conflict */
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 3px;
        background: #ff6600;
        border-radius: 2px;
    }
    .main-header .menu-area .navigation>li.current>a::after { content: none; } /* Disable old rule */

    /* Sticky header remove red underline */
    .sticky-header .navigation>li.current>a::after {
        content: none !important;
    }
    .sticky-header .navigation li a,
    .sticky-header .navigation li a:hover,
    .sticky-header .navigation li.dropdown:hover > a {
        color: #333 !important;
        background: transparent !important;
    }

    /* Header padding */
    .header-upper {
        padding: 5px 100px; /* Apply padding directly to header-upper */
        background: #ffffff;
    }
    .header-upper .container-fluid {
        padding-left: 0 !important; /* Remove default container-fluid padding */
        padding-right: 0 !important; /* Remove default container-fluid padding */
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
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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
    .user-menu { position: relative; }
    .user-menu>a { display: flex; align-items: center; gap: 5px; }
    .user-menu .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background: #fff;
        border: 1px solid #ddd;
        min-width: 200px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        list-style: none;
        padding: 5px 0;
        z-index: 999;
    }
    .user-menu:hover .dropdown-menu { display: block; }
    .user-menu .dropdown-menu li { padding: 8px 15px; }
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
    .user-menu .dropdown-menu li button:hover { background-color: #f0f0f0; color: #000 !important; }

    /* Mobile Header Icons container */
    .mobile-header-icons {
        display: none; /* Hidden by default, enabled in media query */
        align-items: center;
        gap: 15px; /* Space between icons */
    }

    /* Individual icons inside the container */
    .mobile-header-icons .header-icon a {
        font-size: 18px; /* Reduce icon size */
        color: #333;
        padding: 5px;
    }

    .mobile-header-icons .header-icon a:hover {
        color: #ff6600;
    }

    /* Hamburger specific adjustments */
    .mobile-header-icons .mobile-nav-toggler {
        position: static; /* Remove absolute positioning */
        transform: none; /* Reset transform */
        width: 25px; /* Reduce width */
        height: 18px; /* Reduce height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        cursor: pointer;
    }
    
    .mobile-header-icons .mobile-nav-toggler .icon-bar {
        height: 2px; /* Thinner bars */
        background: #333 !important;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    /* Dropdown ULs for Services, Destination, etc. */
.navigation > li.dropdown > ul {
    position: absolute;
    left: 0; /* Align to the left edge of the viewport */
    width: 100vw; /* Span the full viewport width */
    padding: 40px 0; /* Vertical padding only, to match megamenu */
    background-color: #182436; /* Assuming same background as megamenu for consistency */
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    display: none; /* Hide by default */
    border-radius: 0 0 5px 5px;
    z-index: 9999;
    list-style: none; /* Remove bullet points */
    text-align: center; /* Center the items horizontally within the full width */
}

.navigation > li.dropdown:hover > ul {
    display: block; /* Show on hover */
}

.navigation > li.dropdown > ul > li {
    padding: 0; /* Remove any padding from the li itself */
    margin: 0; /* Remove any margin from the li itself */
}

.navigation > li.dropdown > ul > li > a {
    color: #ffffff; /* Example color for text inside */
    padding: 10px 15px; /* Add some padding to the links themselves */
    display: inline-block; /* Use inline-block to allow text-align: center on parent */
    transition: background-color 0.3s ease;
    min-width: 200px; /* Give a minimum width for readability if items are short */
}

.navigation > li.dropdown > ul > li > a:hover {
    background-color: rgba(255, 255, 255, 0.1); /* Light hover effect */
}
/* Mega Menu Styling - ALTERNATIVE FIX */
.navigation > li.dropdown .megamenu .row .column {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.navigation > li.dropdown .megamenu {
    position: absolute;
    top: 100%;
    left: 50%; /* Center relative to parent */
    transform: translateX(-50%); /* Shift left by half its width to truly center */
    width: 100vw; /* Take full viewport width */
    background-color: #182436;
    padding: 40px 0; /* Vertical padding only, no horizontal */
    box-sizing: border-box;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    display: none;
    border-radius: 0 0 5px 5px;
    z-index: 9999;
}



.navigation > li.dropdown:hover .megamenu {
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
        margin-right: 20px; /* Space between p tag and button */
    }
    .megamenu-header .btn {
        flex-shrink: 0;
        background: linear-gradient(90deg, #171F67, #D10D2B);
        border: none;
        color: #ffffff !important; /* White text color */
        padding: 10px 20px;
        border-radius: 5px;
    }
    .megamenu-header .btn .fas {
        margin-left: 10px;
        font-size: 14px;
        color: #ffffff !important; /* Explicitly set icon color to white */
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
        width: 25px; /* Align text */
        text-align: center;
        font-size: 20px; /* Increased icon size */
        color: #74C7F4; /* Icon color */
    }

    /* ==================== DESKTOP DROPDOWN ICONS (FORCED) ==================== */
    .main-header .navigation > li.dropdown > a,
    .sticky-header .navigation > li.dropdown > a {
        position: relative;
        padding-right: 20px;
    }
    .main-header .navigation > li.dropdown > a::after,
    .sticky-header .navigation > li.dropdown > a::after {
        font-family: 'Font Awesome 5 Free' !important;
        font-weight: 900 !important;
        content: '\f107' !important;
        position: absolute !important;
        right: 0 !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        transition: transform 0.3s ease !important;
        font-size: 14px !important;
        display: inline-block !important; /* Force it to display */
    }
    .main-header .navigation > li.dropdown:hover > a::after,
    .sticky-header .navigation > li.dropdown:hover > a::after {
        transform: translateY(-50%) rotate(180deg) !important;
    }

    /* ==================== MOBILE DROPDOWN ICONS (FORCED) ==================== */
    .mobile-navigation .navigation li.dropdown > a {
        position: relative;
        padding-right: 45px;
    }
    .mobile-navigation .navigation li.dropdown > a::after {
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
        display: inline-block !important; /* Force it to display */
    }
    .mobile-navigation .navigation li.dropdown.open > a::after {
        content: '−' !important;
        transform: translateY(-50%) !important;
        color: #ff6600 !important;
    }

    /* Hamburger button - STYLES MOVED TO .mobile-header-icons */

    /* ==================== MOBILE FLOATING MENU ==================== */
    .mobile-floating-menu {
        position: absolute; /* Changed from fixed */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 99998;
        pointer-events: none;
    }

    .mobile-floating-menu.active {
        pointer-events: auto;
    }

    /* Hide Backdrop - not needed for dropdown style */
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
        padding: 0 15px; /* Added horizontal padding */
        margin: 0;
    }

    .mobile-navigation .navigation {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-navigation .navigation > li {
        border: 1px solid #E5E7EB;
        border-radius: 5px;
        margin-bottom: 5px;
        overflow: hidden; /* Keep this to ensure 'a' tag background respects li's radius */
    }

    .mobile-navigation .navigation > li:last-child {
        margin-bottom: 0;
    }

    .mobile-navigation .navigation li a {
        display: block;
        padding: 12px 15px; /* Added horizontal padding */
        color: #333;
        text-decoration: none;
        font-weight: normal; /* Simpler font */
        font-size: 14px; /* Simpler font size */
        transition: background 0.2s ease, color 0.2s ease;
    }

    .mobile-navigation .navigation li a:hover {
        background: #f8f9fa;
        color: black; /* Changed to black */
    }

    .mobile-navigation .navigation li.current > a {
        color: black; /* Changed to black */
        background: #E5E7EB; /* Changed to requested color */
    }

    /* Submenu */
    .mobile-navigation .navigation li ul,
    .mobile-navigation .navigation li .megamenu {
        display: none;
        list-style: none;
        padding: 0;
        margin: 0;
        /* background: #f8f9fa; Removed background from parent ul */
        /* border-top: 1px solid #e9ecef; Removed border-top from parent ul */
    }

    .mobile-navigation .navigation li.dropdown.open > ul,
    .mobile-navigation .navigation li.dropdown.open > .megamenu {
        display: block;
    }

    .mobile-navigation .navigation li ul li a,
    .mobile-navigation .navigation li .megamenu li a {
        padding: 12px 15px; /* Unified with main menu */
        font-size: 14px;
        font-weight: normal;
        color: #333;
        background-color: #FFFFFF; /* Explicitly set as requested */
    }

    .mobile-navigation .navigation li ul li a:hover,
    .mobile-navigation .navigation li .megamenu li a:hover {
        background: #f8f9fa; /* Unified with main menu hover */
        color: black;
        padding: 12px 15px; /* Unified with base padding and main menu hover */
    }

    .mobile-navigation .megamenu .row {
        margin: 0;
    }

    .mobile-navigation .megamenu .col-lg-4 {
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

    /* Responsive */
    @media (max-width: 991px) {
        .header-upper .outer-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-upper {
            padding: 5px 0px !important; /* Apply padding directly to header-upper */
            background: #ffffff;
            }

        .header-upper .logo-box {
            float: none; /* remove float */
            position: static;
            transform: none;
            width: auto;
            text-align: left;
        }
        
        .main-header .logo img,
        .sticky-header .logo img {
            max-height: 50px; /* Smaller logo on mobile */
        }

        .main-header .menu-area { display: none !important; }
        
        .mobile-header-icons {
            display: flex !important;
            position: static;
            transform: none;
        }

        .mobile-nav-toggler {
            display: flex !important;
        }

        /* Position mobile menu below header */
        .mobile-floating-menu {
            top: auto;
        }
        
        .floating-menu-container {
            /* position: fixed; -- Removed to allow scrolling with page */
        }

        .hide-on-mobile {
            display: none !important;
        }
    }

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

                    margin-right: 15px; /* Increased space */

                    font-size: 28px !important; /* Further increased size */

                    transition: color 0.3s ease;

                }

        

                .show-on-desktop:hover {

                    color: #ff6600;

                }

        

                .navigation .hide-on-mobile {

                    display: flex;

                    align-items: center;

                }

        

                        .navigation .hide-on-mobile .btn {

        

                            font-weight: bold; /* Make button text bold */

        

                        }

        

                        

        

                        /* Flexbox for menu alignment */

        

                        .main-header .menu-area .navigation {

        

                            display: flex;

        

                            justify-content: center; /* Center the menu items */

        

                            align-items: center;

        

                            width: 100%;

        

                        }

        

                        .main-header .menu-area .navigation li a {

        

                            font-size: 14px; /* Decreased font size */

        

                        }

        

                        .main-header .menu-area .navigation li:last-child {

        

                            margin-left: auto; /* Push last item (button) to the right */

        

                        }

        

                    }

</style>

<!-- JS -->
<script>
        const mobileDropdownIcons = document.querySelectorAll('.mobile-navigation .navigation li.dropdown > a > span.fas.fa-angle-down');
mobileDropdownIcons.forEach(icon => icon.remove());
document.addEventListener("DOMContentLoaded", function(){



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
                    const faIconElement = link.querySelector('i[class*="fa-angle"], span[class*="fa-angle"]');
                    if (faIconElement) {
                        if (window.innerWidth <= 991) { // If it's a mobile device
                            faIconElement.style.display = 'none';
                        } else { // If it's a desktop device (shouldn't happen in mobileMenuContainer, but for completeness)
                            faIconElement.style.display = ''; // Reset display
                        }
                    }
                });
            };

            // Run on initial load
            hideMobileAngleIcon();

            // Run on window resize
            window.addEventListener('resize', hideMobileAngleIcon);

            // Also run after menu cloning (in case it's added later)
            // This part is already within the if (mobileMenuContainer) block, so it runs after cloning.
        }
    }

    // --- Sticky Header ---
    window.addEventListener('scroll', function(){
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