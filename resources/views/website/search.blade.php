@extends('frontend.layouts.master')

@section('title', 'YES Education - UK Universities')

@section('meta')
<meta name="description" content="Explore top UK universities with detailed information about programs, rankings, campus life, and accommodation options.">
<meta name="keywords" content="UK universities, higher education UK, study in UK, university rankings, UK courses">
<meta property="og:title" content="UK Universities Search - YES Education">
<meta property="og:description" content="Find the perfect UK university for your higher education journey with comprehensive search and filtering options.">
<meta property="og:image" content="{{ asset('frontend/assets/img/yes-education/uk-universities.jpg') }}">
<meta property="og:type" content="website">
@endsection

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title-3.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>UK Universities</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                <li>Universities</li>
                <li>UK Universities</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- UK Universities Search Section -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <!-- Search and Filter Controls -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <form id="searchForm" method="GET">
                                <input type="hidden" name="action" value="location-data">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="location" placeholder="Search by location..." value="{{ $searchName ?? '' }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="btn-group mb-3 d-flex" role="group">
                                <button type="button" class="btn btn-primary w-50"><i class="fas fa-filter"></i> Filters</button>
                                <button type="button" class="btn btn-outline-secondary w-50"><i class="fas fa-sort"></i> Sort</button>
                            </div>
                            @if(isset($searchName) && $searchName)
                            <div>
                                <span class="badge badge-primary p-2">{{ $searchName }} 
                                    <a href="#" class="close text-white ml-1" type="button">
                                        <span>&times;</span>
                                    </a>
                                </span>
                                <a href="#" class="btn btn-link btn-sm">Clear all filters</a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div id="filters-accordion">
                        <!-- University Filter -->
                        <div class="card mb-3">
                            <div class="card-header" id="headingUniversity">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left d-flex justify-content-between" data-toggle="collapse" data-target="#collapseUniversity" aria-expanded="true" aria-controls="collapseUniversity">
                                        University
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseUniversity" class="collapse show" aria-labelledby="headingUniversity" data-parent="#filters-accordion">
                                <div class="card-body">
                                    <input type="text" class="form-control mb-3" placeholder="Search University">
                                    <div style="max-height: 200px; overflow-y: auto;">
                                        @foreach($universities ?? [] as $university)
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="{{ Str::slug($university['name']) }}">
                                            <label class="custom-control-label" for="{{ Str::slug($university['name']) }}">{{ $university['name'] }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Faculty Filter -->
                        <div class="card mb-3">
                            <div class="card-header" id="headingFaculty">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseFaculty" aria-expanded="false" aria-controls="collapseFaculty">
                                        Faculty
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFaculty" class="collapse" aria-labelledby="headingFaculty" data-parent="#filters-accordion">
                                <div class="card-body">
                                    <input type="text" class="form-control mb-3" placeholder="Search Faculty">
                                    @foreach(['Business and Management', 'Computing', 'Engineering', 'Law', 'Nursing and Midwifery'] as $faculty)
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="{{ Str::slug($faculty) }}">
                                        <label class="custom-control-label" for="{{ Str::slug($faculty) }}">{{ $faculty }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Study Level Filter -->
                        <div class="card mb-3">
                            <div class="card-header" id="headingStudyLevel">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseStudyLevel" aria-expanded="false" aria-controls="collapseStudyLevel">
                                        Study Level
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseStudyLevel" class="collapse" aria-labelledby="headingStudyLevel" data-parent="#filters-accordion">
                                <div class="card-body">
                                    @foreach(['Undergraduate', 'Masters', 'Foundation', 'Top-up Degree', 'PhD Doctorate'] as $level)
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="{{ Str::slug($level) }}">
                                        <label class="custom-control-label" for="{{ Str::slug($level) }}">{{ $level }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Location Filter -->
                        <div class="card mb-3">
                            <div class="card-header" id="headingLocation">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseLocation" aria-expanded="false" aria-controls="collapseLocation">
                                        Location
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseLocation" class="collapse" aria-labelledby="headingLocation" data-parent="#filters-accordion">
                                <div class="card-body">
                                    @foreach(['Any Location', 'London', 'East of England', 'East Midlands', 'West Midlands', 'Scotland', 'Wales'] as $location)
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="{{ Str::slug($location) }}">
                                        <label class="custom-control-label" for="{{ Str::slug($location) }}">{{ $location }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="coaching-details-content">
                    <div class="content-style-one mb-6">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="h5 mb-0">
                                {{ count($universities ?? []) }} Results Found
                                @if(isset($searchName) && $searchName)
                                for "{{ $searchName }}"
                                @endif
                            </h3>
                            <div class="form-inline">
                                <label class="mr-2" for="sortBy">Sort by:</label>
                                <select class="custom-select" id="sortBy">
                                    <option selected>Relevance</option>
                                    <option>Name A-Z</option>
                                    <option>Ranking</option>
                                    <option>Location</option>
                                </select>
                            </div>
                        </div>

                        <!-- University Cards Grid -->
                        <div class="university-cards-grid">
                            @if(isset($universities) && count($universities) > 0)
                                @foreach(array_chunk($universities, 2) as $chunk)
                                <div class="row">
                                    @foreach($chunk as $university)
                                    <div class="col-md-6 mb-4">
                                        <a href="{{ $university['web_pages'][0] ?? '#' }}" target="_blank" class="card-link-wrapper">
                                            <div class="card university-card shadow-sm border-0 rounded-lg overflow-hidden h-100">
                                                <div class="university-card-top-bar bg-gradient-primary"></div>
                                                <div class="card-body p-4">
                                                    <div class="d-flex justify-content-center mb-3">
                                                        <div class="university-logo-container">
                                                            <img alt="{{ $university['name'] }} logo" class="img-fluid rounded shadow-sm" 
                                                                 src="https://via.placeholder.com/120x60/1D3564/FFFFFF?text={{ substr(str_replace([' ', ','], '', $university['name']), 0, 2) }}" 
                                                                 style="max-width: 120px; max-height: 60px; object-fit: contain;">
                                                        </div>
                                                    </div>
                                                    <div class="text-center mb-3">
                                                        <h4 class="card-title h5 mb-1 text-dark">{{ $university['name'] }}</h4>
                                                        <p class="card-subtitle text-muted small d-flex align-items-center justify-content-center">
                                                            <i class="fas fa-map-marker-alt text-primary mr-1"></i>
                                                            {{ $university['state-province'] ? $university['state-province'] . ', ' : '' }}{{ $university['country'] }}
                                                        </p>
                                                        <div class="card-divider mx-auto my-2"></div>
                                                    </div>
                                                    <p class="card-text text-muted small mb-3 description-clamp">
                                                        {{ $university['name'] }} is a prestigious university located in {{ $university['state-province'] ? $university['state-province'] . ', ' : '' }}{{ $university['country'] }}. 
                                                        @if(isset($university['domains'][0]))
                                                        Visit their official website at {{ $university['domains'][0] }} for more information about programs and admissions.
                                                        @endif
                                                    </p>
                                                    <ul class="list-unstyled bg-light p-3 rounded shadow-sm university-details-list">
                                                        <li class="d-flex align-items-center mb-2">
                                                            <span class="detail-icon-wrapper bg-primary text-white mr-2"><i class="fas fa-globe"></i></span>
                                                            <span class="text-dark font-weight-bold">Country:</span> 
                                                            <span class="ml-auto">{{ $university['country'] }}</span>
                                                        </li>
                                                        @if($university['state-province'])
                                                        <li class="d-flex align-items-center mb-2">
                                                            <span class="detail-icon-wrapper bg-info text-white mr-2"><i class="fas fa-map"></i></span>
                                                            <span class="text-dark font-weight-bold">Region:</span> 
                                                            <span class="ml-auto">{{ $university['state-province'] }}</span>
                                                        </li>
                                                        @endif
                                                        <li class="d-flex align-items-center mb-2">
                                                            <span class="detail-icon-wrapper bg-success text-white mr-2"><i class="fas fa-code"></i></span>
                                                            <span class="text-dark font-weight-bold">Domain:</span> 
                                                            <span class="ml-auto">{{ $university['domains'][0] ?? 'N/A' }}</span>
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <span class="detail-icon-wrapper bg-warning text-white mr-2"><i class="fas fa-link"></i></span>
                                                            <span class="text-dark font-weight-bold">Website:</span> 
                                                            <span class="ml-auto text-truncate" style="max-width: 120px;">
                                                                <small>{{ $university['web_pages'][0] ?? 'N/A' }}</small>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            @else
                                <div class="text-center py-5">
                                    <i class="fas fa-university fa-3x text-muted mb-3"></i>
                                    <h4 class="text-muted">No universities found</h4>
                                    <p class="text-muted">
                                        @if(isset($searchName) && $searchName)
                                        No universities found for "{{ $searchName }}". Try searching for a different location.
                                        @else
                                        Start by searching for a location to find universities.
                                        @endif
                                    </p>
                                    @if(isset($searchName) && $searchName)
                                    <a href="#" class="btn btn-primary">Clear Search</a>
                                    @endif
                                </div>
                            @endif
                        </div>
                        
                        <!-- Pagination - Only show if there are results -->
                        @if(isset($universities) && count($universities) > 0)
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mt-5">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom styles to match content.txt card design */
.card-link-wrapper {
    text-decoration: none; /* Remove underline from the entire card link */
    color: inherit; /* Inherit color from parent */
    display: block; /* Make the anchor tag a block element */
    height: 100%; /* Ensure the link wrapper takes full height of the card */
}

.university-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.university-card:hover {
    transform: translateY(-5px) scale(1.02); /* Slightly scale and lift on hover */
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important; /* Stronger shadow on hover */
}

.university-card-top-bar {
    height: 4px; /* Initial height */
    background-image: linear-gradient(to right, #1D3564, #4B6EA8, #1D3564); /* Example gradient */
    transition: height 0.3s ease-in-out;
}

.university-card:hover .university-card-top-bar {
    height: 8px; /* Grow on hover */
}

.university-logo-container {
    width: 120px; /* Specific width */
    height: 60px; /* Specific height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.university-logo-container img {
    object-fit: contain; /* Ensure logo fits without cropping */
}

.card-title.h5 {
    color: #1D3564; /* Matching the primary color */
    font-weight: bold;
}

.card-title.h5:hover {
    color: #4B6EA8; /* Hover color for title */
}

.card-subtitle .fa-map-marker-alt {
    color: #4B6EA8; /* Location icon color */
}

.card-divider {
    width: 60px; /* Width of the divider line */
    height: 2px;
    background-color: #e2e8f0; /* Light gray color */
    transition: background-color 0.3s ease-in-out;
}

.university-card:hover .card-divider {
    background-color: #1D3564; /* Change color on hover */
}

.description-clamp {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limit to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.5; /* Adjust line height for better appearance */
    max-height: 3em; /* 2 lines * 1.5 line height */
}

.university-details-list li {
    padding: 8px 0;
    border-bottom: 1px solid #eee; /* Subtle separator */
}
.university-details-list li:last-child {
    border-bottom: none;
}

.university-details-list li:hover {
    background-color: #f8f9fa; /* Light hover background */
    color: #1D3564; /* Text color on hover */
}

.detail-icon-wrapper {
    width: 30px;
    height: 30px;
    border-radius: 50%; /* Circular icons */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}
.detail-icon-wrapper.bg-primary { background-color: #1D3564 !important; }
.detail-icon-wrapper.bg-info { background-color: #4B6EA8 !important; }
.detail-icon-wrapper.bg-success { background-color: #28a745 !important; }
.detail-icon-wrapper.bg-warning { background-color: #ffc107 !important; }

/* General Bootstrap overrides/enhancements */
.btn-primary {
    background-color: #1D3564 !important;
    border-color: #1D3564 !important;
}
.btn-primary:hover {
    background-color: #152A4F !important;
    border-color: #152A4F !important;
}
.page-item.active .page-link {
    background-color: #1D3564 !important;
    border-color: #1D3564 !important;
}
.page-link {
    color: #1D3564 !important;
}
.page-link:hover {
    color: #152A4F !important;
}
.custom-control-input:checked~.custom-control-label::before {
    background-color: #1D3564 !important;
    border-color: #1D3564 !important;
}
.bg-gradient-primary {
    background-image: linear-gradient(to right, #1D3564, #4B6EA8, #1D3564) !important;
}
</style>
@endsection