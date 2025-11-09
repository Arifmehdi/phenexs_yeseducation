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
                            <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-14.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="post-date">
                                    <h5>APR 18, 2020</h5>
                                </div>
                                <h2>Country To Offer Point-Based Immigrations</h2>
                                <ul class="post-info clearfix">
                                    <li>By Admin</li>
                                    <li>Study Visa,Work</li>
                                    <li>5 Comments</li>
                                </ul>
                                <div class="text">
                                    <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era
                                        volutpat lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib
                                        estetur Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                        ipsa quae ab illo inventore veritatis.</p>
                                    <blockquote>
                                        <i class="flaticon-quote"></i>
                                        <p>Sponsoring and managing work visas parts now becoming results the experience
                                            aute irure dolor in reprehenderit cepteur sint ocae cat cupidatat non
                                            proident sunt in culpa quis.</p>
                                        <h5>James Thomas</h5>
                                    </blockquote>
                                    <p>Imperdiet. In nulla sed viverraut loremut dapib estetur Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="two-column">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="text">
                                    <h3>Rules: How To Apply For Visa</h3>
                                    <p>Nunc quam arcu, pretium quis quam sed, laore us consequat imperdiet. In nulla sed
                                        viverraut loremut ipsum dolor sit amet, consectetur.</p>
                                    <ul class="list clearfix">
                                        <li>Nunc quam arcu, pretium quis quam</li>
                                        <li>Laoreet efficitur leo liquam era</li>
                                        <li>Consequat imperdiet nula sed viverraut</li>
                                        <li>Ipsum dolor sit amet conse adipisicing</li>
                                        <li>Sed do eiusmod tempor incididunt</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/news-15.jpg') }}" alt=""></figure>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3>Our Capabilities For Visa & Immigration</h3>
                            <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat
                                lobortis sem consequat imperdiet. In nulla sed viverraut loremut dapib estetur Lorem
                                ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis.</p>
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
                                <li><a href="coaching-details.html">Working Visa</a></li>
                                <li><a href="coaching-details.html">Tourists Visa</a></li>
                                <li><a href="coaching-details.html">Immigration Visa</a></li>
                                <li><a href="coaching-details.html">Stydy Visa</a></li>
                                <li><a href="coaching-details.html">Transit Visa</a></li>
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
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="{{ asset('frontend/assets/images/news/post-1.jpg') }}" alt=""></a></figure>
                                <h5><a href="blog-details.html">Covid-19 And Its Impact On USA Immigration</a></h5>
                                <span class="post-date">April 13, 2020</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="{{ asset('frontend/assets/images/news/post-2.jpg') }}" alt=""></a></figure>
                                <h5><a href="blog-details.html">Country To Offer Point-Based Immigrations</a></h5>
                                <span class="post-date">April 12, 2020</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="{{ asset('frontend/assets/images/news/post-3.jpg') }}" alt=""></a></figure>
                                <h5><a href="blog-details.html">Your Visa Approval With Easy Steps</a></h5>
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
        </div>
    </div>
</div>
<!-- sidebar-page-container end -->
@endsection