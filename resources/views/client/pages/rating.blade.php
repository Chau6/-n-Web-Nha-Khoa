<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start Rating</title>
    <link rel="stylesheet" href="{{ asset('asset/client/css/rating.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/client/css/bootstrap.css')}}" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="width: 700px">
        <h3 align="center">HIII</h3>
        <br><br><br>

        <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
    </div>
</body>
</html>

<div id="loginModal" class="modal fade" role="dialog">  
    <div class="modal-dialog">  
 <!-- Modal content-->  
         <div class="modal-content">  
              <div class="modal-header">  
                   <button type="button" class="close" data-dismiss="modal">&times;</button>  
                   <h4 class="modal-title">Login</h4>  
              </div>  
              <div class="modal-body">  
                   <label>Username</label>  
                   <input type="text" name="username" id="username" class="form-control" />  
                   <br />  
                   <label>Password</label>  
                   <input type="password" name="password" id="password" class="form-control" />  
                   <br />  
                   <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
              </div>  
         </div>  
    </div>  
</div>  