<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body style="display:flex; justify-content: center; align-items: center; flex-direction: column; back-go">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <h1 ><a href="<?php echo e(route('posts.show', $post->id)); ?>"> <?php echo e($post->title); ?> </a></h1>
        <p><?php echo e($post->content); ?></p> 

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\Users\pedro.afreires\aulaAWC-02\resources\views/posts/index.blade.php ENDPATH**/ ?>