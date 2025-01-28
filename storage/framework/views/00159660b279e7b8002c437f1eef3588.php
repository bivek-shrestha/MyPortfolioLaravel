

<?php $__env->startSection('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Category</h4>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
         <?php endif; ?>
        
        <form class="forms-sample" method="POST" action="<?php echo e(route('admin.category.store')); ?>">
          <?php echo csrf_field(); ?>
            <div class="form-group">
          <p class="card-description"> Category Details </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="enter category name" value="<?php echo e(old('name')); ?>" />
                </div>
              </div>
            </div>
            </div>
          </div>
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MyPortfolioLaravel-main45\MyPortfolioLaravel-main\resources\views/admin/category/create.blade.php ENDPATH**/ ?>