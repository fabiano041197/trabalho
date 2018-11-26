@extends('layouts/app')

@section('conteudo')
    <h4 class="meio">Detalhes do Usuario "{{$p->nome}}"</h4>
    <ul class="card-body">
        <li class="list-group-item ">Nome: {{$p->nome}}</li>
        <li class="list-group-item">Endereço:{{$p->endereco}}</li>
    </ul>

@stop
