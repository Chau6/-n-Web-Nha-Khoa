

<?php $__env->startSection('content'); ?>
<form action="">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">User</h3>
          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($user->first_name); ?></td>
                    <td><?php echo e($user->last_name); ?></td>
                    <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></td>
                    <td>
                        <?php switch($user->gender):
                            case (1): ?>
                                Male
                                <?php break; ?>
                            <?php case (2): ?>
                                Female
                                <?php break; ?>
                            <?php default: ?>                       
                        <?php endswitch; ?>
                    
                    </td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->phone); ?></td>
                    <td><?php echo e(date('d/m/Y | H:i:s', strtotime($user->created_at))); ?></td>
                    <td><a href="<?php echo e(route('admin.user.edit', ['id'=>$user->id])); ?>">Edit</td>
                    <td><a onclick="return confirmDelete()" href="<?php echo e(route('admin.user.delete', ['id'=>$user->id])); ?>">Delete</td>
                </tr>            
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
          </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/admin/user/index.blade.php ENDPATH**/ ?>