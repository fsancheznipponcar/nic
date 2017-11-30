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
}
