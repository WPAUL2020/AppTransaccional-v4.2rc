<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de categoria
class Categoria extends Model
{
    protected $table="categoria";
    protected $primaryKey="ID_CATEGORIA";
    public $incrementing = true;
    public $timestamps = false;
}
