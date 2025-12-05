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
<!--Page Title-->
@php
$slug = 'Study In the UK';
@endphp
<x-breadcrumb :title="$slug" image="{{ asset('frontend/assets/images/background/page-title-6.jpg') }}" />
<!--End Page Title-->

<style>
.study-card {
    border-bottom: 8px solid #1D3564 !important;
    overflow: visible !important;
}
</style>

<section class="py-5 bg-white">
    <div class="container">

        <!-- Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold " style="color:#1D3564;">Study in the UK</h2>
            <p class="fs-5">Discover a world-class education in the UK.</p>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6 mb-4" >
                <a href="{{ route('studyInUk', 'Why Choose UK') }}" class="text-decoration-none" >
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/why-the-uk-study.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">Why Study in the UK?</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Discover why the UK is great for both education and culture.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('eventDetails', 'What Can I Study?') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/what-can-i-study.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">What can I study</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Art, science, philosophy... Explore your options to find your passion.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('studyInUk', 'January Intake') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/january-intake.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">January Intake</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Find out all you need to know about courses starting in January.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('studyInUk', 'May Intake') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/may-intake.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">May Intake</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Find out all you need to know about courses starting in May.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('studyInUk', 'September Intake') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/september-intake.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">September Intake</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Find out all you need to know about courses starting in September.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('eventDetails', 'Cost of Study') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/cost-icon.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">Cost of study</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Get insights on UK study expenses, including tuition and other costs.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 7 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('eventDetails', 'UCAS') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/ucas-study.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">UCAS</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                Get guidance on using UCAS to manage your university applications.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD 8 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('eventDetails', 'Students Essential') }}" class="text-decoration-none">
                    <div class="study-card card shadow-lg border-0 rounded-3 h-100" 
                         style="border-bottom: 8px solid #1D3564;">

                        <img src="{{ asset('frontend/assets/images/study_in_uk/essentials.original.webp')}}"
                             class="card-img-top" 
                             style="height:219px; object-fit:contain; background:#fff;">

                        <div class="card-body">
                            <h3 class="fs-5 fw-semibold mb-2">Student Essentials</h3>
                            <p class="text-muted" style="max-height:48px; overflow:hidden;">
                                All the vital information you'll need to know about studying in the UK.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>




<x-student-reviews />

<x-student-subscription />
@endsection