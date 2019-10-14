@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informações do Cliente
                    <a class="pull-right" href="{{'/clientes'}}"> Listagem de Clientes </a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    <!-- Verificação de edição e/ou inclusão-->
                    @if(isset($cliente))                        
                        <form class="form" method="post" action="{{route('atualizar',$cliente->id)}}" enctype="multipart/form-data">
                            {!!method_field('PATCH')!!}
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{ $cliente->nome }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="endereco" placeholder="Endereço" class="form-control" value="{{ $cliente->endereco }}">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="numero" placeholder="Número" value="{{ $cliente->numero }}">
                            </div>
                            <button class="btn btn-primary">Cadastrar</button>
                    @else
                        <form class="form" method="post" action="{{route('salvar')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" name="nome" placeholder="Nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="endereco" placeholder="Endereço" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="numero" placeholder="Número">
                            </div>
                            <button class="btn btn-primary">Cadastrar</button>
                    @endif
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection