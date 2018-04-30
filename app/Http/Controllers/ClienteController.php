<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TelOperator;
use App\Models\Brand;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create(){
        $brands = Brand::all();
        $telOperators = TelOperator::all();
        return view('cliente.create', compact('brands','telOperators'));
    }

    public function store(Request $request){

        $cliente = Cliente::create($request->except('_token','telefones','enderecos','brand'));

        //Telefone
        foreach($request->telefones as $tel){
            if(!is_null($tel['tipo']) && !is_null($tel['numero']))
                $cliente->Phone()->create($tel);
        }

        //Endereço
        foreach($request->enderecos as $enderecos){
            if(!is_null($enderecos['endereco']) && !is_null($enderecos['bairro']) && !is_null($enderecos['cep']) && !is_null($enderecos['cidade']) && !is_null($enderecos['uf']) && !is_null($enderecos['numero']))
                $cliente->Address()->create($enderecos);
        }

        //Marcas
        $cliente->Brands()->sync($request->brand);

        return redirect()->route('cliente.index')->with(['message' => 'Cliente criado com sucesso!', 'type' => 'success', 'icon' => 'check']);
    }

    public function show(){
        //
    }
}
