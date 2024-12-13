@extends('layouts.app')

@section('titulo', 'Criar Disciplina')

@section('conteudo')

<h1>Criar Disciplina</h1>

<form action="{{ route('disciplinas.store') }}" method="POST" class="form-cadastro">

@csrf

<div class="mb-3">

<label for="nome" class="form-label">Nome</label>

<input type="text" class="form-control" id="nome" name="nome" required>

</div>

<div class="mb-3">

<label for="curso_id" class="form-label">Selecione o curso</label>

<select name="curso_id" id="curso_id" class="form-control" required>

<option value="">Selecione um curso</option>

@foreach($cursos as $curso)

<option value="{{ $curso->id }}">{{ $curso->nome }}</option>

@endforeach

</select>

</div>

<button type="submit" class="btn btn-primary">Salvar</button>

<a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Voltar</a>

</form>

</div>

@endsection