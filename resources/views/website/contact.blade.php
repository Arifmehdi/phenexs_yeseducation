@extends('frontend.layouts.master')

@section('title', 'YES Education - Contact Us')

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
                <h1>Contact Us</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact-page-section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="map-inner">
            <div class="top-inner">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <p>How we help clients</p>
                            <h2>Got Immigration or Visa Problems?</h2>
                            <div class="dotted-box">
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                                <span class="dotted"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                        <div class="text">
                            <p>We are always ready to help customers with any difficulty about the experience aute irure
                                dolor in reprehenderit cepteur sint ocae cat cupidatat non proident sunt in culpa quis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-column">
                <div class="google-map" id="contact-google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29215.339768036232!2d90.36431359074973!3d23.750322232223823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9341c1dc9a1%3A0xcb27ac3efab1eaa4!2sYES%20Education!5e0!3m2!1sen!2sbd!4v1762439797894!5m2!1sen!2sbd"
                        width="100%"
                        height="450"
                        style="border:0; border-radius: 10px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="info-inner">
            <div class="row clearfix">
                <div class="col-xl-10 col-lg-12 col-md-12 offset-xl-1 big-column">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-pin"></i></div>
                                    <h3>Office Address</h3>
                                    <p>House 30, Road 7, Block C, Niketan, Gulshan 1, Dhaka, Bangladesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-call"></i></div>
                                    <h3>Phone Us</h3>
                                    <p>Hotline: <br><a href="tel:08801684931156">+880 1684-931156 
                                        <br>  <a href="tel:8801717564814"></a> +880 1717-564814 
                                        <br>  <a href="tel:8801756563599"></a> +880 1756-563599 
                                        <br>  <a href="tel:8801898828980"></a> +880 1898-828980 
                                        <br>  <a href="tel:8801898828982"></a>+880 1898-828982</a>
                                        <br />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-envelope"></i></div>
                                    <h3>Send Message</h3>
                                    <p><a href="mailto:info@yesehec.com">info@yesehec.com | </a><br /><a
                                            href="mailto:admission@yesehec.com">admission@yesehec.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form-inner">
            <div class="sec-title centred">
                <h2>Let’s Start a Conversation Today!</h2>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <div class="form-inner">
                <form method="post" action="#" id="contact-form"
                    class="default-form">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name " required="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" required="" placeholder="Phone No.">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" required="" placeholder="Subject">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Select">Service Required</option>
                                    <option value="1">Working Visas</option>
                                    <option value="2">Study Visas</option>
                                    <option value="3">Business Visas</option>
                                    <option value="4">Tourist Visas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                            <button class="theme-btn-two" type="submit" name="submit-form"><i
                                    class="flaticon-send"></i>Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact-page-section end -->
@endsection