@extends('admin.master') 

@section('content')
@if (Session::has('success') )
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ Session::get('success') }}</strong>
  </div>
@endif
@if (Session::has('error') )
  <div class="alert alert-danger ">
      <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ Session::get('error') }}</strong>
  </div>
@endif
<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>
          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>Status</td>
                    <td>Created At</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                @foreach ($products as $product)
                <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <div class="media">
                            <a href="pull-left" href="">
                                <img class="media-object" src="#" alt="Image">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">{{$product->name}}</h4>
                              <p>{{ date('d/m/Y | H:i:s', strtotime($product->created_at)) }}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{$product->category_name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{ date('d/m/Y | H:i:s', strtotime($product->created_at)) }}</td>
                    <td><a href="{{ route('admin.product.edit', ['id'=>$product->id]) }}">Edit</td>
                      <td><a onclick="return confirmDelete()" href="{{ route('admin.product.delete', ['id'=>$product->id]) }}">Delete</td>
                </tr>            
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
            
        </div>
    </div>
  </form>
@endsection