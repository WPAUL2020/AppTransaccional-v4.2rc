<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public function roles()
    {
        return $this->belongsToMany('App\Role'); // Relacion de muchos a muchos entre la tabla Users y Roles el cual recibe el modelo de Role es donde estan los roles que hay de la aplicaciòn
    }

    public function authorizeRoles($roles)
    {
        //ACA VALIDAMOS SI EL USUARIO TIENE EL ROL
        if($this->hasAnyRole($roles)){
            return true;
        }
        abort(401, 'Esta accion no esta Autorizada');

    }

    public function authorizeRoles1($roles) // Aca desencadena todo y recibe los roles y redirecciona a la pagina o indica que no tiene permisis para ingresar
    {
        if($this->hasAnyRole($roles)){ //Validamos los roles que nos envian y si aplica retorna un true
            return true;
        }
        // abort(401, 'Esta accion no esta Autorizada');

    }
   //Este va interar un arreglo de roles
    public function hasAnyRole($roles)
    {
        if(is_array($roles)){ // Aca validamos si la variable que estamos recibiendo es un array (Varios roles)
            foreach ($roles as $role) { // Aca valida uno a uno todos los roles que fueron enviados
               if($this->hasRole($role)){
                return true;
               }
            }
        } else { //aca si solo es un rol
            if($this->hasRole($roles)){ // Aa valida si efectivamente tiene ese rol
                return true;
            }
        }
        return false;
    }
   // Valida si mi usuario tiene es rol el cual estoy preguntando
    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first()) // Si mi usuario dentro de la relacion con roles existe y si existe me enviara el primero que encuentre
        {
            return true; //si existe retorna un true
        }
        return false;// si no un false
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ESTADO' , 'ID_ROL',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
