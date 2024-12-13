<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $__env->yieldContent('titulo'); ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet"> <!-- Link do CSS -->

</head>

<body>
<div class="container mt-4">

<?php if(session('success')): ?>

<div class="alert alert-success">

<?php echo e(session('success')); ?>


</div>

<?php endif; ?>

<?php echo $__env->yieldContent('conteudo'); ?>

</div>

</body>

</html><?php /**PATH C:\xampp\htdocs\One to many\GerenciamentoCursos\resources\views/layouts/app.blade.php ENDPATH**/ ?>