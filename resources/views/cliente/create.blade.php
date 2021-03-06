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
                                        <input type="text" name="name" id="name" class="form-control" title="{{trans('adminlte::adminlte.full_name')}}" oninvalid="setCustomValidity(alertRequired(this))" oninput="setCustomValidity(clearAlert(this))" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">{{trans('adminlte::adminlte.email')}}:</label> <span class="required">*</span>
                                        <input type="email" name="email" id="email" class="form-control" title="{{trans('adminlte::adminlte.email')}}" oninvalid="setCustomValidity(alertRequired(this))" oninput="setCustomValidity(clearAlert(this))" required>
                                    </div>
                                </div>
                                <div class="box-body with-border">
                                    <div class="form-group col-md-12">
                                        <label for="titleTel"><h4>{{trans('adminlte::adminlte.phones')}}:</h4></label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tipoTel">{{trans('adminlte::adminlte.type_phone')}}:</label>
                                        <select id="tipoTel" name="telefones[0][tipo]" class="form-control select2">
                                            <option></option>
                                            <option value="Celular" selected>Celular</option>
                                            <option value="Residência">Residência</option>
                                            <option value="Trabalho">Trabalho</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="numeroTel">{{trans('adminlte::adminlte.number_phone')}}:</label> <span class="required">*</span>
                                        <input type="text" name="telefones[0][numero]" id="numeroTel" class="form-control cel_with_ddd" title="{{trans('adminlte::adminlte.number_phone')}}" oninvalid="setCustomValidity(alertRequired(this))" oninput="setCustomValidity(clearAlert(this))" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="operadoraTel">{{trans('adminlte::adminlte.operator')}}:</label>
                                        <select id="operadoraTel" name="telefones[0][operadora]" class="form-control select2">
                                            <option></option>
                                            @foreach($telOperators as $telOperator)
                                                <option value="{{$telOperator->id}}">{{$telOperator->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="obsTel">{{trans('adminlte::adminlte.obs')}}:</label>
                                        <input type="text" name="telefones[0][obs]" id="obsTel" class="form-control">
                                    </div>
                                    <div id="telefones"></div>
                                    <div class="form-group col-md-12">
                                        <button type="button" id="btnAddTelefone" class="btn btn-inverse btn-block">{{trans('adminlte::adminlte.phrases.add_phone')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="addressTab">
                                <div class="box-body with-border">
                                    <div class="form-group col-md-6">
                                        <label for="addressEnd">{{trans('adminlte::adminlte.address')}}:</label>
                                        <input type="text" name="enderecos[0][endereco]" id="addressEnd-0" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="neighborhoodEnd">{{trans('adminlte::adminlte.neighborhood')}}:</label>
                                        <input type="text" name="enderecos[0][bairro]" id="neighborhoodEnd-0" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="box-body with-border">
                                    <div class="form-group col-md-2">
                                        <label for="zipcodeEnd-0">{{trans('adminlte::adminlte.zipcode')}}:</label> <span class="required">*</span>
                                        <input type="text" name="enderecos[0][cep]" id="zipcodeEnd-0" class="form-control cep" onBlur="buscarCep(0)" title="{{trans('adminlte::adminlte.zipcode')}}" oninvalid="setCustomValidity(alertRequired(this))" oninput="setCustomValidity(clearAlert(this))" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="cityEnd">{{trans('adminlte::adminlte.city')}}:</label>
                                        <input type="text" name="enderecos[0][cidade]" id="cityEnd-0" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="ufEnd">{{trans('adminlte::adminlte.uf')}}:</label>
                                        <input type="text" name="enderecos[0][uf]" id="ufEnd-0" class="form-control" maxlength="2" readonly>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="numberEnd-0">{{trans('adminlte::adminlte.number')}}:</label> <span class="required">*</span>
                                        <input type="text" name="enderecos[0][numero]" id="numberEnd-0" class="form-control" title="{{trans('adminlte::adminlte.number')}}" oninvalid="setCustomValidity(alertRequired(this))" oninput="setCustomValidity(clearAlert(this))" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="complement">{{trans('adminlte::adminlte.complement')}}:</label>
                                        <input type="text" name="enderecos[0][complemento]" id="complement-0" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="obsEnd">{{trans('adminlte::adminlte.obs')}}:</label>
                                        <input type="text" name="enderecos[0][obs]" id="obsEnd-0" class="form-control">
                                    </div>
                                </div>
                                <div id="endereco"></div>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-inverse btn-block addEndereco">{{trans('adminlte::adminlte.phrases.add_another_address')}}</button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="brandTab">
                                <div class="box-body with-border">
                                    <div class="form-group col-md-12">
                                        <label for="brand">{{trans('adminlte::adminlte.brands')}}:</label> <span class="required">*</span> <i data-toggle="tooltip" data-placement="top" title="" class="fa fa-question-circle" data-original-title="{{trans('adminlte::adminlte.phrases.place_the_marks_that_this_customer_buys')}}"></i>
                                        <select id="brand" name="brand[]" class="form-control select2-multitextarea" title="{{trans('adminlte::adminlte.brands')}}" oninvalid="setCustomValidity(alertRequired(this))" oninput="setCustomValidity(clearAlert(this))" multiple required>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">{{trans('adminlte::adminlte.save')}}</button>
            </form>
        </div>
    </div>

@stop

@section('css')
@stop

@section('js')
    <script>

        function buscarCep(id)
        {
            var cep = $('#zipcodeEnd-' + id).val();

            if (cep != "")
            {
                $.getJSON('/api/cep/'+cep,function(address){
                    if (address.sucesso == 1) {
                        $("#ufEnd-" + id).val(address.uf);
                        $("#cityEnd-" + id).val(address.cidade);
                        $("#addressEnd-" + id).val(address.endereco);
                        $("#neighborhoodEnd-" + id).val(address.bairro);
                        $("#numberEnd-" + id).focus();
                    }
                });
            } else {
                alert('Por favor preencha um cep!');
            }
        }

        //addEndereco
        $( document ).ready(function(){
            countEndereco = 1;
            countTelefone = 1
            $('.addEndereco').click(function(){

                divEndereco = $('#endereco');

                newDivEndereco  = '';

                //-------------------------

                //Campos do Endereço

                newDivEndereco += '<hr style="background-color: #000;height: 1px;">';
                newDivEndereco += '<div class="box-body with-border">';
                newDivEndereco += '<div class="form-group col-md-6">';
                newDivEndereco += '<label for="addressEnd">{{trans('adminlte::adminlte.address')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][endereco]" id="addressEnd-' + countEndereco + '" class="form-control" readonly>';
                newDivEndereco += '</div>';
                newDivEndereco += '<div class="form-group col-md-6">';
                newDivEndereco += '<label for="neighborhoodEnd">{{trans('adminlte::adminlte.neighborhood')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][bairro]" id="neighborhoodEnd-' + countEndereco + '" class="form-control" readonly>';
                newDivEndereco += '</div>';
                newDivEndereco += '</div>';
                newDivEndereco += '<div class="box-body with-border">';
                newDivEndereco += '<div class="form-group col-md-2">';
                newDivEndereco += '<label for="zipcodeEnd">{{trans('adminlte::adminlte.zipcode')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][cep]" id="zipcodeEnd-' + countEndereco + '" class="form-control cep" onBlur="buscarCep('+ countEndereco +')">';
                newDivEndereco += '</div>';
                newDivEndereco += '<div class="form-group col-md-2">';
                newDivEndereco += '<label for="cityEnd">{{trans('adminlte::adminlte.city')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][cidade]" id="cityEnd-' + countEndereco + '" class="form-control" readonly>';
                newDivEndereco += '</div>';
                newDivEndereco += '<div class="form-group col-md-1">';
                newDivEndereco += '<label for="ufEnd">{{trans('adminlte::adminlte.uf')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][uf]" id="ufEnd-' + countEndereco + '" class="form-control" maxlength="2" readonly>';
                newDivEndereco += '</div>';
                newDivEndereco += '<div class="form-group col-md-2">';
                newDivEndereco += '<label for="numberEnd">{{trans('adminlte::adminlte.number')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][numero]" id="numberEnd-' + countEndereco + '" class="form-control">';
                newDivEndereco += '</div>';
                newDivEndereco += '<div class="form-group col-md-3">';
                newDivEndereco += '    <label for="complement">{{trans('adminlte::adminlte.complement')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][complemento]" id="complement-' + countEndereco + '" class="form-control">';
                newDivEndereco += '    </div>';
                newDivEndereco += '    <div class="form-group col-md-2">';
                newDivEndereco += '    <label for="obsEnd">{{trans('adminlte::adminlte.obs')}}:</label>';
                newDivEndereco += '<input type="text" name="enderecos[' + countEndereco + '][obs]" id="obsEnd-' + countEndereco + '" class="form-control">';
                newDivEndereco += '    </div>';
                newDivEndereco += '    </div>';


                //-------------------------

                divEndereco.append(newDivEndereco);

                countEndereco++;

                $('.cep').mask('99999-999');
            });

            //Campos do Telefone

            $('#btnAddTelefone').click(function(){

                divTelefone = $('#telefones');

                newDivTelefone  = '';

                //-------------------------

                newDivTelefone  +=     '    <div class="form-group col-md-3">';
                newDivTelefone  +=     '    <label for="tipoTel">{{trans('adminlte::adminlte.type_phone')}}:</label>';
                newDivTelefone  +=     '<select id="tipoTel" name="telefones['+ countTelefone +'][tipo]" class="form-control select2">';
                newDivTelefone  +=     '    <option></option>';
                newDivTelefone  +=     '    <option value="Celular" selected>Celular</option>';
                newDivTelefone  +=     '    <option value="Residência">Residência</option>';
                newDivTelefone  +=     '    <option value="Trabalho">Trabalho</option>';
                newDivTelefone  +=     '    </select>';
                newDivTelefone  +=     '    </div>';
                newDivTelefone  +=     '    <div class="form-group col-md-3">';
                newDivTelefone  +=     '    <label for="numeroTel">{{trans('adminlte::adminlte.number_phone')}}:</label>';
                newDivTelefone  +=     '<input type="text" name="telefones['+ countTelefone +'][numero]" id="numeroTel" class="form-control cel_with_ddd">';
                newDivTelefone  +=     '    </div>';
                newDivTelefone  +=     '    <div class="form-group col-md-3">';
                newDivTelefone  +=     '    <label for="operadoraTel">{{trans('adminlte::adminlte.operator')}}:</label>';
                newDivTelefone  +=     '<select id="operadoraTel" name="telefones['+ countTelefone +'][operadora]" class="form-control select2">';
                newDivTelefone  +=     '    <option></option>';
                @foreach($telOperators as $telOperator)
                    newDivTelefone  +=     '<option value="{{$telOperator->id}}">{{$telOperator->name}}</option>';
                @endforeach
                newDivTelefone  +=     '</select>';
                newDivTelefone  +=     '    </div>';
                newDivTelefone  +=     '    <div class="form-group col-md-3">';
                newDivTelefone  +=     '    <label for="obsTel">{{trans('adminlte::adminlte.obs')}}:</label>';
                newDivTelefone  +=     '<input type="text" name="telefones['+ countTelefone +'][obs]" id="obsTel" class="form-control">';
                newDivTelefone  +=     '    </div>';



                //-------------------------

                divTelefone.append(newDivTelefone);

                countTelefone++;

                $('.cel_with_ddd').mask('(00) 00000-0000');
            });
        });

    </script>
@stop