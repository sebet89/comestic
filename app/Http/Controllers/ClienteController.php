<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\AddressCliente;
use App\Models\Brand;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create(){
        $brands = Brand::all();
        return view('cliente.create', compact('brands'));
    }

    public function store(){
        dd("foi");
    }

    public function show(){
        //
    }
}
