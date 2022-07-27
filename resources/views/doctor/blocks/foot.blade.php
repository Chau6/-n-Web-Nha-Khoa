<script src="{{ asset('asset/page/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('asset/page/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asset/page/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('asset/page/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('asset/page/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/page/dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE App -->


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
