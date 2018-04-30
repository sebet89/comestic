<?php

use Illuminate\Database\Seeder;
use App\Models\PhoneCliente;
use App\Models\Cliente;

class PhoneClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $tipo = array("0" => "Fixo", "1" => "Celular");
//        $operadora = array("0" => "1", "1" => "2");
//        $numero = array("0" => "2596-12", "1" => "96213-45");
//
//        for($x=1;$x<21;$x++)
//            for($j=0;$j<2;$j++)
//                PhoneCliente::create([
//                    'cliente_id' => $x,
//                    'tipo' => $tipo[$j],
//                    'numero' => '(21) '.$numero[$j].''.str_pad($x, 2, '0', STR_PAD_LEFT),
//                    'operadora' => $operadora[$j],
//                ]);

        $telefones[0]['tipo'] = 'Fixo';
        $telefones[0]['numero'] = '(21) 25968-734';
        $telefones[0]['operadora'] = 1;
        $telefones[0]['obs'] = 'Teste';

        $telefones[1]['tipo'] = 'Celular';
        $telefones[1]['numero'] = '(21) 96671-7777';
        $telefones[1]['operadora'] = 4;
        $telefones[1]['obs'] = 'Teste 2';

        $cliente = Cliente::find(2);

        //oreach($telefones as $tel)
            $cliente->Phone()->createMany($telefones);

    }
}
