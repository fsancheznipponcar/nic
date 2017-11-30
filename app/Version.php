<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table = 'auto';
    protected $primaryKey = 'au_codigo';

    //Relaciones
    public function marca()
    {
    	return $this->belongsTo('App\Marca','au_marca','mar_codigo');
    }

    public function autos()
    {
  		return $this->hasMany('App\Auto' , 'sa_auto','au_codigo');
  	}
}
