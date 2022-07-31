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
<form action="{{ route('admin.doctor.update', ['id'=> $doctor->id]) }}" method="POST" enctype="multipart/form-data">  
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" name="fullname" value="{{ $doctor->fullname }}">
            </div>

            <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender">
                <option value="2" {{ $doctor->gender == '2' ? 'selected':'' }}>Female</option>
                <option value="1" {{ $doctor->gender == '1' ? 'selected':'' }}>Male</option>
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

            <div class="form-group">
                <label for="qualification">Qualification</label>
                <textarea class="form-control z-depth-1" name="qualification" id="content" rows="3" placeholder="Write something here...">{{ $doctor->qualification}}</textarea>
                <script>
                    CKEDITOR.replace('qualification');
                </script>
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