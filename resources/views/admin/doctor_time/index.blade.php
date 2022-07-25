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
                        <th>Doctor Name</th>
                        <th>Work Time</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($doctor_day_work as $doctor_time)
                <tr>
                    <td><?php $data = DB::table('doctors')->where('id', $doctor_time->doctor_id)->first()?>{{$data->fullname}}</td>
                    <td>
                        @switch($doctor_time->time)
                            @case("9:00am")
                                9:00am
                                @break
                            @case("11:30am")
                            11:30am
                                @break
                            @case("12:00pm")
                            12:00pm
                                @break
                            @case("3:00pm")
                            3:00pm
                                @break
                            @case("4:00pm")
                            4:00pm
                                @break
                            @case("5:00pm")
                            5:00pm
                                @break
                            @case("5:30pm")
                            5:30pm
                                @break
                            @case("6:00pm")
                            6:00pm
                                @break
                            @case("7:00pm")
                            7:00pm
                                @break
                            @case("7:30pm")
                            7:30pm
                                @break
                            @default                       
                        @endswitch
                    </td>

                    <td>{{ date('d/m/Y | H:i:s', strtotime($doctor_time->created_at)) }}</td>

                    <td><a href="{{ route('admin.doctor_time.edit', ['id'=>$doctor_time->id]) }}">Edit</td>

                    <td><a onclick="return confirmDelete()" href="{{ route('admin.doctor_time.delete', ['id'=>$doctor_time->id]) }}">Delete</td>
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
  {{-- <pre><?php
    print_r($doctor);
    ?>
  </pre>  --}}
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