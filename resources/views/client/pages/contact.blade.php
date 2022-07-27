@extends('client.master')  

@section('breadcrumb')
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Contact Us</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
@endsection

@section('content')
@if (Session::has('success') )
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ Session::get('success') }}</strong>
  </div>
@endif
@if (Session::has('error') )
  <div class="alert alert-danger ">
      <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ Session::get('error') }}</strong>
  </div>
@endif
    <!--Start Contact info map area-->
<section class="contact-info-map-area">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h1>We are Here to Help You, Don’t Hesitate.</h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-info-map">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="contact-info-left">
                                <div class="contact-title">
                                    <h2>Send Your Message Us</h2>
                                    <p>Dont be shy, Send your message or through form, our expert will help you ASAP.</p>
                                </div>
                                <div class="state-select-box2">
                                    <select class="selectmenu area_select">
                                        <option value="1">Viet Nam</option>
                                        <option value="2">India</option>
                                    </select>
                                    <div class="state-content">
                                        <div class="state" id="value1">
                                            <ul>
                                                <li>
                                                    <div class="text">
                                                        <h5>Address</h5>
                                                        <p>D5 Nguyễn Gia Trí, Phường 25,Bình Thạnh, <br>  Thành phố Hồ Chí Minh, Việt Nam.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Phone</h5>
                                                        <p>Phone 1: 1800 1779<br> Phone 2: (+ 89) 1800 1779.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Email</h5>
                                                        <p>supportyou@example.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="state" id="value2">
                                            <ul>
                                                <li>
                                                    <div class="text">
                                                        <h5>Address</h5>
                                                        <p>Romanian  9520 Faires Farm Road,<br> Carlsbad, NC 28213, Los Angeles.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Phone</h5>
                                                        <p>Phone 1: +1 555-7890-123<br> Phone 2: (+ 760) 987-65-43210.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h5>Email</h5>
                                                        <p>supportyou@example.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="google-map-box">
                                <div 
                                    class="google-map" 
                                    id="contact-google-map" 
                                    data-map-lat="10.802406382828494" 
                                    data-map-lng="106.71573981064437" 
                                    data-icon-path="{{asset('asset/images/resources/map-marker.png')}}" 
                                    data-map-title="VietNam, New York, United Kingdom" 
                                    data-map-zoom="9" 
                                    data-markers='{
                                        "marker-1": [10.802406382828494, 106.71573981064437, "<h4>Aptech Home</h4><p>D5 Nguyễn Gia Trí, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>"],
                                        "marker-2": [40.602230, -74.689910, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"]
                                    }'>
                                </div>   
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>      
<!--End Contact info map area-->      

<!--Start contact form area-->

<section class="content">
    <form action="{{route('client.pages.postcontact')}}" id="checkform" method="POST">
        <!-- Default box -->
        @csrf
        <div class="card">
        <div class="card-body row">
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
                <h2>Belleville<strong> Dental</strong></h2>
                <p class="lead mb-5"><p>D5 Nguyễn Gia Trí, Phường 25,Bình Thạnh, <br>Thành phố Hồ Chí Minh, Việt Nam.</p><br>
                Phone: +1 1800 1779
                </p>
            </div>
            </div>
            <div class="col-7">
                @if (Auth::check())
                    <!-- Name -->
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" name="username" id="inputName" class="form-control" value="{{$customer->first_name}} {{$customer->last_name}}">
                        @error('username')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" value="{{$customer->email}}" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                        <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a email address</span>
                    </div>
                        {{-- @error('email')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror --}}
                    <!-- Phone -->
                    <div class="form-group">
                        <label for="inputSubject">Phone</label>
                        <input type="phone" name="phone" id="inputSubject" class="form-control" value="{{$customer->phone}}">
                        @error('phone')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror
                    </div>

                    @else
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" name="username" id="inputName" class="form-control">
                        @error('username')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" name="email" id="inputEmail" class="form-control">
                        @error('email')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputSubject">Phone</label>
                        <input type="text" name="phone" id="inputSubject" class="form-control">
                        @error('phone')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea id="inputMessage" name="message" class="form-control" rows="4"></textarea>
                        @error('message')
                            <small class="form-text invalid-feedback">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                    <input class="btn btn-info btn-lg btn-block" type="submit" style="background: #06e4e472; border: #06e4e472 1px solid" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!--End contact form area-->
@endsection
<!-- Button trigger modal -->

@section('js')
<script>
    $(function () {
      $.validator.setDefaults({
        submitHandler: function () {
          return true;
        }
      });
      $('#checkform').validate({
        rules: {
          email: {
            required: true,
            email: true,
          },
          username:{
            required:true,
            maxlength: 255,
          },
          phone:{
            number: true,
            minlength: 8,
          },
          message:{
            required:true,
          }
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address",
          },
          phone:{
            number: "Please enter number only",
            minlength: "Phone needs at least 8 characters",
          },
          username: {
            required: "Please enter a name",
            maxlength: "Your name cannot exceed 255 characters",
          },
          message:{
            required: "Please enter message",
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>
@endsection