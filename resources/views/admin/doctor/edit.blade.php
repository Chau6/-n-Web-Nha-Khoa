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
<form action="{{ route('admin.doctor.update', ['id'=> $doctor->id]) }}" method="POST">  
    @csrf
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Doctor</h3>
      <div class="card-tools">
      </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" name="fullname" value="{{ $doctor->fullname }}">
        </div>

        <div class="form-group">
        <label>Gender</label>
        <select class="form-control" name="gender">
            <option value="2" {{ old('gender') == '2' ? 'selected':'' }}>Female</option>
            <option value="1" {{ old('gender') == '1' ? 'selected':'' }}>Male</option>
        </select>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $doctor->email }}">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
        
    </div>
</div>
</form>
@endsection