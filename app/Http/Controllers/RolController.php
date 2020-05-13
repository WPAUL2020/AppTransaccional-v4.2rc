<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role as Rol;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{

    public function mostrarRol()
    {
        if (Auth::check()){
            $roles = \App\Role::paginate(20);
            return view('RolVista') ->with("roles",$roles);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarRol()
    {
        if (Auth::check()) {
            $users1 = rol::paginate(10);
            return view('RolCrear')->with("roles", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertRol()
    {
            $data = DB::select('EXEC InsertRol');
            dump($data);
    }

   public function guardar(Request $Rol)
   {
       $reglas_Validacion =["NOMBRE_ROL" =>"unique:roles,name|required|min:3", "DESCRIPCION" =>"required|min:3", "DEPENDENCIA" =>"required|min:3" ];
       $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
            "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($Rol, $reglas_Validacion, $mensajes);
       $Rol = DB::select(
           'call InsertRol(?,?,?) ',
           array(
      $Rol -> NOMBRE_ROL,
      $Rol -> DESCRIPCION,
      $Rol -> DEPENDENCIA));
      return Redirect('Roles')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertRol()
   {
       return view('RolCrear');
   }
}
