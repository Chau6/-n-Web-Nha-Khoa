@extends('admin.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.user.update', ['id'=>$user->id]) }}" method="POST">  
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
            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
        </div>

        <div class="form-group">
            <label for="email">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
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
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="email">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
        </div>

        <div class="form-group">
            <label>Level</label>
            <select class="form-control" name="level">
                <option value="0" {{ $user->level == '0' ? 'selected':'' }}>Member</option>
                <option value="1" {{ $user->level == '1' ? 'selected':'' }}>Admin</option>
            </select>
            </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
        
    </div>
</div>
</form>
@endsection