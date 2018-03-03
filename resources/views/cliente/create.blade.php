@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.title.client'))

@section('content_header')
    <h1>{{trans('adminlte::adminlte.title.client')}}</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form id="formArticle" action="{{route('cliente.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box box-solid">
                    <div class="box-body">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="basicTab active">
                                <a href="#basicTab" aria-controls="basicTab" role="tab" data-toggle="tab">
                                    {{trans('adminlte::adminlte.info_basics')}}
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#addressTab" aria-controls="addressTab" role="tab" data-toggle="tab">
                                    {{trans('adminlte::adminlte.address')}}
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#brandTab" aria-controls="brandTab" role="tab" data-toggle="tab">
                                    {{trans('adminlte::adminlte.brands')}}
                                </a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="basicTab">
                                <div class="box-body with-border">
                                    <div class="form-group col-md-4">
                                        <label for="name">{{trans('adminlte::adminlte.full_name')}}:</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">{{trans('adminlte::adminlte.email')}}:</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="phone">{{trans('adminlte::adminlte.phone')}}:</label>
                                        <input type="text" name="telefone" id="telefone" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="cell">{{trans('adminlte::adminlte.cell')}}:</label>
                                        <input type="text" name="celular" id="celular" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="operator">{{trans('adminlte::adminlte.operator')}}:</label>
                                        <input type="text" name="operadora" id="operadora" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="addressTab">
                                Cadastro2
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="brandTab">
                                Cadastro3
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop