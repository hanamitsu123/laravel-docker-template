 <!-- 追記 -->
<?php $__env->startSection('content'); ?> <!-- 追記 -->
<div class="row justify-content-center">
  <div class="col-md-8">
    <p class="text-left">
      <a class="btn btn-success" href="<?php echo e(route('todo.create')); ?>">ToDoを追加</a><!--  route()は指定した名前付きルートのURLを返します。  -->
    </p>
    <div class="card">
      <div class="card-header">
        ToDo一覧
      </div>
      <div class="list-group list-group-flush">
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex align-items-center p-2">
          <span class="col-9"><?php echo e($todo->content); ?></span>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?> <!-- 追記 -->
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/src/resources/views/todo/index.blade.php ENDPATH**/ ?>