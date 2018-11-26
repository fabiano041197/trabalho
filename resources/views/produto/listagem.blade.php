@extends('layouts/app')

@section('conteudo')
<h4>Listagem de produtos</h4>

@if (session('adicionou') == true)
    <div class="alert alert-success">
        <h6 class="meio">Adicionado produto {{session('produto')}} com sucesso!</h4>
    </div>
@endif

<table class="table table-bordered table-stripped">
    <thead>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Valor</th>
        <th>Quantidade</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>R$ {{$p->valor}},00</td>
                <td>@if ($p->quantidade == 0) Sem estoque @else {{$p->quantidade}} @endif</td>
                <td class="meio">
                    <a href="/produtos/mostra/{{$p->id}}">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="/produtos/{{$p->id}}/remover">
                        <i class="fas fa-trash"></i>
                    </a>
                    <a href="/produtos/alterar/{{$p->id}}">
                        <i  class='fas'>&#xf044;</i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
