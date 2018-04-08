<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\AddressCliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create(){
        return view('cliente.create');
    }

    public function store(){
        //
    }

    public function show(){
        //
    }
}
