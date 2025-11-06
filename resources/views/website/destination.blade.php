@extends('frontend.layouts.master')

@section('title', 'YES Education - Destination Details')

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
<section class="page-title" style="background-image: url('{{asset('frontend/assets/images/background/page-title.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Elements</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Training Block</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- training-section -->
<section class="training-section sec-pad-2">
    <div class="auto-container">
        <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="training-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/training-1.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h4>Citizenship Test</h4>
                        </div>
                    </div>
                    <div class="overlay-box">
                        <div class="text">
                            <h4>Citizenship Test</h4>
                            <p>Integer lobortis se conseqat nulla viverra lorem dapibus prodent diam ipsum ...</p>
                            <a href="index.html"><span>Read More</span><i class="flaticon-send"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/training-2.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h4>TOEFL</h4>
                        </div>
                    </div>
                    <div class="overlay-box">
                        <div class="text">
                            <h4>TOEFL</h4>
                            <p>Integer lobortis se conseqat nulla viverra lorem dapibus prodent diam ipsum ...</p>
                            <a href="index.html"><span>Read More</span><i class="flaticon-send"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/training-3.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h4>Take IELTS</h4>
                        </div>
                    </div>
                    <div class="overlay-box">
                        <div class="text">
                            <h4>Take IELTS</h4>
                            <p>Integer lobortis se conseqat nulla viverra lorem dapibus prodent diam ipsum ...</p>
                            <a href="index.html"><span>Read More</span><i class="flaticon-send"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/training-4.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h4>PTE Coaching</h4>
                        </div>
                    </div>
                    <div class="overlay-box">
                        <div class="text">
                            <h4>PTE Coaching</h4>
                            <p>Integer lobortis se conseqat nulla viverra lorem dapibus prodent diam ipsum ...</p>
                            <a href="index.html"><span>Read More</span><i class="flaticon-send"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- training-section end -->
@endsection