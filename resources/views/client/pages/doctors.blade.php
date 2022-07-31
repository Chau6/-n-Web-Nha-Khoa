@extends('client.master')



@section('breadcrumb')
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Meet Our Doctors</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Doctors</li>
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
    <!--Start Doctor area-->
<section class="doctor-area">
    <div class="container">
        <form method="get" action="" class="form-inline" role="form"  style="padding: 20px; margin-left: 76.5%">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="search" class="search" id="search">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-brands fa-searchengin"></i>
                </button>
            </div>
        </form>

        <div class="row">
            {{-- <div class="col-xl-4 col-lg-8">
                <div class="doctor-sidebar">
                    <!--Start Single Sidebar-->
                    <div class="single-sidebar">
                        <div class="doctor-tab-box tabs-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#doctor" class="tab-btn left"><span>Doctor Name</span></li>
                                <li data-tab="#specialization" class="tab-btn active-btn right"><span>Specialization</span></li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab" id="doctor">
                                    <form name="doctor-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="input-box">
                                                    <select class="selectmenu">
                                                        <option selected="selected">Dr. Daryl Cornelius</option>
                                                        <option>Evelynne Mirando</option>
                                                        <option>Dr. Robert B. Moreau</option>
                                                        <option>Dr. Greg House</option>
                                                        <option>Dr. Sarah Johnson</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="button-box">
                                                    <button class="btn-one" type="submit">Find a Doctor</button>    
                                                </div> 
                                            </div>
                                        </div>    
                                    </form>    
                                </div>
                                <div class="tab active-tab" id="specialization">
                                    <form name="doctor-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="input-box">
                                                    <select class="selectmenu">
                                                        <option selected="selected">Cosmetic Surgeon</option>
                                                        <option>Dental Implants</option>
                                                        <option>Cosmetic Dentistry</option>
                                                        <option>Laser Dentistry</option>
                                                        <option>Orthodontics</option>
                                                        <option>Endodontics</option>
                                                        <option>Periodontics</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="button-box">
                                                    <button class="btn-one" type="submit">Find a Doctor</button>    
                                                </div> 
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                            </div>      
                        </div>   
                    </div>
                    <!--End Single Sidebar-->
                    <!--Start Single Sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-appoinment">
                            <div class="title">
                                <h3>Make Appointment</h3>
                            </div> 
                            <form class="appoinment-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="form_name" value="" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="time" placeholder="Time">
                                            <div class="icon-box">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="date" placeholder="Date" id="datepicker">
                                            <div class="icon-box">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">   
                                        <div class="input-box">    
                                            <textarea name="form_message" placeholder="Message..." required=""></textarea>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn-one" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End Single Sidebar-->
                </div>    
            </div> --}}
            @foreach ($doctors as $doctor)
            <div class="col-xl-8">
                <div class="doctor-content">
                    <!--Start Single doctor item-->
                    <div class="single-doctor-item wow fadeInUp" data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="img-holder">
                                    <img src="{{asset('images/'.$doctor->images)}}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a class="btn-one" href="{{route('client.pages.appointment_create')}}">Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-holder" style="height:400px">
                                    <span>Implantologist</span>
                                    <h3>{{$doctor->fullname}}</h3>
                                    <h6>Qualification</h6>
                                    <p>{{$doctor->qualification}}</p>
                                    <ul>
                                        <li><span class="icon-phone"></span>{{$doctor->phone}}</li>
                                        <li><span class="flaticon-e-mail-envelope"></span>{{$doctor->email}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            @endforeach
        </div>
        {!! $doctors->links('layout.pagination') !!}
    </div>
</section>
<!--End Doctor area-->
@endsection



