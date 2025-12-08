@extends('frontend.layouts.master')

@section('title', 'YES Education - Event Details')

@section('meta')
<meta name="description"
    content="Learn more about North Bengal — our mission, our values, and how we deliver fresh, quality products with reliable home delivery service.">
<meta name="keywords" content="North Bengal, about us, dairy products, home delivery, quality food, Bangladesh">
<meta property="og:title" content="About North Bengal - Fresh Quality Delivered">
<meta property="og:description"
    content="North Bengal is dedicated to delivering fresh, high-quality products across Bangladesh. Discover who we are and what drives us.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/about_img_02.png') }}">
<meta property="og:type" content="website">
@endsection

@section('content')

<x-breadcrumb title="Global office " />


<!-- ================= CUSTOM CSS ================= -->
<style>
    /* Card & Button Styles */
    .rounded-xl { border-radius: 1rem; }
    .filter-box { border-radius: .75rem; }
    .office-card { 
        border-bottom: 6px solid #1D3564; 
        transition: all 0.3s ease;
    }
    .office-card:hover { 
        background: #f8f9fa; 
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .office-gradient-btn {
        background: linear-gradient(94.18deg, #1D3564 0%, #1D3564 100%);
        color: #fff;
        font-weight: 500;
        padding: 0.45rem 1.2rem;
        border-radius: 0.5rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .office-gradient-btn:hover {
        opacity: 0.9;
    }

    /* Sidebar */
    .filter-box h6 { font-size: 1rem; }
    .form-check-input { cursor: pointer; }

    /* Icons in cards */
    .office-card i {
        font-size: 1.2rem;
        width: 28px; 
        text-align: center;
    }
    .rotated-phone {
        display: inline-block;
        transform: rotate(-270deg);
        color: #6c757d;
    }
    .office-card span {
        font-size: 0.95rem;
    }

    /* Search input */
    .search-wrapper .input-group-text {
        background: #fff;
        border-end: 0;
    }
    .search-wrapper input {
        border-start: 0;
    }

    /* Pagination */
    .pagination-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    .pagination-gradient-active {
        background: linear-gradient(94.18deg, #1D3564 0%, #1D3564 100%);
        color: #fff !important;
        box-shadow: 0 0 10px rgba(0,0,0,0.15);
        transform: scale(1.1);
    }

    .text-primary-yes{
        color : #3B308B;
    }
    
</style>

<!-- ======================= PAGE WRAPPER ======================= -->
<div class="container bg-white border rounded-3xl p-4">

    <!-- TITLE -->
    <div class="text-center py-4">
        <h2 class="fw-semibold fs-2 text-primary-yes" >Find Your Local AHZ Office</h2>
        <p class="mt-2 text-secondary">
            AHZ Associates is here to help you study in the UK. Visit our office locations page
            to find a branch near you and connect with our experts. Get personalized support and start
            your UK education journey today.
        </p>
    </div>

    <div class="row">

        <!-- SIDEBAR FILTERS -->
<div class="col-lg-3 mb-4">
    <div class="p-4 shadow filter-box bg-white">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-semibold mb-0">Filters</h5>
            <button class="btn btn-link p-0 text-primary-yes">Reset</button>
        </div>

        <!-- Countries Filter with Toggle -->
        <div class="mb-3">
            <div class="border rounded p-3">

                <!-- Toggle Header -->
                <div class="d-flex justify-content-between align-items-center" 
                     data-bs-toggle="collapse" 
                     data-bs-target="#countriesCollapse" 
                     aria-expanded="true" 
                     style="cursor: pointer;">
                    <h6 class="fw-semibold mb-0">Countries</h6>
                    <i class="fas fa-chevron-up" id="toggleIcon"></i>
                </div>

                <!-- Collapsible List -->
                <div class="collapse show mt-2" id="countriesCollapse">
                    <ul class="list-unstyled m-0 p-0 ps-5 pe-3"> <!-- added padding-left & padding-right -->
                        <li class="mb-2">
                            <label class="d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox">
                                United Kingdom
                            </label>
                        </li>
                        <li class="mb-2">
                            <label class="d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox">
                                Bangladesh
                            </label>
                        </li>
                        <li class="mb-2">
                            <label class="d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox">
                                Pakistan
                            </label>
                        </li>
                        <li class="mb-2">
                            <label class="d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox">
                                India
                            </label>
                        </li>
                        <li class="mb-2">
                            <label class="d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox">
                                Sri Lanka
                            </label>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
    const collapseElement = document.getElementById('countriesCollapse');
    const toggleIcon = document.getElementById('toggleIcon');

    collapseElement.addEventListener('show.bs.collapse', () => {
        toggleIcon.classList.remove('fa-chevron-down');
        toggleIcon.classList.add('fa-chevron-up');
    });

    collapseElement.addEventListener('hide.bs.collapse', () => {
        toggleIcon.classList.remove('fa-chevron-up');
        toggleIcon.classList.add('fa-chevron-down');
    });
</script>


        <!-- MAIN CONTENT -->
        <div class="col-lg-9">

            <!-- SEARCH BAR -->
            <form class="mb-4 search-wrapper">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="search" class="form-control py-3" placeholder="Search Offices">
                    <button class="btn text-white px-4" type="submit"
                        style="background: linear-gradient(94.18deg, #00216E 0%, #1D3564 100%);">
                        Search
                    </button>
                </div>
            </form>

            <!-- RESULTS TITLE -->
            <div class="mb-4">
                <h3 class="fw-semibold text-primary-yes" >
                    Available Offices
                    <span class="fw-normal fs-6 text-secondary">(62 Results)</span>
                </h3>
            </div>

            <!-- OFFICE CARD 1 -->
            <div class="office-card shadow-lg rounded-xl p-4 mb-4 bg-white">
                <h4 class="fw-semibold mb-1">AHZ London Office</h4>
                <p class="text-secondary mb-3">London, United Kingdom</p>
                <div class="mt-2">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-envelope text-muted me-2"></i>
                        <span class="fw-medium text-dark">&nbsp; info@yesedu.co.uk</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-phone text-muted me-2 rotated-phone"></i>
                        <span class="fw-medium text-dark">+44 44 4444 4444</span>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/global-offices/united-kingdom/london" class="office-gradient-btn">View Office</a>
                </div>
            </div>

            <!-- OFFICE CARD 2 -->
            <div class="office-card shadow-lg rounded-xl p-4 mb-4 bg-white">
                <h4 class="fw-semibold mb-1">AHZ Nigeria Headquarter</h4>
                <p class="text-secondary mb-3">Lagos, Nigeria</p>
                <div class="mt-2">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-envelope text-muted me-2"></i>
                        <span class="fw-medium text-dark">lagosmain@yesedu.co.uk</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-phone text-muted me-2 rotated-phone"></i>
                        <span class="fw-medium text-dark">+555 555 555 5555</span>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/global-offices/nigeria/lagos-office" class="office-gradient-btn">View Office</a>
                </div>
            </div>

            <!-- PAGINATION -->
            <div class="py-4 d-flex justify-content-center">
                <nav>
                    <ul class="pagination gap-2">
                        <li class="page-item disabled">
                            <button class="btn pagination-circle bg-light opacity-50">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                        </li>
                        <li><button class="btn pagination-circle pagination-gradient-active">1</button></li>
                        <li><button class="btn pagination-circle bg-light">2</button></li>
                        <li><button class="btn pagination-circle bg-light">3</button></li>
                        <li><button class="btn pagination-circle bg-light">4</button></li>
                        <li><button class="btn pagination-circle bg-light">5</button></li>
                        <li class="page-item">
                            <button class="btn pagination-circle bg-light">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>


<!-- sidebar-page-container end -->

<!-- Student Reviews Section -->
<x-student-reviews />

<x-student-subscription />
@endsection