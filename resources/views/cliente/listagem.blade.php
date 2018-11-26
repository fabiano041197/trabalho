@extends('layouts/app')

@section('conteudo')
<h4>Listagem de Usuarios</h4>

@if (session('adicionou') == true)
    <div class="alert alert-success">
        <h6 class="meio">Operação efetuada com sucesso!</h6>
    </div>
@endif
<table class="table table-bordered table-stripped">
    <thead class="">
        <th>Codigo</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($cliente as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->endereco}}</td>
                <td class="meio">
                    <a href="/clientes/mostra/{{$p->id}}">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="/clientes/{{$p->id}}/remover">
                        <i class="fas fa-trash"></i>
                    </a>
                    <a href="/clientes/alterar/{{$p->id}}">
                        <i class='fas'>&#xf044;</i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
