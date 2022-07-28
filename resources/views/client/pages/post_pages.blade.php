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
<section class="services-style1-area spec-page">
    <div class="container">
        {{-- <div class="col-md-9"> --}}
            <div class="sec-title max-width text-center">
                <h3>Post</h3>
                <h1>Health Screening Page</h1>
                <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life. </p>
            </div>
            <div class="row">
                @foreach ($models as $post)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="{{ asset('images/'.$post->images)}}" alt="Awesome Image">
                                <div class="categorie-button">
                                    <a class="btn-one" href="#">
                                        <?php 
                                    switch ($post->category_id) {
                                        case '10':
                                            echo "Toothache";
                                            break;
                                        case '11':
                                            echo "Stained Teeth";
                                            break;
                                        case '12':
                                            echo "Cavities";
                                            break;
                                        case '13':
                                            echo "Cracked Tooth";
                                            break;
                                        case '14':
                                            echo "Sensitive to Cold";
                                            break;
                                        default:
                                            # code...
                                            break;
                                    }   
                                ?></a>    
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="meta-box">
                                    <div class="author-thumb">
                                        <img src="{{ asset('images/'.$post->images)}}" alt="Image">
                                    </div>
                                    <ul class="meta-info">
                                        <li>{{date('d-m-Y', strtotime($post->created_at))}}</li>
                                    </ul>    
                                </div>
                                <h3 class="blog-title"><a href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>$category->slug, 'slug_infor'=>$post->slug])}}">{{$post->name}}</a></h3> 
                                <div class="text-box">
                                    <p>{!!$post->intro!!}</p>
                                </div>
                                <div class="readmore-button">
                                    <a class="btn-two" href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>$category->slug, 'slug_infor'=>$post->slug])}}"><span class="flaticon-next"></span>Reading</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $models->links('layout.pagination') !!}
        {{-- </div> --}}
    </div>
</section>
@endsection