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
                                <li class="dropdown"><a href="{{route('client.pages.specialities')}}">Products</a>
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

@section('content')
        <!--Main Slider-->
        @include('client.blocks.main_slider')
    <!--End Main Slider-->

    <!--Start About Area-->
        @include('client.blocks.about_area')
    <!--End About Area-->

    <!--Start Highlights area-->
        @include('client.blocks.highlighs_area')
    <!--End Highlights area-->

    <!--Start services style1 area-->
        @include('client.blocks.services_style')
    <!--End services style1 area-->

    <!--Start team area v2-->
        @include('client.blocks.team_area_v2')
    <!--End team area v2-->

    <!--Start works area-->
        @include('client.blocks.works_area')
    <!--End works area-->

    <!--Start Testimonial area-->
        @include('client.blocks.testimonial')
    <!--End Testimonial area-->

    <!--Start latest blog area-->
        @include('client.blocks.latest_blog_area')
    <!--End latest blog area--> 

    <!--Start newsletter area-->
        {{-- @include('client.blocks.newsletter') --}}
    <!--End newsletter area-->
@endsection