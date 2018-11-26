@extends('layouts/app')

@section('conteudo')
<h4 class="meio">Detalhamento da venda do cliente {{$p->cliente_id}}</h4>
<ul class="list-group">
    <li class="list-group-item">Codigo do Cliente: R$ {{$p->cliente_id}}</li>
    <li class="list-group-item">Produto Comprado: {{$p->produto_id}}</li>
    <li class="list-group-item">Data da Compra: {{$p->data}} </li>
</ul>
@stop
