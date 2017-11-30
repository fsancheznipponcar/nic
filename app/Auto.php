<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'stoauto';
    protected $primaryKey = 'sa_codigo';

    public function marca()
    {
    	return $this->belongsTo('App\Marca','sa_marca','mar_codigo');
    }

    public function version()
    {
    	return $this->belongsTo('App\Marca','sa_auto','au_codigo');
    }
}
