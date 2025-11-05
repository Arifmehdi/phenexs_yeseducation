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
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Scholarship</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Scholarship</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!-- Coming Soon Section -->
<section class="coming-soon-area py-5 my-5">
    <div class="container text-center">
        <h2 style="font-size: 48px; font-weight: 700; color: #333;">Coming Soon</h2>
        <p style="font-size: 18px; color: #777;">Our sholarship section is currently under development. Stay tuned for updates!</p>
    </div>
</section>
@endsection