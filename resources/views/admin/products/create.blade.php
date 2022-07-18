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
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="sec-title max-width">
            <div class="card-header">
                <h3 class="card-title">Create product</h3>
            </div>
            <div class="card-body">
    
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name" value="{{old('name')}}">
                </div>

                <div class="form-group">
                    <label>Category ID</label>
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
                        @endforeach
                        <?php recursiveOptionPro($datas,0);?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Content</label>
                    <textarea name="content" class="form-control" placeholder="Enter Product Content">{{old('content')}}</textarea>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="money" name="price" class="form-control" placeholder="Enter Price" value="{{old('price')}}">
                </div>
        
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name="images">
                </div>
        
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1">
                        <label class="custom-control-label" for="customSwitch1">Status</label>
                    </div>
                </div>
        
            </div>
        </div>
 

        
        <div>
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


