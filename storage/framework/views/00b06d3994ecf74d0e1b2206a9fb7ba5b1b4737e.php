

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Posts</h1>
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('posts.show', ['slug' => $post->slug])); ?>">
                    <?php echo e($post->title); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="d-flex">
        <?php echo e($posts->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Documents\KULIAH\Semester 4\Web Lanjutan\Pertemuan 4\belajar-model\resources\views/posts/index.blade.php ENDPATH**/ ?>