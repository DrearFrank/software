<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cajero extends Model
{
   protected $table="cajeros";
   protected $primaryKey="idCajero";
   public $timestamps=false;


public function user(){
return $this->belongsTo('App\User','idCajero');
}
}
