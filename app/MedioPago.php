<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de Medio de Pago
class MedioPago extends Model
{
    protected $table="modo_pago";
    protected $primaryKey="ID_PAGO";
    public $incrementing = true;
    public $timestamps = false;
}
