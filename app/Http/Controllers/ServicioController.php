<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Servicio as Servicio;
use App\Categoria as Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function mostrarServicio(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');
        if (Auth::check()){
            $Servicios = \App\Servicio::paginate(20);
            return view('ServicioVista') ->with("Servicios",$Servicios);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarServicio()
    {
        if (Auth::check()) {
            $users1 = Servicio::paginate(10);
            return view('ServicioCrear')->with("Servicios", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertServicio()
    {
            $data = DB::select('EXEC InsertServicio');
            dump($data);
    }

   public function guardar(Request $Servicios)
   {
    $reglas_Validacion =["ID_CATEGORIA" =>"required|min:1", "NOMBRE_PRODUCTO" =>"unique:servicio,NOMBRE_PRODUCTO|required|min:3", "PRECIO_UNITARIO" =>"numeric|min:3" ];
    $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
         "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
    $this->validate($Servicios, $reglas_Validacion, $mensajes);
       $Servicios = DB::select(
           'call InsertServicio(?,?,?) ',
           array(
      $Servicios -> ID_CATEGORIA,
      $Servicios -> NOMBRE_PRODUCTO,
      $Servicios -> PRECIO_UNITARIO ));
      return Redirect('Servicios')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertServicio()
   {
       $Categorias = Categoria::all();
       return view('ServicioCrear')->with(['Categorias'=>$Categorias]);
   }
}
