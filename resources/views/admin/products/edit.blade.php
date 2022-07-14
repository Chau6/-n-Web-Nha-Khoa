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
                    <label>Parent_name</label>
                    <select class="form-control" name="parent_name">
                        <option value="0">---- ROOT ----</option>
                        <?php
                            $data=array();
                            $datas=array();
                        ?>
                        @foreach($products as $product)
                            @if(!empty($product))
                                <?php
                                    $data['id'] = $product->id;
                                    $data['name'] = $product->name;
                                    $data['parent_name'] = $product->parent_name;
                                    $datas[] = $data;
                                ?>
                            @endif
                        @endforeach
                        <?php recursiveOption($datas,$edit->parent_name);?>
                    </select>
                </div>
    
                <div class="form-group">
<<<<<<< HEAD
                    <label>product Name</label>
=======
                    <label>Product Name</label>
>>>>>>> b5d4b5c5828bef8d602602cf8c14b331c689f2ac
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
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