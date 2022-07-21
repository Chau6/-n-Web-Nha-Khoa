@extends('client.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($models as $model)
            @if ($model->status == 1)
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$model->name}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{date('d m,Y', strtotime($model->created_at))}} by Belleville Dental</div>
                        <!-- Post categories-->
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..."></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p>{!!$model->content!!}</p>
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">

                            <!-- Comment form-->
                            
                            <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                            <!-- Comment with nested comments-->
                            <div class="d-flex mb-4">
                                <!-- Parent comment-->
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                                <div class="ms-3">
                                    
                                    <div class="fw-bold">Commenter Name</div>
                                    If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                    <!-- Child comment 1-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                        </div>
                                    </div>
                                    <!-- Child comment 2-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            When you put money directly to a problem, it makes a good headline.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single comment-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endif
        
        @endforeach
        
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
                            <td><div>{{$ratingAvg}}/5 - ({{$userRating->user_id}} rated)</div></td></tr>
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
                                @foreach ($models as $item)
                                
                                <td><input type="hidden" name="product_id" value=" {{$item->id}}"></td>
                                @endforeach
                            </tr>
                        </table>
                        
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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