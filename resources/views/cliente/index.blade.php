@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.title.client'))

@section('content_header')
    <div class="btn-group" style="float:right">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Ações <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
            <li><a href="{{route('cliente.create')}}"><i class="fa fa-plus"></i>{{ trans('adminlte::adminlte.create') }}</a></li>
        </ul>
    </div>

    <h1>{{trans('adminlte::adminlte.title.client')}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table id="clientesTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-sm-3">{{trans('adminlte::adminlte.role.client')}}</th>
                            <th class="col-sm-7">{{trans('adminlte::adminlte.address')}}</th>
                            <th class="col-sm-2 text-center">{{trans('adminlte::adminlte.actions')}} </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->name}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td class="text-center">
                                    <form action="" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="" type="button" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil"></i> {{trans('adminlte::adminlte.edit')}}
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i> {{trans('adminlte::adminlte.delete')}}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css">
@stop

@section('js')
    <script src="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
    <script>
        $('#clientesTable').DataTable(
            {
                "language": {
                    "search": "Pesquisar:",
                    "lengthMenu": "Mostrar _MENU_ itens por página",
                    "zeroRecords": "Nenhum registro encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro encontrado",
                    "infoFiltered": "(filtrado de _MAX_ no total)",
                    "paginate": {
                        "first":      "Primeira",
                        "last":       "Última",
                        "next":       "Próxima",
                        "previous":   "Anterior"
                    }
                },
                "columnDefs": [
                    {"orderable": false, "targets": 2}
                ]
            }
        );

    </script>
@stop