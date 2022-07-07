

<?php $__env->startSection('main_menu'); ?>
<?php echo $__env->make('client.blocks.main_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<section class="breadcrumb-area" style="background-image: url(<?php echo e(asset('asset/client/images/resources/breadcrumb-bg.jpg')); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>About Us</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">About Us</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--Start About Area Home 2-->
    <?php echo $__env->make('client.blocks.about_area_home2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End About Area Home 2-->

<!--Start fact counter area-->
    <?php echo $__env->make('client.blocks.fact_counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End fact counter area--> 

<!--Start mission vision area-->
    <?php echo $__env->make('client.blocks.mission_vision', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<!--End mission vision area--> 

<!--Start Choose area--> 
    <?php echo $__env->make('client.blocks.choose_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End Choose area-->  

<!--Start team area-->
    <?php echo $__env->make('client.blocks.team_are', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End team area-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/client/pages/about.blade.php ENDPATH**/ ?>