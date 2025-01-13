

<?php $__env->startSection('content'); ?>

                <div class="col-lg-12 grid-margin stretch-card">
                    
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Skills Records</h4>
                        <a href="<?php echo e(route('admin.skill.create')); ?>">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Skill </th>
                              <th> Percent </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td> <?php echo e($skill -> id); ?> </td>
                              <td> <?php echo e($skill -> name); ?> </td>
                              <td> 
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?php echo e($skill->percent); ?>%; background-color: <?php echo e($skill->color); ?>" aria-valuenow="<?php echo e($skill->percent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>    
                                </td>
                              <td> 
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href='<?php echo e(route('admin.skill.edit', $skill->id)); ?>';">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="<?php echo e(route('admin.skill.destroy', $skill->id)); ?>" onsubmit="return confirm('Are you sure?')">
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

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Portfolio\resources\views/admin/skill/index.blade.php ENDPATH**/ ?>