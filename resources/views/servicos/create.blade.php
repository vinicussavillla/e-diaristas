@extends('adminlte::page')

@section('title', 'Novo Servico')

@section('content_header')
    <h1>Novo Serviço </h1>
@stop

@section('content')

   <form action="{{ route('servicos.store') }}" method="post">
    @include('servicos._form');
   </form>
   
@stop





