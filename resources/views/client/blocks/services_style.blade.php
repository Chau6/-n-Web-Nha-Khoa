<section class="services-style1-area sec-pd1">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>Product</h3>
            <h1>Dental Products</h1>
            <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life. </p>
        </div>
        <div class="row">
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
                    <div class="text-holder">
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
                            <p>{{$product->price}}.00$</p>
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
                                href="{{route('client.pages.product_infor',['id'=>'','slug'=>'face-mask', 'slug_infor'=>$product->slug])}}"
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
        </div> 
        
    </div>
</section>