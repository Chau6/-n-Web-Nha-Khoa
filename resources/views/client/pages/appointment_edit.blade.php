@extends('client.master')

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
<section style="background-color: #eee;">
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
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
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
                    <p class="mb-0" ><a href="" align="center">Your Appointment</a></p>
                  </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <form action="{{ route('client.pages.update', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="single-box">
                            <div class="title">
                                <h5>Patient Name</h5>
                            </div>
                            <div class="input-box">
                                <div class="col-xl-6">
                                    <input type="text" name="name" id="p_name" value="{{$edit->name}}" placeholder="Patient Name*" required pattern="[A-Za-z]{1,}" title="Please enter your name"> 
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
                                    <input type="text" name="phone" value="{{$edit->phone}}" placeholder="Ph Num*" required pattern="[0-9]{10}" title="Please enter your phone number, must be 10 number">{{old('phone')}}    
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
                                    <input type="text" name="age" id="age" value="{{$edit->age}}" placeholder="Age" required pattern="[0-9]{1,2}" title="Please enter your age">{{old('age')}} 
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
                                    <select class="form-control" name="doctor_name" id="doctor_id">
                                        <?php
                                            $data=array();
                                            $datas=array();
                                        ?>
                                        @foreach($doctors as $doctor)
                                            @if(!empty($doctor))
                                                <?php
                                                    $data['id'] = $doctor->id;
                                                    $data['fullname'] = $doctor->fullname;
                                                    $datas[] = $data;
                                                ?>
                                            @endif
                                        @endforeach
                                        <?php recursiveOptionDocTime($datas,0);?>
                                    </select>
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
                                    <input type="text" name="date" value="{{$edit->date}}" class="date-input" id="date-in" placeholder="Date">
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
                                    <select class="selectmenu" name="time">
                                        <option value="9:00am" {{ $edit->time == '9:00am' ? 'selected':'' }}>9:00am</option>
                                        <option value="11:30am" {{ $edit->time == '11:30am' ? 'selected':'' }}>11:30am</option>
                                        <option value="12:00pm" {{ $edit->time == '12:00pm' ? 'selected':'' }}>12:00pm</option>
                                        <option value="3:00pm" {{ $edit->time == '3:00pm' ? 'selected':'' }}>3:00pm</option>
                                        <option value="4:00pm" {{ $edit->time == '4:00pm' ? 'selected':'' }}>4:00pm</option>
                                        <option value="5:00pm" {{ $edit->time == '5:00pm' ? 'selected':'' }}>5:00pm</option>
                                        <option value="5:30pm" {{ $edit->time == '5:30pm' ? 'selected':'' }}>5:30pm</option>
                                        <option value="6:00pm" {{ $edit->time == '6:00pm' ? 'selected':'' }}>6:00pm</option>
                                        <option value="7:00pm" {{ $edit->time == '7:00pm' ? 'selected':'' }}>7:00pm</option>
                                        <option value="7:30pm" {{ $edit->time == '7:30pm' ? 'selected':'' }}>7:30pm</option>
                                    </select>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
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
                                    <textarea name="description" placeholder="Description...">{{$edit->description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="button-box">
                    <button class="btn-one" style="margin:0px 560px" type="submit">Confirm</button>     
                </div>   
            </form>
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