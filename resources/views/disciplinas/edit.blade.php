@extends('layouts.app')

@section('titulo', 'Editar Disciplina')

@section('conteudo')

<h1>Editar Disciplina</h1>

<form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST" class="form-cadastro">

@csrf

@method('PUT')

<div class="mb-3">

<label for="nome" class="form-label">Nome</label>

<input type="text" class="form-control" id="nome" name="nome" value="{{ $disciplina->nome }}" required>

</div>

<div class="mb-3">

<label for="curso_id" class="form-label">Selecione o curso</label>

<select name="curso_id" id="curso_id" class="form-control" required>

<option value="">Selecione um curso</option>

@foreach($cursos as $curso)

<option value="{{ $curso->id }}"

{{ $disciplina->curso_id == $curso->id ? 'selected' : '' }}>

{{ $curso->nome }}

</option>

@endforeach

</select>

</div>

<button type="submit" class="btn btn-primary">Atualizar</button>

<a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Voltar</a>

</form>

</div>

@endsection