

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1><?php echo e($post->title); ?></h1>
    <img src="<?php echo e($post->image); ?>" />
    <p>
        <?php echo e($post->content); ?>

    </p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Documents\KULIAH\Semester 4\Web Lanjutan\Pertemuan 4\belajar-model\resources\views/posts/show.blade.php ENDPATH**/ ?>