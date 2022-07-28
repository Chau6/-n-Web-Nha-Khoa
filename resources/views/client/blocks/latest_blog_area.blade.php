<section class="latest-blog-area sec-pd1">
    <div class="container inner-content">
        <div class="sec-title max-width text-center">
            <h3>News & Tips</h3>
            <h1>Latest From Our Blog</h1>
            <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life.</p>
        </div>
        <div class="row">
            <!--Start single blog post-->
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
            <!--End single blog post-->
        </div>
    </div>
</section>