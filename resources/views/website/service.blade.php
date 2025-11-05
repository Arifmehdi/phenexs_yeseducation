@extends('frontend.layouts.master')

@section('title', 'Our Services - North Bengal')

@section('meta')
<meta name="description"
    content="Explore North Bengal's premium services, including dairy production and more. Discover quality, reliability, and excellence.">
<meta name="keywords" content="services, dairy production, North Bengal, milk products, quality services">
<meta property="og:title" content="Our Services - North Bengal">
<meta property="og:description"
    content="Discover North Bengal's premium dairy services. Quality, reliability, and excellence in every product.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/services-banner.jpg') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@section('content')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Services</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href='index.html'>Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Latest News Area Start-->
<div class="latest-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Our Serices</h3>
                        <p>There are many variations of passages</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="#" class="button-default">LEARN Now</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="#" class="button-default">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="#" class="button-default">LEARN Now</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="#" class="button-default">LEARN Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Latest News Area-->

<!-- Lazy Background Loader -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const lazyBg = document.querySelectorAll(".lazy-bg");
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bgSection = entry.target;
                const bgUrl = bgSection.getAttribute("data-bg");
                bgSection.style.backgroundImage = `url('${bgUrl}')`;
                observer.unobserve(bgSection);
            }
        });
    });
    lazyBg.forEach(section => observer.observe(section));
});
</script>
@endsection