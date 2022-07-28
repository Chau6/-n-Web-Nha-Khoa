@extends('client.master')

@section('breadcrumb')
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>About</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">About Us</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
@endsection

@section('content')

<!--Start About Area Home 2-->
    @include('client.blocks.about_area_home2')
<!--End About Area Home 2-->

<!--Start fact counter area-->
    @include('client.blocks.fact_counter')
<!--End fact counter area--> 

<!--Start mission vision area-->
    @include('client.blocks.mission_vision') 
<!--End mission vision area--> 

<!--Start Choose area--> 
    @include('client.blocks.choose_area')
<!--End Choose area-->  

<!--Start team area-->
    {{-- @include('client.blocks.team_are') --}}
<!--End team area-->
@endsection