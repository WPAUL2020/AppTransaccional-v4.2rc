<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Categoria as Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function mostrarCategoria()
    {
        if (Auth::check()){
            $Categorias = \App\Categoria::paginate(20);
            return view('CategoriaVista') ->with("Categorias",$Categorias);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarCategoria()
    {
        if (Auth::check()) {
            $users1 = Categoria::paginate(10);
            return view('CategoriaCrear')->with("Categorias", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertCategoria()
    {
            $data = DB::select('EXEC InsertCategoria');
            dump($data);
    }

   public function guardar(Request $Categoria)
   {
    $reglas_Validacion =["NOMBRE_CATEGORIA" =>"unique:categoria,NOMBRE_CATEGORIA|required|min:3"];
    $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
         "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
    $this->validate($Categoria, $reglas_Validacion, $mensajes);
       $Categoria = DB::select(
           'call InsertCategoria(?) ',
           array(
      $Categoria -> NOMBRE_CATEGORIA));
      return Redirect('Categorias')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertCategoria()
   {
       return view('CategoriaCrear');
   }
}
