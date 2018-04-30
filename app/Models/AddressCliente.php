<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressCliente extends Model
{
    protected $fillable = ['endereco', 'bairro', 'cidade', 'uf', 'cep', 'numero', 'complemento', 'obs'];

    public function getEnderecoAttribute($value)
    {
        return $value;
    }

    public function getBairroAttribute($value)
    {
        return $value;
    }

    public function getCidadeAttribute($value)
    {
        return $value;
    }

    public function getUfAttribute($value)
    {
        return $value;
    }

    public function getCepAttribute($value)
    {
        return $value;
    }

    public function getNumeroAttribute($value)
    {
        return $value;
    }

    public function getComplementoAttribute($value)
    {
        return $value;
    }

    public function getObsAttribute($value)
    {
        return $value;
    }

    public function setEnderecoAttribute($value)
    {
        $this->attributes['endereco'] = $value;
    }

    public function setBairroAttribute($value)
    {
        $this->attributes['bairro'] = $value;
    }

    public function setCidadeAttribute($value)
    {
        $this->attributes['cidade'] = $value;
    }

    public function setUfAttribute($value)
    {
        $this->attributes['uf'] = $value;
    }

    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = $value;
    }

    public function setNumeroAttribute($value)
    {
        $this->attributes['numero'] = $value;
    }

    public function setComplementoAttribute($value)
    {
        $this->attributes['complemento'] = $value;
    }

    public function setObsAttribute($value)
    {
        $this->attributes['obs'] = $value;
    }
}
