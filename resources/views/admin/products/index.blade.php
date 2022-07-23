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

<!-- Datatable -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
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
                              <img class="media-object" src="{{ asset('images/'.$product->images)}}" width="50px" height="70px">
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
@endsection

@section('css')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('asset/page/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/page/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/page/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('js')
  <script src="{{asset('asset/page/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('asset/page/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endsection