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
<<<<<<< HEAD
        <div class="sec-title max-width">
            <div class="card-header">
                <h3 class="card-title">Create product</h3>
            </div>
            <div class="card-body">
    
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" class="form-control" placeholder="Enter Category">
        </div>
    

        <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Exta Image</label>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Product Content</label>
            <textarea name="content" class="form-control" placeholder="Enter Product Content" ></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="money" name="price" class="form-control" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control" placeholder="Enter Status">
        </div>


        
        <div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Create</button>
    
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
        </div>
=======
            <input type="text"  ></input>
>>>>>>> b5d4b5c5828bef8d602602cf8c14b331c689f2ac
    </form>
    {{-- <pre>
        <?php
            print_r($datas)
        ?>
    </pre> --}}
</section>
@endsection

