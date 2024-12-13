<?php $__env->startSection('conteudo'); ?>

<div class="container">
    <h1 class="text-center">Bem-vindo ao Sistema de Gerenciamento</h1>
    <p class="text-center">Utilize as opções abaixo para navegar pelo sistema:</p>
    <div class="d-flex justify-content-center mt-4">
        <a href="<?php echo e(route('cursos.index')); ?>" class="btn btn-primary mx-2">Gerenciar Cursos</a>
        <a href="<?php echo e(route('disciplinas.index')); ?>" class="btn btn-secondary mx-2">Gerenciar Disciplinas</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\One to many\GerenciamentoCursos\resources\views/welcome.blade.php ENDPATH**/ ?>