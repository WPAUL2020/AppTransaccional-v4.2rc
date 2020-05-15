<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cargo as Cargo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    public function mostrarCargo(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');
        if (Auth::check()){
            $cargo = Cargo::paginate(10);
            return view('CargoVista') ->with("cargo",$cargo);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarCargo()
    {
        if (Auth::check()) {
            $users1 = Cargo::paginate(10);
            return view('CargoCrear')->with("cargo", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertCargo()
    {
            $data = DB::select('EXEC InsertCargo');
            dump($data);
    }

   public function guardar(Request $Cargo)
   {
    $reglas_Validacion =["NOMBRE_CARGO" =>"unique:cargo,NOMBRE_CARGO|required|min:3", "DESCRIPCION" =>"required|min:3", "DEPENDENCIA" =>"required|min:3" ];
    $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
         "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
    $this->validate($Cargo, $reglas_Validacion, $mensajes);
       $Cargo = DB::select(
           'call InsertCargo(?,?,?) ',
           array(
      $Cargo -> NOMBRE_CARGO,
      $Cargo -> DESCRIPCION,
      $Cargo -> DEPENDENCIA));
      return Redirect('Cargos')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertCargo()
   {
       return view('CargoCrear');
   }
}
