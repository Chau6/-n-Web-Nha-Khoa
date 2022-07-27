@extends('client.master')

@section('content')

<section style="background-color: #eee;">
  @if (Session::has('success') )
  <div class="container">
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ Session::get('success') }}</strong>
    </div>
  </div>
    
  @endif
  @if (Session::has('error') )
    <div class="container">
      <div class="alert alert-danger ">
        <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ Session::get('error') }}</strong>
    </div>  
    </div>
  @endif
    <div class="container py-5">
        {{-- Top --}}
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('client.pages.index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
        
      <div class="row">
        <div class="col-lg-4">
        {{-- Infor --}}
          <div class="card mb-4">
            <div class="card-body text-center">
              @php
                  $avatar = $user->avatar == NULL ? 'no-avatar.png' : $user->avatar;
                  $image = asset('images/'. $avatar);
              @endphp
              <img src="{{ $image }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{$user->first_name}} {{$user->last_name}}</h5>
              <?php
                    if ($user->level == 1 && $user->id == 1) {
                    echo "<p><span class='badge badge-warning' style='color:rgb(76, 98, 117)'>SuperAdmin</span></p>";
                    }elseif($user->level == 1) {  
                    echo "<p><span class='badge badge-danger'>Admin</span></p>";
                    } else{
                    echo "<p><span class='badge badge-info'>Member</span></p>";
                    }
                ?>
              
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary"><a href="{{route('client.pages.edit_profile', ['id'=>Auth::user()->id])}}" style="color:#eee">Edit</a></button>
                
              </div>
            </div>
          </div>

          {{--  --}}
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3" >
                  <p class="mb-0" ><a href="" align="center">Contact</a></p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3" >
                    <p class="mb-0" ><a href="{{ route('client.pages.appointment_index') }}" align="center">Your Appointment</a></p>
                  </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->email}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->phone}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    @switch($user->gender)
                        @case(1)
                            Male
                            @break
                        @case(2)
                            Female
                            @break
                        @default                       
                    @endswitch
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p>Abc</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                    <p>DEF</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection