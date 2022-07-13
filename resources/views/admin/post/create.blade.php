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
    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="sec-title max-width">
            <div class="card-header">
                <h3 class="card-title">Create Post</h3>
            </div>
            <div class="card-body">
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
                        <?php recursiveOptionPost($datas,0);?>
                    </select>
                </div>
    
                <div class="form-group">
                    <label>Post</label>
                    <textarea name="name" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Create</button>
    
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
        </div>
    </form>
    {{-- <pre>
        <?php
            print_r($datas)
        ?>
    </pre> --}}
</section>
@endsection

