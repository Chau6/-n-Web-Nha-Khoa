@extends('admin.master')

@section('content')
<section class="services-style1-area sec-pd1">  
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">  
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" name="fullname" value="{{old('fullname')}}">
            </div>

            <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender">
                <option value="2">Female</option>
                <option value="1">Male</option>
            </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
            
        </div>
    </div>
</form>
</section>
@endsection