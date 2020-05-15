<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fac_venta extends Model
{
    protected $table="FACTURA_VENTA";
    protected $primaryKey="ID_FACTURA";
    public $incrementing = true;
    public $timestamps = false;//
}
