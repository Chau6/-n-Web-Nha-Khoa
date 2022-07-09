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
                                <li class="dropdown"><a href="{{route('client.pages.specialities')}}">Specialities</a>
                                    <ul>
                                        <li><a href="{{ route('client.pages.advice') }}">Advice</a></li>
                                        <li><a href="{{ route('client.pages.danh_rang') }}">Đánh Răng</a></li>
                                        <li><a href="">Laser Dentistry</a></li>
                                        <li><a href="">Orthodontics</a></li>
                                        <li><a href="">Endodontics</a></li>
                                        <li><a href="">Periodontics</a></li>
                                        <li><a href="{{route('client.pages.product')}}">Products</a></li>
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
                                <li class="dropdown current"><a href="{{route('client.pages.contact')}}">Contact</a></li>
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
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Contact Us</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
@endsection

@section('content')
    <!--Start Contact info map area-->
<section class="contact-info-map-area">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h1>We are Here to Help You, Don’t Hesitate.</h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-info-map">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="contact-info-left">
                                <div class="contact-title">
                                    <h2>Send Your Message Us</h2>
                                    <p>Dont be shy, Send your message or through form, our expert will help you ASAP.</p>
                                </div>
                                <div class="state-select-box2">
                                    <select class="selectmenu area_select">
                                        <option value="1">Viet Nam</option>
                                        <option value="2">India</option>
                                        <option value="3">Pakistan</option>
                                    </select>
                                    <div class="state-content">
                                        <div class="state" id="value1">
                                            <ul>
                                                <li>
                                                    <div class="text">
                                                        <h5>Address</h5>
                                                        <p>D5 Nguyễn Gia Trí, Phường 25,Bình Thạnh, <br>  Thành phố Hồ Chí Minh, Việt Nam.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Phone</h5>
                                                        <p>Phone 1: 1800 1779<br> Phone 2: (+ 89) 1800 1779.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Email</h5>
                                                        <p>supportyou@example.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="state" id="value2">
                                            <ul>
                                                <li>
                                                    <div class="text">
                                                        <h5>Address</h5>
                                                        <p>Romanian  9520 Faires Farm Road,<br> Carlsbad, NC 28213, Los Angeles.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Phone</h5>
                                                        <p>Phone 1: +1 555-7890-123<br> Phone 2: (+ 760) 987-65-43210.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Email</h5>
                                                        <p>supportyou@example.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="state" id="value3">
                                            <ul>
                                                <li>
                                                    <div class="text">
                                                        <h5>Address</h5>
                                                        <p>Romanian  9520 Faires Farm Road,<br> Carlsbad, NC 28213, San Francisco.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Phone</h5>
                                                        <p>Phone 1: +1 555-7890-123<br> Phone 2: (+ 760) 987-65-43210.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Email</h5>
                                                        <p>supportyou@example.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="google-map-box">
                                <div 
                                    class="google-map" 
                                    id="contact-google-map" 
                                    data-map-lat="10.802406382828494" 
                                    data-map-lng="106.71573981064437" 
                                    data-icon-path="{{asset('asset/images/resources/map-marker.png')}}" 
                                    data-map-title="VietNam, New York, United Kingdom" 
                                    data-map-zoom="9" 
                                    data-markers='{
                                        "marker-1": [10.802406382828494, 106.71573981064437, "<h4>Aptech Home</h4><p>D5 Nguyễn Gia Trí, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>"],
                                        "marker-2": [40.602230, -74.689910, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"]
                                    }'>
                                </div>   
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>      
<!--End Contact info map area-->      

<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="contact-title">
                        <h2>Send Your Message Us</h2>
                        <p>Dont be shy, Send your message or quiries through below form, our expert team will help you ASAP.</p>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/Dento/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">   
                                    <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                                </div>
                                <div class="input-box"> 
                                    <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
                                </div>
                                <div class="input-box"> 
                                    <input type="text" name="form_phone" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-box">    
                                    <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                                </div>
                                <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">Send Your Message</button>    
                                </div>     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End contact form area-->
@endsection

