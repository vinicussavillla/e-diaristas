@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
    <h1>Lista de Usuários </h1>
@endsection

@section('content')

@if (session('mensagem'))
  <div class="alert alert-success">
    {{ session('mensagem' )}}
  </div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Acões</th>
      </tr>
    </thead>
    <tbody>

        @forelse ($usuarios as $usuario)
          <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>

            <td>
             <a href={{ route('usuarios.edit', $usuario)}} class="btn btn-outline-primary" data-target="#exampleModal">
                Atualizar</a>
             {{-- <a href={{ $usuario->id}} class="btn btn-outline-primary" data-toggle="modal"  data-target="#modalCreate">
                Atualizar </a> --}}
             <a class="btn btn-outline-danger" data-toggle="modal" data-target="#modalApagar">
               Apagar </a>
          </td>
      </tr>
        @empty
            <th> </th>
            <th>Nenhum usuario foi encontrado</th>
            <th> </th>
        @endforelse
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {{ $usuarios->links() }}
 </div>
   <div class="float-right">
    <a href="{{ route('usuarios.create')}}" class="btn btn-success"> Novo Usuário</a>
</div>

@endsection


{{-- Modal Apagar --}}
<form action="{{ route('usuarios.destroy', $usuario) }}"  method="post">
    @method('DELETE')
    @csrf
<div class="modal fade" id="modalApagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title" id="exampleModalLabel">Excluir Item </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tem certeza que deseja excluir o item Selecionado?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger" onclick="destroy">Apagar</button>
        </div>
      </div>
    </div>
  </div>
