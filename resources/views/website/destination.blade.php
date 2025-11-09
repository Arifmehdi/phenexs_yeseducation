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
<section class="page-title"
    style="background-image: url('{{asset('frontend/assets/images/background/page-title.jpg')}}');">
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


<!-- immigration-section -->
<section class="immigration-section bg-color-3">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>countries we offer support</p>
            <h2>Immigration & Visa Services <br />Following Countries</h2>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="row clearfix">

            @forelse($destinations as $destination)
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
                <div class="immigration-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img
                                src="{{ asset('storage/destination_images/' . $destination->fi()) }}" alt="{{ $destination->title}}"></figure>
                        <div class="text">
                            <h3><a href="{{ route('destinationDetails', $destination->slug)}}">{{ $destination->category->name}}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 

        </div>
        <!-- <div class="more-text"><h3>Visarzo is clearly your best partner at Immigration& Visa success. <a href="index.html"><span>Get In Touch</span><i class="flaticon-send"></i></a></h3></div> -->
    </div>
</section>
<!-- immigration-section end -->
@endsection