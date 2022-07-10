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
                                <li class="dropdown current"><a href="{{route('client.pages.blog')}}">Blog</a>
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
@endsection


@section('breadcrumb')
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Blog Default</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Blog Default</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
@endsection
     
@section('content')
<!--Start blog area-->
<section id="blog-area" class="blog-default-area">
    <div class="container">
        <div class="row">
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-1.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Healthy Teeth</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-1.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">What you need to know teeth?</a></h3> 
                        <div class="text-box">
                            <p>It not only helps you to chew and eat your food frames your faceany missing tooth can major impact your quality of life.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-2.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Technology</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-2.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">A guide for dentists and patients</a></h3> 
                        <div class="text-box">
                            <p>No one rejects, dislikes our avoids pleasures itself, because it is all pleasure, but because those who do not know.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-3.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Dental Care</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-3.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">Should i go for a smile design?</a></h3> 
                        <div class="text-box">
                            <p>Nor again is there anyone who love pursues or desires to obtain pain of itself, bepain, but occasionally circumstances.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-4.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Dental Care</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-3.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">Should i go for a smile design?</a></h3> 
                        <div class="text-box">
                            <p>Nor again is there anyone who love pursues or desires to obtain pain of itself, bepain, but occasionally circumstances.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
             <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-5.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Healthy Teeth</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-1.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">What you need to know teeth?</a></h3> 
                        <div class="text-box">
                            <p>It not only helps you to chew and eat your food frames your faceany missing tooth can major impact your quality of life.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-6.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Technology</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-2.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">A guide for dentists and patients</a></h3> 
                        <div class="text-box">
                            <p>No one rejects, dislikes our avoids pleasures itself, because it is all pleasure, but because those who do not know.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-7.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Technology</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-2.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">A guide for dentists and patients</a></h3> 
                        <div class="text-box">
                            <p>No one rejects, dislikes our avoids pleasures itself, because it is all pleasure, but because those who do not know.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-8.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Dental Care</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-3.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">Should i go for a smile design?</a></h3> 
                        <div class="text-box">
                            <p>Nor again is there anyone who love pursues or desires to obtain pain of itself, bepain, but occasionally circumstances.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset('asset/images/blog/v1-9.jpg')}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">Healthy Teeth</a>    
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="{{asset('asset/images/blog/author-1.png')}}" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By Megan Clarks</a></li>
                                <li><a href="#">Nov 14, 2018</a></li>
                            </ul>    
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">What you need to know teeth?</a></h3> 
                        <div class="text-box">
                            <p>It not only helps you to chew and eat your food frames your faceany missing tooth can major impact your quality of life.</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>Continue REading</a>
                        </div>  
                    </div>
                </div>
            </div>
            <!--End single blog post-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="post-pagination text-center">
                    <li class="float-left"><a class="left" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    <li class="text-center">1 of 4</li>
                    <li class="float-right"><a class="right" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End blog area-->
@endsection