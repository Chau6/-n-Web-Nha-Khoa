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
                  <td>Name</td>
                  <td>Edit</td>
                  <td>Delete</td>
              </tr>
              </thead>
              
              <tbody>
                <tr>
                    <?php
                    $data=array();
                    $datas=array();
                    ?>
                    @foreach($categorys as $category)
                        <?php
                            $data['id'] = $category->id;
                            $data['name'] = $category->name;
                            $data['parent_name'] = $category->parent_name;
                            $data['images'] = $category->images;
                            $datas[] = $data;
                        ?>
                    @endforeach
                    <?php 
                        recursiveTableCate($datas);
                    ?>                                                               
                </tr>       
              </tbody>
              
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

