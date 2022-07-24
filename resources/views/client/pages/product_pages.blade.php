@extends('client.master')


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
<section class="services-style1-area spec-page">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>Product</h3>
            <h1>Health Screening Page</h1>
            <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life. </p>
        </div>
        <div class="row">
            @foreach ($models as $product)
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{ asset('images/'.$product->images)}}" alt="Awesome Image">
                            <div class="categorie-button">
                                <a class="btn-one" href="#">Healthy Teeth</a>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <div class="author-thumb">
                                    <img src="{{ asset('images/'.$product->images)}}" alt="Image">
                                </div>
                                <ul class="meta-info">
                                    <li>{{$product->created_at}}</li>
                                </ul>    
                            </div>
                            <h3 class="blog-title"><a href="{{route('client.pages.product_infor',['id'=>$product->id, 'slug'=>$category->slug, 'slug_infor'=>$product->slug])}}">{{$product->name}}</a></h3> 
                            <div class="text-box">
                                <p>{!!$product->intro!!}</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>$category->slug, 'slug_infor'=>$product->slug])}}"><span class="flaticon-next"></span>Reading</a>
                            </div>  
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type=text name=body class="form-control" />
                <input type=hidden name=post_id value="{{ $post_id }}" />
                <input type=hidden name=parent_id value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type=submit class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach
        </div>
    </div>
</section>
@endsection