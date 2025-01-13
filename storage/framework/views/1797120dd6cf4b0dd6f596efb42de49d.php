

<?php $__env->startSection('content'); ?>

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">About me</h4>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
             <?php endif; ?>
            <form class="forms-sample" method="POST" action="<?php echo e(route('admin.aboutme.update', $user->id)); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <p class="card-description"> Personal info </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone" value="<?php echo e($user->phone); ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="address" value="<?php echo e($user->address); ?>"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Job</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="job" value="<?php echo e($user->job); ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Degree</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="degree" value="<?php echo e($user->degree); ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Experience</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="experience" value="<?php echo e($user->experience); ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Birth Day</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="birth_day" value="<?php echo e($user->birth_day); ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
            </form>
          </div>
      </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Portfolio\resources\views/admin/aboutme/index.blade.php ENDPATH**/ ?>