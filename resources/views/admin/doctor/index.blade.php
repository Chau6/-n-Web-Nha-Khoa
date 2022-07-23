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
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
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
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection
