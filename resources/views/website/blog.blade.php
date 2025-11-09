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
<!--Page Title-->
<section class="page-title"
    style="background-image: url('{{ asset('frontend/assets/images/background/page-title-6.jpg') }}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Latest Blogs</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                <li>Our Blogs</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- sidebar-page-container -->
<div class="sidebar-page-container blog-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-list-content">
                    @forelse($blogs as $blog)
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('blogDetails', $blog->slug) }}">
                                    @if($blog->feature_image && file_exists(public_path('storage/post_images/' .
                                    $blog->feature_image)))
                                    <img src="{{ asset('storage/post_images/' . $blog->feature_image) }}"
                                        alt="{{ $blog->title }}">
                                    @else
                                    <img src="{{ asset('frontend/assets/images/news/default.jpg') }}"
                                        alt="Default Image">
                                    @endif
                                </a>
                            </figure>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>{{ strtoupper($blog->created_at->format('M d, Y')) }}</h5>
                                </div>
                                <h2>
                                    <a href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->title }}</a>
                                </h2>
                                <ul class="post-info clearfix">
                                    <li><a href="#">By {{ $blog->addedBy->name ?? 'Admin' }}</a></li>
                                    <li>
                                        <a href="#">{{ $blog->category->name ?? 'Uncategorized' }}</a>
                                    </li>
                                    <!-- <li><a href="#">0 Comments</a></li> -->
                                </ul>
                                <p>{{ Str::limit($blog->excerpt, 180) }}</p>
                                <div class="link">
                                    <a href="{{ route('blogDetails', $blog->slug) }}">
                                        Learn More <i class="flaticon-send"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No blog posts available.</p>
                    @endforelse


                    <!-- video and sliders here  -->
                    {{--<div class="news-block-one">
                        <div class="inner-box">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-11.jpg') }}"
                    alt=""></figure>
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-11.jpg') }}" alt="">
                    </figure>
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-11.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="lower-content">
                    <div class="post-date">
                        <h5>APR 17, 2020</h5>
                    </div>
                    <h2><a href="{{ route('blogDetails') }}">Country To Offer Point-Based Immigrations</a></h2>
                    <ul class="post-info clearfix">
                        <li><a href="#">By Admin</a></li>
                        <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                        <li><a href="#">3 Comments</a></li>
                    </ul>
                    <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                        lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                    </p>
                    <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i class="flaticon-send"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-block-one">
            <div class="inner-box">
                <figure class="image-box">
                    <a href="{{ route('blogDetails') }}"><img
                            src="{{ asset('frontend/assets/images/news/news-12.jpg') }}" alt=""></a>
                    <div class="video-btn"><a href="#" class="lightbox-image" data-caption=""><i
                                class="fas fa-play"></i></a></div>
                </figure>
                <div class="lower-content">
                    <div class="post-date">
                        <h5>APR 16, 2020</h5>
                    </div>
                    <h2><a href="{{ route('blogDetails') }}">Kickstart Your Visa Approval With Easy Steps</a></h2>
                    <ul class="post-info clearfix">
                        <li><a href="#">By Admin</a></li>
                        <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                        <li><a href="#">7 Comments</a></li>
                    </ul>
                    <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                        lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                    </p>
                    <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i class="flaticon-send"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-block-one">
            <div class="inner-box">
                <figure class="image-box"><a href="{{ route('blogDetails') }}"><img
                            src="{{ asset('frontend/assets/images/news/news-13.jpg') }}" alt=""></a></figure>
                <div class="lower-content">
                    <div class="post-date">
                        <h5>APR 15, 2020</h5>
                    </div>
                    <h2><a href="{{ route('blogDetails') }}">We Provide True Visa Matching Policy</a></h2>
                    <ul class="post-info clearfix">
                        <li><a href="#">By Admin</a></li>
                        <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                        <li><a href="#">5 Comments</a></li>
                    </ul>
                    <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                        lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                    </p>
                    <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i class="flaticon-send"></i></a>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="pagination-wrapper centred">
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
    <div class="sidebar blog-sidebar">
        <x-blog-subscription />
        <x-blog-categories />
        <x-recent-posts/>
        <x-online-assesment />
    </div>
</div>
</div>
</div>
</div>
<!-- sidebar-page-container end -->
@endsection

@push('js')

@endpush