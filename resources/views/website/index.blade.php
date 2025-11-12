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

@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Styles -->
<style>
         /* Video Section Styles */
        .video-hero-section {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
            display: flex;
            align-items: center;
            background: #000;
        }

        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .slider-content {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            color: white;
            display: flex;
            align-items: center;
        }

        /* Swiper Container - Left Aligned */
        .swiper-container {
            width: 100%;
            height: auto;
            max-width: 800px;
        }

        .swiper-wrapper {
            height: auto;
        }

        .swiper-slide {
            text-align: left;
            padding: 0;
            height: auto;
        }

        .slide-content {
            max-width: 800px;
            width: 100%;
            padding-right: 20px;
        }

        /* Title Styling */
        .slide-content h2 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .highlight-text {
            color: #D24147;
        }

        /* Strong Subtitle Styling */
        .subtitle-container {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .accent-line {
            width: 4px;
            height: 40px;
            background-color: #D24147;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .subtitle-text {
            font-size: 1.3rem;
            font-weight: 700;
            line-height: 1.4;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Stats Row Styling */
        .stats-row {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
            gap: 1.5rem;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex: 1;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #D24147;
            margin-bottom: 0.5rem;
            transition: transform 0.3s ease;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .stat-number:hover {
            transform: scale(1.1);
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Button Styling */
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 1.5rem;
        }

        .apply-now-btn {
            background-color: #D24147;
            color: #fff;
            padding: 14px 32px;
            border-radius: 8px;
            text-align: center;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .apply-now-btn:hover {
            background-color: #b53035;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .secondary-btn {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 12px 30px;
        }

        .secondary-btn:hover {
            background-color: white;
            color: #003054;
        }

        /* Swiper Pagination */
        .swiper-pagination {
            position: relative !important;
            bottom: auto !important;
            margin-top: 30px;
            text-align: left;
        }

        .swiper-pagination-bullet {
            background: white;
            opacity: 0.7;
            width: 12px;
            height: 12px;
            margin: 0 8px !important;
        }

        .swiper-pagination-bullet-active {
            background: #D24147;
            opacity: 1;
        }

        /* Ensure proper Swiper fade effect */
        .swiper-fade .swiper-slide {
            opacity: 0 !important;
            transition: opacity 0.5s ease-in-out;
        }

        .swiper-fade .swiper-slide-active {
            opacity: 1 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .slide-content h2 {
                font-size: 2.5rem;
            }
            
            .stats-row {
                flex-wrap: wrap;
            }
            
            .stat-item {
                flex: 0 0 calc(50% - 1rem);
            }
        }

        @media (max-width: 768px) {
            .video-hero-section {
                height: 500px;
            }
            
            .slide-content h2 {
                font-size: 2rem;
                line-height: 1.3;
            }
            
            .subtitle-text {
                font-size: 1.1rem;
            }
            
            .stats-row {
                flex-direction: column;
                gap: 1rem;
            }
            
            .stat-item {
                flex: 1;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .swiper-pagination {
                margin-top: 20px;
            }
            
            .swiper-pagination-bullet {
                width: 8px;
                height: 8px;
                margin: 0 6px !important;
            }
            
            .slider-content {
                padding: 0 15px;
            }
        }

        @media (max-width: 480px) {
            .video-hero-section {
                height: 450px;
            }
            
            .slide-content h2 {
                font-size: 1.8rem;
            }
            
            .accent-line {
                height: 30px;
            }
            
            .stat-number {
                font-size: 1.8rem;
            }
        }
</style>
<style>
.modern-guide-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    /* Initial border setup */
    border-left: 3px solid #D24147;
    border-right: 3px solid #D24147;
    border-bottom: 3px solid #D24147;
    border-top: 1px solid #e9ecef;
}

.modern-guide-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    /* Enhanced border on hover */
    border-left: 3px solid #D24147;
    border-right: 3px solid #D24147;
    border-bottom: 3px solid #D24147;
    border-top: 1px solid #e9ecef;
    /* Add glow effect */
    box-shadow: 0 25px 50px rgba(210, 65, 71, 0.2);
}

/* Alternative: Gradient border effect */
.modern-guide-card::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #D24147, #003054, #D24147);
    border-radius: 18px;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.modern-guide-card:hover::before {
    opacity: 1;
}

.guide-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 2;
}

.guide-badge span {
    background: #D24147;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.modern-guide-card:hover .guide-badge span {
    transform: scale(1.05);
    background: #b53035;
}

.modern-guide-card h3 {
    font-size: 32px;
    font-weight: 700;
    color: #003054;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.modern-guide-card:hover h3 {
    color: #D24147;
}

.modern-guide-card p {
    font-size: 18px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
    transition: color 0.3s ease;
}

.modern-guide-card:hover p {
    color: #555;
}

.guide-features {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.feature-tag {
    background: rgba(210, 65, 71, 0.1);
    color: #D24147;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.modern-guide-card:hover .feature-tag {
    background: rgba(210, 65, 71, 0.15);
    border: 1px solid rgba(210, 65, 71, 0.3);
    transform: translateY(-2px);
}

.download-section {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.modern-guide-card:hover .download-section {
    background: white;
    border: 2px solid #e9ecef;
    transform: scale(1.02);
}

.file-icon {
    font-size: 48px;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.modern-guide-card:hover .file-icon {
    transform: scale(1.1) rotate(5deg);
}

.download-btn {
    display: inline-flex;
    align-items: center;
    background: #D24147;
    color: white;
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    margin-bottom: 10px;
    border: 2px solid transparent;
}

.download-btn:hover {
    background: #b53035;
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    border: 2px solid #D24147;
}

.download-btn i {
    margin-left: 8px;
    transition: transform 0.3s ease;
}

.download-btn:hover i {
    transform: translateX(3px);
}

.file-specs {
    font-size: 14px;
    color: #666;
    margin: 0;
    transition: color 0.3s ease;
}

.modern-guide-card:hover .file-specs {
    color: #D24147;
}

/* Add a subtle pulse animation on hover */
@keyframes cardPulse {
    0% { transform: translateY(-8px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(-8px); }
}

.modern-guide-card:hover {
    animation: cardPulse 2s ease-in-out infinite;
}

/* Alternative Design with More Pronounced Borders */
.modern-guide-card.alternative {
    border: none;
    position: relative;
}

.modern-guide-card.alternative::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #D24147, #003054, #D24147);
    border-radius: 0 0 16px 16px;
    transition: height 0.3s ease;
}

.modern-guide-card.alternative:hover::after {
    height: 6px;
}

.modern-guide-card.alternative::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 2px solid transparent;
    border-radius: 16px;
    background: linear-gradient(45deg, #D24147, #003054) border-box;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: destination-out;
    mask-composite: exclude;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modern-guide-card.alternative:hover::before {
    opacity: 1;
}

@media (max-width: 991px) {
    .modern-guide-card {
        padding: 30px;
    }
    
    .modern-guide-card h3 {
        font-size: 26px;
    }
    
    .guide-badge {
        position: relative;
        top: auto;
        right: auto;
        margin-bottom: 20px;
        display: inline-block;
    }
}

@media (max-width: 767px) {
    .modern-guide-card {
        padding: 25px 20px;
    }
    
    .modern-guide-card h3 {
        font-size: 22px;
    }
    
    .guide-features {
        justify-content: center;
    }
    
    .modern-guide-card:hover {
        transform: translateY(-4px);
    }
}
</style>
@endpush

@section('content')
<!-- Swiper CSS -->


@section('content')
<!-- Remove duplicate Swiper CSS link and duplicate @section('content') -->
    <section class="video-hero-section">
        <!-- Background Video -->
        <video class="background-video" autoplay loop muted preload="auto" playsinline>
            <source src="https://mie-global-te43fd.s3.amazonaws.com/static/documents/video-2_online-video-cutter.com.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <!-- Dark Overlay -->
        <div class="video-overlay"></div>
        
        <!-- Slider Content -->
        <div class="slider-content">
            <div class="swiper mySwiper swiper-fade">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <h2>
                                Applications are open <br>for January - <span class="highlight-text">2026</span> intake
                            </h2>
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    100% Free Counselling & Application Processing
                                </p>
                            </div>
                            <a href="/application" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <h2>
                                Comprehensive <span class="highlight-text">Admissions</span><br>Support
                            </h2>
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    From Education to Career - We Support You All The Way
                                </p>
                            </div>
                            <a href="/application" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <h2>
                                <span class="highlight-text">UK</span> University<br>Partnerships
                            </h2>
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    Partnering With Universities Worldwide For Your Success
                                </p>
                            </div>
                            <div class="btn-group">
                                <a href="/application" class="apply-now-btn">Apply Now</a>
                                <a href="/universities" class="apply-now-btn secondary-btn">View all Universities</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="subtitle-container">
                                <div class="accent-line"></div>
                                <p class="subtitle-text">
                                    100% Free Counselling & Application Processing
                                </p>
                            </div>
                            <h2>
                                One of the largest <span class="highlight-text">UK</span><br>University representatives
                            </h2>
                            
                            <div class="stats-row">
                                <div class="stat-item">
                                    <span class="stat-number">20,000+</span>
                                    <span class="stat-label">Student's Career</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">35+</span>
                                    <span class="stat-label">Recruitment Awards</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">140+</span>
                                    <span class="stat-label">University Partners</span>
                                </div>
                            </div>
                            
                            <a href="/application" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Swiper Pagination - Now appears below the content -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>




<!-- Modern Alternative Design -->
<section class="feature-style-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 feature-block">
                    <div class="modern-guide-card alternative">
                        <div class="card-content">
                            <!-- <div class="guide-badge">
                                <span>🎓 Study Guide</span>
                            </div> -->
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-7">
                                    <h3>Your Ultimate Guide to Study in the UK</h3>
                                    <p>Get comprehensive insights, tips, and everything you need to know about pursuing your education in the United Kingdom.</p>
                                    <!-- <div class="guide-features">
                                        <span class="feature-tag">✓ Updated for 2025</span>
                                        <span class="feature-tag">✓ 20+ Detailed Pages</span>
                                        <span class="feature-tag">✓ Free Download</span>
                                    </div> -->
                                </div>
                                <div class="col-lg-4 col-md-5 text-center">
                                    <div class="download-section">
                                        <!-- <div class="file-icon">📄</div> -->
                                        <a href="#" class="download-btn">
                                            Download Free Guide
                                            <i class="flaticon-send"></i>
                                        </a>
                                        <p class="file-specs">PDF Format • Instant Access</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- about-style-two -->
<section class="about-style-two">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_3">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>who are YES Education</p>
                            <h2>The Leading Visa & Immigration Expert Lawyers Since 2000</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="text">
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vsr tatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur magnid.</p>
                        </div>
                        <div class="btn-box"><a href="index-2.html" class="theme-btn-two">Learn More<i
                                    class="flaticon-send"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_2">
                    <div class="image-box">
                        <figure class="image-1"><img src="{{ asset('frontend/assets/images/resource/about-2.jpg') }}"
                                alt=""></figure>
                        <figure class="image-2"><img src="{{ asset('frontend/assets/images/resource/about-3.jpg') }}"
                                alt=""></figure>
                        <figure class="image-3"><img src="{{ asset('frontend/assets/images/resource/about-4.jpg') }}"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->


<!-- clients-section -->
<section class="clients-section" style="padding: 60px 0; background-color: #f9f9f9;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700;">UK Featured Universities</h2>
            <p style="color: #555;">Worldwide education institutions we hold partnerships with</p>
        </div>

        <div class="five-item-carousel  owl-carousel owl-theme owl-dots-none owl-nav-none">
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-1.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-2.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-4.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-5.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-6.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-7.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-8.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-9.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-10.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-12.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-13.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-14.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-15.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-16.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-18.png') }}"
                        alt=""></a></figure>
            <figure class="logo-image"><a href="#"><img src="{{ asset('frontend/assets/images/clients/Frame-19.png') }}"
                        alt=""></a></figure>
        </div>
    </div>
</section>

<!-- feature-section start -->

<section class="feature-section" style="padding: 80px 0;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700;">Why A Student sourcing YES Education?</h2>
            <p style="color: #555;">Students get help for</p>
        </div>

        <div class="row clearfix justify-content-center">
            @foreach ($services as $feature)
            <div class="col-lg-4 col-md-4 col-6 mb-4">
                <a href="{{ route('serviceDetails', $feature->slug) }}" class="text-decoration-none">
                    <div class="feature-card d-flex align-items-center p-3"
                        style="background: #fff; border-radius: 12px; box-shadow: 0 3px 10px rgba(0,0,0,0.08); height: 100%; transition: all 0.3s ease;">

                        <!-- Icon -->
                        <div class="icon flex-shrink-0 text-center"
                            style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('storage/services_images/' . $feature->icon_image) }}"
                                alt="{{ $feature->title }} Icon"
                                style="width: 55px; height: 55px; object-fit: contain;">
                        </div>

                        <!-- Title -->
                        <div class="feature-text text-start" style="margin-left: 10px;">
                            <h3 style="font-size: 17px; font-weight: 600; color: #222; margin: 0;">
                                {{ $feature->title }}
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>






<!-- cta ads section start -->
<section class="cta-section centred" style="width: 100%; overflow: hidden; margin-top: 80px;">
    <img src="{{ asset('frontend/assets/images/ads/January_Intake_in_the_UK_-_Desktop_Image.original.webp') }}"
        alt="January Intake Banner" style="width: 100%; height: auto; display: block;">
</section>
<!-- cta ads section end -->


<!-- service-style-two -->
{{--<section class="service-style-two bg-color-3">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>countries we offer support</p>
            <h2>Immigration & Visa Services</h2>
            <span>Sponsoring and managing work visas parts now becoming results the experience <br />aute irure dolor in
                reprehenderit cepteur sint ocaecat cupidatate</span>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="service-block-two">
                <div class="inner-box">
                    <figure class="image-box"><a href="service-details.html"><img
                                src="{{ asset('frontend/assets/images/service/service-1.jpg') }}" alt=""></a></figure>
<div class="lower-content">
    <div class="box">
        <div class="icon-box"><i class="flaticon-manager"></i></div>
        <h3><a href="service-details.html">Working Visas</a></h3>
        <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
            perspiciatis unde omnis iste.</p>
    </div>
    <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
    </div>
</div>
</div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <h3><a href="service-details.html">Studing Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                <h3><a href="service-details.html">Visiting Visa</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-1.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-manager"></i></div>
                <h3><a href="service-details.html">Working Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <h3><a href="service-details.html">Studing Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                <h3><a href="service-details.html">Visiting Visa</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img src="assets/images/service/service-1.jpg') }}"
                    alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-manager"></i></div>
                <h3><a href="service-details.html">Working Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <h3><a href="service-details.html">Studing Visas</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="service-block-two">
    <div class="inner-box">
        <figure class="image-box"><a href="service-details.html"><img
                    src="{{ asset('frontend/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
        <div class="lower-content">
            <div class="box">
                <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                <h3><a href="service-details.html">Visiting Visa</a></h3>
                <p>Datat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed
                    perspiciatis unde omnis iste.</p>
            </div>
            <div class="link"><a href="service-details.html">Read More<i class="flaticon-send"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- <div class="more-text centred">
        <div class="auto-container">
            <div class="inner">
                <h3>YES Education is clearly your best partner at Immigration& Visa success. <a href="contact.html"><span>Get
                            In Touch</span><i class="flaticon-send"></i></a></h3>
            </div>
        </div>
    </div> -->
</section>--}}
<!-- service-style-two end -->


<!-- team-section -->
<section class="team-section">
    <div class="auto-container">
        <div class="top-inner">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <p>How we help clients</p>
                        <h2>Our Best Experts Ready To Help</h2>
                        <div class="dotted-box">
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>Sponsoring and managing work visas parts now becoming results the experience aute irure dolor
                            in reprehenderit cepteur sint ocae cat cupidatat non proident sunt in culpa quis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-1.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">Charles Henry</a></h4>
                            <span class="designation">CEO - Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-2.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">edward matthew</a></h4>
                            <span class="designation">Immigration Expert</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-3.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">ben christopher</a></h4>
                            <span class="designation">Senior Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/team/team-4.jpg') }}" alt="">
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="index-2.html">lindys thomas</a></h4>
                            <span class="designation">Marketing Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->

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
            @foreach($destinations as $destination)
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
                <div class="immigration-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img
                                src="{{ asset('storage/destination_images/' . $destination->fi()) }}"
                                alt="{{ $destination->title }}"></figure>
                        <div class="text">
                            <h3><a
                                    href="{{ route('destinationDetails', $destination->slug)}}">{{ $destination->category->name}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- immigration-section end -->


<!-- funfact-style-two -->
<section class="funfact-style-two" style="background:#2E2483; padding: 80px 0;">
    <div class="container">
        <!-- Headline -->
        <h2 style="color:#ffffff; text-align:center; font-size:36px; font-weight:700; margin-bottom:50px;">
            WHY YES EDUCATION ?
        </h2>
        <div class="row justify-content-center text-center text-white">

            <!-- Counter 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="70000">0</span><span>+</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Hours of counselling experience
                    </h5>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="2">0</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Branch offices with more on the way
                    </h5>
                </div>
            </div>

            <!-- Counter 3 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="600">0</span><span>+</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Student placed Abroad
                    </h5>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="99">0</span><span>%</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Visa succès rate (one of the best in the country)
                    </h5>
                </div>
            </div>

            <!-- Counter 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="10" data-stop="10">0</span><span>+</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Years of experience
                    </h5>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span>US$6.5 Million</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Scholarships worth US $4.5 million
                    </h5>
                </div>
            </div>

            <!-- Counter 3 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span>1-1</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Scholarships worth US $4.5 million
                    </h5>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                <div>
                    <div class="icon-box mb-4" style="font-size:50px; color:#ffffff;">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="count-outer count-box mb-3" style="font-size:42px; font-weight:800; color:#ffffff;">
                        <span class="count-text" data-speed="1500" data-stop="21">0</span>
                    </div>
                    <h5 style="font-size:16px; font-weight:400; margin-top:15px; color:#ffffff;">
                        Universities have exclusive
                    </h5>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- funfact-style-two end -->

<!-- feature-section -->
<section class="feature-section sec-pad-2">
    <div class="auto-container">
        <!-- Headline -->
        <h2 style="text-align:center; font-size:36px; font-weight:700; margin-bottom:50px;">
            SEE OUR TOP COURSES
        </h2>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

            @foreach($courses as $course)
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('storage/courses_images/' . $course->feature_image) }}"
                            alt="{{$course->title}}"></figure>
                    <div class="text">
                        <h3><a href="{{ route('courseDetails', $course->slug) }}">{{$course->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- feature-section end -->



<!-- testimonial-style-two -->
<section class="testimonial-style-two bg-color-3">
    <div class="pattern-layer"
        style="background-image: url('{{ asset('frontend/assets/images/shape/pattern-6.png') }}');"></div>
    <div class="auto-container">
        <div class="sec-title centred">
            <p>clients testimonials</p>
            <h2>What Customers <br />Saying About YES Education</h2>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="author-inner">
                        <figure class="image-box"><img src="{{ asset('storage/testimonial/'. $testimonial->image ) }}"
                                alt=""></figure>
                        <h5>{{ $testimonial->name }}</h5>
                        <span class="designation">{{ $testimonial->address }}</span>
                    </div>
                    <div class="content-inner">
                        <div class="rating-box">
                            <h6>{{ $testimonial->company }}</h6>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="text">
                            <p>{!! $testimonial->text_en !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- testimonial-style-two end -->


<!-- news-section -->
<section class="news-section">
    <div class="auto-container">
        <div class="top-inner">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <p>How we help clients</p>
                        <h2>World Immigration News & Updates</h2>
                        <div class="dotted-box">
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                            <span class="dotted"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>Sponsoring and managing work visas parts now becoming results the experience aute irure dolor
                            in reprehenderit cepteur sint ocae cat cupidatat non proident sunt in culpa quis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ route('blogDetails', $blog->slug) }}"><img
                                    src="{{ asset('storage/post_images/' . $blog->feature_image) }}"
                                    alt="{{ $blog->title }}"></a></figure>
                        <div class="lower-content">
                            <div class="post-date">
                                <h2>{{ strtoupper($blog->created_at->format('d')) }}</h2>
                                <span>{{ strtoupper($blog->created_at->format('M')) }}</span>
                            </div>
                            <h3><a href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <ul class="post-info clearfix">
                                <li><a href="{{ route('blogDetails', $blog->slug) }}">By
                                        {{ $blog->addedBy->name ?? 'Admin' }}</a></li>
                                <li><a
                                        href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->category->name ?? 'Uncategorized' }}</a>
                                    {{-- ,<a href="{{ route('blogDetails', $blog->slug) }}">Work</a></li> --}}
                            </ul>
                            <div class="link"><a href="{{ route('blogDetails', $blog->slug) }}">Learn More<i
                                        class="flaticon-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- news-section end -->

@endsection
@push('js')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<!-- Initialize Carousel -->
<script>
$(document).ready(function() {
    $('.five-item-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});
</script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize Swiper with proper configuration
    var swiper = new Swiper(".mySwiper", {
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        speed: 1000,
        grabCursor: true,
        preloadImages: true,
        updateOnWindowResize: true
    });
    
    // Initialize Owl Carousel
    $('.five-item-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});
</script>
@endpush