<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metodoPago extends Model
{
    protected $table="metodo_pago";
    public $incrementing = true;
    public $timestamps = false;
}
