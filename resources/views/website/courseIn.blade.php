@extends('frontend.layouts.master')

@section('title', 'YES Education - Courses')

@section('meta')
<meta name="description"
    content="Explore top UK universities with details about programs, rankings, campus life, and accommodation.">
<meta name="keywords" content="UK universities, higher education UK, study in UK, university rankings, UK courses">
<meta property="og:title" content="UK Universities Search - YES Education">
<meta property="og:description"
    content="Find the perfect UK university with comprehensive search and filtering options.">
<meta property="og:image" content="{{ asset('frontend/assets/img/yes-education/uk-universities.jpg') }}">
<meta property="og:type" content="website">
@endsection

@section('content')

<!-- PAGE TITLE -->
@php
$slug = 'Courses';
@endphp
<x-breadcrumb :title="$slug" image="{{ asset('frontend/assets/images/background/page-title-3.jpg')}}" />
<!-- END PAGE TITLE -->

<!-- course content start here  -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-lg-4 col-md-12 col-xl-3">
                <div class="service-sidebar">

                    <!-- Search -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <form id="searchForm" method="GET" action="{{ route('search') }}">
                                <input type="hidden" name="action" value="location-data">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="location"
                                        placeholder="Search by location..." value="{{ $searchName ?? '' }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="btn-group mb-3 d-flex">
                                <button type="button" class="btn btn-primary w-50"><i class="fas fa-filter"></i>
                                    Filters</button>
                                <button type="button" class="btn btn-outline-secondary w-50"><i class="fas fa-sort"></i>
                                    Sort</button>
                            </div>

                            @if(!empty($searchName))
                            <div>
                                <span class="badge badge-primary p-2">
                                    {{ $searchName }}
                                    <a href="{{ route('search') }}" class="text-white ml-1">&times;</a>
                                </span>
                                <a href="{{ route('search') }}" class="btn btn-link btn-sm">Clear all filters</a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Filters Accordion -->
                    <div id="filters-accordion">
                        <x-filter-card title="University" id="University" :list="$universities ?? []" type="dynamic" />
                        <x-filter-card title="Faculty" id="Faculty"
                            :list="['Business and Management','Computing','Engineering','Law','Nursing and Midwifery']" />
                        <x-filter-card title="Study Level" id="StudyLevel"
                            :list="['Undergraduate','Masters','Foundation','Top-up Degree','PhD Doctorate']" />
                        <x-filter-card title="Location" id="Location"
                            :list="['Any Location','London','East of England','East Midlands','West Midlands','Scotland','Wales']" />
                    </div>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="col-lg-8 col-md-12 col-xl-9 content-side">
                <div class="coaching-details-content">
                    <!-- Header Section -->
                    <div class="content-style-one mb-5">
                        <h2 class="fw-semibold text-center mb-4" style="color: #1D3564; font-size: 2.5rem;">
                            Explore UK University Courses
                        </h2>
                        <p class="text-center mx-auto mb-5" style="max-width: 800px; font-size: 1.1rem;">
                            Access an extensive range of courses offered by UK institutions. Select by university, faculties, intake, location to find the course that aligns with your academic and career objectives.
                        </p>

                        <!-- Search Bar -->
                        <div class="mb-5">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-white border-2 border-end-0" style="border-color: #3F537B;">
                                    <i class="fas fa-search" style="color: #3F537B;"></i>
                                </span>
                                <input type="search" class="form-control border-2 border-start-0" placeholder="Search Courses" style="border-color: #3F537B;">
                            </div>
                        </div>

                        <!-- Popular Faculties -->
                        <div class="mb-5">
                            <h5 class="fw-semibold mb-2" style="color: #000000; font-size: 1.125rem;">Popular Faculties:</h5>
                            <p class="mb-4">Choose your faculty to begin your study journey in the UK and explore top universities.</p>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                @foreach(['Business and Management','Computing','Engineering','Law','Nursing and Midwifery','Allied Health','Medicine and Dentistry','Psychology','Medical Sciences','Architecture'] as $faculty)
                                <button class="btn btn-outline-secondary border rounded-pill px-3 py-2 hover-effect">
                                    {{ $faculty }}
                                </button>
                                @endforeach
                            </div>
                        </div>

                        <!-- Results Header -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="h4 fw-semibold mb-0" style="color: #1D3564;">
                                Available Courses
                                <span class="text-muted fw-normal ms-3">(0 results found)</span>
                            </h3>
                            @if(!empty($searchName))
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary me-2">{{ $searchName }}</span>
                                <a href="{{ route('search') }}" class="btn-close btn-close-sm" aria-label="Remove filter"></a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Course Cards -->
                    <div class="row g-4">
                        @if(isset($courses) && count($courses) > 0)
                            @foreach($courses as $course)
                            <div class="col-12">
                                <div class="card border-0 shadow-lg university-hover h-100">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ $course->image_url ?? 'https://via.placeholder.com/300x200' }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $course->title }}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column py-4">
                                                <h5 class="card-title fw-semibold mb-2" style="color: #00216E;">
                                                    {{ $course->title }}
                                                </h5>
                                                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                                                    <span class="text-danger fw-medium">{{ $course->university }}</span>
                                                    <div class="vr"></div>
                                                    <div class="d-flex align-items-center gap-1 flex-wrap">
                                                        <i class="fas fa-map-marker-alt text-muted"></i>
                                                        <span class="text-dark">{{ $course->location }}</span>
                                                    </div>
                                                </div>
                                                <div class="mt-auto">
                                                    <div class="row align-items-center g-2">
                                                        <div class="col-12 col-md-8 d-flex flex-wrap gap-2">
                                                            <div class="bg-light rounded p-3 flex-grow-1" style="background-color: #EDF2FE !important; min-width: 120px;">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <i class="fas fa-graduation-cap" style="color: #00216E;"></i>
                                                                    <small class="fw-semibold" style="color: #00216E;">Study Level</small>
                                                                </div>
                                                                <p class="mb-0 text-muted small">{{ $course->study_level }}</p>
                                                            </div>
                                                            <div class="bg-light rounded p-3 flex-grow-1" style="background-color: #EDF2FE !important; min-width: 120px;">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <i class="fas fa-clock" style="color: #00216E;"></i>
                                                                    <small class="fw-semibold" style="color: #00216E;">Duration</small>
                                                                </div>
                                                                <p class="mb-0 text-muted small">{{ $course->duration }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4 text-md-end mt-2 mt-md-0">
                                                            <a href="{{ $course->url ?? '#' }}" class="btn btn-outline-primary">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>


                    <!-- course html design is start  here  -->
                    <div class="row g-4">
                        @if(isset($courses) && count($courses) > 0)
                            @foreach($courses as $course)
                            <div class="col-12">
                                <div class="card border-0 shadow-lg university-hover h-100">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ $course->image_url ?? 'https://via.placeholder.com/300x200' }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $course->title }}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column py-4">
                                                <h5 class="card-title fw-semibold mb-2" style="color: #00216E;">
                                                    {{ $course->title }}
                                                </h5>
                                                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                                                    <span class="text-danger fw-medium">{{ $course->university }}</span>
                                                    <div class="vr"></div>
                                                    <div class="d-flex align-items-center gap-1 flex-wrap">
                                                        <i class="fas fa-map-marker-alt text-muted"></i>
                                                        <span class="text-dark">{{ $course->location }}</span>
                                                    </div>
                                                </div>
                                                <div class="mt-auto">
                                                    <div class="row align-items-center g-2">
                                                        <div class="col-12 col-md-8 d-flex flex-wrap gap-2">
                                                            <div class="bg-light rounded p-3 flex-grow-1" style="background-color: #EDF2FE !important; min-width: 120px;">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <i class="fas fa-graduation-cap" style="color: #00216E;"></i>
                                                                    <small class="fw-semibold" style="color: #00216E;">Study Level</small>
                                                                </div>
                                                                <p class="mb-0 text-muted small">{{ $course->study_level }}</p>
                                                            </div>
                                                            <div class="bg-light rounded p-3 flex-grow-1" style="background-color: #EDF2FE !important; min-width: 120px;">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <i class="fas fa-clock" style="color: #00216E;"></i>
                                                                    <small class="fw-semibold" style="color: #00216E;">Duration</small>
                                                                </div>
                                                                <p class="mb-0 text-muted small">{{ $course->duration }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4 text-md-end mt-2 mt-md-0">
                                                            <a href="{{ $course->url ?? '#' }}" class="btn btn-outline-primary">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- course html design is end here  -->

                    <!-- Pagination -->
                    @if(isset($paginator) && $paginator->hasPages())
                    <nav aria-label="Page navigation" class="mt-5">
                        <ul class="pagination justify-content-center flex-wrap">
                            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link rounded-circle mx-1" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                                    <a class="page-link rounded-circle mx-1" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach
                            <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link rounded-circle mx-1" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.object-fit-cover {
    object-fit: cover;
}

.hover-effect:hover {
    background-color: rgba(29, 53, 100, 0.1) !important;
    border-color: rgba(29, 53, 100, 0.8) !important;
    color: #1D3564 !important;
}

.page-link.rounded-circle {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 2px;
    background-color: #E6ECF5;
    border-color: #E6ECF5;
    color: #1D3564;
}

.page-item.active .page-link.rounded-circle {
    background: linear-gradient(135deg, #1D3564, #4A6DB0);
    border-color: #1D3564;
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 8px rgba(29, 53, 100, 0.3);
}

.page-link.rounded-circle:hover:not(.active) {
    background-color: #D1DCEE;
    transform: scale(1.05);
}

@media(max-width: 767px){
    .card-body h5.card-title {
        font-size: 1rem;
    }
    .col-md-4, .col-md-8 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .row.align-items-center.g-2 {
        flex-direction: column;
    }
    .col-12.col-md-4.text-md-end {
        text-align: left;
        margin-top: 10px;
    }
}
</style>

<x-student-reviews />
<x-student-subscription />

@endsection
