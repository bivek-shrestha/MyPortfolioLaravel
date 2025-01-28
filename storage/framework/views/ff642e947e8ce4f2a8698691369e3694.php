

<?php $__env->startSection('content'); ?>

                <div class="col-lg-12 grid-margin stretch-card">
                    
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Categories Records</h4>
                        <a href="<?php echo e(route('admin.category.create')); ?>">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Category </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td> <?php echo e($category -> id); ?> </td>
                              <td> <?php echo e($category -> name); ?> </td>
                              <td>
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href='<?php echo e(route('admin.category.edit', $category->id)); ?>';">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="<?php echo e(route('admin.category.destroy', $category->id)); ?>" onsubmit="return confirm('Are you sure?')">
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

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MyPortfolioLaravel-main45\MyPortfolioLaravel-main\resources\views/admin/category/index.blade.php ENDPATH**/ ?>