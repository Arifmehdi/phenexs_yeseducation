@props(['title'])
<!--Page Title-->
<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/background/page-title-3.jpg')}}');">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box">
                <h1>{{$title}}</h1>
                <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                </div>
            </div>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                <li>Courses</li>
                <li>{{$title}}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->