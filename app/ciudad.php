<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
        protected $table="ciudad";
        protected $primaryKey="ID_CIUDAD";
        public $incrementing = true;
        public $timestamps = false;
}
