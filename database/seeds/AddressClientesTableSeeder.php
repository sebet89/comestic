<?php

use Illuminate\Database\Seeder;
use App\Models\AddressCliente;

class AddressClientesTableSeeder extends Seeder
{
    public function run()
    {
        for($x=1;$x<21;$x++)
            for($j=0;$j<2;$j++)
            AddressCliente::create([
                'id_cliente' => $x,
                'endereco' => 'Endereco Teste '.$j,
                'bairro' => 'Bairro Teste '.$j,
                'cidade' => 'Cidade Teste '.$j,
                'uf' => 'RJ',
                'cep' => '20110-20'.$j,
                'numero' => '123'.$j,
                'complemento' => 'Complemento Teste '.$j,
            ]);
    }
}
