@extends('client.master')

@section('breadcrumb')
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Make Apppointment</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Make Apppointment</li>
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
    <!--Start Appointment area -->
<div class="appointment-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title max-width text-center">
                    <h1>Make an Appointment</h1>
                    <p>Here you can get doctors available time & you can get your perfect visiting time to hospital.</p>
                </div>
            </div>
        </div>
        {{-- @if (Session::has('success') )
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <div class="row">
            <div class="col-xl-8">
                <div class="appointment-form-left">
                    <form action="{{ route('client.pages.store') }}" id="checkform" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Patient Name</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="p_name" value="{{old('name')}}" placeholder="Patient Name*">    
                                                @error('name')
                                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Phone Number</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Ph Num*">   
                                                @error('phone')
                                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                                @enderror
                                            </div>  
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Age</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <input type="text" name="age" id="age" value="{{old('age')}}" placeholder="Age*"> 
                                                @error('age')
                                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Doctor</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <select class="form-control" name="doctor_name" id="doctor_name">
                                                <option value="">---</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">{{ $doctor->fullname }}</option>
                                                @endforeach
                                            </select>
                                            @error('doctor_name')
                                                <small class="form-text invalid-feedback">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Date</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <input type="text" value="{{old('date')}}" name="date" class="date-input" id="date-in" placeholder="Date"> 
                                                @error('date')
                                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Available at</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <select class="selectmenu" name="time" id="time">
                                            </select> 
                                            @error('time')
                                                <small class="form-text invalid-feedback">{{$message}}</small>
                                            @enderror   
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea name="description" placeholder="Description...">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Service</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <select class="selectmenu" name="service" id="service">
                                                <option>Dental Implants</option>
                                                <option>Cosmetic Dentistry</option>
                                                <option>Laser Dentistry</option>
                                                <option>Orthodontics</option>
                                                <option>Endodontics</option>
                                                <option>Periodontics</option>
                                            </select>    
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea name="description" placeholder="Description...">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        
                        <div class="button-box">
                            <button class="btn-one" style="margin:0px 560px" type="submit">Confirm</button>     
                        </div> 
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Appointment area -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#doctor_name').change(function() {
            $.ajax({
                type: "GET",
                url: '{{ route("client.pages.get_data_ajax", ["id" => $doctor->id]) }}',
                dataType: "html",
                success: function (response) {
                    $('#time').html(response)
                }
            });
        })
    })
</script>

@endsection

@section('js')
<!-- validate -->
<script src="{{ asset('asset/client/js/validation.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script>
    $(function () {
      $.validator.setDefaults({
        submitHandler: function () {
          return true;
        }
      });
      $('#checkform').validate({
        rules: {
          name:{
            required:true,
            maxlength: 255,
          },
          doctor_name:{
            required:true,
            maxlength: 255,
          },
          time:{
            required:true,
            maxlength: 255,
          },
          phone:{
            required:true,
            number: true,
            minlength: 8,
            maxlength: 15
          },
          age:{
            required:true,
            number: true,
            minlength: 1,
            maxlength: 2
          },
          date:{
            required:true
          }
        },
        messages: {
          phone:{
            number: "Please enter number only",
            minlength: "Phone needs at least 8 characters",
            maxlength: "Phone max is 15 characters"
          },
          age:{
            number: "Please enter number only",
            required: "Please enter your age",
            minlength: "Age needs at least 1 characters",
            maxlength: "Age max is 2 characters"
          },
          name: {
            required: "Please enter your name",
            maxlength: "Your name cannot exceed 255 characters"
          },
          date: {
            required: "Please enter date",
          },
          doctor_name: {
            required: "Please enter doctor name",
          },
          time: {
            required: "Please enter time",
          },
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
<script>
    $('input[name="phone"]').keyup(function(e){
        if (/\D/g.test(this.value)){
            this.value = this.value.replace(/\D/g, '');
        }
    });
</script>
@endsection