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
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th>Created At</th>
                  <th>Delete</th>
              </tr>
              </thead>
              
              <tbody>
              @foreach ($contacts as $contact)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contact->username}}</td>
                <td>{{$contact->email}}</td>
                <td>
                    <?php
                        if($contact->phone){
                            echo "$contact->phone";
                        }else{
                            echo "<p align= 'center'>-</p>";
                        }
                    ?>
                </td>
                <td>{{$contact->message}}</td>
                <td>{{ date('d/m/Y | H:i:s', strtotime($contact->created_at)) }}</td>
                <td><a onclick="return confirmDelete()" href="{{ route('admin.delete', ['id'=>$contact->id]) }}">Delete</td>
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
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["excel", "pdf", "colvis"]
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
    });
  </script>
@endsection