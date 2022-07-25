@extends('admin.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- Member --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3 id="total_view"></h3>
        
                        <p>Viewer</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                    </div>
                </div>

                {{-- Rate --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
        
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    
                    </div>
                </div>

                {{-- Register --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        {{-- <h3>44</h3> --}}
                        <h3>{{$total_user->user}}</h3>
        
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    
                    </div>
                </div>
                
                {{-- Unique Visitor --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$total_admin->admin}}</h3>
        
                        <p>Admin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    
                </div>
            </div>
        </div>
        {{-- Product --}}
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Show Rating Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        {{-- <th>Category</th> --}}
                        <th>Rating</th>
                        <th>View</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($show_product_rate as $product_rate)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product_rate->name}}</td>
                            {{-- <td>{{$category->category_name}}</td> --}}
                            <td>{{$product_rate->rating}}</td>
                            <td>{{$product_rate->view}}</td>
                          </tr>
                        @endforeach
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
        {{-- Post --}}
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Show Rating Post</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      {{-- <th>Category</th> --}}
                      <th>Rating</th>
                      <th>View</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($show_post_rate as $post_rate)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$post_rate->name}}</td>
                          {{-- <td>{{$category->category_name}}</td> --}}
                          <td>{{$post_rate->rating}}</td>
                          <td>{{$post_rate->view}}</td>
                        </tr>
                      @endforeach
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
    </section>
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

  <script type="text/javascript">
    $(function () {
      let sumproduct = (parseInt({{$count_view_product}}));
      let sumpost = (parseInt({{$count_view_post}}));
      let totalview = sumproduct + sumpost;
      $('#total_view').html(totalview);

    });
  </script>

  <script type="text/javascript">
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });

      $("#example3").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["colvis"]
      }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
      $('#example4').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection