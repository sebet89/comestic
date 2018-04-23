<?php

use Illuminate\Database\Seeder;
use App\Models\TelOperator;

class TelOperatorTableSeeder extends Seeder
{
    public function run()
    {
        TelOperator::create([
            'name' => 'Oi',
        ]);

        TelOperator::create([
            'name' => 'Claro',
        ]);

        TelOperator::create([
            'name' => 'Tim',
        ]);

        TelOperator::create([
            'name' => 'Vivo',
        ]);

        TelOperator::create([
            'name' => 'Nextel',
        ]);

        TelOperator::create([
            'name' => 'Outra',
        ]);
    }
}
