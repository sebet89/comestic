<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Peterson Alves',
            'email' => 'peterson@sixcreative.com.br',
            'password' => bcrypt('mandrake')
        ]);
    }
}
