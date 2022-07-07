@extends('client.master') 
  
@section('main_menu')
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
                                <li class="dropdown"><a href="{{route('client.pages.index')}}">Home</a>
                                </li>
                                <li><a href="{{route('client.pages.about')}}">About Us</a></li>
                                <li class="dropdown current"><a href="{{route('client.pages.specialities')}}">Specialities</a>
                                    <ul>
                                        <li><a href="spec-dental-implants.html">Dental Implants</a></li>
                                        <li><a href="spec-cosmetic-dentistry.html">Cosmetic Dentistry</a></li>
                                        <li><a href="spec-laser-dentistry.html">Laser Dentistry</a></li>
                                        <li><a href="spec-orthodontics.html">Orthodontics</a></li>
                                        <li><a href="spec-endodontics.html">Endodontics</a></li>
                                        <li><a href="spec-periodontics.html">Periodontics</a></li>
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
                                <li class="dropdown"><a href="#">More</a>
                                    <ul>
                                        <li><a href="{{route('client.pages.faqs')}}">FAQ’s</a></li>
                                        <li><a href="timetable.html">Timetable</a></li>
                                        <li><a href="{{route('client.pages.appointment')}}">Apppointment</a></li>
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
@endsection


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
<section class="services-style1-area sec-pd1">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>Product</h3>
            <h1>Dental Products</h1>
            <p>This is the place to display the products that will be sold, with the need to help protect and prevent dental problems. </p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="services-carousel owl-carousel owl-theme">
                    <!--Start single solution style1--> 
                    <div class="single-solution-style1">
                        <div class="img-holder">
                            <img src="{{ asset('asset/client/images/services/1.jpg') }}" alt="Awesome Image">
                            <div class="icon-holder">
                                <div class="inner-content">
                                    <div class="box">
                                        <span class="icon-teeth-1"></span>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="text-holder">
                            <h3>Rating</h3>
                            <p>Display rating and review.</p>
                            <div class="readmore">
                                <a href="#"><span class="flaticon-next"></span></a>
                                <div class="overlay-button">
                                    <a href="{{route('client.pages.product_pages')}}">Read More</a>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single solution style1-->
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/2.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-teeth-2"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Cosmetic Dentistry</h3>
                                <p>Know how pursue pleasure rationally encounter consequences that extremely anyone loves pursues.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/3.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-dentist"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Laser Dentistry</h3>
                                <p>To take a trivial example, which us ever undertakes laborious physical exercise, to obtain some advantage.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->
                    
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/1.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-teeth-1"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Dental Implants</h3>
                                <p>Denouncing pleasure & praising pain was born and wewill give you a complete account of the system.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/2.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-teeth-2"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Cosmetic Dentistry</h3>
                                <p>Know how pursue pleasure rationally encounter consequences that extremely anyone loves pursues.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/3.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-dentist"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Laser Dentistry</h3>
                                <p>To take a trivial example, which us ever undertakes laborious physical exercise, to obtain some advantage.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1--> 
                    
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/1.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-teeth-1"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Dental Implants</h3>
                                <p>Denouncing pleasure & praising pain was born and wewill give you a complete account of the system.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/2.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-teeth-2"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Cosmetic Dentistry</h3>
                                <p>Know how pursue pleasure rationally encounter consequences that extremely anyone loves pursues.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->
                    <!--Start single solution style1--> 
                        {{-- <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('asset/client/images/services/3.jpg') }}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="inner-content">
                                        <div class="box">
                                            <span class="icon-dentist"></span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="text-holder">
                                <h3>Laser Dentistry</h3>
                                <p>To take a trivial example, which us ever undertakes laborious physical exercise, to obtain some advantage.</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="#">Read More</a>    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!--End single solution style1-->     
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