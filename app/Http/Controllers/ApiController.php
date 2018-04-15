<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function cep($cep){
        $cep = preg_replace('/[.-]/', '', $cep);

        $reg = file_get_contents("https://viacep.com.br/ws/".$cep."/json/");
        $reg = json_decode($reg, true);

        if(isset($reg['erro'])){
            $dados['sucesso'] = 0;
            return json_encode($dados);
        }else{
            $dados['sucesso'] = 1;
        }

        $dados['endereco']     = (string) $reg['logradouro'];
        $dados['bairro']  = (string) $reg['bairro'];
        $dados['cidade']  = (string) $reg['localidade'];
        $dados['uf']  = (string) $reg['uf'];

        return json_encode($dados);
    }
}
