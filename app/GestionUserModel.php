<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de Usuarios
class GestionUserModel extends Model
{
    protected $table="users";
    protected $primaryKey="id";
    public $incrementing = true;
    public $timestamps = false;
}
