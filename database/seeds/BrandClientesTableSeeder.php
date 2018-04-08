<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class BrandClientesTableSeeder extends Seeder
{
    public function run()
    {
        $arrayBrand[] = 1;

        $cliente = Cliente::find(2);
        $cliente->Brands()->sync($arrayBrand);
    }
}
