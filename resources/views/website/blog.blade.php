@extends('frontend.layouts.master')

@section('title', 'YES Education - Blogs')

@section('meta')
<meta name="description"
    content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
<meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
<meta property="og:title" content="Contact Us - North Bengal">
<meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@section('content')
<!-- frontend/assets/images/background/page-title-6.jpg -->
{{--<x-ahz-breadcrumb
    title="Study in the UK"
    subtitle="Build the skills, connections, and confidence to achieve your goals."
    image="frontend/assets/images/resource/uk-study-dk.original.webp"
    :showButton="true"
    buttonText="Book a Free Consultation"
    buttonLink="{{ route('consultation') }}"
/>--}}

<x-breadcrumb title="Latest Blogs" image="frontend/assets/images/resource/uk-study-dk.original.webp" />

<!-- sidebar-page-container -->
<section class="py-4 bg-light">
    <div class="container">

        <!-- MAIN CARD -->
        <div class="card blog-main-card shadow-lg border-0">
            <div class="card-body p-4 p-md-5">


                <!-- HEADER -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold ry" style="color: #3B308B">UK Education Blog Central</h2>
                    <p class="text-muted mx-auto" style="max-width:800px">
                        Our blogs help you understand the UK education system, scholarships, universities & visa
                        process.
                    </p>

                    <!-- SEARCH -->
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-6">
                            <div class="input-group rounded-pill shadow-sm bg-white overflow-hidden">
                                <span class="input-group-text border-0 bg-white">
                                    <i class="fas fa-search"></i>
                                </span>
                                <input type="text" class="form-control border-0"
                                    placeholder="Search Blog by Categories">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =================== TOP GRID =================== -->
                <h4 class="fw-bold mb-4">Latest Blogs</h4>

                <div class="row g-4">

                    <!-- CARD -->
                    @forelse($recentPosts as $post)
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card blog-card h-100">
                            @if($post->feature_image && file_exists(public_path('storage/post_images/'
                            .$post->feature_image)))
                            <img src="{{ asset('storage/post_images/' . $post->feature_image) }}" class="card-img-top"
                                alt="{{ $post->title }}">
                            @else
                            <img src="{{ asset('frontend/assets/images/news/default.jpg') }}" class="card-img-top"
                                alt="Default Image">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <span
                                        class="badge bg-light text-dark border">{{ strtoupper($post->created_at->format('d M, Y')) }}</span>
                                    <span class="badge text-white"
                                        style="background: #3B308B">{{ $post->category->name ?? 'Uncategorized' }}</span>
                                </div>
                                <h5>{{ $post->title }}</h5>
                                <p class="text-muted small">{{ Str::limit($post->excerpt, 180) }}</p>
                                <a href="{{ route('blogDetails', $post->slug) }}"
                                    class="btn btn-outline-primary mt-auto w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse

                    <!-- COPY CARD -->
                    {{--<div class="col-md-6 col-lg-4">
                <div class="card blog-card h-100">
                    <img src="https://mie-global-te43fd.s3.amazonaws.com/static/images/LSBU-1.original.jpg" class="card-img-top">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-2">
                            <span class="badge bg-light border">12 March 2025</span>
                            <span class="badge bg-danger">Scholarship</span>
                        </div>
                        <h5>LSBU Scholarship Guide</h5>
                        <p class="text-muted small">Scholarship from £1,500 to £13,400.</p>
                        <a href="#" class="btn btn-outline-danger mt-auto w-100">View Details</a>
                    </div>
                </div>
            </div>--}}

                    <!-- ADD MORE -->
                </div>

                <!-- =================== VERTICAL LIST =================== -->
                <div class="mt-5">
                    <h4 class="fw-bold">
                        Must Read Blogs <span class="text-muted fs-6">(367 Results)</span>
                    </h4>

                    <div class="vertical-blog-list mt-4">

                        <!-- LIST ITEM -->
                        @forelse($blogs as $blog)
                        <a href="{{ route('blogDetails', $blog->slug) }}" class="text-decoration-none">
                            <div class="row blog-vertical-item align-items-center mb-4">
                                <div class="col-md-4 text-center">
                                    @if($blog->feature_image && file_exists(public_path('storage/post_images/'
                                    .$blog->feature_image)))
                                    <img src="{{ asset('storage/post_images/' . $blog->feature_image) }}"
                                        class="img-fluid rounded" alt="{{ $blog->title }}">
                                    @else
                                    <img src="{{ asset('frontend/assets/images/news/default.jpg') }}"
                                        class="img-fluid rounded" alt="Default Image">
                                    @endif
                                </div>
                                <div class="col-md-8 pt-3 pt-md-0">
                                    <span
                                        class="badge bg-light border mb-2">{{ strtoupper($blog->created_at->format('d M, Y')) }}</span>
                                    <span class="badge text-white"
                                        style="background: #3B308B">{{ $blog->category->name ?? 'Uncategorized' }}</span>

                                    <h5 class="mt-2">{{ $blog->title }}</h5>
                                    <p class="text-muted small">
                                        {{ Str::limit($blog->excerpt, 180) }}
                                    </p>

                                    <button class="btn btn-outline-primary btn-sm">View Detail</button>
                                </div>
                            </div>
                        </a>
                        @empty
                        @endforelse

                        <!-- COPY -->
                        {{--<a href="#" class="text-decoration-none">
                    <div class="row blog-vertical-item align-items-center mb-4">
                        <div class="col-md-4 text-center">
                            <img src="https://mie-global-te43fd.s3.amazonaws.com/static/images/new-student-in-uk-800x533.original.webp" class="img-fluid rounded">
                        </div>
                        <div class="col-md-8 pt-3 pt-md-0">
                            <span class="badge bg-light border mb-2">20 August 2020</span>
                            <span class="badge bg-danger">UK University</span>

                            <h5 class="mt-2">Freshers Week in UK Universities</h5>
                            <p class="text-muted small">
                                First week is full of activities, fun, networking and orientation.
                            </p>

                            <button class="btn btn-outline-primary btn-sm">View Detail</button>
                        </div>
                    </div>
                </a> --}}

                        <!-- MORE -->
                    </div>
                </div>

                <!-- =================== PAGINATION =================== -->
                <div class="text-center mt-4">
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </div>


            </div>
        </div> <!-- card-body -->
    </div> <!-- card -->
    </div> <!-- container -->
</section>


<!-- sidebar-page-container end -->
 <x-student-reviews />

<x-student-subscription />
@endsection
@push('css')
<style>
.blog-card {
    border-radius: 20px;
    border: 1px solid #3a6dddff;
    transition: .3s ease-in-out;
}

.blog-card:hover {
    border-color: #3B308B;
    transform: scale(1.02);
    box-shadow: 0 15px 30px rgba(0, 0, 0, .1);
}

.blog-card img {
    height: 200px;
    object-fit: cover;
}

.blog-vertical-item {
    background: white;
    border: 1px solid rgba(77, 125, 197, 1);
    border-radius: 15px;
    padding: 15px;
    transition: .3s;
}

.blog-vertical-item:hover {
    border-color: #db0c28;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .08);
}

.custom-pagination .page-link {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    line-height: 24px;
    background: #e6ecf5;
    border: none;
}

.custom-pagination .active .page-link {
    background: linear-gradient(135deg, #1d3564, #3B308B);
    color: white;
}
</style>
@endpush
@push('js')

@endpush