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
                    <th>Doctor Id</th>
                    <th>Work Time</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                @foreach ($doctor_day_work as $doctor_time)
                <tbody>
                <tr>
                    <td>{{ $doctor_time->doctor_id }}</td>
                    <td>
                        @switch($doctor_time->time)
                            @case("9:00am")
                                9:00am
                                @break
                            @case("11:30am")
                            11:30am
                                @break
                            @case("12:00pm")
                            12:00pm
                                @break
                            @case("3:00pm")
                            3:00pm
                                @break
                            @case("4:00pm")
                            4:00pm
                                @break
                            @case("5:00pm")
                            5:00pm
                                @break
                            @case("5:30pm")
                            5:30pm
                                @break
                            @case("6:00pm")
                            6:00pm
                                @break
                            @case("7:00pm")
                            7:00pm
                                @break
                            @case("7:30pm")
                            7:30pm
                                @break
                            @default                       
                        @endswitch
                    </td>

                    <td>{{ date('d/m/Y | H:i:s', strtotime($doctor_time->created_at)) }}</td>

                    <td><a href="{{ route('admin.doctor_time.edit', ['id'=>$doctor_time->id]) }}">Edit</td>

                    <td><a onclick="return confirmDelete()" href="{{ route('admin.doctor_time.delete', ['id'=>$doctor_time->id]) }}">Delete</td>
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
