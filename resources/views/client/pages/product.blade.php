@extends('client.master') 
  
{{-- @section('main_menu')
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <nav class="main-menu style1 clearfix">
                        <div class="navbar-header clearfix">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('client.pages.about')}}">About Us</a></li>
                                <li class="dropdown"><a href="{{route('client.pages.specialities')}}">Health Screening</a>
                                    <ul>
                                        <li><a href="{{ route('client.pages.advice') }}">Advice</a></li>
                                        <li><a href="">Care Services</a></li>
                                        <li><a href="{{route('client.pages.product')}}">Support Products</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('client.pages.product')}}">Products</a>
                                    <ul>
                                        <li><a href="{{ route('client.pages.advice') }}">Advice</a></li>
                                        <li><a href="">Toothbrushes</a></li>
                                        <li><a href="">Toothpaste</a></li>
                                        <li><a href="">Dental floss</a></li>
                                        <li><a href="">Face mask</a></li>
                                        <li><a href="">Dental picks and sticks</a></li>
                                        <li><a href="">Tongue scrapers</a></li>
                                        <li><a href="">Oral medicine</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('client.pages.doctors')}}">Doctors</a></li>
                                <li class="dropdown"><a href="{{route('client.pages.blog')}}">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-large.html">Blog Large Image</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="{{route('client.pages.contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="mainmenu-right">
                        <div class="search-box-style1">
                            <form class="search-form" method="post" action="http://st.ourhtmldemo.com/new/Dento/index.html">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>        
                        </div>
                        <div class="toggler-button">
                            <div class="nav-toggler hidden-bar-opener">
                                <div class="inner">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>    
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection --}}


@section('breadcrumb')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Product</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Sprcial</li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Product</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 
@endsection

@section('content')
    
<!--Start services style1 area-->
<section class="services-style1-area spec-page">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>PRODUCT</h3>
            <h1>Dental Products</h1>
            <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life. </p>
        </div>
        
        <div class="row">
            <!--Start single solution style1--> 
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-solution-style1 wow fadeInUp" data-wow-delay="300ms">
                    <div class="img-holder">
                        <img src="{{asset('asset/client/images/services/1.jpg')}}" alt="Awesome Image">
                        <div class="icon-holder">
                            <div class="inner-content">
                                <div class="box">
                                    <span class="icon-teeth-2"></span>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="text-holder">
                        <h3><a href="" style="color: rgba(72, 67, 67, 0.867)">Dental Implants</a></h3>
                        <p>Denouncing pleasure & praising pain was born and wewill give you a complete account of the system.</p>
                        <div class="readmore">
                            <a href="#"><span class="flaticon-next"></span></a>
                            <div class="overlay-button">
                                <a href="{{route('client.pages.product_pages')}}">Read More</a>    
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
        </div> 
    </div>
</section>
<!--End services style1 area-->

<!--Start Choose area Style2--> 
    @include('client.blocks.choose_area_style2')
<!--End Choose area Style2--> 

<!--Start Testimonial Sec style2-->
    @include('client.blocks.testimonial_sec_style2')
<!--End Testimonial Sec style2-->  

@endsection