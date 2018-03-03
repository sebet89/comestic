<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'name' => 'Cliente teste',
            'endereco' => 'Rua Teste da Silva',
            'email' => 'cliente@teste.com',
        ]);

        Cliente::create([
            'name' => 'Cliente teste2',
            'endereco' => 'Rua Teste da Silva2',
            'email' => 'cliente2@teste.com',
        ]);

        Cliente::create([
            'name' => 'Cliente teste3',
            'endereco' => 'Rua Teste da Silva3',
            'email' => 'cliente3@teste.com',
        ]);

        Cliente::create([
            'name' => 'Cliente teste4',
            'endereco' => 'Rua Teste da Silva4',
            'email' => 'cliente4@teste.com',
        ]);
    }
}
