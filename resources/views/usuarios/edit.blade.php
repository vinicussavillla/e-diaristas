@extends('adminlte::page')

@section('title', 'Editar Usuário')

@section('content_header')
    <h1>Editar Usuário </h1>
@stop

@section('content')

<form id="sentMessage" action="{{ route('usuarios.update', $usuario) }}" method="post">
    @method('PUT')

    @include('usuarios._form')
</form>

@stop
