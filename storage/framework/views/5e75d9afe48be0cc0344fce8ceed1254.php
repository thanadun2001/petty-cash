<?php $__env->startSection('title', 'Welcome'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <img src="<?php echo e(URL('image/myring.png')); ?>" style="width: 355px; height: 227px; margin:200px 700px -300px;">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petty-cash-project\resources\views/welcome.blade.php ENDPATH**/ ?>