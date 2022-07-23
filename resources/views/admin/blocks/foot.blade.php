<script src="{{ asset('asset/page/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('asset/page/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asset/page/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('asset/page/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('asset/page/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- datatable -->
<script src="{{ asset('asset/page/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/page/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('asset/page/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/page/dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('asset/page/dist/js/demo.js')}}"></script>   --}}
<!-- Page specific script -->

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('asset/page/dist/js/demo.js') }}"></script> --}}

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();

  $("#datatable").DataTable({
    "responsive": true,
    "autoWidth": false,
  });
});

function imgError(image) {
    image.onerror = "";
    image.src = "{{ asset('asset/page/image/no-image.png') }}";
    return true;
}
</script>

{{-- Datatable --}}
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