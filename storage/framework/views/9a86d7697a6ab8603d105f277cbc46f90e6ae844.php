<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="public/index3.html" class="brand-link">
        <img src="<?php echo e(asset('asset/page/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LARAVEL PROJECT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('asset/page/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="color:white">
                <a href="#" class="d-block"></a>
                <?php echo e(auth()->user()->username); ?> 
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Bảng điều khiển</p>
                    </a>
                </li>
                
                

                

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Thành viên
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.user.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.user.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm thành viên</p>
                            </a>
                        </li>
                    </ul>
                </li>

                
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/admin/blocks/aside.blade.php ENDPATH**/ ?>