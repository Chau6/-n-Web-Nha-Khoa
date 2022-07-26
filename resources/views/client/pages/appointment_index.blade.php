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
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
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
              <li class="breadcrumb-item"><a href="{{route('client.pages.information_client')}}">User Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">Appointment Details</li>
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
              
            </div>
          </div>

        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Phone Number</th>
                            <th>Age</th>
                            <th>Doctor Name</th>
                            <th>Date and Time</th>
                            {{-- <th>Service</th> --}}
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    @foreach ($datas as $item)
                    <tbody>
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->age}}</td>
                        <td><?php $data = DB::table('doctors')->where('id', $item->doctor_name)->first()?>{{$data->fullname}}</td>
                        <td>{{$item->date . '-' . $item->time}}</td>
                        {{-- <td>{{$item->service}}</td> --}}
                        <td>{{$item->description}}</td>
                        <td><a href="{{ route('client.pages.appointment_edit', ['id'=>$item->id]) }}">Edit</td>
                        <td><a onclick="return confirmDelete()" href="{{ route('client.pages.delete', ['id'=>$item->id]) }}">Delete</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </section>   
@endsection