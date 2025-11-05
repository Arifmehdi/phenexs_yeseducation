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


<style>
        .slider-area {
            position: relative;
            overflow: hidden;
            height: 600px;
            background: #2c3e50;
        }
        
        .preview-2 {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .slides-container {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .slide.active {
            opacity: 1;
        }
        
        /* Slide background colors as fallback */
        .slide:nth-child(1) {
            background: linear-gradient(135deg, #3498db, #8e44ad);
        }
        
        .slide:nth-child(2) {
            background: linear-gradient(135deg, #e74c3c, #f39c12);
        }
        
        .slide:nth-child(3) {
            background: linear-gradient(135deg, #27ae60, #16a085);
        }
        
        .nivo-caption {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .text-content-wrapper {
            width: 100%;
            text-align: center;
        }
        
        .text-content h1.title1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            font-weight: 700;
        }
        
        .text-content p.sub-title {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
            opacity: 0.9;
        }
        
        .button-default {
            display: inline-block;
            padding: 15px 35px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .button-default:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
        
        .slider-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15px;
            z-index: 10;
        }
        
        .slider-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .slider-dot.active {
            background-color: white;
            transform: scale(1.2);
        }
        
        .slider-dot:hover {
            background-color: white;
            transform: scale(1.1);
        }
        
        /* Animation for text content */
        .text-content > * {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .slide.active .text-content > * {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Stagger the animation */
        .slide.active .text-content h1 {
            transition-delay: 0.3s;
        }
        
        .slide.active .text-content p {
            transition-delay: 0.6s;
        }
        
        .slide.active .text-content .banner-readmore {
            transition-delay: 0.9s;
        }
        
        /* Status indicator */
        .slider-status {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            z-index: 10;
        }
        
        @media (max-width: 992px) {
            .text-content h1.title1 {
                font-size: 2.8rem;
            }
            
            .text-content p.sub-title {
                font-size: 1.1rem;
            }
            
            .slider-area {
                height: 500px;
            }
        }
        
        @media (max-width: 768px) {
            .text-content h1.title1 {
                font-size: 2.2rem;
            }
            
            .text-content p.sub-title {
                font-size: 1rem;
            }
            
            .button-default {
                padding: 12px 25px;
                font-size: 0.9rem;
            }
            
            .slider-area {
                height: 450px;
            }
        }
        
        @media (max-width: 576px) {
            .text-content h1.title1 {
                font-size: 1.8rem;
            }
            
            .text-content p.sub-title {
                font-size: 0.9rem;
            }
            
            .slider-area {
                height: 400px;
            }
            
            .slider-controls {
                bottom: 20px;
            }
        }
</style>
    <!--Slider Area Start-->
    <div class="slider-area slider-two">
        <div class="preview-2">
            <div class="slides-container">
                <!-- Slide 1 -->
                <div class="slide active">
                    <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                        <div class="banner-content slider-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content-wrapper">
                                            <div class="text-content">
                                                <h1 class="title1">Education Needs<br>
                                                    Complete Solution</h1>
                                                <p class="sub-title">There are many variations of passages of
                                                    Lorem Ipsum available, but the majority have
                                                    suffered alteration in some form, by injected humour, or randomised words
                                                    which don't look even slightly believable.</p>
                                                <div class="banner-readmore">
                                                    <a class="button-default" href="#">View Courses</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="slide">
                    <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                        <div class="banner-content slider-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content-wrapper">
                                            <div class="text-content slide-2">
                                                <h1 class="title1">Modern Learning<br>
                                                    For The Future</h1>
                                                <p class="sub-title">Our comprehensive education platform provides
                                                    everything you need to succeed in today's competitive world.
                                                    Join thousands of students who have transformed their careers.</p>
                                                <div class="banner-readmore">
                                                    <a class="button-default" href="#">Explore Programs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide">
                    <div class="nivo-html-caption nivo-caption">
                        <div class="banner-content slider-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content-wrapper">
                                            <div class="text-content">
                                                <h1 class="title1">Expert Instructors<br>
                                                    World-Class Content</h1>
                                                <p class="sub-title">Learn from industry professionals with years of
                                                    experience. Our curriculum is designed to give you
                                                    practical skills that employers are looking for.</p>
                                                <div class="banner-readmore">
                                                    <a class="button-default" href="#">Meet Our Team</a>
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
            
            <!-- Slider Controls -->
            <div class="slider-controls">
                <div class="slider-dot active" data-slide="0"></div>
                <div class="slider-dot" data-slide="1"></div>
                <div class="slider-dot" data-slide="2"></div>
            </div>
            
            <!-- Status Indicator -->
            <div class="slider-status">Auto-playing</div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            let slideInterval;
            const slideDuration = 5000; // 5 seconds
            
            // Function to show a specific slide
            function showSlide(n) {
                // Remove active class from all slides and dots
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                // Add active class to current slide and dot
                slides[n].classList.add('active');
                dots[n].classList.add('active');
                
                currentSlide = n;
            }
            
            // Function to go to next slide
            function nextSlide() {
                let next = currentSlide + 1;
                if (next >= slides.length) {
                    next = 0;
                }
                showSlide(next);
            }
            
            // Function to start the auto slide
            function startSlideShow() {
                slideInterval = setInterval(nextSlide, slideDuration);
            }
            
            // Function to pause the auto slide
            function pauseSlideShow() {
                clearInterval(slideInterval);
            }
            
            // Initialize the slider
            function initSlider() {
                // Start the automatic slideshow
                startSlideShow();
                
                // Add click event to dots
                dots.forEach(dot => {
                    dot.addEventListener('click', function() {
                        const slideIndex = parseInt(this.getAttribute('data-slide'));
                        showSlide(slideIndex);
                        // Restart the interval after manual navigation
                        pauseSlideShow();
                        startSlideShow();
                    });
                });
                
                // Pause on hover
                const sliderArea = document.querySelector('.slider-area');
                sliderArea.addEventListener('mouseenter', pauseSlideShow);
                sliderArea.addEventListener('mouseleave', startSlideShow);
            }
            
            // Initialize the slider
            initSlider();
        });
    </script>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            const statusIndicator = document.querySelector('.slider-status');
            let currentSlide = 0;
            let slideInterval;
            const slideDuration = 5000; // 5 seconds
            
            // Function to show a specific slide
            function showSlide(n) {
                // Remove active class from all slides and dots
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                // Add active class to current slide and dot
                slides[n].classList.add('active');
                dots[n].classList.add('active');
                
                currentSlide = n;
            }
            
            // Function to go to next slide
            function nextSlide() {
                let next = currentSlide + 1;
                if (next >= slides.length) {
                    next = 0;
                }
                showSlide(next);
            }
            
            // Function to start the auto slide
            function startSlideShow() {
                slideInterval = setInterval(nextSlide, slideDuration);
                statusIndicator.textContent = "Auto-playing";
            }
            
            // Function to pause the auto slide
            function pauseSlideShow() {
                clearInterval(slideInterval);
                statusIndicator.textContent = "Paused";
            }
            
            // Initialize the slider
            function initSlider() {
                // Start the automatic slideshow
                startSlideShow();
                
                // Add click event to dots
                dots.forEach(dot => {
                    dot.addEventListener('click', function() {
                        const slideIndex = parseInt(this.getAttribute('data-slide'));
                        showSlide(slideIndex);
                        // Restart the interval after manual navigation
                        pauseSlideShow();
                        startSlideShow();
                    });
                });
                
                // Pause on hover
                const sliderArea = document.querySelector('.slider-area');
                sliderArea.addEventListener('mouseenter', pauseSlideShow);
                sliderArea.addEventListener('mouseleave', startSlideShow);
            }
            
            // Initialize the slider
            initSlider();
        });
    </script>
@endpush