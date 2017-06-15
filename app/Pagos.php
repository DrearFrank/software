<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table="pagos";
   protected $primaryKey="IDPAGO";
   public $timestamps=false





    public function DetallesTipoPago(){
    	return $this->hasMany('App\DetallesTipoPago','IDPAGO');
    }

    public function DetallesPago(){
    	return $this->hasMany('App\DetallesPago','IDPAGO');
    }


}
