<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function Brands(){
        return $this->belongsToMany(Brand::class, 'brand_clientes');
    }
}
