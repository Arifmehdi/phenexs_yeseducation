<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 15:56:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}">
    <link rel="icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{ asset('https://www.w3schools.com/w3css/4/w3.css') }}">

    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/fontawesome-free/css/all.min.css">


    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/jqvmap/jqvmap.min.css">
{{--    Summernote--}}
    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/summernote/summernote-bs4.min.css">

    {{--    Data Table--}}
    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


     <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('/')}}admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('/')}}admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


    {{--    switch button--}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/')}}admin/dist/css/adminlte.min2167.css?v=3.2.0">

    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/daterangepicker/daterangepicker.css">

    {{--Notification--}}
    <link rel="stylesheet" href="{{asset('/')}}admin/toastifyNotification/toastify.min.css">
    {{------}}

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('/')}}admin/plugins/summernote/summernote-bs4.min.css">
    <script nonce="49295efc-1990-40af-9ed8-0d65b65b8644">(function(w,d){!function(eK,eL,eM,eN){eK.zarazData=eK.zarazData||{};eK.zarazData.executed=[];eK.zaraz={deferred:[],listeners:[]};eK.zaraz.q=[];eK.zaraz._f=function(eO){return function(){var eP=Array.prototype.slice.call(arguments);eK.zaraz.q.push({m:eO,a:eP})}};for(const eQ of["track","set","debug"])eK.zaraz[eQ]=eK.zaraz._f(eQ);eK.zaraz.init=()=>{var eR=eL.getElementsByTagName(eN)[0],eS=eL.createElement(eN),eT=eL.getElementsByTagName("title")[0];eT&&(eK.zarazData.t=eL.getElementsByTagName("title")[0].text);eK.zarazData.x=Math.random();eK.zarazData.w=eK.screen.width;eK.zarazData.h=eK.screen.height;eK.zarazData.j=eK.innerHeight;eK.zarazData.e=eK.innerWidth;eK.zarazData.l=eK.location.href;eK.zarazData.r=eL.referrer;eK.zarazData.k=eK.screen.colorDepth;eK.zarazData.n=eL.characterSet;eK.zarazData.o=(new Date).getTimezoneOffset();if(eK.dataLayer)for(const eX of Object.entries(Object.entries(dataLayer).reduce(((eY,eZ)=>({...eY[1],...eZ[1]})))))zaraz.set(eX[0],eX[1],{scope:"page"});eK.zarazData.q=[];for(;eK.zaraz.q.length;){const e_=eK.zaraz.q.shift();eK.zarazData.q.push(e_)}eS.defer=!0;for(const fa of[localStorage,sessionStorage])Object.keys(fa||{}).filter((fc=>fc.startsWith("_zaraz_"))).forEach((fb=>{try{eK.zarazData["z_"+fb.slice(7)]=JSON.parse(fa.getItem(fb))}catch{eK.zarazData["z_"+fb.slice(7)]=fa.getItem(fb)}}));eS.referrerPolicy="origin";eS.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));eR.parentNode.insertBefore(eS,eR)};["complete","interactive"].includes(eL.readyState)?zaraz.init():eK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>




<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" target="_blank"  href="{{ url('/') }}" style="color:rgb(119, 154, 250)">
                  <i class="fas fa-globe"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                @php
                    $name=explode(' ',\Illuminate\Support\Facades\Auth::user()->name);
                    $user=\Illuminate\Support\Facades\Auth::user();
                @endphp
                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" role="button">
                    <i class="fas fa-user-alt mr-1"></i>{{ $name[0] }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    @foreach($user->roles as $role)
                        @if($role->role_name == 'admin')
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}"><i class="bx bx-user font-size-16 align-middle mr-1"></i>Admin DashBoard</a>
                        @endif
                    @endforeach
                     

                    <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout
                    </a>
                    <form action="{{route('logout')}}" method="get" id="logoutForm">
                        @csrf
                    </form>
                </div>

            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/')}}admin/images/avatar.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{route('admin.dashboard')}}" class="d-block">{{$name[0]}}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column pb-5" data-widget="treeview" role="menu" data-accordion="false">


                    <li class="nav-item {{ session('lsbm') == 'dashboardM'? ' menu-open ' : ''}}">
                        <a href="Javascript:void()" class="nav-link {{ session('lsbm') == 'dashboardM'? ' active ' : ''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                DashBoard
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.dashboard')}}" class="nav-link {{ session('lsbsm') == 'dashboardSM'? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin DashBoard</p>
                                </a>
                            </li>
                           
                        </ul>
                    </li>



                    <li class="nav-item {{ session('lsbm') == 'users'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'users'? ' active ' : ''}}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.user')}}" class="nav-link {{ session('lsbsm') == 'allUsers'? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.create-user')}}" class="nav-link {{ session('lsbsm') == 'createUser'? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create User</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ session('lsbm') == 'slider'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'slider'? ' active ' : ''}}">
                            <i class="nav-icon fas fa-search-location"></i>
                            <p>
                                Sliders
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sliders.index') }}" class="nav-link {{ session('lsbsm') == 'allFrontSlider' ? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Sliders</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                   

                    <li class="nav-item {{ session('lsbm') == 'menupage' ? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'menupage' ? ' active ' : ''}}">
                            <i class="nav-icon fas fa-bezier-curve"></i>
                            <p>
                                Menus & Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('admin.menusAll')}}" class="nav-link {{ session('lsbsm') == 'menusAll' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Menus</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{route('admin.pagesAll')}}" class="nav-link {{ session('lsbsm') == 'pagesAll' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All pages</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item {{ session('lsbm') == 'posts'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'posts'? ' active ' : ''}}">
                            <i class="nav-icon far fa-share-square"></i>
                            <p>
                                Blogs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('categories.index')}}" class="nav-link {{ session('lsbsm') == 'allCategories' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All  Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('categories.create')}}" class="nav-link {{ session('lsbsm') == 'createCategory' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create  Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('news.index')}}" class="nav-link {{ session('lsbsm') == 'allPosts' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Blogs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('news.create')}}" class="nav-link {{ session('lsbsm') == 'storePost' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Blog</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item {{ session('lsbm') == 'applications'? ' menu-open ' : ''}}">
                        <a href="{{ route('applications.index') }}" class="nav-link {{ session('lsbsm') == 'allApplications' ? ' active ' : '' }}">
                            <i class="nav-icon fas fa-file-alt"></i> 
                            <p>Application Forms</p>
                        </a>
                    </li>
                    <li class="nav-item {{ session('lsbm') == 'destination'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'destination'? ' active ' : ''}}">
                            <i class="nav-icon far fa-share-square"></i>
                            <p>
                                Destination 
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('destination.index')}}" class="nav-link {{ session('lsbsm') == 'allDestinationCat' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Destination Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('destination.create')}}" class="nav-link {{ session('lsbsm') == 'createDestinationCat' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create  Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('destinations.index')}}" class="nav-link {{ session('lsbsm') == 'allDestinations' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Destination</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('destinations.create')}}" class="nav-link {{ session('lsbsm') == 'storeDestinations' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Destination</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item {{ session('lsbm') == 'service'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'service'? ' active ' : ''}}">
                            <i class="nav-icon far fa-share-square"></i>
                            <p>
                                Services 
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('service.index')}}" class="nav-link {{ session('lsbsm') == 'allServices' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Services</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('service.create')}}" class="nav-link {{ session('lsbsm') == 'storeServices' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Services</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item {{ session('lsbm') == 'course'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'course'? ' active ' : ''}}">
                            <i class="nav-icon far fa-share-square"></i>
                            <p>
                                Courses 
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('course.index')}}" class="nav-link {{ session('lsbsm') == 'allCourses' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Courses</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('course.create')}}" class="nav-link {{ session('lsbsm') == 'storeCourses' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Courses</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item {{ session('lsbm') == 'galleries' ? ' menu-open ' : '' }}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'galleries' ? ' active ' : '' }}">
                            <i class="nav-icon fas fas fa-bell"></i>
                            <p>
                                Galleries
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('galleries.index') }}"
                                    class="nav-link {{ session('lsbsm') == 'all_gallery' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Galleries</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('galleries.create') }}"
                                    class="nav-link {{ session('lsbsm') == 'create_gallery' ? ' active ' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Gallery</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item {{ session('lsbm') == 'testimonials' ? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'testimonials' ? ' active ' : ''}}">
                            <i class="nav-icon fas fa-quote-right"></i>
                            <p>
                                Testimonials
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('testimonials.index') }}" class="nav-link {{ session('lsbsm') == 'testimonialsAll' ? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Testimonials</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('testimonials.create') }}" class="nav-link {{ session('lsbsm') == 'createTestimonial' ? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Testimonial</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                                       <li class="nav-item {{ session('lsbm') == 'consultations'? ' menu-open ' : ''}}">
                        <a href="{{ route('consultations.index') }}" class="nav-link {{ session('lsbsm') == 'allConsultations' ? ' active ' : '' }}">
                            <i class="nav-icon fas fa-headset"></i> 
                            <p>All Consultations</p>
                        </a>
                    </li>
                    <li class="nav-item {{ session('lsbm') == 'consultations'? ' menu-open ' : ''}}">
                        <a href="{{ route('admin.chats.index') }}" class="nav-link {{ session('lsbsm') == 'allConsultations' ? ' active ' : '' }}">
                            <i class="nav-icon fas fa-comment"></i> 
                            <p>All Chats</p>
                        </a>
                    </li>
                    <li class="nav-item {{ session('lsbm') == 'websiteparam'? ' menu-open ' : ''}}">
                        <a href="#" class="nav-link {{ session('lsbm') == 'websiteparam'? ' active ' : ''}}">
                            <i class="nav-icon fas fa-desktop"></i>
                            <p>
                                 Website Settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('websiteparam')}}" class="nav-link {{ session('lsbsm') == 'websiteparamSM'? ' active ' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Website Settings</p>
                                </a>
                            </li>

                        </ul>
                    </li>
              
              
                </ul>
            </nav>

        </div>

    </aside>

    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                @yield('body')

            </div>
        </section>

    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y')}} <a href="javascript:void(0)">Phenex Soft.</a></strong>
        All rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>


<script src="{{asset('/')}}admin/plugins/jquery/jquery.min.js"></script>

<script src="{{asset('/')}}admin/plugins/jquery-ui/jquery-ui.min.js"></script>


<script src="{{asset('/')}}admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('/')}}admin/plugins/chart.js/Chart.min.js"></script>

<script src="{{asset('/')}}admin/plugins/sparklines/sparkline.js"></script>


<script src="{{asset('/')}}admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('/')}}admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="{{asset('/')}}admin/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="{{asset('/')}}admin/plugins/moment/moment.min.js"></script>
<script src="{{asset('/')}}admin/plugins/daterangepicker/daterangepicker.js"></script>

<script src="{{asset('/')}}admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="{{asset('/')}}admin/plugins/summernote/summernote-bs4.min.js"></script>

<script src="{{asset('/')}}admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
{{--summernote--}}
<script src="{{asset('/')}}admin/plugins/summernote/summernote-bs4.min.js"></script>

<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js)-->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>


{{--Data Table--}}
<script src="{{asset('/')}}admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="{{asset('/')}}admin/plugins/select2/js/select2.full.min.js"></script>

{{--switch--}}
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="{{asset('/')}}admin/dist/js/adminlte2167.js?v=3.2.0"></script>

{{--<script src="{{asset('/')}}admin/dist/js/demo.js"></script>--}}

{{--Notification--}}
<script src="{{asset('/')}}admin/toastifyNotification/toastify.js"></script>
{{------}}



<!--===== SORTABLE JS =====-->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<!--===== sweetalert2 =====-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--summernote--}}
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote({
            height: 200,
            tabsize: 2,
            codemirror: {
            mode: 'text/html',
            htmlMode: true,
            lineNumbers: true,
            theme: 'monokai'
            }
        });


        $('#summernote1').summernote({
            height: 200,
            tabsize: 2,
            codemirror: {
            mode: 'text/html',
            htmlMode: true,
            lineNumbers: true,
            theme: 'monokai'
            }
        });


        // $('.select2bs4').select2({
        //     theme: 'bootstrap4'
        // })


        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<script>
    @if(Session::has('success'))
    Toastify({ text: "{{ Session::get('success') }}", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();

    @elseif(Session::has('warning'))
    Toastify({ text: "{{ Session::get('warning') }}", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();

    @elseif(Session::has('error'))
    Toastify({ text: "{{ Session::get('error') }}", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)",
            color:'#f51804'
        }
    }).showToast();

    @endif
</script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script>
    /*===== DRAG and DROP =====*/
    const dropItems = document.getElementById('drop-items')

    new Sortable(dropItems, {
        animation: 350,
        chosenClass: "sortable-chosen",
        dragClass: "sortable-drag",
        store: {
            // We keep the order of the list
            set: (sortable) =>{
                const order = sortable.toArray()
                localStorage.setItem(sortable.options.group.name, order.join('|'))
            },

            // We get the order of the list
            get: (sortable) =>{
                const order = localStorage.getItem(sortable.options.group.name)
                return order ? order.split('|') : []
            }
        }
    });
</script>

@stack('js')

<!-- ADMIN CHAT WIDGET -->
<div id="adminChatWidget" class="admin-chat-widget">
    <div id="adminChatToggle" class="admin-chat-toggle">
        <i class="fas fa-comments"></i>
        <span id="adminChatNotification" class="admin-chat-notification-badge" style="display: none;"></span>
    </div>
    <div id="adminChatContainer" class="admin-chat-container" style="display: none;">
        <div class="admin-chat-header">
            <h3>Conversations</h3>
        </div>
        <div id="adminConversationList" class="admin-chat-conversation-list">
            <!-- Conversation list will be populated here -->
        </div>
        <div id="adminActiveChat" class="admin-chat-active-chat" style="display: none;">
            <div class="admin-chat-active-header">
                <button id="backToConversations">&larr; Back</button>
                <h4 id="activeChatUserName"></h4>
            </div>
            <div id="adminActiveChatBody" class="admin-chat-body">
                <!-- Messages will be populated here -->
            </div>
            <div class="admin-chat-footer">
                <input type="text" id="adminMessageInput" placeholder="Type your message...">
                <button id="adminSendMessageBtn">Send</button>
            </div>
        </div>
    </div>
</div>

<style>
/* Admin Chat Widget Styles */
.admin-chat-widget { position: fixed; bottom: 20px; right: 20px; z-index: 1050; }
.admin-chat-toggle { width: 60px; height: 60px; background-color: #007bff; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.3); position: relative; }
.admin-chat-notification-badge { position: absolute; top: 0; right: 0; width: 20px; height: 20px; background-color: red; color: white; border-radius: 50%; font-size: 12px; display: flex; align-items: center; justify-content: center; font-weight: bold; }
.admin-chat-container { width: 350px; height: 500px; background: white; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.2); display: flex; flex-direction: column; overflow: hidden; }
.admin-chat-header { padding: 15px; background-color: #f7f7f7; border-bottom: 1px solid #ddd; }
.admin-chat-header h3 { margin: 0; font-size: 18px; color: #333; }
.admin-chat-conversation-list { flex: 1; overflow-y: auto; }
.admin-chat-conversation-list .conversation-item { padding: 15px; border-bottom: 1px solid #eee; cursor: pointer; position: relative; }
.admin-chat-conversation-list .conversation-item:hover { background-color: #f5f5f5; }
.admin-chat-conversation-list .conversation-item strong { display: block; color: #333; }
.admin-chat-conversation-list .conversation-item small { color: #888; }
.admin-chat-conversation-list .conversation-item .unread-badge { position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background-color: #007bff; color: white; font-size: 10px; padding: 3px 6px; border-radius: 10px; }

.admin-chat-active-chat { display: flex; flex-direction: column; width: 100%; height: 100%; }
.admin-chat-active-header { display: flex; align-items: center; padding: 10px; background-color: #f7f7f7; border-bottom: 1px solid #ddd; }
.admin-chat-active-header button { background: none; border: none; font-size: 16px; margin-right: 10px; cursor: pointer; color: #007bff; }
.admin-chat-active-header h4 { margin: 0; font-size: 16px; color: #333; }
.admin-chat-body { flex: 1; padding: 10px; overflow-y: auto; background-color: #fdfdfd; display: flex; flex-direction: column;}
.admin-chat-body .message { margin-bottom: 10px; padding: 8px 12px; border-radius: 18px; max-width: 80%; line-height: 1.4; }
.admin-chat-body .message strong { display: block; font-size: 0.8em; margin-bottom: 4px; color: #555; }
.admin-chat-body .sent { background-color: #007bff; color: white; align-self: flex-end; margin-left: auto; }
.admin-chat-body .sent p { color: white !important; }
.admin-chat-body .sent strong { color: #f0f0f0; }
.admin-chat-body .received { background-color: #e9e9eb; color: black; align-self: flex-start; }
.admin-chat-body .received p, .admin-chat-body .received strong { color: #333 !important; }

.admin-chat-footer { padding: 10px; border-top: 1px solid #ddd; display: flex; }
.admin-chat-footer input { flex: 1; border: 1px solid #ccc; border-radius: 20px; padding: 8px 12px; }
.admin-chat-footer button { background: #007bff; color: white; border: none; border-radius: 20px; padding: 8px 15px; margin-left: 10px; cursor: pointer; }
</style>

<!-- Dependencies for Chat -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.js"></script>

<script>
    console.log("Admin Chat Script block is being processed.");

    document.addEventListener('DOMContentLoaded', function () {
        console.log("DOM fully loaded and parsed.");

        @if(auth()->check() && auth()->user()->hasRole('admin'))
            console.log("User is admin. Initializing chat widget script.");

            if (typeof axios === 'undefined' || typeof Pusher === 'undefined' || typeof Echo === 'undefined') {
                console.error("Admin Chat Error: A required library is not loaded.");
                return;
            }
            
            const toggleButton = document.getElementById('adminChatToggle');
            console.log("Admin chat toggle button element:", toggleButton); 

            if (!toggleButton) {
                console.error("Admin Chat Error: Toggle button not found in the DOM.");
                return;
            }

            // --- SETUP ---
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (csrfToken) {
                axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
            }
            axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

            const echo = new Echo({
                broadcaster: 'pusher',
                key: '{{ env('PUSHER_APP_KEY') }}',
                cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
                forceTLS: true,
                authEndpoint: '/broadcasting/auth'
            });

            // --- DOM ELEMENTS ---
            const widget = {
                toggle: toggleButton,
                container: document.getElementById('adminChatContainer'),
                notificationBadge: document.getElementById('adminChatNotification'),
                conversationList: document.getElementById('adminConversationList'),
                activeChat: document.getElementById('adminActiveChat'),
                backButton: document.getElementById('backToConversations'),
                activeChatTitle: document.getElementById('activeChatUserName'),
                activeChatBody: document.getElementById('adminActiveChatBody'),
                messageInput: document.getElementById('adminMessageInput'),
                sendMessageBtn: document.getElementById('adminSendMessageBtn')
            };

            // --- STATE ---
            let conversations = [];
            let activeConversationId = null;

            // --- FUNCTIONS ---
            const showView = (view) => {
                widget.conversationList.style.display = view === 'list' ? 'block' : 'none';
                widget.activeChat.style.display = view === 'chat' ? 'flex' : 'none';
            };

            const getConversationName = (conv) => {
                return conv.user ? conv.user.name : `Guest #${conv.guest_id.substring(0, 8)}`;
            };

            const renderConversationList = () => {
                widget.conversationList.innerHTML = '';
                conversations.sort((a, b) => new Date(b.messages[0]?.created_at || 0) - new Date(a.messages[0]?.created_at || 0));
                conversations.forEach(conv => {
                    const item = document.createElement('div');
                    item.className = 'conversation-item';
                    item.dataset.id = conv.id;
                    const lastMessage = conv.messages[0] ? `<small>${conv.messages[0].body.substring(0, 30)}...</small>` : '<small>No messages yet</small>';
                    item.innerHTML = `<strong>${getConversationName(conv)}</strong>${lastMessage}`;
                    item.addEventListener('click', () => openChat(conv.id));
                    widget.conversationList.appendChild(item);
                });
            };

            const openChat = async (conversationId) => {
                activeConversationId = conversationId;
                const convItem = widget.conversationList.querySelector(`[data-id='${conversationId}'] .unread-badge`);
                if(convItem) convItem.remove();

                showView('chat');
                
                const conv = conversations.find(c => c.id === conversationId);
                widget.activeChatTitle.innerText = getConversationName(conv);
                widget.activeChatBody.innerHTML = '<p>Loading messages...</p>';

                try {
                    const response = await axios.get(`/chat/${conversationId}/messages`);
                    widget.activeChatBody.innerHTML = '';
                    response.data.forEach(msg => appendMessage(msg, widget.activeChatBody));
                    widget.activeChatBody.scrollTop = widget.activeChatBody.scrollHeight;
                } catch (error) {
                    console.error('Failed to fetch messages:', error);
                    widget.activeChatBody.innerHTML = '<p>Failed to load messages.</p>';
                }
            };

            const appendMessage = (message, container) => {
                if (!container) return;
                const msgElement = document.createElement('div');
                const isAdmin = message.user_id === {{ auth()->id() }};
                msgElement.className = `message ${isAdmin ? 'sent' : 'received'}`;
                const senderName = isAdmin ? 'You' : (message.user ? message.user.name : 'Guest');
                msgElement.innerHTML = `<strong>${senderName}</strong><p>${message.body}</p>`;
                container.appendChild(msgElement);
                container.scrollTop = container.scrollHeight;
            };
            
            const sendAdminMessage = async () => {
                const messageBody = widget.messageInput.value.trim();
                if (messageBody === '' || !activeConversationId) return;

                const tempMessage = { body: messageBody, user_id: {{ auth()->id() }} };
                appendMessage(tempMessage, widget.activeChatBody);
                widget.messageInput.value = '';

                try {
                    await axios.post(`/admin/chats/${activeConversationId}/reply`, { body: messageBody });
                } catch (error) {
                    console.error("Error sending admin message:", error);
                    widget.activeChatBody.lastChild.querySelector('p').innerText += ' (failed)';
                }
            };

            // --- INITIALIZATION & EVENT LISTENERS ---
            const initialize = async () => {
                try {
                    const response = await axios.get('/admin/chat/conversations');
                    conversations = response.data;
                    renderConversationList();
                } catch (error) {
                    console.error("Failed to initialize admin chat:", error);
                }
            };
            
            widget.toggle.addEventListener('click', () => {
                console.log("Toggle button clicked!");
                const isHidden = widget.container.style.display === 'none';
                widget.container.style.display = isHidden ? 'flex' : 'none';
                if (isHidden) {
                    initialize(); 
                }
            });

            widget.backButton.addEventListener('click', () => {
                activeConversationId = null;
                showView('list');
            });

            widget.sendMessageBtn.addEventListener('click', sendAdminMessage);
            widget.messageInput.addEventListener('keypress', e => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendAdminMessage();
                }
            });

            // Listen for new messages from ANY conversation
            echo.private('admin-channel')
                .listen('.new.message', (e) => {
                    let conv = conversations.find(c => c.id === e.conversation.id);
                    if (conv) {
                        conv.messages.unshift(e.message);
                    } else {
                        conv = { ...e.conversation, messages: [e.message] };
                        conversations.push(conv);
                    }
                    renderConversationList();

                    if (activeConversationId === e.conversation.id) {
                        appendMessage(e.message, widget.activeChatBody);
                    } else {
                        const convItem = widget.conversationList.querySelector(`[data-id='${e.conversation.id}']`);
                        if(convItem && !convItem.querySelector('.unread-badge')){
                            const badge = document.createElement('span');
                            badge.className = 'unread-badge';
                            convItem.appendChild(badge);
                        }
                    }
                });
            
        @else
            console.log("User is not an admin. Chat widget script not initialized.");
        @endif
    });
</script>
</body>

</html>