@extends('layouts/app')

@section('conteudo')
<section class="container card">
    <h4 class="card-title" style="padding:10px;">Alterar produto </h4>
    <form action="/produtos/alterar" method="post">
        <input type="hidden" name="id" value="{{$p->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$p->nome}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor"   value="{{$p->valor}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade"  value="{{$p->quantidade}}" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary totalwidth" type="submit"  value="Alterar">
        </div>
    </form>
</section>
@stop
