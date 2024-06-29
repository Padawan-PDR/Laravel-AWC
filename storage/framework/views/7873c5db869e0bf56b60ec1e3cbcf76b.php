<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body style="display: flex; justify-content: center; align-items: center;">
    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>
        Titulo: <input type="text" name="title" value="<?php echo e($post->title); ?>"><br>
        Conteudo: <input type="text" name="content" value="<?php echo e($post->content); ?>">
        <button type="submit">Enviar </button> 
    </form>
</body>
</html><?php /**PATH C:\Users\pedro.afreires\aulaAWC-02\resources\views/posts/edit.blade.php ENDPATH**/ ?>