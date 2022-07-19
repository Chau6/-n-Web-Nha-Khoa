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
                            <li><a href="{{route('client.pages.index')}}">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="{{route('client.pages.health_screening')}}">Post</a></li>
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
<div class="container">
    <div class="col-md-9">
        <div class="row">
            @foreach ($models as $post)
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{('http://127.0.0.1:8000/asset/images/blog/v1-1.jpg')}}" alt="Awesome Image">
                            <div class="categorie-button">
                                <a class="btn-one" href="#">Healthy Teeth</a>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <div class="author-thumb">
                                    <img src="http://127.0.0.1:8000/asset/images/blog/author-1.png" alt="Image">
                                </div>
                                <ul class="meta-info">
                                    <li>{{$post->created_at}}</li>
                                </ul>    
                            </div>
                            <h3 class="blog-title"><a href="blog-single.html">{{$post->name}}</a></h3> 
                            <div class="text-box">
                                <p>{!!$post->intro!!}</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="{{route('client.pages.post_infor',['slug'=>$category->slug, 'slug_infor'=>$post->slug])}}"><span class="flaticon-next"></span>Reading</a>
                            </div>  
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection