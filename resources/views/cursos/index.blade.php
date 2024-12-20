@extends('layouts.app')

@section('titulo', 'Lista de Cursos')

@section('conteudo')

<div class="d-flex justify-content-between align-items-center mb-3">

<h1>Lista de Cursos</h1>

<a href="{{ route('cursos.create') }}" class="btn btn-primary">Novo Curso</a>

</div>

@if ($cursos->isEmpty())

<div class="alert alert-warning" role="alert">

Nenhum curso cadastrado no momento.

</div>

@else

<table class="table table-hover table-striped table-bordered align-middle text-center">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Nome</th>

<th>Descrição</th>

<th>Ações</th>

</tr>

</thead>

<tbody>

@foreach ($cursos as $curso)

<tr>

<td>{{ $curso->id }}</td>

<td>{{ $curso->nome }}</td>

<td>{{ $curso->descricao ?? 'Sem descrição' }}</td>

<td>

<a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-sm btn-warning me-2">Editar</a>

<form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" class="d-inline-block">

@csrf

@method('DELETE')

<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este curso?')">Excluir</button>

</form>

</td>

</tr>
@endforeach

</tbody>

</table>

@endif

@endsection