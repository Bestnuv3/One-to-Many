<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('titulo')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Link do CSS -->

</head>

<body>
<div class="container mt-4">

@if (session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

@yield('conteudo')

</div>

</body>

</html>