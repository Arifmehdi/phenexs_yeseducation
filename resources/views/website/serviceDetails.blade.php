@extends('frontend.layouts.master')

@section('title', 'YES Education - Service Details')

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
<section class="page-title" style="background-image: url('{{asset('frontend/assets/images/background/page-title-7.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Business Visa</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Visas</li>
                <li>Business Visa</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- sidebar-page-container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-categories">
                        <ul class="categories-list clearfix">
                            <li><a href="service-details.html" class="active">Business Visa<i
                                        class="flaticon-send"></i></a></li>
                            <li><a href="service-details-2.html">Students Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="service-details-3.html">Immigration Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="service-details-4.html">Transit Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="service-details-5.html">Tourists Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="service-details-6.html">Diplomatic Visa<i class="flaticon-send"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget sidebar-download">
                        <div class="widget-title">
                            <h3>Related Downloads</h3>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <ul class="download-list clearfix">
                                <li>
                                    <i class="flaticon-files"></i>
                                    <h4><a href="coaching-details.html">Business Visa Brochure</a></h4>
                                    <span>Last Update: 23 May 2020</span>
                                </li>
                                <li>
                                    <i class="flaticon-files"></i>
                                    <h4><a href="coaching-details.html">Visa Application Form</a></h4>
                                    <span>Last Update: 23 May 2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-categories-2">
                        <div class="widget-title">
                            <h3>Education Coaching</h3>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <ul class="categories-list clearfix">
                                <li><a href="service-details.html">TOEFL</a></li>
                                <li><a href="service-details.html">PTE Coaching</a></li>
                                <li><a href="service-details.html">Take IELTS</a></li>
                                <li><a href="service-details.html">SAT Coaching</a></li>
                                <li><a href="service-details.html">Skills Exam</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-assessment">
                        <div class="widget-title">
                            <h3>Free Online Assessment</h3>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <form action="#" method="post"
                                class="assessment-form">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Select">Select Visa Type</option>
                                            <option value="1">Working Visas</option>
                                            <option value="2">Study Visas</option>
                                            <option value="3">Business Visas</option>
                                            <option value="4">Tourist Visas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn-two"><i class="flaticon-send"></i>Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="coaching-details-content service-details-content">
                    <div class="content-style-one">
                        <figure class="image-box"><img src="{{ asset('frontend/assets/images/service/service-16.jpg') }}" alt=""></figure>
                        <div class="group-title">
                            <h2>Business Visa</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="text">
                            <h3>Sponsoring and managing work visas parts now becoming results in the experience with
                                future guranteed.</h3>
                            <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                lobortis sem consequat consequat imperdiet. In nulla sed viverraut loremut dapib estetur
                                diam nunc bibendum imperdiets. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com- modo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        </div>
                    </div>
                    <div class="content-style-two">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-document"></i></div>
                                        <h4>Fill In The <br />Required Form</h4>
                                        <p>Nunc quam arc pretium quis lobortis sem consequat conse tetur diam nunc
                                            bibend.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-copy"></i></div>
                                        <h4>Submit Your <br />Original Documents</h4>
                                        <p>Nunc quam arc pretium quis lobortis sem consequat conse tetur diam nunc
                                            bibend.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-plane"></i></div>
                                        <h4>Get The Visa <br />Resource Material</h4>
                                        <p>Nunc quam arc pretium quis lobortis sem consequat conse tetur diam nunc
                                            bibend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Where and How to Apply for a Business Visa?</h3>
                        <div class="text">
                            <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                    <div class="two-column">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="{{ asset('frontend/assets/images/service/service-15.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Business Visa Benefits</h3>
                                    <ul class="list clearfix">
                                        <li>Labore et dolore ipsum magna aliqua</li>
                                        <li>Ut enim veniam, quis nostrud minim exerc</li>
                                        <li>Itation ullamco laboris nisiut aliquip irure</li>
                                        <li>Dolor in reprehenderit voluptate velit esse</li>
                                        <li>Cillum dolore fugiat nulla pariatur excepteur</li>
                                        <li>Sint occaecat cupidatat non proident</li>
                                        <li>Bunt in culpa qui officia deserunt mollit anim</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h3>How To Do Test Preparation</h3>
                            <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                lobortis sem consequat consequat imperdiet. In nulla sed viverraut loremut dapib estetur
                                diam nunc bibendum imperdiets. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <h3>Frequently asked Questions</h3>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>How long does it take for a Student Visa to process?</h5>
                                </div>
                                <div class="acc-content current">
                                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>What is the fee structure for visa submission?</h5>
                                </div>
                                <div class="acc-content">
                                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>What are the important things to know as a Student Visa applicant?</h5>
                                </div>
                                <div class="acc-content">
                                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-page-container end -->
@endsection