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
<form action="{{ route('admin.post.store') }}" method="POST">  
    @csrf
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Create Post</h3>
        <div class="card-tools">
        </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="email">Post Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>Parent_name</label>
                <select class="form-control" name="category_id">
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
                        <?php recursiveOption($datas,$category->parent_name);?>
                    @endforeach      
                </select>
            </div>

            <div class="form-group">
                <div class="form-group shadow-textarea">
                    <label for="content">Content</label>
                    <textarea class="form-control z-depth-1" name="content" id="content" rows="3" placeholder="Write something here...">{{old('content')}}</textarea>
                  </div>
                  <script>
                        CKEDITOR.replace('content');
                  </script>
            </div>

            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1">
                    <label class="custom-control-label" for="customSwitch1">Status</label>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
            
        </div>
    </div>
</form>
@endsection

@section('js')
    <script src="{{url('/')}}/js/"></script>
@endsection