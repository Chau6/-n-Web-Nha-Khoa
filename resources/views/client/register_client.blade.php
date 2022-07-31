<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="	{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/page/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/page/plugins/fontawesome-free/css/all.min.css')}}">
 
</head>
<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
          
          <div class="px-5 ms-xl-4">
            <i class="fa fa-solid fa-tooth me-3 pt-5 mt-xl-4" style="color: #06e4e472; font-size: 2em"></i>
            <span class="h1 fw-bold mb-0">Register</span>
          </div>
          {{-- @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif --}}
          @if (Session::has('error'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{Session::get('error')}}
            </div>
          @endif
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
  
            <form id="checkform" style="width: 23rem;" action="{{route('postRegisterClient')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <div class="form-group">
                      <label class="form-label" for="form3Example1">First name</label>
                      <input type="text" name="first_name" id="form3Example1" class="form-control" value="{{old('first_name')}}"/>
                      @error('first_name')
                        <span style="color: red">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <div class="form-group">
                      <label class="form-label" for="form3Example2">Last name</label>
                      <input type="text" name="last_name" id="form3Example2" class="form-control" value="{{old('last_name')}}"/> 
                      @error('last_name')
                        <span style="color: red">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="form-outline mb-4">
                <div class="form-group">
                  <label class="form-label" for="form2Example18">Email address</label>
                  <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" value="{{old('email')}}"/>
                  @error('email')
                        <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
              </div>
  
              <div class="form-outline mb-4">
                <div class="form-group">
                  <label class="form-label" for="form2Example28">Password</label>
                  <input type="password" name="password" id="psw" class="form-control form-control-lg" />
                    @error('password')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
              </div>
              
              <div class="form-outline mb-4">
                <div class="form-group">
                  <label class="form-label" for="form2Example28">Confirm Password</label>
                    <input type="password" name="password_confirm" id="cpsw" class="form-control form-control-lg" />
                    @error('password_confirm')
                            <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
              </div>
  
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit" style="background: #06e4e472; border: #06e4e472 1px solid">Sign up</button>
              </div>
  
              <p>Have an account? <a href="{{route('getLoginClient')}}" class="link-info">Login Here</a></p>
  
            </form>
  
          </div>
  
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{asset('asset/client/images/slides/login_home.jpg')}}"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery -->
<script src="{{asset('asset/page/plugins/jquery/jquery.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('asset/page/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('asset/page/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js')}}"></script>
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        return true;
      }
    });
    $('#checkform').validate({
      rules: {
        last_name:{
          required: true,
          minlength: 6,
          maxlength: 20,
        },
        first_name:{
          required: true,
          minlength: 6,
          maxlength: 20,
        },
        email:{
          required: true,
        },
        password: {
          required: true,
          minlength: 6,
          maxlength: 20,
        },
        password_confirm: {
          required: true,
          minlength: 6,
          maxlength: 20,
        }
      },
      messages: {
        last_name:{
          required: "Please Enter Last Name",
          minlength: "Needs at least 8 characters",
          maxlength: "Cannot exceed 20 characters",
        },
        first_name:{
          required: "Please Enter First Name",
          minlength: "Needs at least 8 characters",
          maxlength: "Cannot exceed 20 characters",
        },
        email:{
          required: "Please Enter Email",
        },
        password: {
          required: "Please Enter Password",
          minlength: "Password needs at least 8 characters",
          maxlength: "Password cannot exceed 20 characters",
        },
        password_confirm: {
          required: "Please Enter Confirm Password",
          minlength: "Password needs at least 8 characters",
          maxlength: "Password cannot exceed 20 characters",
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
<script type="text/javascript">
  $(document).ready(function () {
    $("#checkform").submit(function(){
      var psw = $("#psw").val();
      var cpsw = $("#cpsw").val();
      if(psw == cpsw){
        $("#showError").html("");
        return true;
      }else{
        $("#showError").html("Password not match");
        $("#showError").css("color","red");
        return false;
      }
    })
  })
  </script>
</body>
</html>

