<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body style="display: flex; justify-content: center; align-items: center;">
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
       Titulo: <input type="text" name="title"><br>
        Conteudo: <input type="text" name="content">
        <button type="submit">Enviar </button> 
    </form>
</body>
</html><?php /**PATH C:\Users\pedro.afreires\aulaAWC-02\resources\views/posts/create.blade.php ENDPATH**/ ?>