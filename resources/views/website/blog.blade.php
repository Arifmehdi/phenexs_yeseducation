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
<!--Page Title-->
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title-6.jpg') }}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Latest News</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="{{ route('blogDetails') }}">Home</a></li>
                <li>Our Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- sidebar-page-container -->
<div class="sidebar-page-container blog-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-list-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ route('blogDetails') }}"><img
                                        src="{{ asset('frontend/assets/images/news/news-10.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>APR 18, 2020</h5>
                                </div>
                                <h2><a href="{{ route('blogDetails') }}">Covid-19 And Its Impact On USA Immigration</a></h2>
                                <ul class="post-info clearfix">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                                    <li><a href="#">5 Comments</a></li>
                                </ul>
                                <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                    lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                                </p>
                                <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i
                                            class="flaticon-send"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one">
                        <div class="inner-box">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-11.jpg') }}" alt=""></figure>
                                <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-11.jpg') }}" alt=""></figure>
                                <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-11.jpg') }}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>APR 17, 2020</h5>
                                </div>
                                <h2><a href="{{ route('blogDetails') }}">Country To Offer Point-Based Immigrations</a></h2>
                                <ul class="post-info clearfix">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                                    <li><a href="#">3 Comments</a></li>
                                </ul>
                                <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                    lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                                </p>
                                <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i
                                            class="flaticon-send"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('blogDetails') }}"><img src="{{ asset('frontend/assets/images/news/news-12.jpg') }}" alt=""></a>
                                <div class="video-btn"><a href="#"
                                        class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a></div>
                            </figure>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>APR 16, 2020</h5>
                                </div>
                                <h2><a href="{{ route('blogDetails') }}">Kickstart Your Visa Approval With Easy Steps</a></h2>
                                <ul class="post-info clearfix">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                                    <li><a href="#">7 Comments</a></li>
                                </ul>
                                <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                    lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                                </p>
                                <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i
                                            class="flaticon-send"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ route('blogDetails') }}"><img
                                        src="{{ asset('frontend/assets/images/news/news-13.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>APR 15, 2020</h5>
                                </div>
                                <h2><a href="{{ route('blogDetails') }}">We Provide True Visa Matching Policy</a></h2>
                                <ul class="post-info clearfix">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">Study Visa</a>,<a href="{{ route('blogDetails') }}">Work</a></li>
                                    <li><a href="#">5 Comments</a></li>
                                </ul>
                                <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                    lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur ...
                                </p>
                                <div class="link"><a href="{{ route('blogDetails') }}">Learn More<i
                                            class="flaticon-send"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper centred">
                        <ul class="pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar blog-sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <form action="#" method="post"
                            class="search-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search Blog" required="">
                                <button type="submit"><i class="flaticon-search-1"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget sidebar-categories-2">
                        <div class="widget-title">
                            <h3>Categories</h3>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <ul class="categories-list clearfix">
                                <li><a href="#">Working Visa</a></li>
                                <li><a href="#">Tourists Visa</a></li>
                                <li><a href="#">Immigration Visa</a></li>
                                <li><a href="#">Stydy Visa</a></li>
                                <li><a href="#">Transit Visa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-post">
                        <div class="widget-title">
                            <h3>Recent Posts</h3>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="{{ route('blogDetails') }}"><img
                                            src="{{ asset('frontend/assets/images/news/post-1.jpg') }}" alt=""></a></figure>
                                <h5><a href="{{ route('blogDetails') }}">Covid-19 And Its Impact On USA Immigration</a></h5>
                                <span class="post-date">April 13, 2020</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="{{ route('blogDetails') }}"><img
                                            src="{{ asset('frontend/assets/images/news/post-2.jpg') }}" alt=""></a></figure>
                                <h5><a href="{{ route('blogDetails') }}">Country To Offer Point-Based Immigrations</a></h5>
                                <span class="post-date">April 12, 2020</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="{{ route('blogDetails') }}"><img
                                            src="{{ asset('frontend/assets/images/news/post-3.jpg') }}" alt=""></a></figure>
                                <h5><a href="{{ route('blogDetails') }}">Your Visa Approval With Easy Steps</a></h5>
                                <span class="post-date">April 11, 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-support">
                        <div class="widget-content">
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/support-1.jpg') }}" alt=""></figure>
                            <ul class="content-box clearfix">
                                <li>
                                    <i class="flaticon-call"></i>
                                    <p>Any Questions? Call us</p>
                                    <h3><a href="tel:12463330079">+1 (246) 333 0079</a></h3>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <p>Any Questions? Email us</p>
                                    <h3><a href="mailto:info@example.com">info@example.com</a></h3>
                                </li>
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
                            <form action="" method="post"
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
        </div>
    </div>
</div>
<!-- sidebar-page-container end -->
@endsection