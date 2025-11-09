<!-- main-footer -->
<footer class="main-footer bg-color-2">
    <div class="auto-container">
        <div class="footer-top">
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt=""></a></figure>
                            <div class="text">
                                <p>Integer lobortis sem consequat imperdiet In nulla viverra ut lorem ut, dapibus conse etur diam. Nun bibendum diet condiment sed ipsum duis lacinia.</p>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="{{ $ws->youtube_url ? $ws->youtube_url : '#'}}"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="{{ $ws->fb_url ? $ws->fb_url : '#'}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $ws->instagram_url ? $ws->instagram_url : '#'}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $ws->linkedin_url ? $ws->linkedin_url : '#'}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ $ws->youtube_url ? $ws->youtube_url : '#'}}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h3>Immigration</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="#">Pre Assessment</a></li>
                                    <li><a href="#">Visa Consultation</a></li>
                                    <li><a href="#">Business Plans</a></li>
                                    <li><a href="#">Post Landing Assistant</a></li>
                                    <li><a href="#">Meet Our Agents</a></li>
                                    <li><a href="#">Visa Documentation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="#">About Visarzo</a></li>
                                    <li><a href="#">Why Immigrate</a></li>
                                    <li><a href="#">Service Features</a></li>
                                    <li><a href="#">Study Visas</a></li>
                                    <li><a href="#">Apply As Citizenship</a></li>
                                    <li><a href="#">Immigration Resources</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget newsletter-widget">
                            <div class="widget-title">
                                <h3>Newsletter Signup</h3>
                            </div>
                            <div class="widget-content">
                                <p>Enter your email address to get latest updates and offers from us. Also some Discount coupons.</p>
                                <form action="#" method="post" class="newsletter-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                        <button type="submit"><i class="flaticon-send"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="copyright pull-left"><p>(&copy;) 2025 <a href="#">YES Education</a> Immigration & Visa Firm. All rights reserved.</p></div>
            <ul class="footer-nav pull-right clearfix"> 
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-long-arrow-alt-up"></i>
</button>