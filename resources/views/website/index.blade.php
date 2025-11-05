@extends('frontend.layouts.master')

@section('title', 'YES Education - Higher Education Consultant')

@section('meta')
<meta name="description"
    content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description"
    content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/home-banner.png') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@section('content')
<!--Slider Area Start-->
<div class="slider-area slider-two">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            <img src="{{ asset('frontend/img/slider/3.jpg') }}" alt="" title="#slider-1-caption1" />
            <img src="{{ asset('frontend/img/slider/4.jpg') }}" alt="" title="#slider-1-caption2" />
        </div>
        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
            <div class="banner-content slider-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content">
                                    <h1 class="title1">Education Needs<br>
                                        Complete Solution</h1>
                                    <p class="sub-title d-none d-lg-block"> There are many variations of passages of
                                        Lorem Ipsum available, but the majority have<br>
                                        suffered alteration in some form, by injected humour, or randomised words
                                        which<br>
                                        don't look even slightly believable.</p>
                                    <div class="banner-readmore">
                                        <a class="button-default bg-blue" href="#">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
            <div class="banner-content slider-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content slide-2">
                                    <h1 class="title1">Education Needs<br>
                                        Complete Solution</h1>
                                    <p class="sub-title d-none d-lg-block"> There are many variations of passages of
                                        Lorem Ipsum available, but the majority have<br>
                                        suffered alteration in some form, by injected humour, or randomised words
                                        which<br>
                                        don't look even slightly believable.</p>
                                    <div class="banner-readmore">
                                        <a class="button-default bg-blue" href="#">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Slider Area-->
<!--Course Area Start-->
<div class="course-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>POPULAR COURSES</h3>
                        <p>There are many variations of passages of Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{ asset('frontend/img/course/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Photoshop CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>M S Nawaz</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered
                            alteration in some orm, by injected humour,There are many but the mri have suffered
                            alteration in some </p>
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{ asset('frontend/img/course/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Illustrator CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>Subas Das</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered
                            alteration in some orm, by injected humour,There are many but the mri have suffered
                            alteration in some </p>
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{ asset('frontend/img/course/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Indesign CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>Momin Boss</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered
                            alteration in some orm, by injected humour,There are many but the mri have suffered
                            alteration in some </p>
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 text-center">
                <a href="#" class="button-default button-large">Browse All Courses <i
                        class="zmdi zmdi-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->
<!--Fun Factor Area Start-->
<div class="fun-factor-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper white">
                    <div class="section-title">
                        <h3>IMPORTANT FACTS</h3>
                        <p>There are many variations of passages of Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Teachers</h4>
                    <h2><span class="counter">79</span>+</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Members</h4>
                    <h2><span class="counter">120</span>+</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Courses</h4>
                    <h2><span class="counter">36</span>+</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Countries</h4>
                    <h2><span class="counter">20</span>+</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Fun Factor Area-->
<!--Latest News Area Start-->
<div class="latest-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Latest News</h3>
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
<!--Testimonial Area Start-->
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-0 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="testimonial-image-slider text-center">
                            <div class="sin-testiImage">
                                <img src="{{ asset('frontend/img/testimonial/1.jpg') }}" alt="testimonial 1" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{ asset('frontend/img/testimonial/2.jpg') }}" alt="testimonial 2" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{ asset('frontend/img/testimonial/3.jpg') }}" alt="testimonial 3" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{ asset('frontend/img/testimonial/1.jpg') }}" alt="testimonial 1" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{ asset('frontend/img/testimonial/2.jpg') }}" alt="testimonial 2" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{ asset('frontend/img/testimonial/3.jpg') }}" alt="testimonial 3" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text-slider text-center">
                    <div class="sin-testiText">
                        <h2>M S Nawaz </h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Chowchilla Madera</h2>
                        <p>Nam nec tellus a odio tincidunt This lorem is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean nisi sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum gravida.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Kattie Luis</h2>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida
                            nibh vel velit auctor aliquet. Aenean tincidunt sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum Photoshop.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>M S Nawaz </h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Chowchilla Madera</h2>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida
                            nibh vel velit auctor aliquet. Aenean sollicitudin, aliquet lorem quis tellus velit bibendum
                            auctor, nisi elit consequat ipsum</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Kattie Luis</h2>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida
                            nibh vel velit auctor aliquet. Aenean sollicitudin, lorem gravida tincidunt quis bibendum
                            auctor, nisi elit consequat ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Testimonial Area-->
<!--Event Area Start-->
<div class="event-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR EVENTS</h3>
                        <p>There are many variations of passages</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/1.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Comilla Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="#">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/2.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Jesore Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="#">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/3.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="#">LEARN Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('js')
<script>
$(document).ready(function() {
    // Initialize Nivo Slider with autoplay
    $('#nivoslider').nivoSlider({
        effect: 'random', // You can change this to specific effects like 'fade', 'slideInRight', etc.
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 500,
        pauseTime: 5000, // 5 seconds between slides
        startSlide: 0,
        directionNav: true,
        controlNav: true,
        controlNavThumbs: false,
        pauseOnHover: true, // This enables pause on hover
        manualAdvance: false, // Allow automatic advancement
        prevText: 'Prev',
        nextText: 'Next',
        randomStart: false,
        beforeChange: function(){},
        afterChange: function(){},
        slideshowEnd: function(){},
        lastSlide: function(){},
        afterLoad: function(){}
    });

    // Alternative method if the above doesn't work perfectly
    // This ensures autoplay starts and pause on hover works
    setTimeout(function() {
        const nivoSlider = $('#nivoslider');
        
        // Force start slideshow
        nivoSlider.data('nivoslider').start();
        
        // Enhanced hover pause functionality
        nivoSlider.hover(function() {
            // Pause on hover
            nivoSlider.data('nivoslider').stop();
        }, function() {
            // Resume when mouse leaves
            nivoSlider.data('nivoslider').start();
        });
    }, 1000);
});

// Fallback method using pure JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const sliderContainer = document.querySelector('.preview-2');
    let slideInterval;
    
    function startAutoSlide() {
        // This will work with Nivo Slider's internal methods
        const nivoSlider = $('#nivoslider').data('nivoslider');
        if (nivoSlider) {
            nivoSlider.start();
        }
    }
    
    function stopAutoSlide() {
        const nivoSlider = $('#nivoslider').data('nivoslider');
        if (nivoSlider) {
            nivoSlider.stop();
        }
    }
    
    // Add hover events to the slider container
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopAutoSlide);
        sliderContainer.addEventListener('mouseleave', startAutoSlide);
    }
    
    // Start autoplay initially
    setTimeout(startAutoSlide, 2000);
});
</script>

<!-- Your existing Owl Carousel code -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all Owl Carousel instances on the page
    const carousels = document.querySelectorAll('.owl-carousel');

    carousels.forEach(function(carousel) {
        // Wait until Owl Carousel initializes
        const waitForInit = setInterval(function() {
            if (carousel.classList.contains('owl-loaded')) {
                clearInterval(waitForInit);

                // Add hover pause/resume
                carousel.addEventListener('mouseenter', function() {
                    $(carousel).trigger('stop.owl.autoplay');
                });

                carousel.addEventListener('mouseleave', function() {
                    // Resume with your desired autoplay timeout
                    $(carousel).trigger('play.owl.autoplay', [3000]); // hero slider 2s
                });
            }
        }, 100);
    });
});
</script>

<!-- Lazy Background Loader Script -->
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
@endpush