@extends('frontend.layouts.master')

@section('title', 'YES Education - Blogs')

@section('meta')
<meta name="description"
    content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
<meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
<meta property="og:title" content="Contact Us - North Bengal">
<meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@section('content')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Blogs</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->

<!--Latest News Area Start-->
<div class="latest-area section-padding latest-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/img/latest/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="{{ route('blogDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="{{ route('blogDetails') }}" class="button-default">LEARN Now</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/img/latest/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="{{ route('blogDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="{{ route('blogDetails') }}" class="button-default">LEARN Now</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/img/latest/5.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="{{ route('blogDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="{{ route('blogDetails') }}" class="button-default">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/img/latest/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="{{ route('blogDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="{{ route('blogDetails') }}" class="button-default">LEARN Now</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/img/latest/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="{{ route('blogDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="{{ route('blogDetails') }}" class="button-default">LEARN Now</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/img/latest/6.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="{{ route('blogDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            <span><i class="zmdi zmdi-eye"></i>59</span>
                            <span><i class="zmdi zmdi-comments"></i>19</span>
                        </div>
                        <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                        <a href="{{ route('blogDetails') }}" class="button-default">LEARN Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                        <li><a href="{{ route('blogDetails') }}"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="current"><a href="{{ route('blogDetails') }}"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection