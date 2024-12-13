@extends('layouts.app')
@section('conteudo')

<div class="container">
    <h1 class="text-center">Bem-vindo ao Sistema de Gerenciamento</h1>
    <p class="text-center">Utilize as opções abaixo para navegar pelo sistema:</p>
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('cursos.index') }}" class="btn btn-primary mx-2">Gerenciar Cursos</a>
        <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary mx-2">Gerenciar Disciplinas</a>
    </div>
</div>

@endsection