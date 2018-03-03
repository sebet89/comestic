@extends('adminlte::page')

@section('title', 'Cadastro de Cliente')

@section('content_header')
    <h1>Cadastro de Cliente</h1>
@stop

@section('content')
    <div class="page page-table">
        <div class="row">
            <div class="col-sm-6">
                <a href="">
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span> Novo Cliente
                    </button>
                </a>
            </div>
            <div class="col-sm-6">
                <form action="" method="GET">
                    <div class="input-group" style="width: 60%;float: right;">
                        @if(isset($p_chave))
                            <input type="text" class="form-control" name="p_chave" id="p_chave" value="{{ $p_chave }}">
                        @else
                            <input type="text" class="form-control" name="p_chave" id="p_chave" value="">
                        @endif
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Pesquisar</button>
                        </span>
                    </div>
                    <br/>
                </form>
            </div>
        </div>
        <p>&nbsp;</p>
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><span class="glyphicon glyphicon-th"></span> Gerenciar Clientes </strong>
            </div>
            @if (isset($clientes))
                @if(!empty($clientes) && count($clientes) > 0)
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    @php
                                    $status = ($cliente->status == 1) ? 'Ativo' : 'Inativo';
                                    $status_class = ($cliente->status == 1) ? 'label-success' : 'label-danger';
                                    @endphp
                                    <tr>
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->name}}</td>
                                        <td>{{$cliente->endereco}}</td>
                                        <td><span class="label {{$status_class}}">{{$status}}</span></td>
                                        <td>
                                            @if($status == 'Inativo') <a href="">
                                                <button type="button" class="btn btn-success">
                                                    <span class="glyphicon glyphicon-edit"></span> Ativar
                                                </button>
                                            </a> @else <a href="">
                                                <button type="button" class="btn btn-danger">
                                                    <span class="glyphicon glyphicon-edit"></span> Desativar
                                                </button>
                                            </a> @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    @if(isset($p_chave))
                        {!! $clientes->appends(['p_chave' => $p_chave])->render() !!}
                    @else
                        {!! $clientes->render() !!}
                    @endif
                @else
                    <div class="alert alert-info">
                        <p>Nenhum registro encontrado.</p>
                    </div>
                @endif
            @endif
        </div>
    </div>
@stop