

<?php $__env->startSection('titulo', 'Criar Curso'); ?>

<?php $__env->startSection('conteudo'); ?>

<h1>Criar Curso</h1>

<form action="<?php echo e(route('cursos.store')); ?>" method="POST" class="form-cadastro">

<?php echo csrf_field(); ?>

<div class="mb-3">

<label for="nome" class="form-label">Nome</label>

<input type="text" class="form-control" id="nome" name="nome" value="<?php echo e(old('nome')); ?>" required>

</div>

<div class="mb-3">

<label for="descricao" class="form-label">Descrição</label>

<textarea class="form-control" id="descricao" name="descricao"><?php echo e(old('descricao')); ?></textarea>

</div>

<button type="submit" class="btn btn-primary">Salvar</button>

<a href="<?php echo e(route('cursos.index')); ?>" class="btn btn-secondary">Voltar</a>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\One to many\GerenciamentoCursos\resources\views/cursos/create.blade.php ENDPATH**/ ?>