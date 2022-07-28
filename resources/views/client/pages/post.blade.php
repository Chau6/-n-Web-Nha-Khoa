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
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{ asset('images/'.$post->images)}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" @switch($post->category_id)
                                @case(10)
                                href="{{route('client.pages.post_pages', ['slug'=>'toothache'])}}"
                                    @break
                                @case(11)
                                href="{{route('client.pages.post_pages', ['slug'=>'stained-teeth'])}}"
                                    @break
                                @case(12)
                                href="{{route('client.pages.post_pages', ['slug'=>'cavities'])}}"
                                    @break
                                @case(13)
                                href="{{route('client.pages.post_pages', ['slug'=>'cracked-tooth'])}}"
                                    @break
                                @case(14)
                                    href="{{route('client.pages.post_pages', ['slug'=>'sensitive-to-cold'])}}"
                                    @break
                                @default
                                    
                            @endswitch >
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
                                ?>
                            </a>    
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
                        <h3 class="blog-title"><a href="">{{$post->name}}</a></h3> 
                        <div class="text-box">
                            <p>{!!$post->intro!!}</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" @switch($post->category_id)
                                @case(10)
                                href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>'toothache', 'slug_infor'=>$post->slug])}}"
                                    @break
                                @case(11)
                                href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>'stained-teeth', 'slug_infor'=>$post->slug])}}"
                                    @break
                                @case(12)
                                href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>'cavities', 'slug_infor'=>$post->slug])}}"
                                    @break
                                @case(13)
                                href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>'cracked-tooth', 'slug_infor'=>$post->slug])}}"
                                    @break
                                @case(14)
                                    href="{{route('client.pages.post_infor',['id'=>$post->id,'slug'=>'sensitive-to-cold', 'slug_infor'=>$post->slug])}}"
                                    @break
                                @default
                                    
                            @endswitch><span class="flaticon-next"></span>Reading</a>
                        </div>  
                    </div>
                </div>
            </div>
            @endforeach
            <!--Start single solution style1--> 
            
        </div>
        {!! $posts->links('layout.pagination') !!} 
    </div>
</section>
<!--End services style1 area-->
@endsection
