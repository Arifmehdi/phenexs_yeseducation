@extends('frontend.layouts.master')

@section('title', 'YES Education - Event')

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
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title.jpg')}}');">
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
                <li>Feature 02</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- feature-section -->
<section class="feature-section sec-pad-2">
    <div class="auto-container">
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-1.jpg') }}" alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">Apply Visa Online</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-2.jpg') }}" alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">Important Information</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-3.jpg') }}" alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">Immigration Resources</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->
@endsection