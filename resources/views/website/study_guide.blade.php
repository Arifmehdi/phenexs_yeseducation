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
    /* Card Styles */
    .rounded-2xl { border-radius: 1rem; }
    .shadow-2xl { box-shadow: 0 25px 50px rgba(0,0,0,0.1); }

    .office-gradient-bg {
        background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 50%, #EC4899 100%);
        opacity: 0.2;
        transition: opacity 0.5s ease;
    }
    .office-gradient-bg:hover { opacity: 0.4; }

    .office-card {
        border-radius: 1rem;
        background: #fff;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border: 1px solid #e5e7eb;
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .office-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .office-card h3 { font-size: 1.8rem; margin-bottom: 1rem; }
    .office-card p { color: #6b7280; margin-bottom: 1.2rem; }

    .office-gradient-btn {
        background: linear-gradient(94.18deg, #00216E 0%, #1D3564 100%);
        color: #fff;
        font-weight: 500;
        padding: 0.7rem 1.8rem;
        border-radius: 0.5rem;
        text-decoration: none;
        display: inline-block;
        transition: opacity 0.3s ease;
    }
    .office-gradient-btn:hover { opacity: 0.9; }

    /* Grid layout for image + content */
    .office-feature {
        display: flex;
        align-items: stretch; /* make equal height */
        gap: 2.5rem;
        min-height: 40rem; /* larger height */
    }
    .office-feature-img {
        flex: 1.3; /* make image bigger */
        border-radius: 1rem;
        overflow: hidden;
        position: relative;
        /* height: 100%; */
    }
    .office-feature-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 1rem;
    }
    .office-feature-content {
        flex: 1.2; /* form larger */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 992px) {
        .office-feature { flex-direction: column; min-height: auto; }
        .office-feature-img, .office-feature-content { width: 100%; }
    }
</style>

<!-- ================= FEATURE + FORM SECTION ================= -->
<div class="container my-5">
    <div class="office-feature">
        <!-- Image Section -->
        <div class="office-feature-img shadow-2xl">
            <div class="office-gradient-bg position-absolute inset-0 w-100 h-100 rounded-2xl"></div>
            <img src="https://mie-global-te43fd.s3.amazonaws.com/static/images/study-guide.original.jpg"
                 alt="Study Guide">
        </div>

        <!-- Content + Form Section -->
        <div class="office-feature-content">
            <div class="office-card mb-4 text-center">
                <h3>Your Ultimate Guide to Study in the UK</h3>
                <p>Unlock expert insights. Fill in your details to download the AHZ Guide PDF instantly.</p>
            </div>

            <form class="office-card">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your first name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your last name">
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="your.email@example.com">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" placeholder="+44 123 456 7890">
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Desired Course Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your desired course title">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Current Qualification <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your current qualification">
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Country of Residence</label>
                    <select class="form-select">
                        <option selected>Please Select</option>
                        <option>United Kingdom</option>
                        <option>Bangladesh</option>
                        <option>India</option>
                        <option>Pakistan</option>
                        <option>Sri Lanka</option>
                    </select>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="office-gradient-btn">Download Guide</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ================= OFFICE LISTING ================= -->
<!-- <div class="container my-5">
    <h2 class="text-center mb-4">Find Your Local AHZ Office</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="office-card">
                <h4>AHZ London Office</h4>
                <p>London, United Kingdom</p>
                <div class="d-flex align-items-center mb-2"><i class="fas fa-envelope"></i> info@yesedu.co.uk</div>
                <div class="d-flex align-items-center mb-2"><i class="fas fa-phone rotated-phone"></i> +44 44 4444 4444</div>
                <div class="text-center mt-3">
                    <a href="#" class="office-gradient-btn">View Office</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="office-card">
                <h4>AHZ Nigeria Headquarter</h4>
                <p>Lagos, Nigeria</p>
                <div class="d-flex align-items-center mb-2"><i class="fas fa-envelope"></i> lagosmain@yesedu.co.uk</div>
                <div class="d-flex align-items-center mb-2"><i class="fas fa-phone rotated-phone"></i> +555 555 555 5555</div>
                <div class="text-center mt-3">
                    <a href="#" class="office-gradient-btn">View Office</a>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- sidebar-page-container end -->

<!-- Student Reviews Section -->
<x-student-reviews />

<x-student-subscription />
@endsection