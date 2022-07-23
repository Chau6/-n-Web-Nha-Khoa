<!DOCTYPE html>
<html>
<head>
    @include('admin.blocks.head')
    @yield('css')
</head>
<script type="text/javascript">
    function deleteConfirm () {
        if(window.confirm('Are you sure you want to delete') == true) {
            return true;
        }
        return false;
    }   
</script>

<meta name="csrf-token" content="{{ csrf_token() }}">

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.blocks.navbar') 
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include ('admin.blocks.aside') 

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include ('admin.blocks.content-header') 

            <!-- Main content -->
            <section class="content">

              <!-- Default box -->
              <!-- /.card -->
              @yield('content')
            </section>
            
            
                <!-- Default box -->
                
        <!-- Control Sidebar -->
        @include ('admin.blocks.control-sidebar') 
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include ('admin.blocks.foot') 
    @yield('js')
</body>
</html>
