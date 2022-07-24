@extends('client.master')

@section('content')
        <!--Main Slider-->
        @include('client.blocks.main_slider')
    <!--End Main Slider-->

    <!--Start About Area-->
        @include('client.blocks.about_area')
    <!--End About Area-->

    <!--Start services style1 area-->
        @include('client.blocks.services_style')
    <!--End services style1 area-->

    <!--Start works area-->
        @include('client.blocks.works_area')
    <!--End works area-->

    <!--Start latest blog area-->
        @include('client.blocks.latest_blog_area')
    <!--End latest blog area--> 

@endsection