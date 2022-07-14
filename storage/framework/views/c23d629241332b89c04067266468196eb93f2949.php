<!DOCTYPE html>
<html lang="en">
    <script>
        function deleteConfirm() {
            if(window.confirm("Do you want to delete this")==true){
                return true;
            }
            return false;
        }
    </script>
<!-- Mirrored from st.ourhtmldemo.com/new/Dento/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 02:04:57 GMT -->
    <?php echo $__env->make('client.blocks.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<div class="boxed_wrapper">

    <div class="preloader"></div> 

    <!-- Start Top Bar area -->  
        <?php echo $__env->make('client.blocks.top_bar_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Top Bar area -->  
    
    <!--Start header style1 area-->
        <?php echo $__env->make('client.blocks.header_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End header style1 area-->
        
    <!--Start mainmenu area-->
        <?php echo $__env->make('client.blocks.main_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>               
    <!--End mainmenu area--> 
    
    <!-- Hidden Navigation Bar -->
        <?php echo $__env->make('client.blocks.hidden_navigation_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Hidden Bar -->     

    
        <?php echo $__env->yieldContent('breadcrumb'); ?>    

        <?php echo $__env->yieldContent('content'); ?>
    

    <!--Start Footer Contact Info Area-->
        <?php echo $__env->make('client.blocks.footer_contact_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End Footer Contact Info Area--> 
    
    <!--Start footer area-->  
        <?php echo $__env->make('client.blocks.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End footer area-->

    <!--Start footer bottom area-->
        <?php echo $__env->make('client.blocks.footer_bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End footer bottom area-->   

</div>

<!--Scroll to top-->
    <?php echo $__env->make('client.blocks.scroll_to_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Color Palate / Color Switcher -->
    <?php echo $__env->make('client.blocks.choose_color', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /.End Of Color Palate -->


    <?php echo $__env->make('client.blocks.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

<!-- Mirrored from st.ourhtmldemo.com/new/Dento/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 02:04:57 GMT -->
</html><?php /**PATH C:\Users\me016\OneDrive\Tài liệu\GitHub\-n-Web-Nha-Khoa\resources\views/client/master.blade.php ENDPATH**/ ?>