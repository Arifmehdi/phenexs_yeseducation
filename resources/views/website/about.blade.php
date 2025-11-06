@extends('frontend.layouts.master')

@section('title', 'YES Education - About Us')

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
    style="background-image: url('{{ asset('frontend/assets/images/background/page-title.jpg') }}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>About Us</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- about-section -->
<section class="about-section">
    <div class="pattern-layer" style="background-image: url('{{ asset('frontend/assets/images/shape/pattern-1.png') }}');"></div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_1">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('frontend/assets/images/resource/about-5.jpg') }}" alt=""></figure>
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box">
                                    <div class="icon icon-1"></div>
                                    <div class="icon icon-2"></div>
                                </div>
                                <span>America’s Leading Visa & Immigration lawyers with</span>
                                <h1>24</h1>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>who are visarzo</p>
                            <h2>Not Just Traditional Visa & Immigration Firm</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="bold-text">
                            <p>Sponsoring and managing work visas parts now becoming results in the experience.</p>
                        </div>
                        <div class="text">
                            <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat.
                                lobortis sem consequat consequat imperdiet. In nulla sed viverraut loremut dapib es
                                tetur diam nunc bibendum imperdiets.</p>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn-two">Learn More<i class="flaticon-send"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- feature-section -->
<section class="feature-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-1.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h3><a href="index.html">Apply Visa Online</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-2.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h3><a href="index.html">Important Information</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-3.jpg') }}" alt=""></figure>
                        <div class="text">
                            <h3><a href="index.html">Immigration Resources</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->


<!-- cta-section -->
<section class="cta-section bg-color-1 centred">
    <div class="auto-container">
        <div class="inner-box">
            <h2>Unparalleled Consultancy from Experienced Lawyers</h2>
            <div class="text">
                <p>Dolor emque laudantium totam rem aperiam eaque ipsa quae ventore</p>
                <div class="dotted-box">
                    <div class="dotted"></div>
                    <div class="dotted"></div>
                    <div class="dotted"></div>
                    <div class="dotted"></div>
                    <div class="dotted"></div>
                    <div class="dotted"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- apply-style-two -->
<section class="apply-style-two about-page">
    <div class="auto-container">
        <div class="top-inner">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <p>How we help clients</p>
                        <h2>Following Steps Apply Online Visa</h2>
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
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h6>Step 1</h6>
                        <div class="icon-box">
                            <div class="arrow" style="background-image: url('{{ asset('frontend/assets/images/icons/arrow-1.png') }}');"></div>
                            <i class="flaticon-document"></i>
                        </div>
                        <h3><a href="index-2.html">Fill In The <br />Required Form</a></h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat lobortis em consequat sed ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h6>Step 2</h6>
                        <div class="icon-box">
                            <div class="arrow" style="background-image: url('{{ asset('frontend/assets/images/icons/arrow-1.png') }}');"></div>
                            <i class="flaticon-copy"></i>
                        </div>
                        <h3><a href="index-2.html">Submit All Your <br />Attested Documents</a></h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat lobortis em consequat sed ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h6>Step 3</h6>
                        <div class="icon-box"><i class="flaticon-plane"></i></div>
                        <h3><a href="index-2.html">Get Ready To <br />Receive your Visa</a></h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat lobortis em consequat sed ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- apply-style-two -->


<!-- choose-section -->
<section class="choose-section bg-color-3">
    <div class="pattern-layer" style="background-image: url('{{ asset('frontend/assets/images/shape/pattern-3.png') }}');"></div>
    <figure class="image-layer wow slideInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img
            src="{{ asset('frontend/assets/images/resource/choose-1.jpg') }}" alt=""></figure>
    <div class="auto-container">
        <div id="content_block_2">
            <div class="content-box">
                <div class="sec-title">
                    <p>why choose visarzo</p>
                    <h2>Countless Benefits & Easy Processing</h2>
                    <div class="dotted-box">
                        <span class="dotted"></span>
                        <span class="dotted"></span>
                        <span class="dotted"></span>
                    </div>
                </div>
                <div class="text">
                    <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat. lobortis sem
                        consequat consequat imperdiet. In nulla sed viverraut loremut dapib es tetur diam nunc bibendum
                        imperdiets.</p>
                </div>
                <div class="inner-box">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-air-freight"></i></div>
                        <h3>Legal Immigration Success</h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat. lobortis sem consequat consequat imperdiet. In
                            nulla sed viverraut loremut.</p>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-report"></i></div>
                        <h3>Required Documents Support</h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat. lobortis sem consequat consequat imperdiet. In
                            nulla sed viverraut loremut.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-section end -->


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


<!-- apply-section -->
<section class="apply-section">
    <div class="auto-container">
        <div class="inner-box clearfix">
            <figure class="image-box"><img src="{{ asset('frontend/assets/images/resource/apply-2.jpg') }}" alt=""></figure>
            <div class="content-box">
                <div class="icon-box">
                    <div class="icon icon-1"></div>
                    <div class="icon icon-2"></div>
                </div>
                <h4>Get Free Online Visa Assessment Today!</h4>
                <h2>Top Rated By Customers & Immigration Firms With 100% Success Rate.</h2>
                <a href="index.html" class="theme-btn-one"><i class="flaticon-send"></i>Apply Visa Now</a>
            </div>
        </div>
    </div>
</section>
<!-- apply-section end -->
@endsection