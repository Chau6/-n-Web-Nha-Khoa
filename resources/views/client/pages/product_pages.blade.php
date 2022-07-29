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
                                <a class="btn-one" href="#">
                                <?php 
                                    switch ($product->category_id) {
                                        case '3':
                                            echo "Toothbrushes";
                                            break;
                                        case '4':
                                            echo "Toothpaste";
                                            break;
                                        case '5':
                                            echo "Dental Floss";
                                            break;
                                        case '6':
                                            echo "Face Mask";
                                            break;
                                        case '7':
                                            echo "Dental Picks And Sticks";
                                            break;
                                        case '8':
                                            echo "Tongue Scrapers";
                                            break;
                                        case '9':
                                            echo "Oral Medicine";
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
                                    <img src="{{ asset('images/'.$product->images)}}" alt="Image">
                                </div>
                                <ul class="meta-info">
                                    <li>{{date('d-m-Y', strtotime($product->created_at))}}</li>
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
        </div>
        
        {!! $models->links('layout.pagination')!!}
        
    </div>
</section>
@endsection