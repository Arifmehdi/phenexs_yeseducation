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
<section class="page-title" style="background-image: url('{{asset('frontend/assets/images/background/page-title-7.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>{{ $destination->title }}</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('destination')}}">Detination</a></li>
                <li>{{ $destination->title }}</li>
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
                            <li><a href="#" class="active">Business Visa<i
                                        class="flaticon-send"></i></a></li>
                            <li><a href="#">Students Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="#">Immigration Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="#">Transit Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="#">Tourists Visa<i class="flaticon-send"></i></a></li>
                            <li><a href="#">Diplomatic Visa<i class="flaticon-send"></i></a></li>
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
                                    <h4><a href="#">Business Visa Brochure</a></h4>
                                    <span>Last Update: 23 May 2020</span>
                                </li>
                                <li>
                                    <i class="flaticon-files"></i>
                                    <h4><a href="#">Visa Application Form</a></h4>
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
                                <li><a href="#">TOEFL</a></li>
                                <li><a href="#">PTE Coaching</a></li>
                                <li><a href="#">Take IELTS</a></li>
                                <li><a href="#">SAT Coaching</a></li>
                                <li><a href="#">Skills Exam</a></li>
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
                        <figure class="image-box"><img src="{{ asset('storage/destination_images/' . $destination->fi()) }}" alt=""></figure>
                        <div class="group-title">
                            <h2>{{ $destination->title }}</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="text">
                            {!! $destination->description  !!}
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