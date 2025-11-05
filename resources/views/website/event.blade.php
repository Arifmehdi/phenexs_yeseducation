@extends('frontend.layouts.master')

@section('title', 'YES Education - Event')

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
                    <h1 class="text-center">Event</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Event</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Event Area Start-->
{{--<div class="event-area section-padding event-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="{{ route('eventDetails') }}">
                            <img src="{{ asset('frontend/img/event/1.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="{{ route('eventDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Comilla Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="{{ route('eventDetails') }}">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="{{ route('eventDetails') }}">
                            <img src="{{ asset('frontend/img/event/2.jpg') }}" alt="">
                            <span><span>25</span>Dec</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="{{ route('eventDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="{{ route('eventDetails') }}">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="{{ route('eventDetails') }}">
                            <img src="{{ asset('frontend/img/event/3.jpg') }}" alt="">
                            <span><span>01</span>Mar</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="{{ route('eventDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="{{ route('eventDetails') }}">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="{{ route('eventDetails') }}">
                            <img src="{{ asset('frontend/img/event/4.jpg')}}" alt="">
                            <span><span>27</span>May</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="{{ route('eventDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Comilla Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="{{ route('eventDetails') }}">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="{{ route('eventDetails') }}">
                            <img src="{{ asset('frontend/img/event/5.jpg') }}" alt="">
                            <span><span>12</span>Nov</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="{{ route('eventDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="{{ route('eventDetails') }}">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="{{ route('eventDetails') }}">
                            <img src="{{ asset('frontend/img/event/3.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="{{ route('eventDetails') }}">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                        </div>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata
                            din megla....</p>
                        <a class="button-default" href="{{ route('eventDetails') }}">LEARN Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                        <li><a href="{{ route('eventDetails') }}"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="current"><a href="{{ route('eventDetails') }}"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- Coming Soon Section -->
<section class="coming-soon-area py-5 my-5">
    <div class="container text-center">
        <h2 style="font-size: 48px; font-weight: 700; color: {{ route('eventDetails') }}333;">Coming Soon</h2>
        <p style="font-size: 18px; color: {{ route('eventDetails') }}777;">Our blog section is currently under development. Stay tuned for
            updates!</p>
    </div>
</section>
@endsection