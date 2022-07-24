@extends('admin.master')

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
<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Doctor</h3>
          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Date</th>
                    <th>Time At</th>
                    <th>Doctor ID</th>
                    <th>Service</th>
                    <th>Description</th>
                    {{-- <th>Edit</th>
                    <th>Delete</th> --}}
                </tr>
                </thead>
                @foreach ($dat_lich as $item)
                <tbody>
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{$item->time}}</td>
                    <td>{{$item->doctor_name}}</td>
                    <td>{{$item->service}}</td>
                    <td>{{$item->description}}</td>
                    {{-- <td><a href="{{ route('admin.dat_lich.edit', ['id'=>$doctor->id]) }}">Edit</td>

                    <td><a onclick="return confirmDelete()" href="{{ route('admin.dat_lich.delete', ['id'=>$doctor->id]) }}">Delete</td> --}}
                </tr>            
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
            
        </div>
    </div>
  </form>
@endsection
