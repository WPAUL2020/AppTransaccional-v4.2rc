<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table="roles";
    protected $primaryKey="id";
    public $incrementing = true;
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User'); // Relacion de muchos a muchos entre la tabla Roles y Users el cual recibe el modelo de Users es donde estan los roles que hay de la aplicaciòn
    }
}
