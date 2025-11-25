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

<x-breadcrumb title="Global office " />


<!-- sidebar-page-container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="coaching-details-content">


                    <div class="accordion-content">
                        <h3>Global Offices</h3>
<ul class="accordion-box">

    <x-global-office 
        title="Yes Education Dhaka"
        country="Bangladesh"
        email="bd@ytesedu.com"
        phone="+88017XXXXXXX"
        link="#"
        :hours="[
            'Monday' => '09:30 AM - 06:00 PM',
            'Tuesday' => '09:30 AM - 06:00 PM',
            'Wednesday' => '09:30 AM - 06:00 PM',
            'Thursday' => '09:30 AM - 06:00 PM',
            'Friday' => '09:30 AM - 06:00 PM',
            'Saturday' => 'Closed',
            'Sunday' => '09:30 AM - 06:00 PM',
        ]"
        map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.474985546755!2d85.31743658627273!3d27.702617264310096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b9d5a51f51%3A0xbd3ad46d4417cec5!2sAHZ%20Putalisadak%2C%20Nepal!5e0!3m2!1sen!2sbd!4v1756791096860!5m2!1sen!2sbd"
        active="true"
    />

    <x-global-office 
        title="Yes Education Abu Dhabi"
        country="UAE"
        email="info@yes.com"
        phone="0000000"
        link="#"
        :hours="[
            'Monday' => '09:30 AM - 06:00 PM',
            'Tuesday' => '09:30 AM - 06:00 PM',
            'Wednesday' => '09:30 AM - 06:00 PM',
            'Thursday' => '09:30 AM - 06:00 PM',
            'Friday' => '09:30 AM - 06:00 PM',
            'Saturday' => 'Closed',
            'Sunday' => '09:30 AM - 06:00 PM',
        ]"
        map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.474985546755!2d85.31743658627273!3d27.702617264310096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b9d5a51f51%3A0xbd3ad46d4417cec5!2sAHZ%20Putalisadak%2C%20Nepal!5e0!3m2!1sen!2sbd!4v1756791096860!5m2!1sen!2sbd"
    />
    <x-global-office 
        title="Yes Education Abu London"
        country="UK"
        email="info@yes.com"
        phone="0000000"
        link="#"
        :hours="[
            'Monday' => '09:30 AM - 06:00 PM',
            'Tuesday' => '09:30 AM - 06:00 PM',
            'Wednesday' => '09:30 AM - 06:00 PM',
            'Thursday' => '09:30 AM - 06:00 PM',
            'Friday' => '09:30 AM - 06:00 PM',
            'Saturday' => 'Closed',
            'Sunday' => '09:30 AM - 06:00 PM',
        ]"
        map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.474985546755!2d85.31743658627273!3d27.702617264310096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b9d5a51f51%3A0xbd3ad46d4417cec5!2sAHZ%20Putalisadak%2C%20Nepal!5e0!3m2!1sen!2sbd!4v1756791096860!5m2!1sen!2sbd"
    />
    <x-global-office 
        title="Yes Education Abuja"
        country="Nigeria"
        email="info@yes.com"
        phone="0000000"
        link="#"
        :hours="[
            'Monday' => '09:30 AM - 06:00 PM',
            'Tuesday' => '09:30 AM - 06:00 PM',
            'Wednesday' => '09:30 AM - 06:00 PM',
            'Thursday' => '09:30 AM - 06:00 PM',
            'Friday' => '09:30 AM - 06:00 PM',
            'Saturday' => 'Closed',
            'Sunday' => '09:30 AM - 06:00 PM',
        ]"
        map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.474985546755!2d85.31743658627273!3d27.702617264310096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b9d5a51f51%3A0xbd3ad46d4417cec5!2sAHZ%20Putalisadak%2C%20Nepal!5e0!3m2!1sen!2sbd!4v1756791096860!5m2!1sen!2sbd"
    />

</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-page-container end -->

<!-- Student Reviews Section -->
<x-student-reviews/>

<x-student-subscription />
@endsection