<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marca';
    protected $primaryKey = 'mar_codigo';

    //Relaciones
    public function versiones()
    {
  		return $this->hasMany('App\Version' , 'au_marca','mar_codigo');
  	}

    public function autos()
    {
  		return $this->hasMany('App\Auto' , 'sa_marca','mar_codigo');
  	}
}