     

    <?php $__env->startSection('content'); ?>
    <?php echo $__env->make('_common._form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('pages.messages._items', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>