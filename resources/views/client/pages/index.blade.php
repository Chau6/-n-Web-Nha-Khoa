@extends('client.master')

@section('content')
        <!--Main Slider-->
        @include('client.blocks.main_slider')
    <!--End Main Slider-->

    <!--Start About Area-->
        @include('client.blocks.about_area')
    <!--End About Area-->

    <!--Start Highlights area-->
        @include('client.blocks.highlighs_area')
    <!--End Highlights area-->

    <!--Start services style1 area-->
        @include('client.blocks.services_style')
    <!--End services style1 area-->

    <!--Start team area v2-->
        @include('client.blocks.team_area_v2')
    <!--End team area v2-->

    <!--Start works area-->
        @include('client.blocks.works_area')
    <!--End works area-->

    <!--Start Testimonial area-->
        @include('client.blocks.testimonial')
    <!--End Testimonial area-->

    <!--Start latest blog area-->
        @include('client.blocks.latest_blog_area')
    <!--End latest blog area--> 

    <!--Start newsletter area-->
        {{-- @include('client.blocks.newsletter') --}}
    <!--End newsletter area-->
@endsection