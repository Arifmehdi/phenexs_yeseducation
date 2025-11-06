@extends('frontend.layouts.master')

@section('title', 'YES Education - Courses')

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
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title-2.jpg') }}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Our Coaching</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                <li>Coaching</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- coaching-page-section -->
<section class="coaching-page-section bg-color-3">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>countries we offer support</p>
            <h2>Get The Best Coaching From Us</h2>
            <span>Sponsoring and managing work visas parts now becoming results the experience <br />aute irure dolor in
                reprehenderit cepteur sint ocaecat cupidatate</span>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block-two wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('courseDetails') }}"><img
                                    src="{{ asset('frontend/assets/images/service/service-4.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="box">
                                <h3><a href="{{ route('courseDetails') }}">Citizenship Test</a></h3>
                                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                                    perspiciatis unde omnis iste.</p>
                            </div>
                            <div class="link"><a href="{{ route('courseDetails') }}">Read More<i class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block-two wow fadeInUp animated animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('courseDetails') }}"><img
                                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="box">
                                <h3><a href="{{ route('courseDetails') }}">TOEFL</a></h3>
                                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                                    perspiciatis unde omnis iste.</p>
                            </div>
                            <div class="link"><a href="{{ route('courseDetails') }}">Read More<i class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('courseDetails') }}"><img
                                    src="{{ asset('frontend/assets/images/service/service-5.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="box">
                                <h3><a href="{{ route('courseDetails') }}">PTE Coaching</a></h3>
                                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                                    perspiciatis unde omnis iste.</p>
                            </div>
                            <div class="link"><a href="{{ route('courseDetails') }}">Read More<i class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block-two wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('courseDetails') }}"><img
                                    src="{{ asset('frontend/assets/images/service/service-6.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="box">
                                <h3><a href="{{ route('courseDetails') }}">Take IELTS</a></h3>
                                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                                    perspiciatis unde omnis iste.</p>
                            </div>
                            <div class="link"><a href="{{ route('courseDetails') }}">Read More<i class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block-two wow fadeInUp animated animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('courseDetails') }}"><img
                                    src="{{ asset('frontend/assets/images/service/service-7.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="box">
                                <h3><a href="{{ route('courseDetails') }}">SAT Coaching</a></h3>
                                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                                    perspiciatis unde omnis iste.</p>
                            </div>
                            <div class="link"><a href="{{ route('courseDetails') }}">Read More<i class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('courseDetails') }}"><img
                                    src="{{ asset('frontend/assets/images/service/service-8.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="box">
                                <h3><a href="{{ route('courseDetails') }}">Skills Exam</a></h3>
                                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                                    perspiciatis unde omnis iste.</p>
                            </div>
                            <div class="link"><a href="{{ route('courseDetails') }}">Read More<i class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- coaching-page-section end -->
@endsection