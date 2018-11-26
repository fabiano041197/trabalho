@extends('layouts/app')

@section('conteudo')
<section class="container card">
    <h4 class="card-title" style="padding: 10px;">Cadastro de Usuario</h4>
    <form action="/cliente/adiciona" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary totalwidth" type="submit" value="Cadastrar">
        </div>
    </form>
</section>
@stop
