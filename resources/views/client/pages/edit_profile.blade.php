@extends('client.master')

@section('content')

<form action="{{ route('client.pages.post_edit_profile', ['id'=>$user->id]) }}" method="POST" id="checkform" enctype="multipart/form-data">  
    @csrf
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container" style="padding-top: 30px">
    <div class="row flex-lg-nowrap">

    <div class="col">
        <div class="row">
        <div class="col mb-3">
            <div class="card">
            <div class="card-body">
                <div class="e-profile">
                <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        @php
                        $avatar = $user->avatar == NULL ? 'no-avatar.png' : $user->avatar;
                        $image = asset('images/'. $avatar);
                        @endphp
                          <img src="{{$image}}" width="140px" height="140px">
                        </div>
                    </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user->first_name}} {{$user->last_name}}</h4>
                        
                        <div class="upload">
                          <button type = "button" class = "btn-warning">
                            <i class = "fa fa-upload"></i> Upload File
                            <input type="file" id="image" name="avatar">
                          </button>
                        </div>
                    </div>
                    <div class="text-center text-sm-right">
                        <div class="text-muted"><small>Joined {{date('d-m-Y', strtotime($user->created_at))}}</small></div>
                    </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane active">
                    
                        <div class="row">
                        <div class="col">
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="Enter First Name" value="{{$user->first_name}} ">
                                @error('first_name')
                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Enter Last Name" value="{{$user->last_name}}">
                                @error('last_name')
                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                @enderror
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter Email" value="{{$user->email}}">
                                @error('email')
                                    <small class="form-text invalid-feedback">{{$message}}</small>
                                @enderror
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="2" {{ $user->gender == '2' ? 'selected':'' }}>Female</option>
                                        <option value="1" {{ $user->gender == '1' ? 'selected':'' }}>Male</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter Phone" value="{{$user->phone}}">
                                    @error('phone')
                                        <small class="form-text invalid-feedback">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                        </div>
                    

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        </div>

    </div>
    </div>
    </div>
</form>
@endsection
@section('js')
<!-- validate -->
<script src="{{ asset('asset/client/js/validation.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('asset/pages/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script>
  $('input[name="phone"]').keyup(function(e)
  {
  if (/\D/g.test(this.value))
  {
    this.value = this.value.replace(/\D/g, '');
  }
});
</script>
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
          first_name:{
            required:true,
            maxlength: 20,
          },
          last_name:{
            required:true,
            maxlength: 20,
          },
          phone:{
            number: true,
            minlength: 8,
            maxlength: 15,
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address",
          },
          phone:{
            number: "Please enter number only",
            minlength: "Phone needs at least 8 characters",
            maxlength: "Phone must not exceed 15",
          },
          first_name:{
            required: "Please enter first name",
            maxlength: "First name must not exceed 20",
          },
          last_name:{
            required: "Please enter first name",
            maxlength: "Last name must not exceed 20",
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
@endsection
@section('css')
<style>
.btn-warning{
  position: relative;
  padding: 11px 16px;
  font-size: 15px;
  line-height: 1.5;
  border-radius: 3px;
  color: #fff;
  background-color: #02d854;
  border: 0;
  transition: 0.2s;
  overflow: hidden; \\ L
}

.btn-warning input[type = "file"]{
  cursor: pointer;
  position: absolute;
  left: 0%;
  top: 0%;
  transform: scale(3);
  opacity: 0;
}

.btn-warning:hover{
  background-color: #74c995;
}
</style>
@endsection