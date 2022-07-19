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
    <form action="{{ route('admin.product.update', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="card-header">
                <h3 class="card-title">Update Product</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name" value="{{$edit->name}}">
                </div>

                <div class="form-group">
                    <label>Category_id</label>
                    <select class="form-control" name="category_id">
                        <option>---- ROOT ----</option>
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
                        <?php recursiveOptionPro($datas,$edit->category_id);?>      
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Content</label>
                    <textarea name="content" class="form-control" placeholder="Enter Product Content">{{$edit->content}}</textarea>
                    <script>
                        CKEDITOR.replace('content');
                    </script>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="money" name="price" class="form-control" placeholder="Enter Price" value="{{$edit->price}}">
                </div>
        
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1" 
                        @if ($edit->status == 1)
                            @checked(true)
                        @endif>
                        <label class="custom-control-label" for="customSwitch1">Status</label>
                    </div>
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Edit</button>
    
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