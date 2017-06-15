<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesTipoPago extends Model
{
   protected $table="detallestipopago";
   protected $primaryKey="IDDETALLETIPOPAGO";
   public $timestamps=false;




     public function Pago(){
        return $this->belongsTo('App\Pago','IDPAGO');
    }
}
