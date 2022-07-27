@extends('client.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        {{-- @foreach ($models as $model) --}}
        @if ($models->status == 1)
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$models->name}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{date('d m,Y', strtotime($models->created_at))}} by Belleville Dental</div>
                        <!-- Post categories-->
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('images/'.$models->images)}}" alt="..." style="width:900px;height:400px;"></figure>
                    <div id="similar-product" class="carousel silde" data-ride="carousel">
                        <div class="carousel-inner">
                                @foreach($gallery as $key => $gal)
                                    <a data-thumb="{{ asset('images/'.$gal->gallery_image)}}" data-src="{{ asset('images/'.$gal->gallery_image)}}">
                                        <img style="width:120px;height:120px;" alt="..." src="{{ asset('images/'.$gal->gallery_image)}}">
                                    </a>
                                @endforeach
                        </div>   
                    </div>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p>{!!$models->content!!}</p>
                    </section>
                </article>
                <!-- Comments section-->
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
{{-- <section class="content-item" id="comments">
    <div class="container">   
    	<div class="">
            <div class="" style="padding: 30px">   
                <form>
                	<h3 class="pull-left">New Comment</h3>
                	<button type="submit" class="btn btn-normal pull-right">Submit</button>
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2 hidden-xs">
                            	<img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            </div>
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                @if (Auth::check())
                                <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                                @endif
                                <a href="#" style="background: #0eae36ac; color:black; border-radius: 1em; border:#0eae36ac solid 1px; padding: 15px; box-sizing: border-box; margin: auto">You need to be logged in to rate this product </a>
                            </div>
                        </div>  	
                    </fieldset>
                </form>
                
                <h3>4 Comments</h3>
                
                <!-- COMMENT 1 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014<i class="fa fa-thumbs-up" style="padding-left: 10px"></i>13</li>
                            
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a> <a href="" style="padding-left: 10px">Reply</a></li> 
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 1 - END -->
                
                <!-- COMMENT 2 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 2 - END -->
                
            
            </div>
        </div>
    </div>
</section> --}}
            </div>
        @endif
        
        {{-- @endforeach --}}
        
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">
                    Total Rating Parameters</div>
                <div class="card-body">
                    <div style="padding: 10px; margin: auto">
                        <table>
                            <tr><td><div id="rateTotal"></div></td>
                            <td>
                                @if ($ratingAvg)
                                <div> {{$ratingAvg}}/5 - ({{$userRating->user_id}} rated) </div>
                                @else
                                <div> 0.0/5 - (0 rated) </div>
                                @endif 
                            </td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Your Rating</div>
                <div class="card-body">
                    @if (Auth::check())
                    <div class="row">
                        <div class="col-sm-6" style="text-align:center">  
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#showRating" style="background: #f9a43cd7;color:rgb(249, 249, 249);border:#f9a43cd7 1px solid; border-radius: 3em">
                                Rating Here
                            </button>
                        </div>
                    </div>
                    @else
                        <span class="form-text" style="color: Red">You need to be logged in to rate this product</span>
                    @endif
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
@if (Auth::check())
<div class="modal fade" id="showRating" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{route('client.pages.rating')}}" method="post" id="formRating">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        Your Rating Is:
                        <table style="margin: 0 auto;
                                    padding: 15px">
                            <tr>
                                <td colspan="2" align="center"><div id="rate"></div></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input name="rating" id="rating_start" type="hidden"></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="user_id" value="{{Auth::user()->id}}"></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="product_id" value=" {{$models->id}}"></td>

                            </tr>
                        </table>
                        
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif


<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
//Make sure that the dom is ready
$(function () {
    let ratingAvg = '{{$ratingAvg}}';
    $("#rate").rateYo({
        rating: 5.0,
        halfStar: true,
        starWidth: "40px"
    }).on("rateyo.set", function (e, data) {
        $('#rating_start').val(data.rating);
        $("#formRating").submit();
        });

    $("#rateYo").rateYo({
        rating: 4.0,
        readOnly: true
    })
    $("#rateTotal").rateYo({
        rating: ratingAvg,
        readOnly: true,
        starWidth: "30px"
    })
});
</script>
@endsection