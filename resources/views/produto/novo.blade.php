@extends('layouts/app')

@section('conteudo')
<section class=" container card">
    <h4 class="card-title" style="padding:10px;">Cadastro de produto</h4>
    <form action="/produtos/adiciona" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" class="form-control">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary totalwidth" type="submit" value="Cadastrar">
        </div>
    </form>
</section>

@stop
