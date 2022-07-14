 

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
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $data=array();
                        $datas=array();
                        ?>
                        <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $data['id'] = $category->id;
                                $data['name'] = $category->name;
                                $data['parent_name'] = $category->parent_name;
                                $datas[] = $data;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            recursiveTablePost($datas);
                        ?>
                    </tr>
                    
                    
                </tr>            
                </tbody>

              </table>
            </div>
          </div>
            
        </div>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\me016\OneDrive\Tài liệu\GitHub\-n-Web-Nha-Khoa\resources\views/admin/post/index.blade.php ENDPATH**/ ?>