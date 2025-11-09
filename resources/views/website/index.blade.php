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

<!-- Styles -->
<style>
.logo-image {
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 6px;
    background: #fff;
}

.logo-image img {
    width: 100%;
    height: auto;
    object-fit: contain;
    filter: none !important;
    /* Always show color */
    transition: transform 0.3s ease;
}

.logo-image:hover img {
    transform: scale(1.05);
}
</style>
@endpush 

@section('content')
<!-- banner-section -->
<section class="banner-section style-two">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

        @foreach($sliders as $slider)
        <div class="slide-item">
            <div class="image-layer"
                style="background-image: url('{{ asset('storage/frontSlider/' . $slider->featured_image) }}');"></div>

            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <div class="title-text">
                                <h1>{{ $slider->title }}</h1>
                                <div class="dotted-box">
                                    <span class="dotted"></span>
                                    <span class="dotted"></span>
                                    <span class="dotted"></span>
                                </div>
                            </div>
                            <p>{{ $slider->description }}</p>
                            @if($slider->btn_txt)
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn-one"><i
                                        class="flaticon-send"></i>{{ $slider->btn_txt }}</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- banner-section end -->


<!-- feature-style-two -->
<section class="feature-style-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="title-inner">
                                <div class="icon-box"><i class="flaticon-management"></i></div>
                                <h3>Solving Complex Challenges</h3>
                            </div>
                            <div class="text">
                                <p>Nunc quam arcpretim quis lobortis sem consequat cons newtetur diam ...</p>
                            </div>
                            <div class="link"><a href="index-2.html"><span>Read More</span><i
                                        class="flaticon-send"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="title-inner">
                                <div class="icon-box"><i class="flaticon-work"></i></div>
                                <h3>Ready-To-Work Immigration Force</h3>
                            </div>
                            <div class="text">
                                <p>Nunc quam arcpretim quis lobortis sem consequat cons newtetur diam ...</p>
                            </div>
                            <div class="link"><a href="index-2.html"><span>Read More</span><i
                                        class="flaticon-send"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="title-inner">
                                <div class="icon-box"><i class="flaticon-payment-method"></i></div>
                                <h3>Reliable Taskings Apply Visa</h3>
                            </div>
                            <div class="text">
                                <p>Nunc quam arcpretim quis lobortis sem consequat cons newtetur diam ...</p>
                            </div>
                            <div class="link"><a href="index-2.html"><span>Read More</span><i
                                        class="flaticon-send"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-two end -->


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

<!-- kdgjkds ksadjfkas djfkjfk sadkfjsadkf kasdjfks dfjksajdkf sadkfjks adfksadf kasdfk sdkfjkdslfjks kldsajfk sadkfjsdakfksadj fksdajfksd fkdsjfksdjfk asdkfjadksfj kasdfjkajkf   -->
<!-- feature-section start -->
@php
$features = [
['icon' => '01.PNG', 'title' => 'Student Counselling'],
['icon' => '02.PNG', 'title' => 'Student Application Support'],
['icon' => '03.PNG', 'title' => 'Scholarship Assistance'],
['icon' => '04.PNG', 'title' => 'Pre Departure Guidance'],
['icon' => '05.PNG', 'title' => 'Career Guidance'],
['icon' => '06.PNG', 'title' => 'Course Selection'],
['icon' => '07.PNG', 'title' => 'College / University Selection'],
['icon' => '08.PNG', 'title' => 'Whole Admission Processing'],
['icon' => '09.PNG', 'title' => 'Visa Application Advice'],
['icon' => '10.PNG', 'title' => 'Free Guideline About Life in Abroad'],
['icon' => '11.PNG', 'title' => 'Traveling Assistance'],
['icon' => '12.PNG', 'title' => 'Visa File Processing'],
];
@endphp

<section class="feature-section" style="padding: 80px 0;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700;">Why A Student sourcing YES Education?</h2>
            <p style="color: #555;">Students get help for</p>
        </div>

        <div class="row clearfix justify-content-center">
            @foreach ($features as $feature)
            <div class="col-lg-4 col-md-4 col-6 mb-4">
                <div class="feature-card d-flex align-items-center p-3"
                    style="background: #fff; border-radius: 12px; box-shadow: 0 3px 10px rgba(0,0,0,0.08); height: 100%; transition: all 0.3s ease;">

                    <!-- Icon -->
                    <div class="icon flex-shrink-0 text-center"
                        style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('frontend/assets/images/icons/' . $feature['icon']) }}"
                            alt="{{ $feature['title'] }} Icon" style="width: 55px; height: 55px; object-fit: contain;">
                    </div>

                    <!-- Title -->
                    <div class="feature-text text-start" style="margin-left: 10px;">
                        <h3 style="font-size: 17px; font-weight: 600; color: #222; margin: 0;">
                            {{ $feature['title'] }}
                        </h3>
                    </div>
                </div>
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
<section class="service-style-two bg-color-3">
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
                    <figure class="image-box"><a href="service-details.html"><img
                                src="assets/images/service/service-1.jpg') }}" alt=""></a></figure>
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
</section>
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
                                src="{{ asset('storage/destination_images/' . $destination->fi()) }}" alt="{{ $destination->title }}"></figure>
                        <div class="text">
                            <h3><a href="{{ route('destinationDetails', $destination->slug)}}">{{ $destination->category->name}}</a></h3>
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
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-1.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">MSC Criminal Justice</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-2.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">MSC Digital Marketing</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-3.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">MSC Project Management</a></h3>
                    </div>
                </div>
            </div>
            <div class="feature-block-one mb-30">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-3.jpg') }}"
                            alt=""></figure>
                    <div class="text">
                        <h3><a href="index.html">MSC Computer Science</a></h3>
                    </div>
                </div>
            </div>
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
                        <figure class="image-box"><img
                                src="{{ asset('storage/testimonial/'. $testimonial->image ) }}" alt=""></figure>
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
                                    src="{{ asset('storage/post_images/' . $blog->feature_image) }}" alt="{{ $blog->title }}"></a></figure>
                        <div class="lower-content">
                            <div class="post-date">
                                <h2>{{ strtoupper($blog->created_at->format('d')) }}</h2><span>{{ strtoupper($blog->created_at->format('M')) }}</span>
                            </div>
                            <h3><a href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <ul class="post-info clearfix">
                                <li><a href="{{ route('blogDetails', $blog->slug) }}">By {{ $blog->addedBy->name ?? 'Admin' }}</a></li>
                                <li><a href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->category->name ?? 'Uncategorized' }}</a>
                                {{-- ,<a href="{{ route('blogDetails', $blog->slug) }}">Work</a></li> --}}
                            </ul>
                            <div class="link"><a href="{{ route('blogDetails', $blog->slug) }}">Learn More<i class="flaticon-send"></i></a>
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
@endpush