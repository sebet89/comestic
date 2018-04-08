<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(AddressClientesTableSeeder::class);
        $this->call(PhoneClientesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CampaignsTableSeeder::class);
    }
}
