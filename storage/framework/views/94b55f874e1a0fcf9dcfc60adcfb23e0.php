

<?php $__env->startSection('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Service</h4>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
         <?php endif; ?>
        
        <form class="forms-sample" method="POST" action="<?php echo e(route('admin.service.store')); ?>">
          <?php echo csrf_field(); ?>
            <div class="form-group">
          <p class="card-description"> Service Details <code>find all icons code <a href="https://fontawesome.com/icons/" target="_blank">Click here</a></code></p>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Icon</label>
                <div class="col-sm-9">
                  <input type="text" name="icon" class="form-control" placeholder="enter serivce icon" value="<?php echo e(old('icon')); ?>" required/>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Service Name</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="enter service name" value="<?php echo e(old('name')); ?>" required/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description</label>
              <textarea class="form-control" id="exampleTextarea1" rows="4" maxlength="255" name="description" required><?php echo e(old('description')); ?></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Portfolio\resources\views/admin/service/create.blade.php ENDPATH**/ ?>