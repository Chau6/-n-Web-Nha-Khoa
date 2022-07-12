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
<form action="{{ route('admin.user.store') }}" method="POST">  
    @csrf
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Edit User</h3>
        <div class="card-tools">
        </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="email">Post Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Content</label>
                <input type="text" class="form-control" name="content" value="{{ old('content') }}">
            </div>

            <div class="form-group">
                <label>Parent_name</label>
                <select class="form-control" name="parent_name">
                    <option value="0">---- ROOT ----</option>
                    <?php
                        $data=array();
                        $datas=array();
                    ?>
                    @foreach($categorys as $category)
                        @if(!empty($category))
                            <?php
                                $data['id'] = $category->id;
                                $data['name'] = $category->name;
                                $data['parent_name'] = $category->parent_name;
                                $datas[] = $data;
                            ?>
                        @endif
                    @endforeach
                    <?php recursiveOption($datas,$edit->parent_name);?>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Status</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
            
        </div>
    </div>
</form>
@endsection