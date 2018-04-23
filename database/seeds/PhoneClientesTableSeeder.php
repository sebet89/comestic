<?php

use Illuminate\Database\Seeder;
use App\Models\PhoneCliente;

class PhoneClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = array("0" => "Fixo", "1" => "Celular");
        $operadora = array("0" => "1", "1" => "2");
        $numero = array("0" => "2596-12", "1" => "96213-45");

        for($x=1;$x<21;$x++)
            for($j=0;$j<2;$j++)
                PhoneCliente::create([
                    'id_cliente' => $x,
                    'tipo' => $tipo[$j],
                    'numero' => '(21) '.$numero[$j].''.str_pad($x, 2, '0', STR_PAD_LEFT),
                    'operadora' => $operadora[$j],
                ]);
    }
}
