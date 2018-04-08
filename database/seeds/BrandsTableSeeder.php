<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        Brand::create([
            'name' => 'Natura',
            'link' => 'http://www.natura.com.br/acesso-consultor',
            'login_sist' => 'peterson@hotmail.com',
            'password_sist' => '123456',
        ]);
    }
}
