
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


@section('breadcrumb')
  <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">FAQ’s</li>
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
<!--Start faq area-->
<section class="faq-area">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h1>Get Your Answer Here</h1>
            <p>Here you can get your answers about our dental company,service and more...</p>
        </div>
        <div class="faq-search-box">   
            <form class="search-form" action="#">
				<input type="search" name="search" placeholder="Enter Keyword..." required>
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-content-box">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Eius modi tempora incidunt ut labore magnam?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Dolores eos qui ratione voluptatem sequi nesciunt?</h4></div>
                            <div class="accord-content collapsed">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Neque qui dolorem ipsum quia dolor sit amet?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Sed quia non numquam eius modi tempora?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>    
                </div>    
            </div>
            
            <div class="col-xl-6">
                <div class="faq-content-box">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Tempora incidunt  labore et dolore magnam?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Incidunt ut labore magnam aliquam quaerat ad?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Sed quia non numquam eius modi tempora?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Eius modi tempora incidunt ut labore magnam?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>    
                </div>    
            </div>
            
          
            
        </div>
    </div>
</section>   
<!--End faq area-->   
@endsection