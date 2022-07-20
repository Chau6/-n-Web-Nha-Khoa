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
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Sprcial</li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Product</li>
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

<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>
          <div class="card-tools">
          </div>
        </div>
        
        <div class="row">
            
            @foreach ($products as $product)
                @if ($product->parent_name == 1)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-solution-style1 wow fadeInUp" data-wow-delay="300ms">
                        <div class="img-holder">
                            <img src="" alt="Awesome Image">
                            <div class="icon-holder">
                                <div class="inner-content">
                                    <div class="box">
                                        <span class="icon-teeth-2"></span>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="text-holder">
                            <h3><a href="" style="color: rgba(72, 67, 67, 0.867)">{{$product->name}}</a></h3>
                            <p></p>
                            <div class="readmore">
                                <a href="#"><span class="flaticon-next"></span></a>
                                <div class="overlay-button">
                                    <a href="{{route('client.pages.product_pages', ['slug'=>$product->slug])}}">Read More</a>    
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
  </form>

@endsection
