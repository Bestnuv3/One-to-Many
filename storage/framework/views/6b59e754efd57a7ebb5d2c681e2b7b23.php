

<?php $__env->startSection('titulo', 'Lista de Disciplinas'); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">

<h1>Lista de Disciplinas</h1>

<a href="<?php echo e(route('disciplinas.create')); ?>" class="btn btn-primary">Nova Disciplina</a>

</div>

<?php if($disciplinas->isEmpty()): ?>

<div class="alert alert-warning" role="alert">

Nenhuma disciplina cadastrada no momento.

</div>

<?php else: ?>

<table class="table table-hover table-striped table-bordered align-middle text-center">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Nome</th>

<th>Curso</th>

<th>Ações</th>

</tr>

</thead>

<tbody>

<?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

<td><?php echo e($disciplina->id); ?></td>

<td><?php echo e($disciplina->nome); ?></td>

<td><?php echo e($disciplina->curso->nome); ?></td>

<td>

<a href="<?php echo e(route('disciplinas.edit', $disciplina->id)); ?>" class="btn btn-sm btn-warning me-2">Editar</a>

<form action="<?php echo e(route('disciplinas.destroy', $disciplina->id)); ?>" method="POST" class="d-inline-block">

<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>

<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta disciplina?')">Excluir</button>

</form>

</td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>

</table>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\One to many\GerenciamentoCursos\resources\views/disciplinas/index.blade.php ENDPATH**/ ?>