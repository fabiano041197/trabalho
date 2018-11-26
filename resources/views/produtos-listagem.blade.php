@extends('principal')

@section('conteudo')

    <h1>Listagem de Produtos.</h1>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Ação</th>
        </tr>

        @foreach ($produtos as $p)
        <tr>
            <td scope="row">{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>
                <a href="/produtos/mostra/{{$p->id}}">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
            </td>'  '           
        </tr>
        @endforeach

    </table>
</div>

@stop
