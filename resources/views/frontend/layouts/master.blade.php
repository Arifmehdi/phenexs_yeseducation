<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico') }}">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
		<!-- Color Swithcer CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/color-switcher.css') }}">
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
        
		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/material-design-iconic-font.min.css') }}">
        
        <!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        
		<!-- Plugins CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
        
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        
		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
        
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        
		<!-- Modernizr JS
		============================================ -->		
        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
	    
        <!-- Color Css Files
		============================================ -->	
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-one.css') }}" title="color-one" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-two.css') }}" title="color-two" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-three.css') }}" title="color-three" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-four.css') }}" title="color-four" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-five.css') }}" title="color-five" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-six.css') }}" title="color-six" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-seven.css') }}" title="color-seven" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-eight.css') }}" title="color-eight" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-nine.css') }}" title="color-nine" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-ten.css') }}" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/color-ten.css') }}" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/pattren1.css') }}" title="pattren1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/pattren2.css') }}" title="pattren2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/pattren3.css') }}" title="pattren3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/pattren4.css') }}" title="pattren4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/pattren5.css') }}" title="pattren5" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/background1.css') }}" title="background1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/background2.css') }}" title="background2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/background3.css') }}" title="background3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/background4.css') }}" title="background4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/switcher/background5.css') }}" title="background5" media="screen" />

        
        @stack('css')
    </head>
    <body>
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                @include('frontend.layouts.header')
                <!--End of Header Area-->


                @yield('content')

                <!--End of Event Area-->
                <!--Newsletter Area Start-->
                {{--<div class="newsletter-area newsletter-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="newsletter-form">
                                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                                            <button id="mc-submit" type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <!--End of Newsletter Area-->

                <!--Footer Area Start-->
                @include('frontend.layouts.footer')
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
        {{--<div class="ec-colorswitcher">
            <a class="ec-handle" href="#"><i class="zmdi zmdi-settings"></i></a>
            <h3>Style Switcher</h3>
            <div class="ec-switcherarea">
                <h6>Select Layout</h6>
                <div class="layout-btn">
                    <a href="#" class="ec-boxed"><span>Boxed</span></a>
                    <a href="#" class="ec-wide"><span>Wide</span></a>
                </div>
                <h6>Chose Color</h6>
                <ul class="ec-switcher">
                    <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
                    <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
                    <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
                    <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
                    <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
                    <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
                    <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
                    <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
                    <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
                    <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
                </ul>
                <div class="ec-pattren">
                    <h6>Chose Pattren</h6>
                    <div class="pattren-wrap">
                        <a href="#" data-rel="pattren1" class="styleswitch"><img src="{{ asset('frontend/img/ec-pattren/pattren1.jpg') }}" alt=""></a>
                        <a href="#" data-rel="pattren2" class="styleswitch"><img src="{{ asset('frontend/img/ec-pattren/pattren2.jpg') }}" alt=""></a>
                        <a href="#" data-rel="pattren3" class="styleswitch"><img src="{{ asset('frontend/img/ec-pattren/pattren3.jpg') }}" alt=""></a>
                        <a href="#" data-rel="pattren4" class="styleswitch"><img src="{{ asset('frontend/img/ec-pattren/pattren4.jpg') }}" alt=""></a>
                        <a href="#" data-rel="pattren5" class="styleswitch"><img src="{{ asset('frontend/img/ec-pattren/pattren5.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="ec-background">
                    <h6>Chose Background</h6>
                    <div class="background-wrap">
                        <a href="#" data-rel="background1" class="styleswitch"><img src="{{ asset('frontend/img/ec-background/bg-1.jpg') }}" alt=""></a>
                        <a href="#" data-rel="background2" class="styleswitch"><img src="{{ asset('frontend/img/ec-background/bg-2.jpg') }}" alt=""></a>
                        <a href="#" data-rel="background3" class="styleswitch"><img src="{{ asset('frontend/img/ec-background/bg-3.jpg') }}" alt=""></a>
                        <a href="#" data-rel="background4" class="styleswitch"><img src="{{ asset('frontend/img/ec-background/bg-4.jpg') }}" alt=""></a>
                        <a href="#" data-rel="background5" class="styleswitch"><img src="{{ asset('frontend/img/ec-background/bg-5.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>--}}
        <!-- Color Switcher end -->	
        
        
		<!-- jquery
		============================================ -->		
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        
		<!-- popper JS
		============================================ -->		
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        
		<!-- AJax Mail JS
		============================================ -->		
        <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        
		<!-- StyleSwitch JS
		============================================ -->	
        <script src="{{ asset('frontend/js/styleswitch.js') }}"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        @stack('js')
    </body>
</html>