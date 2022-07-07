 
  
<?php $__env->startSection('main_menu'); ?>
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <nav class="main-menu style1 clearfix">
                        <div class="navbar-header clearfix">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="<?php echo e(route('client.pages.index')); ?>">Home</a>
                                </li>
                                <li><a href="<?php echo e(route('client.pages.about')); ?>">About Us</a></li>



                                <li class="dropdown current"><a href="<?php echo e(route('client.pages.specialities')); ?>">Specialities</a>
                                    <ul>
                                        <li><a href="<?php echo e(route('client.pages.test')); ?>">Advice</a></li>
                                        <li><a href="">Cosmetic Dentistry</a></li>
                                        <li><a href="">Laser Dentistry</a></li>
                                        <li><a href="">Orthodontics</a></li>
                                        <li><a href="">Endodontics</a></li>
                                        <li><a href="">Periodontics</a></li>
                                    </ul>
                                </li>



                                <li><a href="<?php echo e(route('client.pages.doctors')); ?>">Doctors</a></li>
                                <li class="dropdown"><a href="<?php echo e(route('client.pages.blog')); ?>">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-large.html">Blog Large Image</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">More</a>
                                    <ul>
                                        <li><a href="<?php echo e(route('client.pages.faqs')); ?>">FAQ’s</a></li>
                                        <li><a href="timetable.html">Timetable</a></li>
                                        <li><a href="<?php echo e(route('client.pages.appointment')); ?>">Apppointment</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('client.pages.contact')); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="mainmenu-right">
                        <div class="search-box-style1">
                            <form class="search-form" method="post" action="http://st.ourhtmldemo.com/new/Dento/index.html">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>        
                        </div>
                        <div class="toggler-button">
                            <div class="nav-toggler hidden-bar-opener">
                                <div class="inner">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>    
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
</section> 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('breadcrumb'); ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo e(asset('asset/client/images/resources/breadcrumb-bg.jpg')); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Specialities</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Specialities</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    

<!--Start services style1 area-->
    <?php echo $__env->make('client.blocks.services_style1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End services style1 area-->

<!--Start Choose area Style2--> 
    <?php echo $__env->make('client.blocks.choose_area_style2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End Choose area Style2--> 

<!--Start Testimonial Sec style2-->
    <?php echo $__env->make('client.blocks.testimonial_sec_style2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--End Testimonial Sec style2-->  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/client/pages/specialities.blade.php ENDPATH**/ ?>