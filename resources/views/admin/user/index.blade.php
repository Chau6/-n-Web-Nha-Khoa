@extends('admin.master')

@section('content')
<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">User</h3>
          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                    <td>Level</td>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                @foreach ($users as $user)
                <tbody>
                <tr>
                    <td>
                      <?php
                        if ($user->level == 1) {
                          echo "<span class='badge badge-danger'>Admin</span>";
                        }else {
                          echo "<span class='badge badge-info'>Member</span>";
                        }
                      ?>
                    </td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->first_name }} {{$user->last_name}}</td>
                    <td>
                        @switch($user->gender)
                            @case(1)
                                Male
                                @break
                            @case(2)
                                Female
                                @break
                            @default                       
                        @endswitch
                    
                    </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{ date('d/m/Y | H:i:s', strtotime($user->created_at)) }}</td>
                    <td><a href="{{ route('admin.user.edit', ['id'=>$user->id]) }}">Edit</td>
                    <td><a onclick="return confirmDelete()" href="{{ route('admin.user.delete', ['id'=>$user->id]) }}">Delete</td>
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
