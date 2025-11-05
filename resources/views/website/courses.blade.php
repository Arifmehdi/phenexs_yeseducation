@extends('frontend.layouts.master')

@section('title', 'YES Education - Courses')

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
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">POPULAR COURSES</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Search Category Start-->
<div class="search-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <form action="#" method="post">
                    <div class="form-container">
                        <div class="box-select">
                            <div class="select large">
                                <select name="category">
                                    <option>All Categories</option>
                                    <option>Web Design</option>
                                    <option>Designing</option>
                                    <option>Development</option>
                                    <option>Programming</option>
                                    <option>Developing</option>
                                </select>
                            </div>
                            <div class="select small">
                                <select name="date">
                                    <option>Price</option>
                                    <option>$10000</option>
                                    <option>$35000</option>
                                    <option>$67000</option>
                                    <option>$82000</option>
                                    <option>$95000</option>
                                </select>
                            </div>
                            <div class="select medium">
                                <select name="date">
                                    <option>Course Type</option>
                                    <option>Web Design</option>
                                    <option>Designing</option>
                                    <option>Development</option>
                                    <option>Programming</option>
                                    <option>Developing</option>
                                </select>
                            </div>
                        </div>
                        <button type="button">Search Course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Search Category-->
<!--Course Area Start-->
<div class="course-area section-padding course-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
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
            <div class="col-lg-4 col-md-6 col-12">
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
            <div class="col-lg-4 col-md-6 col-12">
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
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{ asset('frontend/img/course/4.jpg') }}" alt=""></a>
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
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{ asset('frontend/img/course/5.jpg') }}" alt=""></a>
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
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{ asset('frontend/img/course/6.jpg') }}" alt=""></a>
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
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->
<!--Teachers Area Start-->
<div class="teachers-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR TEACHERS</h3>
                        <p>There are many variations of passages of Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection