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
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search universities...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="btn-group mb-3 d-flex" role="group">
                                <button type="button" class="btn btn-primary w-50"><i class="fas fa-filter"></i> Filters</button>
                                <button type="button" class="btn btn-outline-secondary w-50"><i class="fas fa-sort"></i> Sort</button>
                            </div>
                            <div>
                                <span class="badge badge-primary p-2">London <button class="close text-white ml-1" type="button"><span>&times;</span></button></span>
                                <a href="#" class="btn btn-link btn-sm">Clear all filters</a>
                            </div>
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
                                        @foreach(['Amity University London', 'Arts University Bournemouth', 'Aston University Birmingham', 'Bangor University'] as $university)
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="{{ Str::slug($university) }}">
                                            <label class="custom-control-label" for="{{ Str::slug($university) }}">{{ $university }}</label>
                                        </div>
                                        @endforeach
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="show-more">
                                            <label class="custom-control-label" for="show-more">Show more...</label>
                                        </div>
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
                            <h3 class="h5 mb-0">16 Results Found</h3>
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

                        @php
                            $universities = [
                                [
                                    'name' => 'Amity University London',
                                    'location' => '24 Bedford Square, London WC1B 3RA, United Kingdom',
                                    'description' => 'Amity University London offers a unique educational experience tailored to the needs of both local and international students. The university specializes in areas such as Business, Cyber Security, Computing, and Management.',
                                    'founded' => '2009',
                                    'guardian_ranking' => '#863',
                                    'qs_ranking' => '#1001'
                                ],
                                [
                                    'name' => 'Birkbeck University London',
                                    'location' => 'London, England, United Kingdom',
                                    'description' => 'Birkbeck, University of London, found in the centre of London, is known for its distinctive approach to higher education. As part of the prestigious University of London, Birkbeck offers a combination of flexibility and excellent tuition.',
                                    'founded' => '1823',
                                    'the_ranking' => '#801',
                                    'qs_ranking' => '#801'
                                ],
                                [
                                    'name' => 'Brunel University London',
                                    'location' => 'Uxbridge area of London, England',
                                    'description' => 'Brunel University London, located in Uxbridge, West London, is an established university with a strong emphasis on research and practical learning. Founded in 1966, Brunel is known for combining academic knowledge with real-world experience.',
                                    'founded' => '1966',
                                    'guardian_ranking' => '#120',
                                    'qs_ranking' => '#425'
                                ],
                                [
                                    'name' => 'Kingston University',
                                    'location' => 'Penrhyn Road, Kingston upon Thames, Surrey KT1 2EE, United Kingdom',
                                    'description' => 'Kingston University is an excellent university located in Kingston upon Thames, just 30 minutes from central London. It offers a wide range of undergraduate and postgraduate courses.',
                                    'founded' => '1899',
                                    'guardian_ranking' => '#60',
                                    'qs_ranking' => '#675'
                                ]
                            ];
                        @endphp

                        @foreach($universities as $university)
                        <div class="card mb-4 shadow-sm university-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center rounded" style="min-height: 120px;">
                                            <span class="text-muted">Logo</span>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title">{{ $university['name'] }}</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <i class="fas fa-map-marker-alt text-primary"></i>
                                            {{ $university['location'] }}
                                        </h6>
                                        <p class="card-text">{{ $university['description'] }}</p>
                                        <div class="bg-light p-3 rounded mb-3">
                                            <div class="row">
                                                <div class="col-6 col-sm-4 mb-2">
                                                    <strong>Founded:</strong><br>{{ $university['founded'] }}
                                                </div>
                                                @if(isset($university['guardian_ranking']))
                                                <div class="col-6 col-sm-4 mb-2">
                                                    <strong>Guardian Ranking:</strong><br>{{ $university['guardian_ranking'] }}
                                                </div>
                                                @endif
                                                @if(isset($university['the_ranking']))
                                                <div class="col-6 col-sm-4 mb-2">
                                                    <strong>THE Ranking:</strong><br>{{ $university['the_ranking'] }}
                                                </div>
                                                @endif
                                                <div class="col-6 col-sm-4 mb-2">
                                                    <strong>QS Ranking:</strong><br>{{ $university['qs_ranking'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        <!-- Pagination -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom styles to enhance Bootstrap's look */
.service-sidebar .card .card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}
.service-sidebar .card .btn-link {
    color: #343a40;
    text-decoration: none;
    font-weight: bold;
}
.service-sidebar .card .btn-link:hover {
    color: #0056b3;
}
.university-card {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}
.university-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}
.btn-primary {
    background-color: #1D3564;
    border-color: #1D3564;
}
.btn-primary:hover {
    background-color: #152A4F;
    border-color: #152A4F;
}
.page-item.active .page-link {
    background-color: #1D3564;
    border-color: #1D3564;
}
.page-link {
    color: #1D3564;
}
.page-link:hover {
    color: #152A4F;
}
.custom-control-input:checked~.custom-control-label::before {
    background-color: #1D3564;
    border-color: #1D3564;
}
</style>
@endsection
