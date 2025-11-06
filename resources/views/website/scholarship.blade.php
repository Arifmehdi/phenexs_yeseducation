@extends('frontend.layouts.master')

@section('title', 'YES Education - Scholarship')

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
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title.jpg') }}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>Scholarship</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Scholarship</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- apply-style-two -->
<section class="apply-style-two">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h6>Step 1</h6>
                        <div class="icon-box">
                            <div class="arrow" style="background-image: url('{{ asset('frontend/assets/images/icons/arrow-1.png') }}');"></div>
                            <i class="flaticon-document"></i>
                        </div>
                        <h3><a href="index-2.html">Fill In The <br />Required Form</a></h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat lobortis em consequat sed ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h6>Step 2</h6>
                        <div class="icon-box">
                            <div class="arrow" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                            <i class="flaticon-copy"></i>
                        </div>
                        <h3><a href="index-2.html">Submit All Your <br />Attested Documents</a></h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat lobortis em consequat sed ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h6>Step 3</h6>
                        <div class="icon-box"><i class="flaticon-plane"></i></div>
                        <h3><a href="index-2.html">Get Ready To <br />Receive your Visa</a></h3>
                        <p>Kaoreet efficitur leo. Aliquam era volutpat lobortis em consequat sed ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- apply-style-two -->

@endsection