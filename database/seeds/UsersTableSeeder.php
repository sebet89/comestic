<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Peterson Alves',
            'email' => 'peteson89@hotmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
