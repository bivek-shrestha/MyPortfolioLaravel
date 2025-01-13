

<?php $__env->startSection('content'); ?>

                <div class="col-lg-12 grid-margin stretch-card">
                    
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Services Records</h4>
                        <a href="<?php echo e(route('admin.service.create')); ?>">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Icon </th>
                              <th> Service Name </th>
                              <th> Description </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td> <?php echo e($service -> id); ?> </td>
                              <td> <i class="<?php echo e($service -> icon); ?>" ></i></td>
                              
                              <td> <?php echo e($service -> name); ?> </td>
                              <td> 
                                <p class="text-wrap">
                                  <?php echo e($service -> description); ?>

                                </p>
                                
                                </td>
                              <td> 
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href='<?php echo e(route('admin.service.edit', $service->id)); ?>';">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="<?php echo e(route('admin.service.destroy', $service->id)); ?>" onsubmit="return confirm('Are you sure?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" style="style="display: inline"">Delete</button>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MyPortfolioLaravel-main45\MyPortfolioLaravel-main\resources\views/admin/service/index.blade.php ENDPATH**/ ?>