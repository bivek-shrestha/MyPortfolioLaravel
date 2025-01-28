

<?php $__env->startSection('content'); ?>

                <div class="col-lg-12 grid-margin stretch-card">
                    
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Experience Records</h4>
                        <a href="<?php echo e(route('admin.qualification.create')); ?>">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Title </th>
                              <th> Aassociation </th>
                              <th> Description </th>
                              <th> From / To </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td> <?php echo e($experience -> id); ?> </td>
                              <td><?php echo e($experience -> title); ?> </td>
                              <td>
                                <?php echo e($experience -> association); ?> 
                              </td>
                              <td>  <?php echo e(substr($experience -> description,0,20)); ?>  </td>
                              <td>  <?php echo e($experience -> from); ?> - <?php echo e($experience -> to); ?>   </td>
                              <td> 
                                <a href="<?php echo e(route('admin.qualification.edit', $experience->id)); ?>">
                                <button type="button" class="btn btn-success btn-sm">Edit</button>
                                </a>
                                <form type="submit" method="POST" action="<?php echo e(route('admin.qualification.destroy', $experience->id)); ?>" onsubmit="return confirm('Are you sure?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MyPortfolioLaravel-main45\MyPortfolioLaravel-main\resources\views/admin/qualification/exp.blade.php ENDPATH**/ ?>