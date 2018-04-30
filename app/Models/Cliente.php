<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = ['name', 'email'];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

    public function getEmailAttribute($value)
    {
        return $value;
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = $value;
    }

    public function Brands(){
        return $this->belongsToMany(Brand::class, 'brand_clientes');
    }

    public function Phone(){
        return $this->hasOne(PhoneCliente::class, 'cliente_id');
    }

    public function Address(){
        return $this->hasOne(AddressCliente::class, 'cliente_id');
    }
}
