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

<style>
    .background-video {
    width: 100%;
    max-width: 900px;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    object-fit: cover;
}

.video-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 0;
}

</style>
<!-- volume btn  -->
<style>
.video-flex {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 0;
}

/* This one controls the icon position */
.video-wrapper {
    position: relative;
    display: inline-block;
}

.volume-btn {
    position: absolute;
    /* top: 10px; */
    right: 10px;
    background: rgba(0,0,0,0.6);
    color: #fff;
    border: none;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 20;
    font-size: 20px;
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!--Page Title-->
<section class="page-title"
    style="background-image: url('{{ asset('frontend/assets/images/background/page-title.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Event</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Event</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- feature-section -->
{{--<section class="feature-section sec-pad-2">
    <div class="auto-container">
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-1.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">Apply Visa Online</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-2.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">Important Information</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-3.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">Immigration Resources</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!-- feature-section end -->


<!-- choose-section -->
<section class="choose-section bg-color-3">
    <div class="pattern-layer" style="background-image: url( {{ asset('frontend/assets/images/shape/pattern-3.png') }} );"></div>
    <div class="sec-title centred" style="margin-bottom: 50px;">
        <h2 style="font-size: 36px; font-weight: 700; color: #003054;">
            Yes Education <span style="color:#DB1F2A;">Event</span>
        </h2>
        <!-- <p>( not applicable for London campus )</p> -->
    </div>
    <div class="auto-container text-center">
        <div class="video-flex">
            <div class="video-wrapper">
                <button class="volume-btn" id="volumeToggle">
                    <i class="bi bi-volume-mute-fill" id="volumeIcon"></i>
                </button>

                <video id="hero-video" class="background-video" autoplay loop muted playsinline preload="metadata">
                    <source src="{{ asset('frontend/assets/images/resource/yesedu.webm') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>


    </div>
</section>
<!-- choose-section end -->


<!-- Student Reviews Section -->
 <x-student-reviews />

<x-student-subscription />

<script>
document.addEventListener("DOMContentLoaded", function() {
    const video = document.getElementById("hero-video");
    const btn = document.getElementById("volumeToggle");
    const icon = document.getElementById("volumeIcon");

    btn.addEventListener("click", () => {
        video.muted = !video.muted;
        
        if(video.muted){
            icon.classList.remove("bi-volume-up-fill");
            icon.classList.add("bi-volume-mute-fill");
        } else {
            icon.classList.remove("bi-volume-mute-fill");
            icon.classList.add("bi-volume-up-fill");
        }
    });
});
</script>

@endsection