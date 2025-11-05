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
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">CONTACT US</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href='index.html'>Home</a></li>
                            <li>CONTACT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Google Map Area Start-->
<div class="google-map-area">
    <!-- Map Section -->
    <div id="contacts" class="map-area">
        <div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.036955469059!2d90.36556226266984!3d23.74704994976332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1762252857005!5m2!1sen!2sbd" 
                width="100%" 
                height="485" 
                style="border:0; filter: grayscale(100%); -webkit-filter: grayscale(100%);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

<!--End of Google Map Area-->
<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h4 class="contact-title">contact info</h4>
                <div class="contact-text">
                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">0123456789</span>
                    </p>
                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span
                            class="c-text">info@example.com</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">Your address goes
                            here.</span></p>
                </div>
                <h4 class="contact-title">social media</h4>
                <div class="link-social">
                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <h4 class="contact-title">send your massage</h4>
                <form id="contact-form" action="#"
                    method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="button-default">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
@endsection