<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modelo de la tabla de Ciudad
class ciudad extends Model
{
        protected $table="ciudad";
        protected $primaryKey="ID_CIUDAD";
        public $incrementing = true;
        public $timestamps = false;
}
