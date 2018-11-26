@extends('layouts/app')

@section('conteudo')
<section class="container card">
    <h4 class="card-title" style="padding:4px;">Cadastro de produto</h4>
    <form action="/venda/adiciona" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cliente_id">Codigo do Cliente</label>
            <input type="number" name="cliente_id" id="cliente_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="produto_id">Codigo do Produto</label>
            <input type="number" name="produto_id" id="produto_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" name="data" id="data" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary totalwidth" type="submit" value="Cadastrar">
        </div>
    </form>
</section>
@stop
