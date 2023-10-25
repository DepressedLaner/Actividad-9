 

<?php $__env->startSection('content'); ?> 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Edit superhero 
    </div> 
    <div class="card-body"> 
      <?php if($errors->any()): ?> 
        <div class="alert alert-danger"> 
          <ul> 
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <li><?php echo e($error); ?></li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </ul> 
        </div><br /> 
      <?php endif; ?> 
      <form method="post" action="<?php echo e(route('superhero.update', $superhero->id)); ?>"> 
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PATCH'); ?> 
        <div class="form-group"> 
          <label for="real_name">Real Name:</label> 
          <input type="text" class="form-control" name="real_name" value="<?php echo e($superhero->real_name); ?>" /> 
        </div> 
        <div class="form-group"> 
          <label for="super_name">Super Name:</label> 
          <input type="text" class="form-control" name="super_name" value="<?php echo e($superhero->super_name); ?>" /> 
        </div> 
        <div class="form-group"> 
          <label for="photo">Photo URL: <br><img style="width: 2em; height: 2em; object-fit: cover;" src="<?php echo e($superhero->photo); ?>"></label> 
          <input type="text" class="form-control" name="photo" value="<?php echo e($superhero->photo); ?>" /> 
        </div> 
        <div class="form-group"> 
          <label for="symptoms">Description :</label> 
          <textarea rows="5" columns="5" class="form-control" name="description"><?php echo e($superhero->description); ?></textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="<?php echo e(route('superhero.index')); ?>" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Judith G\OneDrive\Escritorio\LaravelProjectWeb\crud\resources\views/superhero/edit.blade.php ENDPATH**/ ?>