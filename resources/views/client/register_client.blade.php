<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/client/css/bootstrap.css')}}">

</head>
<body>
    <form action="{{route('postRegisterClient')}}" method="POST" id="loginForm">
        @csrf
    <section class="vh-100" style="background-color: #7FFFD4;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src=""
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Register</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account</h5>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example17">UserName</label>
                            <input type="text" id="form2Example17" name="username" class="form-control form-control-lg" value="{{old('username')}}"/>
                            
                          </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example17">Email address</label>
                            <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" value="{{old('email')}}"/>
                          
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="psw">Password</label>
                            <input type="password" name="password" value="" id="psw" class="form-control form-control-lg" />
                          
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="cpsw">Repeat Password</label>
                            <input type="password" name="" value="" id="cpsw" class="form-control form-control-lg" />
                            <span id="showError"></span>
                          </div>
      
                        <div class="pt-1 mb-4">
                          <input type="submit" class="btn btn-dark btn-lg btn-block" value="Submit"/>
                        </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">You have an account? <a href="{{route('getLoginClient')}}"
                            style="color: #393f81;">Login here</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
    <!-- jQuery -->
<script src="{{asset('asset/page/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#loginForm").submit(function(){
        var psw = $("#psw").val();
        var cpsw = $("#cpsw").val();
        if(psw == cpsw){
            $("#showError").html("");
            return true;
        }else{
            $("#showError").html("PLease repeat the password");
            $("#showError").css("color","red");
            return false;
        }
        })
    })
    </script>
</body>
</html>