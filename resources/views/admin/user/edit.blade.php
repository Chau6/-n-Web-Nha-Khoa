@extends('admin.master')

@section('content')
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<form action="{{ route('admin.user.update', ['id'=>$user->id]) }}" method="POST" id="checkform">  
    @csrf
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
      <div class="card-tools">
      </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="email">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="{{ $user->first_name }}">
            @error('first_name')
                <small class="form-text invalid-feedback">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="{{ $user->last_name }}">
            @error('last_name')
                <small class="form-text invalid-feedback">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
        <label>Gender</label>
        <select class="form-control" name="gender">
            <option value="2" {{ $user->gender == '2' ? 'selected':'' }}>Female</option>
            <option value="1" {{ $user->gender == '1' ? 'selected':'' }}>Male</option>
        </select>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $user->email }}">
            @error('email')
                <small class="form-text invalid-feedback">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{ $user->phone }}">
            @error('phone')
                <small class="form-text invalid-feedback">{{$message}}</small>
            @enderror
        </div>
        
        @if (Auth::user()->level == 1 && Auth::user()->id == 1 || Auth::user()->level == 1)
            @if ($user->level == 1 && $user->id == 1 || $user->level == 1)
                
            @else
            <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level">
                    <option value="0" {{ $user->level == '0' ? 'selected':'' }}>Member</option>
                    <option value="1" {{ $user->level == '1' ? 'selected':'' }}>Admin</option>
                </select>
            </div> 
            @endif
         
        @endif
    
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
        
    </div>
</div>
</form>
@endsection

@section('js')
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
          }
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
          },
          phone:{
            number: "Please enter number only",
            minlength: "Phone needs at least 8 characters",
            maxlength: "First name must not exceed 15",
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