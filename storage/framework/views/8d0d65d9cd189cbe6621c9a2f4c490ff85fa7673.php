

<?php $__env->startSection('main_menu'); ?>
<?php echo $__env->make('client.blocks.main_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('breadcrumb'); ?>
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo e(asset('asset/client/images/resources/breadcrumb-bg.jpg')); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Meet Our Doctors</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Doctors</li>
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
    <!--Start Doctor area-->
<section class="doctor-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-8">
                <div class="doctor-sidebar">
                    <!--Start Single Sidebar-->
                    <div class="single-sidebar">
                        <div class="doctor-tab-box tabs-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#doctor" class="tab-btn left"><span>Doctor Name</span></li>
                                <li data-tab="#specialization" class="tab-btn active-btn right"><span>Specialization</span></li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab" id="doctor">
                                    <form name="doctor-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="input-box">
                                                    <select class="selectmenu">
                                                        <option selected="selected">Dr. Daryl Cornelius</option>
                                                        <option>Evelynne Mirando</option>
                                                        <option>Dr. Robert B. Moreau</option>
                                                        <option>Dr. Greg House</option>
                                                        <option>Dr. Sarah Johnson</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="button-box">
                                                    <button class="btn-one" type="submit">Find a Doctor</button>    
                                                </div> 
                                            </div>
                                        </div>    
                                    </form>    
                                </div>
                                <div class="tab active-tab" id="specialization">
                                    <form name="doctor-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="input-box">
                                                    <select class="selectmenu">
                                                        <option selected="selected">Cosmetic Surgeon</option>
                                                        <option>Dental Implants</option>
                                                        <option>Cosmetic Dentistry</option>
                                                        <option>Laser Dentistry</option>
                                                        <option>Orthodontics</option>
                                                        <option>Endodontics</option>
                                                        <option>Periodontics</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="button-box">
                                                    <button class="btn-one" type="submit">Find a Doctor</button>    
                                                </div> 
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                            </div>      
                        </div>   
                    </div>
                    <!--End Single Sidebar-->
                    <!--Start Single Sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-appoinment">
                            <div class="title">
                                <h3>Make Appointment</h3>
                            </div> 
                            <form class="appoinment-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="form_name" value="" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="time" placeholder="Time">
                                            <div class="icon-box">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="date" placeholder="Date" id="datepicker">
                                            <div class="icon-box">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">   
                                        <div class="input-box">    
                                            <textarea name="form_message" placeholder="Message..." required=""></textarea>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn-one" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End Single Sidebar-->
                </div>    
            </div>
            <div class="col-xl-8">
                <div class="doctor-content">
                    <!--Start Single doctor item-->
                    <div class="single-doctor-item wow fadeInUp" data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="img-holder">
                                    <img src="<?php echo e(asset('asset/images/doctor/1.png')); ?>" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a class="btn-one" href="#">Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-holder">
                                    <span>Implantologist</span>
                                    <h3>Dr. Daryl Cornelius</h3>
                                    <p>Dr. Daryl Cornelius is a renowned dental surgeon and a certified Dental Implantologist. He is the Director our hospitals.</p>
                                    <h6>Qualification</h6>
                                    <p>BDS , MDS - Plastic And Cosmetic Surgeon,</p>
                                    <ul>
                                        <li><span class="icon-phone"></span>(+760) 987-65-43210</li>
                                        <li><span class="flaticon-e-mail-envelope"></span>supportyou@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single doctor item-->
                    <!--Start Single doctor item-->
                    <div class="single-doctor-item wow fadeInUp" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="img-holder">
                                    <img src="<?php echo e(asset('asset/images/doctor/2.png')); ?>" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a class="btn-one" href="#">Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-holder">
                                    <span>Periodontist</span>
                                    <h3>Evelynne Mirando</h3>
                                    <p>Dr. Evelynne Mirando is a renowned dental surgeon and a certified Dental Implantologist. He is the Director our hospitals.</p>
                                    <h6>Qualification</h6>
                                    <p>BDS , MDS - Plastic And Cosmetic Surgeon,</p>
                                    <ul>
                                        <li><span class="icon-phone"></span>(+760) 987-65-43210</li>
                                        <li><span class="flaticon-e-mail-envelope"></span>supportyou@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single doctor item-->
                    <!--Start Single doctor item-->
                    <div class="single-doctor-item wow fadeInUp" data-wow-delay="900ms">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="img-holder">
                                    <img src="<?php echo e(asset('asset/images/doctor/3.png')); ?>" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a class="btn-one" href="#">Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-holder">
                                    <span>Prosthodontist</span>
                                    <h3>Dr. Robert B. Moreau</h3>
                                    <p>Dr. Robert B. Moreau is a renowned dental surgeon and a certified Dental Implantologist. He is the Director our hospitals.</p>
                                    <h6>Qualification</h6>
                                    <p>BDS , MDS - Plastic And Cosmetic Surgeon,</p>
                                    <ul>
                                        <li><span class="icon-phone"></span>(+760) 987-65-43210</li>
                                        <li><span class="flaticon-e-mail-envelope"></span>supportyou@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single doctor item--> 
                    <!--Start Single doctor item-->
                    <div class="single-doctor-item wow fadeInUp" data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="img-holder">
                                    <img src="<?php echo e(asset('asset/images/doctor/4.png')); ?>" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a class="btn-one" href="#">Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-holder">
                                    <span>Prosthodontist</span>
                                    <h3>Dr. Greg House</h3>
                                    <p>Dr. Greg House is a renowned dental surgeon and a certified Dental Implantologist. He is the Director our hospitals.</p>
                                    <h6>Qualification</h6>
                                    <p>BDS , MDS - Plastic And Cosmetic Surgeon,</p>
                                    <ul>
                                        <li><span class="icon-phone"></span>(+760) 987-65-43210</li>
                                        <li><span class="flaticon-e-mail-envelope"></span>supportyou@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single doctor item--> 
                    <!--Start Single doctor item-->
                    <div class="single-doctor-item last-child wow fadeInUp" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="img-holder">
                                    <img src="<?php echo e(asset('asset/images/doctor/5.png')); ?>" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a class="btn-one" href="#">Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-holder">
                                    <span>Implantologist</span>
                                    <h3>Dr. Sarah Johnson</h3>
                                    <p>Dr. Sarah Johnson is a renowned dental surgeon and a certified Dental Implantologist. He is the Director our hospitals.</p>
                                    <h6>Qualification</h6>
                                    <p>BDS , MDS - Plastic And Cosmetic Surgeon,</p>
                                    <ul>
                                        <li><span class="icon-phone"></span>(+760) 987-65-43210</li>
                                        <li><span class="flaticon-e-mail-envelope"></span>supportyou@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single doctor item-->                         
                </div>        
            </div>
        </div>
    </div>
</section>
<!--End Doctor area-->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('client.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/client/pages/doctors.blade.php ENDPATH**/ ?>