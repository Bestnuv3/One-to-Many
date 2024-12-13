@extends('layouts.app')
@section('titulo', 'Editar Curso')
@section('conteudo')
<h1>Editar Curso</h1>
<form action="{{ route('cursos.update', $curso->id) }}" method="POST"
class="form-cadastro">
@csrf
@method('PUT')
<div class="mb-3">
<label for="nome" class="form-label">Nome</label>
<input type="text" class="form-control" id="nome" name="nome"
value="{{ old('nome', $curso->nome) }}" required>
</div>
<div class="mb-3">
<label for="descricao" class="form-label">Descrição</label>
<textarea
class="form-control"
id="descricao"
name="descricao">{{ old('descricao', $curso->descricao) }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
<a href="{{ route('cursos.index') }}" class="btn btn-
secondary">Voltar</a>
</form>
@endsection