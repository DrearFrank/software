<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesPago extends Model
{
    protected $table="detallespago";
   protected $primaryKey="IDDETALLE";
   public $timestamps=false;
}
