<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        for($x=0;$x<20;$x++)
            Cliente::create([
                'name' => 'Cliente teste '.$x,
                'email' => 'cliente@teste.com '.$x,
            ]);
    }
}
