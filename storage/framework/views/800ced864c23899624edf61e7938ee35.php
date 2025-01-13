

<?php $__env->startSection('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Qualification</h4>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
         <?php endif; ?>
        
        <form class="forms-sample" method="POST" action="<?php echo e(route('admin.qualification.store')); ?>">
          <?php echo csrf_field(); ?>
            <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title" value="<?php echo e(old('title')); ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Association</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="association" placeholder="Association" value="<?php echo e(old('association')); ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Description</label>
            <input type="text" class="form-control" id="exampleInputPassword4" name="description" placeholder="Description" value="<?php echo e(old('description')); ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Type</label>
            <select class="form-control text-black" id="selectType" name="type">
              <option value="Education" <?php echo e(old('type') == "Education"? 'selected' : ''); ?>>Education</option>
              <option value="Work"  <?php echo e(old('type') == "Work"? 'selected' : ''); ?>>Work</option>
            </select>
          </div>
          <p class="card-description"> Duration </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">From</label>
                <div class="col-sm-9">
                  <input type="text" name="from" class="form-control"  value="<?php echo e(old('from')); ?>" required/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">End</label>
                <div class="col-sm-9">
                  <input type="text" name="to" class="form-control" value="<?php echo e(old('to')); ?>" required/>
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

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Portfolio\resources\views/admin/qualification/create.blade.php ENDPATH**/ ?>