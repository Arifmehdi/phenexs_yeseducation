@extends('frontend.layouts.master')

@section('title', 'YES Education - UK Universities')

@section('meta')
<meta name="description" content="Explore top UK universities with details about programs, rankings, campus life, and accommodation.">
<meta name="keywords" content="UK universities, higher education UK, study in UK, university rankings, UK courses">
<meta property="og:title" content="UK Universities Search - YES Education">
<meta property="og:description" content="Find the perfect UK university with comprehensive search and filtering options.">
<meta property="og:image" content="{{ asset('frontend/assets/img/yes-education/uk-universities.jpg') }}">
<meta property="og:type" content="website">
@endsection


@section('content')

<!-- PAGE TITLE -->
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title-3.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>UK Universities</h1>
                <div class="dotted-box">
                    <span class="dotted"></span><span class="dotted"></span><span class="dotted"></span>
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
<!-- END PAGE TITLE -->


<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-lg-4 col-md-12">
                <div class="service-sidebar">

                    <!-- Search -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <form id="searchForm" method="GET" action="{{ route('search') }}">
                                <input type="hidden" name="action" value="location-data">

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="location" placeholder="Search by location..."
                                           value="{{ $searchName ?? '' }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="btn-group mb-3 d-flex">
                                <button type="button" class="btn btn-primary w-50"><i class="fas fa-filter"></i> Filters</button>
                                <button type="button" class="btn btn-outline-secondary w-50"><i class="fas fa-sort"></i> Sort</button>
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
                        <x-filter-card title="Faculty" id="Faculty" :list="['Business and Management','Computing','Engineering','Law','Nursing and Midwifery']" />
                        <x-filter-card title="Study Level" id="StudyLevel" :list="['Undergraduate','Masters','Foundation','Top-up Degree','PhD Doctorate']" />
                        <x-filter-card title="Location" id="Location" :list="['Any Location','London','East of England','East Midlands','West Midlands','Scotland','Wales']" />
                    </div>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="col-lg-8 col-md-12 content-side">

                <div class="coaching-details-content">
                    <div class="content-style-one mb-6">

                        <!-- HEADER WITH COUNT -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="h5 mb-0">
                                {{ $paginator->total() }} Results Found
                                @if(!empty($searchName)) for "{{ $searchName }}" @endif
                            </h3>

                            <div class="form-inline">
                                <label class="mr-2">Sort by:</label>
                                <select class="custom-select">
                                    <option selected>Relevance</option>
                                    <option>Name A-Z</option>
                                    <option>Ranking</option>
                                    <option>Location</option>
                                </select>
                            </div>
                        </div>


                        <!-- UNIVERSITY CARDS -->
                        <div class="university-cards-grid">

                            @if($paginator->count() > 0)

                                @foreach($paginator->chunk(2) as $chunk)
                                    <div class="row">
                                        @foreach($chunk as $university)

                                            <div class="col-md-6 mb-4">
                                                <a href="{{ $university['web_pages'][0] ?? '#' }}" target="_blank" class="card-link-wrapper">
                                                    <div class="card university-card shadow-sm border-0 rounded-lg overflow-hidden h-100">

                                                        <div class="university-card-top-bar bg-gradient-primary"></div>

                                                        <div class="card-body p-4">

                                                            <div class="text-center mb-3">
                                                                <img class="img-fluid rounded shadow-sm"
                                                                     src="https://via.placeholder.com/120x60/1D3564/FFFFFF?text={{ substr(preg_replace('/[^A-Za-z0-9]/','',$university['name']),0,2) }}"
                                                                     alt="{{ $university['name'] }} logo">
                                                            </div>

                                                            <h4 class="h5 text-center text-dark mb-2">{{ $university['name'] }}</h4>

                                                            <p class="small text-muted text-center">
                                                                <i class="fas fa-map-marker-alt text-primary mr-1"></i>
                                                                {{ $university['state-province'] ? $university['state-province'].',' : '' }}
                                                                {{ $university['country'] }}
                                                            </p>

                                                            <p class="small text-muted description-clamp">
                                                                {{ $university['name'] }} is a prestigious university located in 
                                                                {{ $university['state-province'] ? $university['state-province'].',' : '' }} 
                                                                {{ $university['country'] }}.
                                                            </p>

                                                            <ul class="list-unstyled bg-light p-3 rounded shadow-sm university-details-list">
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <span class="detail-icon-wrapper bg-primary text-white mr-2">
                                                                        <i class="fas fa-globe"></i></span>
                                                                    <strong>Country:</strong>
                                                                    <span class="ml-auto">{{ $university['country'] }}</span>
                                                                </li>

                                                                @if($university['state-province'])
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <span class="detail-icon-wrapper bg-info text-white mr-2">
                                                                        <i class="fas fa-map"></i></span>
                                                                    <strong>Region:</strong>
                                                                    <span class="ml-auto">{{ $university['state-province'] }}</span>
                                                                </li>
                                                                @endif

                                                                <li class="d-flex align-items-center mb-2">
                                                                    <span class="detail-icon-wrapper bg-success text-white mr-2">
                                                                        <i class="fas fa-code"></i></span>
                                                                    <strong>Domain:</strong>
                                                                    <span class="ml-auto">{{ $university['domains'][0] ?? 'N/A' }}</span>
                                                                </li>

                                                                <li class="d-flex align-items-center">
                                                                    <span class="detail-icon-wrapper bg-warning text-white mr-2">
                                                                        <i class="fas fa-link"></i></span>
                                                                    <strong>Website:</strong>
                                                                    <span class="ml-auto text-truncate" style="max-width:120px;">
                                                                        {{ $university['web_pages'][0] ?? 'N/A' }}
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
                                    <h4>No universities found</h4>
                                    <p class="text-muted">
                                        @if(!empty($searchName))
                                            No universities found for "{{ $searchName }}".
                                        @else
                                            Start by searching for a location.
                                        @endif
                                    </p>
                                </div>

                            @endif

                        </div>

                        <!-- PAGINATION -->
                        <div class="mt-4">
                            {{ $paginator->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- CLEAN CSS -->
<style>
.card-link-wrapper{display:block;text-decoration:none;color:inherit}
.university-card{transition:.3s}
.university-card:hover{transform:translateY(-5px) scale(1.02);box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}
.university-card-top-bar{height:4px;background-image:linear-gradient(to right,#1D3564,#4B6EA8,#1D3564);transition:.3s}
.university-card:hover .university-card-top-bar{height:8px}
.university-details-list li{padding:8px 0;border-bottom:1px solid #eee}
.university-details-list li:hover{background:#f8f9fa}
.university-details-list li:last-child{border-bottom:0}
.detail-icon-wrapper{width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center}
.description-clamp{-webkit-line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box;overflow:hidden}
.page-item.active .page-link,.btn-primary{background:#1D3564!important;border-color:#1D3564!important}
.page-link{color:#1D3564!important}
.page-link:hover{color:#152A4F!important}
</style>

@endsection
