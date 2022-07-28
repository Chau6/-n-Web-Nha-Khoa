
@extends('client.master')


@section('breadcrumb')
  <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">FAQ’s</li>
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
<!--Start faq area-->
<section class="faq-area">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h1>Get Your Answer Here</h1>
            <p>Here you can get your answers about our dental company,service and more...</p>
        </div>
        <div class="faq-search-box">   
            <form class="search-form" action="#">
				<input type="search" name="search" placeholder="Enter Keyword..." required>
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-content-box">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Eius modi tempora incidunt ut labore magnam?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Dolores eos qui ratione voluptatem sequi nesciunt?</h4></div>
                            <div class="accord-content collapsed">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Neque qui dolorem ipsum quia dolor sit amet?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Sed quia non numquam eius modi tempora?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>    
                </div>    
            </div>
            
            <div class="col-xl-6">
                <div class="faq-content-box">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Tempora incidunt  labore et dolore magnam?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Incidunt ut labore magnam aliquam quaerat ad?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Sed quia non numquam eius modi tempora?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Eius modi tempora incidunt ut labore magnam?</h4></div>
                            <div class="accord-content">
                                <p>Sit voluptatem accusantium doloremque laudantium  totam aperiam eaque ips quae ab illo inventore veritatis et quasi architecto beatae sed vitae dicta sunt explicabo enim ipsam voluptatem.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>    
                </div>    
            </div>
            
          
            
        </div>
    </div>
</section>   
<!--End faq area-->   
@endsection