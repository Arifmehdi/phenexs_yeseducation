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
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Our Blog</li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- sidebar-page-container -->
<div class="sidebar-page-container blog-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('storage/post_images/' . $blog->feature_image) }}" alt="{{ $blog->title }}">
                            </figure>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>{{ $blog->created_at->format('M d, Y') }}</h5>
                                </div>
                                <h2>{{ $blog->title }}</h2>
                                <ul class="post-info clearfix">
                                    <li>By {{ $blog->addedBy->name ?? 'Admin' }}</li>
                                    <li>{{ $blog->category->name ?? 'Uncategorized' }}</li>
                                    {{-- Example for comments count, replace with dynamic count if available --}}
                                    <li>0 Comments</li>
                                </ul>
                                <div class="text">
                                    <p>{!! $blog->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-share-option clearfix">
                        <ul class="tags pull-left clearfix">
                            <li>TAGS:</li>
                            <li><a href="blog-details.html">Family Visa</a>,</li>
                            <li><a href="blog-details.html">Immigration</a>,</li>
                            <li><a href="blog-details.html">Sponsor</a></li>
                        </ul>
                        <ul class="social-links pull-right clearfix">
                            <li>SHARE</li>
                            <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="blog-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="blog-details.html"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                    <div class="comments-area">
                        <div class="group-title">
                            <h2>2 Post Replies</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <div class="comment-box">
                            <div class="comment">
                                <figure class="thumb-box">
                                    <img src="{{ asset('frontend/assets/images/news/comment-1.jpg') }}" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h5>James Thomas</h5>
                                        <span class="comment-time">May 23, 2020 at 12:00 AM</span>
                                    </div>
                                    <p>Imperdiet in nulla sed viverraut loremut dapib estetur Lorem ipsum dolor sit amet
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniy minim sed
                                        exe ullamco laboris nisi ut aliquip cepteur sint occaecaty.</p>
                                    <a href="blog-single.html">reply<i class="flaticon-send"></i></a>
                                </div>
                            </div>
                            <div class="comment">
                                <figure class="thumb-box">
                                    <img src="{{ asset('frontend/assets/images/news/comment-2.jpg') }}" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h5>Jhon Camaron</h5>
                                        <span class="comment-time">May 22, 2020 at 12:00 AM</span>
                                    </div>
                                    <p>Imperdiet in nulla sed viverraut loremut dapib estetur Lorem ipsum dolor sit amet
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniy minim sed
                                        exe ullamco laboris nisi ut aliquip cepteur sint occaecaty.</p>
                                    <a href="blog-single.html">reply<i class="flaticon-send"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-form-area">
                        <div class="group-title">
                            <h2>Leave a Reply</h2>
                            <p>Note: We’ll not publish your email anyway, you’re safe!</p>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                        <form action="#" method="post"
                            class="comment-form">
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Comment"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="website" placeholder="Website">
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn-two"><i class="flaticon-send"></i>Post
                                    Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar blog-sidebar">
                    <x-blog-subscription />
                    <x-blog-categories />
                    <x-recent-posts />
                    <x-online-assesment />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-page-container end -->
@endsection