@extends('client.master') 

@section('breadcrumb')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Post</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Sprcial</li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Post</li>
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
            <h3>Post</h3>
            <h1>Dental posts</h1>
            <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life. </p>
        </div>
        
        <div class="row">
            
            @foreach ($posts as $post)
                @if ($post->parent_name == 2)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-solution-style1 wow fadeInUp" data-wow-delay="300ms">
                        <div class="img-holder">
                            <div class="icon-holder">
                                <div class="inner-content">
                                    <div class="box">
                                        <span class="icon-teeth-2"></span>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="text-holder">
                            <h3><a href="" style="color: rgba(72, 67, 67, 0.867)">{{$post->name}}</a></h3>
                            <p></p>
                            <div class="readmore">
                                <a href="#"><span class="flaticon-next"></span></a>
                                <div class="overlay-button">
                                    <a href="{{route('client.pages.post_pages', ['slug'=>$post->slug])}}">Read More</a>    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                @endif
            @endforeach
            <!--Start single solution style1--> 
            
            
        </div> 
    </div>
</section>
<!--End services style1 area-->
@endsection
