@extends('frontend.layouts.master')

@section('title', 'YES Education - Blog Details')

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
                    <h1 class="text-center">Blog DETAILS</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Blog DETAILS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--News Details Area Start-->
<div class="news-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12">
                <div class="news-details-content">
                    <div class="single-latest-item">
                        <img src="{{ asset('frontend/img/details/2.jpg') }}" alt="">
                        <div class="single-latest-text">
                            <h3>Learn English in ease simply random text</h3>
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour,
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour,
                                There are many variations of passages of Lorem Ipsum available,</p>
                            <div class="quote-section">
                                <p>but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are going to use
                                    a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                    hidden in the middle of text.</p>
                            </div>
                            <p>Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable. If you
                                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                embarrassing hidden in the middle of text. </p>
                            <div class="tags-and-links">
                                <div class="related-tag">
                                    <span>Tag:</span>
                                    <ul class="tags">
                                        <li><a href="#">design,</a></li>
                                        <li><a href="#">Photoshop,</a></li>
                                        <li><a href="#">Web Design,</a></li>
                                        <li><a href="#">print</a></li>
                                    </ul>
                                </div>
                                <div class="social-links">
                                    <span>Share:</span>
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments">
                        <h4 class="title">Comments</h4>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/1.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Tokdir Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment comment-reply">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/2.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Kopal Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/3.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Recent Posts</h4>
                        <div class="recent-content">
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/7.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Learn English in</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/8.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Team Works</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/9.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Learn With Fun</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="img/event/10.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Writing Skill</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget comment">
                        <h4 class="title">Recent Comment</h4>
                        <div class="recent-content">
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/comment/3.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <p>There are many varia passages of Lorem Ipsuable,amar sonar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/comment/1.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">MD Tokdir Ali</a></h4>
                                    <p>There are many varia passages of Lorem Ipsuable,amar sonar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/comment/3.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <p>There are many varia passages of Lorem Ipsuable,amar sonar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <h4 class="title">Search by Tags</h4>
                        <ul class="tags">
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Premium</a></li>
                            <li><a href="#">Designtuto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of News Details Area-->
@endsection