<?php

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignsTableSeeder extends Seeder
{
    public function run()
    {
        Campaign::create([
            'name' => 'Campanha Outono Natura',
            'id_brand' => 1,
            'dateStart' => date('Y-m-d'),
            'dateEnd' => date('Y-m-d', strtotime("+3 month")),
        ]);
    }
}
