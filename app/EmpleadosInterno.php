<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de Empleado Interno
class EmpleadosInterno extends Model
{
    protected $table="empleado_interno";
    protected $primaryKey="ID_EMPLEADO_INTERNO";
    public $incrementing = true;
    public $timestamps = false;
}
