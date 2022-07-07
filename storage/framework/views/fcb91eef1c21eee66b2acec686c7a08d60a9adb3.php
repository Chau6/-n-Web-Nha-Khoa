

<?php $__env->startSection('main_menu'); ?>
<?php echo $__env->make('client.blocks.main_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
        <!--Main Slider-->
        <?php echo $__env->make('client.blocks.main_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End Main Slider-->

    <!--Start About Area-->
        <?php echo $__env->make('client.blocks.about_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End About Area-->

    <!--Start Highlights area-->
        <?php echo $__env->make('client.blocks.highlighs_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End Highlights area-->

    <!--Start services style1 area-->
        <?php echo $__env->make('client.blocks.services_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End services style1 area-->

    <!--Start team area v2-->
        <?php echo $__env->make('client.blocks.team_area_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End team area v2-->

    <!--Start works area-->
        <?php echo $__env->make('client.blocks.works_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End works area-->

    <!--Start Testimonial area-->
        <?php echo $__env->make('client.blocks.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End Testimonial area-->

    <!--Start latest blog area-->
        <?php echo $__env->make('client.blocks.latest_blog_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End latest blog area--> 

    <!--Start newsletter area-->
        
    <!--End newsletter area-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/client/pages/index.blade.php ENDPATH**/ ?>