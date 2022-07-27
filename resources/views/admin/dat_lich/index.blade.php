@extends('admin.master')

@section('content')
<style>
  a.one:link{
    color: red;
  }
  a.one:visited {
    color: blue;
  }
  a.one:hover {
    font-size:200%;
  }
</style>
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
                <th>Full Name</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Date</th>
                <th>Time At</th>
                <th>Doctor Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Medical History</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dat_lich as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td><a href="" class="one">{{$item->phone}}</a></td>
                <td>{{$item->age}}</td>
                <td>{{ $item->date }}</td>
                <td>{{$item->time}}</td>
                <td><?php $data = DB::table('doctors')->where('id', $item->doctor_name)->first()?>{{$data->fullname}}</td>
                <td>{{$item->description}}</td>
                <td>
                  <?php 
                    if($item->status == "Make an appointment"){
                      echo "<span class='btn btn-primary'>Make an appointment</span>";
                    }else if($item->status == "Complete the appointment"){
                      echo "<span class='btn btn-success'>Complete the appointment</span>";
                    }else if($item->status == "Late appointment"){
                      echo "<span class='btn btn-warning'>Late appointment</span>";
                    }else if($item->status == "Canceling an appointment"){
                      echo "<span class='btn btn-danger'>Canceling an appointment</span>";
                    }
                  ?>
                </td>
                <td>{{$item->medical_history}}</td>
                <td><a href="{{ route('admin.dat_lich.edit', ['id'=>$item->id]) }}">Edit</td>
                <td><a onclick="return confirmDelete()" href="{{ route('admin.dat_lich.delete', ['id'=>$item->id]) }}">Delete</td>
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
