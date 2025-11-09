@php
    $mobile_number = explode(',', $ws->contact_mobile);
    $mobile_number_without_str = str_replace(['+', '-', ' '], '', trim($mobile_number[0]));
    $contact_email = explode(',', $ws->contact_email);
@endphp
<div class="sidebar-widget sidebar-support">
    <div class="widget-content">
        <figure class="image-box"><img src="{{ asset('frontend/assets/images/news/support-1.jpg') }}" alt="">
        </figure>
        <ul class="content-box clearfix">
            <li>
                <i class="flaticon-call"></i>
                <p>Any Questions? Call us</p>
                <h3><a href="tel:{{$mobile_number_without_str}}">{{$mobile_number[0]}}</a></h3>
            </li>
            <li>
                <i class="flaticon-email"></i>
                <p>Any Questions? Email us</p>
                <h3><a href="mailto:{{$contact_email[0]}}">{{$contact_email[0]}}</a></h3>
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
        <form action="" method="post" class="assessment-form">
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
                <select name="visa_type" class="form-control" required>
                    <option value="">Select Visa Type</option>
                    <option value="1">Working Visas</option>
                    <option value="2">Study Visas</option>
                    <option value="3">Business Visas</option>
                    <option value="4">Tourist Visas</option>
                </select>
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