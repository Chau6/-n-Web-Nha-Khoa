<section class="top-bar-area">
    <div class="container">
        <div class="row">       
            <div class="col-xl-5 col-lg-6">
                <div class="top-right">
                    <p><span class="icon-clock"></span>Mon - Sat: 09.00 to 18.00, Sunday: Closed.</p>
                </div>    
            </div>   
            <div class="col-xl-7 col-lg-6">
                <div class="top" style="text-align:right">
                    <ul class="sociallinks-style-one">
                        <?php if(Auth::check()): ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a href="<?php echo e(route('client.pages.information_client')); ?>" style="color: #AFBDBB; font-size: 15px; border: 2px #AFBDBB solid; border-radius: 0.3em; padding: 3px"><?php echo e(auth()->user()->username); ?></a>  ||   
                                <a href="<?php echo e(route('getLogoutClient')); ?>" style="color: #AFBDBB; font-size: 15px; border: 2px #AFBDBB solid; border-radius: 0.3em; padding: 3px">Logout</a> 
                            </li>
                        </ul>
                        <?php else: ?>
                        <div class="top" style="text-align:right">
                            <ul class="navbar-nav ml-auto">
                                <li><a href="<?php echo e(route('getLoginClient')); ?>" style="color: #AFBDBB; font-size: 15px; border: 2px #AFBDBB solid; border-radius: 0.3em; padding: 3px; text-align: right; ">Login</a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\me016\OneDrive\Tài liệu\GitHub\-n-Web-Nha-Khoa\resources\views/client/blocks/top_bar_area.blade.php ENDPATH**/ ?>