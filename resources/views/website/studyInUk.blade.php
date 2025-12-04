@extends('frontend.layouts.master')

@section('title', 'YES Education - Event Details')

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
<x-breadcrumb :title="$slug" image="{{ asset('frontend/assets/images/background/page-title-6.jpg') }}" />
<!--End Page Title-->

<!-- sidebar-page-container -->


<!-- sidebar-page-container end -->

<x-faculties />

<x-partner />

<!-- faq content start here  -->
<x-faq-content />
<!-- faq content end here  -->

<x-student-reviews />

<x-student-subscription />
@endsection