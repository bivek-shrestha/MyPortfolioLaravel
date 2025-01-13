

<?php $__env->startSection('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New</h4>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
         <?php endif; ?>
        
        <form class="forms-sample" method="POST" action="<?php echo e(route('admin.portfolio.store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
            <div class="form-group">
          <p class="card-description"> Portfolio Details</p>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-9">
                  <input type="text" name="title" class="form-control" placeholder="Enter Project title" value="<?php echo e(old('title')); ?>" required/>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Url</label>
                <div class="col-sm-9">
                  <input type="text" name="project_url" class="form-control" placeholder="enter project url" value="<?php echo e(old('project_url')); ?>" required/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input type="file" name="image" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Category</label>
                  <div class="col-sm-9">
                    <select class="form-control text-black" id="selectCat" name="cat_id">
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($category->id); ?>" <?php echo e(old('cat_id') =="$category->name" ? 'selected' : ''); ?> ><?php echo e($category->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
              </div>
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Portfolio\resources\views/admin/portfolio/create.blade.php ENDPATH**/ ?>