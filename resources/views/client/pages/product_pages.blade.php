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
                       <h2>Product</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{route('client.pages.index')}}">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="{{route('client.pages.product')}}">Product</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Name</li>
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
    <section class="about-area home2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-image-holder wow fadeInLeft animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInLeft;">
                        <img src="{{asset('asset/client/images/resources/about.jpg')}}" alt="Awesome Image">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="inner-content">
                        <div class="sec-title">
                            <h3>Name</h3>
                            <h1>Product<br> Name</h1>
                        </div>
                        <div class="about-text-holder">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores praesentium distinctio qui facere, a minus asperiores magnam quod voluptatibus molestias corporis reprehenderit reiciendis facilis architecto minima eius placeat ipsa adipisci.</p>
                            <div class="text-box">
                                <h3>Price: </h3> <span>123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 30px">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="services-carousel owl-carousel owl-theme">
                        <!--Start single solution style1--> 
                            <div class="single-solution-style1">
                                <div class="img">
                                    <img src="{{ asset('asset/client/images/services/2.jpg') }}" alt="Awesome Image"> 
                                </div>
                            </div>
                        <!--Start single solution style1--> 
                            <div class="single-solution-style1">
                                <div class="img">
                                    <img src="{{ asset('asset/client/images/services/3.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                        <!--Start single solution style1--> 
                            <div class="single-solution-style1">
                                <div class="img-holder">
                                    <img src="{{ asset('asset/client/images/services/1.jpg') }}" alt="Awesome Image">
                                </div>                          
                            </div>
                        <!--Start single solution style1--> 
                            <div class="single-solution-style1">
                                <div class="img-holder">
                                    <img src="{{ asset('asset/client/images/services/2.jpg') }}" alt="Awesome Image"> 
                                </div>
                            </div>
                    </div>
                </div>
            </div>  

            {{-- rating --}}
            {{-- <div class="start_rating">
                <button class="star">&#9734</button>
                <button class="star">&#9734</button> 
                <button class="star">&#9734</button> 
                <button class="star">&#9734</button> 
                <button class="star">&#9734</button>
                <p class="current_rating">0 of 5</p>    
            </div> --}}
        </div>
    </section>
    <div class="container">
        <div class="card">
            <div class="card-header">Review and Rate</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b><span id="average_rating">0.0</span> / 5</b>
                        </h1>
                        <div class="mb-3">
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                        </div>
                        <h3><span id="total_review">0</span> Review</h3>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <div class="progress-label-left"><b>5</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span class="total_five_star_review">0</span>)</div> 
                        </p>
                        <p>
                            <div class="progress-label-left"><b>4</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_start_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span class="total_four_star_review">0</span>)</div>
                            
                        </p>
                        <p>
                            <div class="progress-label-left"><b>3</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_start_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span class="total_three_star_review">0</span>)</div>
                            
                        </p>
                        <p>
                            <div class="progress-label-left"><b>2</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_start_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span class="total_two_star_review">0</span>)</div>
                            
                        </p>
                        <p>
                            <div class="progress-label-left"><b>1</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_start_progress"></div>
                            </div> 
                            <div class="progress-label-right">(<span class="total_one_star_review">0</span>)</div>
                            
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h3 class="mt-4 mb-3">Write Review Here</h3>
                        <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5" id="review_content"></div>
    </div>
    <div class="review_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="1"></i>
                    </h4>
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <textarea name="user_review" id="user_review" class="form-control" placeholder="Enter Review" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var rating_data = 0;

            $('#add_review').click(function(){
                $('#review_modal').modal('show');
            });
            
        });
    </script>
@endsection