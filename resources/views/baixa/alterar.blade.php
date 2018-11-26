@extends('layouts/app')

@section('conteudo')
<section class="container card">
    <h4 class="card-title" style="padding:4px;">Alterar produto </h1>
    <form action="/baixa/alterar" method="post">
        <input type="hidden" name="id" value="{{$p->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cliente_id">Codigo do Cliente</label>
            <input type="number" name="cliente_id" id="cliente_id" value="{{$p->cliente_id}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="produto_id">Codigo do Produto</label>
            <input type="number" name="produto_id" id="produto_id"   value="{{$p->produto_id}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="data">Quantidade</label>
            <input type="date" name="data" id="quantidade"  value="{{$p->data}}" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary totalwidth" type="submit"  value="Alterar">
        </div>
    </form>
</section>

@stop