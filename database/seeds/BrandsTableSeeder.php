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

        Brand::create([
            'name' => 'Avon',
            'link' => 'https://www.avoncomigo.avon.com.br/widget/avonwg2/#/login',
            'login_sist' => 'peterson@hotmail.com',
            'password_sist' => '123456',
        ]);

        Brand::create([
            'name' => 'Demillus',
            'link' => 'https://www.demillus.com.br/portalpedidos/Web',
            'login_sist' => 'peterson@hotmail.com',
            'password_sist' => '123456',
        ]);

        Brand::create([
            'name' => 'Rommanel',
            'link' => 'http://www.siteconsultora.com.br/Login.aspx',
            'login_sist' => 'peterson@hotmail.com',
            'password_sist' => '123456',
        ]);
    }
}
