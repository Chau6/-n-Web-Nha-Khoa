


<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('admin.blocks.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php echo $__env->make('admin.blocks.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('admin.blocks.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php echo $__env->make('admin.blocks.content-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

            <!-- Main content -->
            <section class="content">

              <!-- Default box -->
              <!-- /.card -->
              <?php echo $__env->yieldContent('content'); ?>
            </section>
            
            
                <!-- Default box -->
                
        <!-- Control Sidebar -->
        <?php echo $__env->make('admin.blocks.control-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php echo $__env->make('admin.blocks.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<script src="<?php echo e(asset('jquery-3.6.0.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/admin/master.blade.php ENDPATH**/ ?>