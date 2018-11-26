@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Olá</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem vindo a apresentação do trabalho de tópicos avançados!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
