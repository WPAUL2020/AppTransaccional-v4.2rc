<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MedioPago as MedioPago;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MedioPagoController extends Controller
{
    public function mostrarMedioPago()
    {
        if (Auth::check()){
            $MedioPagos = \App\MedioPago::paginate(20);
            return view('MedioPagoVista') ->with("MedioPagos",$MedioPagos);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarMedioPago()
    {
        if (Auth::check()) {
            $users1 = MedioPago::paginate(10);
            return view('MedioPagoCrear')->with("roles", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertMedioPago()
    {
            $data = DB::select('EXEC InsertModoPago');
            dump($data);
    }

   public function guardar(Request $MedioPago)
   {
    $reglas_Validacion =["METODO_PAGO" =>"unique:modo_pago,METODO_PAGO|required|min:3"];
    $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
         "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
    $this->validate($MedioPago, $reglas_Validacion, $mensajes);
       $MedioPago = DB::select(
           'call InsertModoPago(?) ',
           array(
      $MedioPago -> METODO_PAGO));
      return Redirect('MedioPagos')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertMedioPago()
   {
       return view('MedioPagoCrear');
   }
}
