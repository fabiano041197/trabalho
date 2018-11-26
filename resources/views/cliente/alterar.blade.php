@extends('layouts/app')

@section('conteudo')
<section class="container card">
    <h4 class="card-title" style="padding:10px;">Alterar cadastro de Usuario </h4>
    <form action="/clientes/altera" method="post">
        <input type="hidden" name="id" value="{{$p->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$p->nome}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="endereco">Codigo do Produto</label>
            <input type="text" name="endereco" id="endereco"   value="{{$p->endereco}}" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary totalwidth" type="submit"  value="Alterar">
        </div>
    </form>

</section>

@stop
