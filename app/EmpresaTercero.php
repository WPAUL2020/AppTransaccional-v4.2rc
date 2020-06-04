<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de Empresa Tercero
class EmpresaTercero extends Model
{
    protected $table="empresa_tercero";
    protected $primaryKey="ID_EMPRESA_TERCERO";
    public $incrementing = true;
    public $timestamps = false;

    public function EmpleadosTercero()
    {

        return $this->hasMany('App\EmpleadosTercero');
    }
}
