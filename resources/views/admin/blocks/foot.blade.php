<script src="{{ asset('asset/page/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asset/page/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('asset/page/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- datatable -->
<script src="{{ asset('asset/page/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/page/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('asset/page/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/page/dist/js/adminlte.min.js') }}"></script>
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