<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $fillable = ['name','abbreviation','regiao_id'];

    public function regiao()
    {
    	return $this->belongsTo('App\Model\Regiao');
    }

    public function cidades()
    {
    	return $this->hasMany('App\Model\Cidade');
    }
}
