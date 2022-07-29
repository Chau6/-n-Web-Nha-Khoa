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
<section class="services-style1-area spec-page">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>Product</h3>
            <h1>Dental Products</h1>
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

        <div class="row" >      
            @foreach ($products as $product)
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{ asset('images/'.$product->images)}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" @switch($product->category_id)
                                @case(3)
                                href="{{route('client.pages.product_pages', ['slug'=>'toothbrushes'])}}"
                                    @break
                                @case(4)
                                href="{{route('client.pages.product_pages', ['slug'=>'toothpaste'])}}"
                                    @break
                                @case(5)
                                href="{{route('client.pages.product_pages', ['slug'=>'dental-floss'])}}"
                                    @break
                                @case(6)
                                href="{{route('client.pages.product_pages', ['slug'=>'face-mask'])}}"
                                    @break
                                @case(7)
                                href="{{route('client.pages.product_pages', ['slug'=>'dental-picks-and-sticks'])}}"
                                    @break
                                @case(8)
                                href="{{route('client.pages.product_pages', ['slug'=>'tongue-scrapers'])}}"
                                    @break
                                @case(9)
                                href="{{route('client.pages.product_pages', ['slug'=>'oral-medicine'])}}"
                                    @break
                                @default
                                    
                            @endswitch >
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
                        <h3 class="blog-title"><a href="">{{$product->name}}</a></h3> 
                        <div class="text-box">
                            <p>{!!$product->price!!}.00$</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" @switch($product->category_id)
                                @case(3)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'toothbrushes', 'slug_infor'=>$product->slug])}}"
                                    @break
                                @case(4)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'toothpaste', 'slug_infor'=>$product->slug])}}"
                                    @break
                                @case(5)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'dental-floss', 'slug_infor'=>$product->slug])}}"
                                    @break
                                @case(6)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'face-mask', 'slug_infor'=>$product->slug])}}"
                                    @break
                                @case(7)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'dental-picks-and-sticks', 'slug_infor'=>$product->slug])}}"
                                    @break
                                @case(8)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'tongue-scrapers', 'slug_infor'=>$product->slug])}}"
                                    @break
                                @case(9)
                                href="{{route('client.pages.product_infor',['id'=>$product->id,'slug'=>'oral-medicine', 'slug_infor'=>$product->slug])}}"
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
         
        {!! $products->links('layout.pagination') !!}
    </div>
</section>

@endsection
@section('css')
<style>

</style>
@endsection
@section('js')
<script src="{{ asset('asset/page/plugins/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $("#search").keyup(function (e){
        //     var search = $(this).val();
        //     $.ajax({
        //         type: "POST",
        //         url: "{{route('client.pages.PostSearchProduct')}}",
        //         data: {searchProduct: search},
        //         dataType: "html",
        //         success: function (response) {
        //             $(".noidung").html(response)
        //         }
        //     });
        // })
    })
</script>
@endsection