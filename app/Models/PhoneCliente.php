<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneCliente extends Model
{

    protected $fillable = ['tipo', 'numero', 'operadora', 'obs'];

    public function getTipoAttribute($value)
    {
        return $value;
    }

    public function getNumeroAttribute($value)
    {
        return $value;
    }

    public function getOperadoraAttribute($value)
    {
        return $value;
    }

    public function getObsAttribute($value)
    {
        return $value;
    }

    public function setTipoAttribute($value)
    {
        $this->attributes['tipo'] = $value;
    }

    public function setNumeroAttribute($value)
    {
        $this->attributes['numero'] = $value;
    }

    public function setOperadoraAttribute($value)
    {
        $this->attributes['operadora'] = $value;
    }

    public function setObsAttribute($value)
    {
        $this->attributes['obs'] = $value;
    }
}
