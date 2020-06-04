<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de cargo
class Cargo extends Model
{
    protected $table="cargo";
    protected $primaryKey="ID_CARGO";
    public $incrementing = true;
    public $timestamps = false;
}
