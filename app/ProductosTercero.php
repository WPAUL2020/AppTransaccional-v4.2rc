<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de Productos Tercero
class ProductosTercero extends Model
{
    protected $table="producto_servicio_tercero";
    protected $primaryKey="ID_PRODUCTO_SERVICIO_T";
    public $incrementing = true;
    public $timestamps = false;
}
