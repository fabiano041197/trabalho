@extends('layouts/app')

@section('conteudo')
<h4>Listagem de Vendas</h4>

@if (session('adicionou') == true)
    <div class="alert alert-success">
        Operação efetuada com sucesso!
    </div>
@endif

<table class="table table-bordered table-stripped">
    <thead>
        <th>Codigo</th>
        <th>Codigo do Cliente</th>
        <th>Codigo do Pdoduto</th>
        <th>Data</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($venda as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->cliente_id}}</td>
                <td>{{$p->produto_id}}</td>
                <td>{{$p->data}}</td>
                <td class="meio">
                    <a href="/vendas/mostra/{{$p->id}}">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="/vendas/{{$p->id}}/remover">
                        <i class="fas fa-trash"></i>
                    </a>
                    <a href="/vendas/alterar/{{$p->id}}">
                        <i class='fas'>&#xf044;</i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
