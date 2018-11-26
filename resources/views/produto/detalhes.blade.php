@extends('layouts/app')

@section('conteudo')
<h4 class="meio">Detalhes do produto "{{$p->nome}}"</h1>
<ul class="list-group">
    <li class="list-group-item">{{$p->nome}}</li>
    <li class="list-group-item">Valor: R$ {{$p->valor}}</li>
    <li class="list-group-item">Descrição: {{$p->descricao}}</li>
    <li class="list-group-item">Quantidade: @if ($p->quantidade == 0) Fora de estoque @else {{$p->quantidade}} @endif</li>
</ul>
@stop
