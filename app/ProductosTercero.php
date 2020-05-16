<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosTercero extends Model
{
    protected $table="producto_servicio_tercero";
    protected $primaryKey="ID_PRODUCTO_SERVICIO_T";
    public $incrementing = true;
    public $timestamps = false;
}
