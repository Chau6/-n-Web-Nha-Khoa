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
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="sec-title max-width">
            <div class="card-header">
                <h3 class="card-title">Create products</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Products Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
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

