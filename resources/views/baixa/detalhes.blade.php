@extends('layouts/app')

@section('conteudo')
<h4 class="meio">Detalhamento da baixa do cliente {{$p->cliente_id}}</h4>
<ul class="list-group">
    <li class="list-group-item">Usuario que efetuou a baixa: {{$p->cliente_id}}</li>
    <li class="list-group-item">Produto Baixado: {{$p->produto_id}}</li>
    <li class="list-group-item">Data da baixa do produto: {{$p->data}} </li>
</ul>
@stop
