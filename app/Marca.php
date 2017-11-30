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
}
