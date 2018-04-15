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
                                    <div class="form-group col-md-6">
                                        <label for="name">{{trans('adminlte::adminlte.full_name')}}:</label> <span class="required">*</span>
                                        <input type="text" name="name" id="name" class="form-control" title="{{trans('adminlte::adminlte.full_name')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">{{trans('adminlte::adminlte.email')}}:</label> <span class="required">*</span>
                                        <input type="email" name="email" id="email" class="form-control" title="{{trans('adminlte::adminlte.email')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="box-body with-border">
                                    <div class="form-group col-md-12">
                                        <label for="titleTel"><h4>{{trans('adminlte::adminlte.phones')}}:</h4></label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tipoTel">{{trans('adminlte::adminlte.type_phone')}}:</label> <span class="required">*</span>
                                        <select id="tipoTel" name="tipoTel[]" class="form-control select2" title="{{trans('adminlte::adminlte.type_phone')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                            <option></option>
                                            <option value="Celular">Celular</option>
                                            <option value="Residência">Residência</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="numeroTel">{{trans('adminlte::adminlte.number_phone')}}:</label> <span class="required">*</span>
                                        <input type="text" name="numeroTel[]" id="numeroTel" class="form-control cel_with_ddd" title="{{trans('adminlte::adminlte.number_phone')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="operadoraTel">{{trans('adminlte::adminlte.operator')}}:</label> <span class="required">*</span>
                                        <select id="operadoraTel" name="operadoraTel[]" class="form-control select2" title="{{trans('adminlte::adminlte.operator')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                            <option></option>
                                            <option value="Tim">Tim</option>
                                            <option value="Claro">Claro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="obsTel">{{trans('adminlte::adminlte.obs')}}:</label>
                                        <input type="text" name="obsTel[]" id="obsTel" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tipoTel">{{trans('adminlte::adminlte.type_phone')}}:</label>
                                        <select id="tipoTel" name="tipoTel[]" class="form-control select2">
                                            <option></option>
                                            <option value="Celular">Celular</option>
                                            <option value="Residência">Residência</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="numeroTel">{{trans('adminlte::adminlte.number_phone')}}:</label>
                                        <input type="text" name="numeroTel[]" id="numeroTel" class="form-control cel_with_ddd">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="operadoraTel">{{trans('adminlte::adminlte.operator')}}:</label>
                                        <select id="operadoraTel" name="operadoraTel[]" class="form-control select2">
                                            <option></option>
                                            <option value="Tim">Tim</option>
                                            <option value="Claro">Claro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="obsTel">{{trans('adminlte::adminlte.obs')}}:</label>
                                        <input type="text" name="obsTel[]" id="obsTel" class="form-control">
                                    </div>
                                    {{--<div class="form-group col-md-12">--}}
                                        {{--<button type="button" class="btn btn-success btn-block">Adicionar telefone</button>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="addressTab">
                                <div class="box-body with-border">
                                    <div class="form-group col-md-6">
                                        <label for="addressEnd">{{trans('adminlte::adminlte.address')}}:</label> <span class="required">*</span>
                                        <input type="text" name="addressEnd" id="addressEnd" class="form-control" readonly title="{{trans('adminlte::adminlte.address')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="neighborhoodEnd">{{trans('adminlte::adminlte.neighborhood')}}:</label> <span class="required">*</span>
                                        <input type="text" name="neighborhoodEnd" id="neighborhoodEnd" class="form-control" readonly title="{{trans('adminlte::adminlte.neighborhood')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                </div>
                                <div class="box-body with-border">
                                    <div class="form-group col-md-2">
                                        <label for="zipcodeEnd">{{trans('adminlte::adminlte.zipcode')}}:</label> <span class="required">*</span>
                                        <input type="text" name="zipcodeEnd" id="zipcodeEnd" class="form-control cep" title="{{trans('adminlte::adminlte.zipcode')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="cityEnd">{{trans('adminlte::adminlte.city')}}:</label> <span class="required">*</span>
                                        <input type="text" name="cityEnd" id="cityEnd" class="form-control" readonly title="{{trans('adminlte::adminlte.city')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="ufEnd">{{trans('adminlte::adminlte.uf')}}:</label> <span class="required">*</span>
                                        <input type="text" name="ufEnd" id="ufEnd" class="form-control" maxlength="2" readonly title="{{trans('adminlte::adminlte.uf')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="numberEnd">{{trans('adminlte::adminlte.number')}}:</label> <span class="required">*</span>
                                        <input type="text" name="numberEnd" id="numberEnd" class="form-control" title="{{trans('adminlte::adminlte.number')}}" oninvalid="this.setCustomValidity(alertRequired(this))" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="complement">{{trans('adminlte::adminlte.complement')}}:</label>
                                        <input type="text" name="complement" id="complement" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="obsEnd">{{trans('adminlte::adminlte.obs')}}:</label>
                                        <input type="text" name="obsEnd" id="obsEnd" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="brandTab">
                                Cadastro3
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Salvar</button>
            </form>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $("#zipcodeEnd").change(function(){
               $.getJSON('/api/cep/'+$(this).val(),function(address){
                   if (address.sucesso == 1) {
                       $("#ufEnd").val(address.uf);
                       $("#cityEnd").val(address.cidade);
                       $("#addressEnd").val(address.endereco);
                       $("#neighborhoodEnd").val(address.bairro);
                       $("#numberEnd").focus();
                   }
               });
            });
        });

        function alertRequired(campo){
            alert("O campo '"+campo.title+"' é obrigatório");
            $('#'+campo.id).css('border-color', 'red');
        }

    </script>
@stop