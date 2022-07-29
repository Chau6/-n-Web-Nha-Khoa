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
        
        {{-- <form action="{{route('client.pages.PostSearchProduct')}}" method="POST">
            @csrf
            <p style="display:block; padding: 5px; margin: 20px 10px; right: 0; text-align:right"><input type="text" name="searchProduct" size="30px" style="padding: 5px; position: relative; left:-10px; color:black; border-radius: 15px" id="search"><button id="search" for="search">Search</button></p>
        </form> --}}
        <form method="get" action="" class="form-inline" role="form" style="padding: 20px; margin-left: 76.5%">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="search" class="search" id="search">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-brands fa-searchengin"></i>
                </button>
            </div>
        </form>

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
                    <div class="text-holder" style="height:400px">
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
