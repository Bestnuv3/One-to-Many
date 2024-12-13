@extends('layouts.app')
@section('titulo', 'Criar Curso')
@section('conteudo')

<h1>Criar Curso</h1>

<form action="{{ route('cursos.store') }}" method="POST" class="form-cadastro">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao">{{ old('descricao') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>
</form>

@endsection