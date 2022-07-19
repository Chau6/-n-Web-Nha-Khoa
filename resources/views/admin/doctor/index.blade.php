@extends('admin.master')

@section('content')
@if (Session::has('success'))
  <div class="alert alert-success alert-block">
      <strong>{{Session::get('success')}}</strong>
  </div>
@endif
@if (Session::has('error'))
  <div class="alert alert-error">
      <strong>{{Session::get('error')}}</strong>
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
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                @foreach ($doctors as $doctor)
                <tbody>
                <tr>
                    <td>{{ $doctor->fullname }}</td>
                    <td>
                        @switch($doctor->gender)
                            @case(1)
                                Male
                                @break
                            @case(2)
                                Female
                                @break
                            @default                       
                        @endswitch
                    </td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->phone}}</td>
            
                    <td>{{ date('d/m/Y | H:i:s', strtotime($doctor->created_at)) }}</td>

                    <td><a href="{{ route('admin.doctor.edit', ['id'=>$doctor->id]) }}">Edit</td>

                    <td><a onclick="return confirmDelete()" href="{{ route('admin.doctor.delete', ['id'=>$doctor->id]) }}">Delete</td>
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
