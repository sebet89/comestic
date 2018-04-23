<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TelOperator;
use App\Models\Brand;
use App\Models\AddressCliente;

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

    public function store(){
        dd("foi");
    }

    public function show(){
        //
    }
}
