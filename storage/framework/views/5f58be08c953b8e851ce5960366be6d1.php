 
<?php $__env->startSection('content'); ?> 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    <?php if(session()->get('success')): ?> 
      <div class="alert alert-success"> 
        <?php echo e(session()->get('success')); ?> 
      </div><br /> 
    <?php endif; ?> 
    <div class="row"> 
      <a class="btn btn-primary" href="<?php echo e(route('superhero.create')); ?>">Add</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>No</th> 
          <th>Real Name</th> 
          <th>Super Name</th> 
          <th> Photo </th>
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        <?php $__currentLoopData = $superheroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $superhero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <tr> 
            <td><a href="<?php echo e(route('superhero.show', $superhero->id)); ?>"><?php echo e($superhero->id); ?></a></td> 
            <td><a href="<?php echo e(route('superhero.show', $superhero->id)); ?>"><?php echo e($superhero->real_name); ?></a></td> 
            <td><a href="<?php echo e(route('superhero.show', $superhero->id)); ?>"><?php echo e($superhero->super_name); ?></a></td> 
            <td><a href="<?php echo e(route('superhero.show', $superhero->id)); ?>"><img style="width: 5em; height: 5em; object-fit: cover;" src="<?php echo e($superhero->photo); ?>" alt="<?php echo e($superhero->super_name); ?>"/></a></td>
            <td><a href="<?php echo e(route('superhero.edit', $superhero->id)); ?>" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="<?php echo e(route('superhero.destroy', $superhero->id)); ?>" method="post"> 
                <?php echo csrf_field(); ?> 
                <?php echo method_field('DELETE'); ?> 
                <button class="btn btn-danger" type="submit">Delete</button> 
              </form> 
            </td> 
          </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </tbody> 
    </table> 
  <div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Judith G\OneDrive\Escritorio\LaravelProjectWeb\crud\resources\views/superhero/index.blade.php ENDPATH**/ ?>